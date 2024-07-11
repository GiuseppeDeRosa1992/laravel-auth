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
        $newType->icon = "https://as1.ftcdn.net/v2/jpg/02/29/98/84/1000_F_229988440_ZOkKYu5fI66iJyosi46PMuzBEIg98MDX.jpg";
        $newType->save();

        $newType = new Type();
        $newType->name = "Back-end";
        $newType->description = "Infatti viene definito back end tutto ciò che opera dietro le quinte di una pagina web";
        $newType->icon = "https://c8.alamy.com/compit/2db193x/icona-back-end-elemento-semplice-dalla-raccolta-di-sviluppo-di-siti-web-icona-di-back-end-riempita-per-modelli-infografiche-e-altro-ancora-2db193x.jpg";
        $newType->save();

        $newType = new Type();
        $newType->name = "Full-stack";
        $newType->description = "Il Full Stack Developer è un programmatore che conosce ogni aspetto della programmazione";
        $newType->icon = "https://static.thenounproject.com/png/2230389-200.png";
        $newType->save();

        $newType = new Type();
        $newType->name = "Design";
        $newType->description = "Nella programmazione e sviluppo dei siti web viene definito front end la parte visibile da chiunque e raggiungibile all'indirizzo web del sito";
        $newType->icon = "https://png.pngtree.com/png-vector/20191126/ourmid/pngtree-web-design-icon-png-image_2038483.jpg";
        $newType->save();
    }
}
