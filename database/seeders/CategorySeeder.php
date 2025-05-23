<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Category::factory(3)->create();
        Category::create([
            'name' => 'Game Developer',
            'slug' => 'game-developer',
            'color' => 'red'
        ]);
        
        Category::create([
            'name' => 'Web Developer',
            'slug' => 'web-developer',
            'color' => 'green'
        ]);

        Category::create([
            'name' => 'Unreal Engine',
            'slug' => 'unreal-engine',
            'color' => 'blue'
        ]);

        Category::create([
            'name' => 'Blender',
            'slug' => 'Blender',
            'color' => 'purple'
        ]);

        Category::create([
            'name' => '3D Artist',
            'slug' => '3d-artist',
            'color' => 'cyan'
        ]);
    }
}
