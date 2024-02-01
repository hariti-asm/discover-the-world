<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Image;
use App\Models\Destination;
use App\Models\Adventure;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //  \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Image::create([
            'path' => 'images/categories-img-1.jpg',
            'adventure_id'=>1
        ]);

        Image::create([
            'path' => 'images/categories-img-2.jpg',
            'adventure_id'=>1

        ]); 
        Image::create([
            'path' => 'images/categories-img-4.jpg',
            'adventure_id'=>1

        ]);   
        Image::create([
            'path' => 'images/categories-img-5.jpg',
            'adventure_id'=>1

        ]);  
        Image::create([
            'path' => 'images/categories-img-6.jpg',
            'adventure_id'=>1

        ]);  
        Destination::create([
            'continent' => 'Europe',
            'description'=>'this a test',
            'image_id'=>1
        ]);  
        Destination::create([
            'continent' => 'Australia',
            'description'=>'this a test',
            'image_id'=>2
        ]); 
        Destination::create([
            'continent' => 'Asia',
            'description'=>'this a test',
            'image_id'=>3
        ]); 
        Destination::create([
            'continent' => 'America',
            'description'=>'this a test',
            'image_id'=>4
        ]); 
        Destination::create([
            'continent' => 'Africa',
            'description'=>'this a test',
            'image_id'=>5,
        ]);
        Adventure::create([
            'title'=>'visiting new coutry',
            'description'=>'this a test',
            'country'=>'poland',
            'user_id'=>1,
            'destination_id'=>2,
        ]) ;
        Adventure::create([
            'title' => 'Mountain Trek',
            'description' => 'Explore breathtaking mountain views.',
            'country' => 'Switzerland',
            'user_id'=>1,
            'destination_id' => 1,
        ]);
        Adventure::create([
            'title' => 'Beach Paradise',
            'description' => 'Relax on the beautiful beaches.',
            'country' => 'Maldives',
            'user_id'=>1,
            'destination_id' => 3,
        ]);

        Adventure::create([
            'title' => 'City Exploration',
            'description' => 'Discover the vibrant city life.',
            'country' => 'Japan',
            'user_id'=>1,
            'destination_id' => 2,

        ]);
      }
    }

