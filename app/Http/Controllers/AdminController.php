<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showLogin()
    {
        if (session()->has('admin_logged_in')) {
            return redirect()->route('admin.upload');
        }
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $username = $request->input('username');
        $password = $request->input('password');

        // Check against environment variables
        if ($username === config('admin.username') && 
            $password === config('admin.password')) {
            
            session(['admin_logged_in' => true]);
            return redirect()->route('admin.upload')
                           ->with('success', 'Welcome back!');
        }

        return back()->with('error', 'Invalid credentials');
    }

    public function showUpload()
    {
        return view('admin.upload');
    }

    public function logout(Request $request)
    {
        session()->forget('admin_logged_in');
        session()->regenerate();
        return redirect()->route('id.home'); // Redirect to homepage after logout
    }

    public function storeVideo(Request $request)
    {
        $request->validate([
            'video_file' => 'required|file|mimetypes:video/*|max:102400', // 100MB max
            'video_url' => 'required|url' // Ensure it's a valid URL
        ]);

        if ($request->hasFile('video_file')) {
            $file = $request->file('video_file');
            
            // Create reels directory if it doesn't exist
            $reelsPath = public_path('videos/reels');
            if (!file_exists($reelsPath)) {
                mkdir($reelsPath, 0777, true);
            }
            
            // Save video as latest_reels.mp4
            $file->move($reelsPath, 'latest_reels.mp4');
            
            // Save the URL to a file
            file_put_contents($reelsPath . '/latest_url.txt', $request->video_url);

            return redirect()->route('admin.upload')
                           ->with('success', 'Video dan URL berhasil diupload!');
        }

        return back()->with('error', 'Video tidak ditemukan.');
    }
}
