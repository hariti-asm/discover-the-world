<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Image;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Image::create([
            'path' => 'images/categories-img-1.jpg',
        ]);

        Image::create([
            'path' => 'images/categories-img-2.jpg',
        ]); 
        Image::create([
            'path' => 'images/categories-img-4.jpg',
        ]);   
        Image::create([
            'path' => 'images/categories-img-5.jpg',
        ]);  
        Image::create([
            'path' => 'images/categories-img-6.jpg',
        ]);  
      }
    }

