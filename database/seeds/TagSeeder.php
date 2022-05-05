<?php

use App\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [
            'Appassionante',
            'Violento',
            'Bizzardo',
            'Assurdo',
            'Irriverente'
        ];

        foreach ($tags as $name) {
            $tag = new Tag();

            $tag->name = $name;
            $tag->slug = Str::slug($name);

            $tag->save();
        }
    }
}
