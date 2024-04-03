<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//model tag importate
use App\Models\Tag;

use Illuminate\Support\Str;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [
            'html',
            'css',
            'javascript',
            'vue',
            'php',
            'laravel'
        ];

        foreach($tags as $element){
            $new_tag = new Tag();
            $new_tag->name = $element;
            $new_tag->slug = Str::slug($new_tag->name);
            $new_tag->save();
        }
    }
}
