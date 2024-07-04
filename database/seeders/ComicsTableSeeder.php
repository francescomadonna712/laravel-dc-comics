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
        $newComic->titolo = "Action Comics #1000: The Deluxe Edition";
        $newComic->autore = "Jerry Siegel";
        $newComic->casa_editrice = "DC comics";
        $newComic->anno = '2018';
        $newComic->descrizione = "The celebration of 1,000 issues of Action Comics continues with a new,
         Deluxe Edition of the amazing comic that won raves when it hit comics shops in April!";
        $newComic->save();
    }
}
