<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Products;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'User 1',
            'email' => 'user@mail.com',
            'password' => bcrypt(123)
        ]);

        Products::create([
            'product_name' => 'Product 1',
            'product_detail' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            'price' => 10000,
            'photo' => 'product_image.png',
        ]);

        Products::create([
            'product_name' => 'Product 2',
            'product_detail' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            'price' => 20000,
            'photo' => 'product_image.png',
        ]);

        Products::create([
            'product_name' => 'Product 3',
            'product_detail' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            'price' => 30000,
            'photo' => 'product_image.png',
        ]);
    }
}
