<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $newComic = new Comic();
        $newComic->titolo = "Aquaman Vol. 4: Underworld";
        $newComic->cover_image = "https://imgs.search.brave.com/gAZQuZyt6WjcUWF6aXCIBaiJqtOJAK-X4nxS9Vbvwno/rs:fit:1200:1200:1/g:ce/aHR0cHM6Ly9jZG4y/LnBlbmd1aW4uY29t/LmF1L2NvdmVycy9v/cmlnaW5hbC85Nzgx/NDAxMjc1NDI2Lmpw/Zw";
        $newComic->autore = "Dan Abnett";
        $newComic->casa_editrice = "DC comics";
        $newComic->prezzo = 16.99;
        $newComic->anno = '2018';
        $newComic->voto = 7;
        $newComic->descrizione = "Enraged by rumors of Arthur’s survival in the slums of Atlantis, the ruthless King Rath orders the use of ancient Atlantean techno-magic to track down the Aquaman at all costs!";
        $newComic->save();
    }
}
