<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                'name' => 'miguel',
                'age' => '21',
                'course' => 'IT'

            ],
            [
                'name' => 'sampol',
                'age' => '21',
                'course' => 'educ'
            ]
        ];

        foreach ($posts as $key => $value) {
            Post::create($value);
        }
    }
}
