<?php

namespace Tests\Feature;

use App\Models\Ingredient;
use App\Models\Recipe;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SearchRecipeDetailTest extends TestCase
{
    public function testSearchRecipeDetail()
    {
        // Membuat user baru 
        $user = User::factory()->create();

        // Menjalankan HTTP POST request ke route 'login' untuk mengotentikasi pengguna
        $this->post(route('login'), [
            'login' => $user->email,
            'password' => 'password', // Ganti dengan password pengguna yang valid
        ]);
        // Membuat data dummy untuk pengujian
        for ($i = 0; $i < 25; $i++) {

            $recipe = Recipe::factory()->create([
                'name' => 'fiesta' . fake()->text(5),
            ]);

            Ingredient::factory()->count(4)->create([
                'value' => 'nugget' . fake()->text(5),
                'recipe_id' => $recipe->id,
            ]);
        }

        // Memanggil metode dengan parameter pencarian 'fiesta'
        $response = $this->get('/recipes/search-recipe/nugget/search-result-detail');

        // Memastikan bahwa respons statusnya adalah 200 (OK)
        $response->assertStatus(200);

        // Memastikan bahwa view yang digunakan adalah 'recipes.search_recipe'
        $response->assertViewIs('recipes.search_recipe');

        // Memastikan bahwa data 'recipes' dikirim ke view
        $response->assertViewHas('recipes');

        // Memastikan bahwa data 'recipes' berisi instance dari Paginator
        $recipes = $response->viewData('recipes');
        $this->assertInstanceOf(\Illuminate\Pagination\LengthAwarePaginator::class, $recipes);

        // Memastikan bahwa jumlah data 'recipes' yang ditampilkan adalah 25
        $this->assertCount(24, $recipes->items());

        // Memastikan bahwa setiap item 'recipes' memiliki 'name' atau 'value' yang mengandung 'fiesta'
        foreach ($recipes->items() as $recipe) {
            
            foreach ($recipe->ingredients as $ingredient) {
                $this->assertStringContainsString('nugget', $ingredient->value);
            }
        }
    }
}
