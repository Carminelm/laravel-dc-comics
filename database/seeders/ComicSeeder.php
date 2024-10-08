<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;
use Illuminate\Support\Str;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $array_comics = config('comics');
        foreach ($array_comics as $comic){
            $new_comic = new Comic();
            $new_comic->title =$comic['title'];
            $new_comic->description =$comic['description'];
            $new_comic->thumb =$comic['thumb'];
            $new_comic->series =$comic['series'];
            $new_comic->sale_date =$comic['sale_date'];
            $new_comic->type =$comic['type'];

            $new_comic->save();

            
        }
    }
}