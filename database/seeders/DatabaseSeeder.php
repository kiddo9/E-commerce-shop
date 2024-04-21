<?php

namespace Database\Seeders;

use App\Models\product;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(5)->create();

        product::create([
            'brand' => 'brand new',
            'fame' => 'DIOR',
            'Pimg' => 'ei_1711037365890-removebg-preview.png',
            'description' => 'The LOTIONS consists of pressurised air inside a tough yet flexible bag, and provides more flexibility and spring without compromising structure. The Air-Sole units maintain their given form with elasticity, reduce impact and keep the shoe snug and lightweight.',
            'Pname' => 'LOTION beauty ',
            'price' => '100.99',
            'category' => 'Beauty picks'
        ]);

        product::create([
            'brand' => 'Premium sale',
            'Pimg' => "image/jbl headphone.png",
            'fame' => 'LG',
            'description' => 'The JBL technology consists of pressurised air inside a tough yet flexible bag, and provides more flexibility and spring without compromising structure. The Air-Sole units maintain their given form with elasticity, reduce impact and keep the shoe snug and lightweight.',
            'Pname' => 'Green Nike ',
            'price' => '300.99',
            'category' => 'Beauty picks',
            'Pimg' => 'ei_1711037365890-removebg-preview.png',
        ]);
    }
}
