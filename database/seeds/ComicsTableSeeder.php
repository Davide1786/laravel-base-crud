<?php

use Illuminate\Database\Seeder;
//porto il file comics
use App\Comic;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // mi porto il file comics dalla cartella config
        $comics = config('comics');
        foreach($comics as $comic) { // ciclo cu tutto array
            $new_comic = new Comic(); // definisco una variabile che conterra l oggetto temporaneo | richiamo costruttore
            $new_comic->title = $comic['title'];
            $new_comic->description = $comic['description'];
            $new_comic->thumb = $comic['thumb'];
            $new_comic->price = $comic['price'];
            $new_comic->series = $comic['series'];
            $new_comic->sale_date = $comic['sale_date'];
            $new_comic->type = $comic['type'];
            $new_comic->save();
        }    
    }
}
