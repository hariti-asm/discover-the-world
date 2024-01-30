<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Image;
class picturesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
        ]);    }
}
