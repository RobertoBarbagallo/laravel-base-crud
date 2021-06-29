<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use App\Comic;


class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {

       
        $comicsList = config('comics');

        Comic::truncate();

        $now = new DateTime(); 

        foreach ($comicsList as $comic) {



            $newComic = new Comic();


            $newComic->fill($comic);


            $newComic->save();


        }
    }
}
