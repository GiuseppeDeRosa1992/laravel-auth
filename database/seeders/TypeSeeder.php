<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $newType = new Type();
        $newType->name = "Front-end";
        $newType->description = "Nella programmazione e sviluppo dei siti web viene definito front end la parte visibile da chiunque e raggiungibile all'indirizzo web del sito";
        $newType->icon = "fa-brands fa-vuejs";
        $newType->save();

        $newType = new Type();
        $newType->name = "Back-end";
        $newType->description = "Nella programmazione e sviluppo dei siti web viene definito front end la parte visibile da chiunque e raggiungibile all'indirizzo web del sito";
        $newType->icon = "fa-brands fa-vuejs";
        $newType->save();

        $newType = new Type();
        $newType->name = "Full-stack";
        $newType->description = "Nella programmazione e sviluppo dei siti web viene definito front end la parte visibile da chiunque e raggiungibile all'indirizzo web del sito";
        $newType->icon = "fa-brands fa-vuejs";
        $newType->save();

        $newType = new Type();
        $newType->name = "Design";
        $newType->description = "Nella programmazione e sviluppo dei siti web viene definito front end la parte visibile da chiunque e raggiungibile all'indirizzo web del sito";
        $newType->icon = "fa-brands fa-vuejs";
        $newType->save();
    }
}
