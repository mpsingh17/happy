<?php

use Illuminate\Database\Seeder;
use App\Tag;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = ['Physical', 'Social', 'Cognitive'];

        foreach($tags as $tag)
        {
            $tag = Tag::create(['name' => $tag]);
            $tag->save();
        }
    }
}
