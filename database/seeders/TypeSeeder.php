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
        $newFe = new Type();
        $newFe->name = "Front-end";
        $newFe->description = "Nella programmazione e sviluppo dei siti web viene definito front end la parte visibile da chiunque e raggiungibile all'indirizzo web del sito";
        $newFe->icon = "https://as1.ftcdn.net/v2/jpg/02/29/98/84/1000_F_229988440_ZOkKYu5fI66iJyosi46PMuzBEIg98MDX.jpg";
        $newFe->save();

        $newBe = new Type();
        $newBe->name = "Back-end";
        $newBe->description = "Infatti viene definito back end tutto ciò che opera dietro le quinte di una pagina web";
        $newBe->icon = "https://c8.alamy.com/compit/2db193x/icona-back-end-elemento-semplice-dalla-raccolta-di-sviluppo-di-siti-web-icona-di-back-end-riempita-per-modelli-infografiche-e-altro-ancora-2db193x.jpg";
        $newBe->save();

        $newFs = new Type();
        $newFs->name = "Full-stack";
        $newFs->description = "Il Full Stack Developer è un programmatore che conosce ogni aspetto della programmazione";
        $newFs->icon = "https://static.thenounproject.com/png/2230389-200.png";
        $newFs->save();

        $newDesign = new Type();
        $newDesign->name = "Design";
        $newDesign->description = "Nella programmazione e sviluppo dei siti web viene definito front end la parte visibile da chiunque e raggiungibile all'indirizzo web del sito";
        $newDesign->icon = "https://png.pngtree.com/png-vector/20191126/ourmid/pngtree-web-design-icon-png-image_2038483.jpg";
        $newDesign->save();
    }
}
