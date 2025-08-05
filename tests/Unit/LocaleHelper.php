<?php

namespace Tests\Unit;

use App\Helpers\LocaleHelper;
use Illuminate\Support\Facades\Route as RouteFacade;
use Tests\TestCase;

class LocaleHelperTest extends TestCase
{
    /**
     * Setup the test environment.
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();

        // Daftarkan rute sementara yang diperlukan untuk tes ini
        // Ini mensimulasikan rute asli dari routes/web.php
        RouteFacade::get('/en', function () {
            return 'English Home';
        })->name('en.home')->middleware('set.locale');

        RouteFacade::get('/', function () {
            return 'Indonesian Home';
        })->name('id.home')->middleware('set.locale');
    }

    /**
     * Menguji helper untuk menghasilkan URL dari ID ke EN dengan benar.
     *
     * @return void
     */
    public function test_it_generates_correct_switch_url_from_id_to_en(): void
    {
        // Atur seolah-olah kita sedang berada di halaman utama versi Indonesia
        $this->get(route('id.home'));

        // Panggil metode yang akan diuji
        $switchUrl = LocaleHelper::getSwitchUrl();

        // Pastikan URL yang dihasilkan adalah URL untuk halaman utama versi Inggris
        $this->assertEquals(route('en.home'), $switchUrl);
    }

    /**
     * Menguji helper untuk menghasilkan URL dari EN ke ID dengan benar.
     *
     * @return void
     */
    public function test_it_generates_correct_switch_url_from_en_to_id(): void
    {
        // Atur seolah-olah kita sedang berada di halaman utama versi Inggris
        $this->get(route('en.home'));

        // Panggil metode yang akan diuji
        $switchUrl = LocaleHelper::getSwitchUrl();

        // Pastikan URL yang dihasilkan adalah URL untuk halaman utama versi Indonesia
        $this->assertEquals(route('id.home'), $switchUrl);
    }
}
