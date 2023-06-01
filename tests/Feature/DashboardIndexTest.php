<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DashboardIndexTest extends TestCase
{
    /**
     * @test
     */
    public function test_home(): void
    {
        // Membuat user baru untuk dihapus
        $user = User::factory()->create();

        // Menjalankan HTTP POST request ke route 'login' untuk mengotentikasi pengguna
        $this->post(route('login'), [
            'email' => $user->email,
            'password' => 'password', // Ganti dengan password pengguna yang valid
        ]);
        // Mengirimkan permintaan HTTP GET ke rute 'dashboard.index'
        $response = $this->get('/');

        // Memastikan respons berhasil (kode status 200)
        $response->assertStatus(200);

        // Memastikan tampilan 'dashboard' digunakan
        $response->assertViewIs('home');

        // Memastikan data 'f_recipes' dan 'n_recipes' tersedia di tampilan
        $response->assertViewHas(['f_recipes', 'n_recipes']);

        // Memastikan data 'f_recipes' berisi instance dari LengthAwarePaginator
        $this->assertInstanceOf(\Illuminate\Pagination\LengthAwarePaginator::class, $response->viewData('f_recipes'));

        // Memastikan data 'n_recipes' berisi instance dari LengthAwarePaginator
        $this->assertInstanceOf(\Illuminate\Pagination\LengthAwarePaginator::class, $response->viewData('n_recipes'));
    }
    /**
     * @test
     */
    public function test_dashboard(): void
    {

        // Mengirimkan permintaan HTTP GET ke rute 'dashboard.index'
        $response = $this->get('/');

        // Memastikan respons berhasil (kode status 200)
        $response->assertStatus(200);

        // Memastikan tampilan 'dashboard' digunakan
        $response->assertViewIs('dashboard');

    }
}