<?php

namespace Tests\Feature;

// 1. Tambahkan "use" untuk DataProvider Attribute
use PHPUnit\Framework\Attributes\DataProvider;
use Tests\TestCase;

class LocalizationTest extends TestCase
{
    /**
     * Data provider untuk semua halaman utama dan teks uniknya.
     *
     * @return array
     */
    public static function pageProvider(): array
    {
        return [
            'home' => [
                'route' => 'home',
                'indonesian_text' => 'Selamat Datang di PT Safari Karya Maju',
                'english_text' => 'Welcome to PT Safari Karya Maju',
            ],
            'produk' => [
                'route' => 'produk',
                'indonesian_text' => 'Memastikan Kualitas Dan Keandalan Produk Kami Memenuhi Standar Sertifikasi Resmi',
                'english_text' => 'Certified Quality and Reliable Metal Sheeting You Can Trust',
            ],
            'pelanggan' => [
                'route' => 'pelanggan',
                'indonesian_text' => 'RIWAYAT PELANGGAN',
                'english_text' => 'PREVIOUS CLIENTS',
            ],
            'sertifikasi' => [
                'route' => 'sertifikasi',
                'indonesian_text' => 'Sertifikasi Kami',
                'english_text' => 'Our Certifications',
            ],
            'tentang' => [
                'route' => 'tentang',
                'indonesian_text' => 'Sekilas PT Safari Karya Maju',
                'english_text' => 'PT Safari Karya Maju at a Glance',
            ],
            'hubungi-kami' => [
                'route' => 'hubungi-kami',
                'indonesian_text' => 'Solusi Fabrikasi Presisi, Berawal Dari Sini.',
                'english_text' => 'Precision Fabrication Solutions Start Here.',
            ],
            'welcome' => [
                'route' => 'welcome',
                'indonesian_text' => 'Komitmen, Harapan, dan Rasa Syukur',
                'english_text' => 'Commitment, Hope, and Gratitude',
            ],
        ];
    }

    // 2. Gunakan Attribute #[DataProvider('pageProvider')] di atas method
    #[DataProvider('pageProvider')]
    public function test_all_pages_display_correct_language_content(string $route, string $indonesian_text, string $english_text): void
    {
        // --- Uji Versi Bahasa Indonesia ---
        $response_id = $this->get(route('id.' . $route));
        $response_id->assertStatus(200);
        $response_id->assertSee($indonesian_text);
        $response_id->assertDontSee($english_text);

        // --- Uji Versi Bahasa Inggris ---
        $response_en = $this->get(route('en.' . $route));
        $response_en->assertStatus(200);
        $response_en->assertSee($english_text);
        $response_en->assertDontSee($indonesian_text);
    }
}