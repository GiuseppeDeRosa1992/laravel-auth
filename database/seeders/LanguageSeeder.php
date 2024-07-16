<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $newHtml = new Language();
        $newHtml->name = "HTML";
        $newHtml->icon = "fa-brands fa-html5";
        $newHtml->save();

        $newCss = new Language();
        $newCss->name = "Css";
        $newCss->icon = "fa-brands fa-sass";
        $newCss->save();

        $newVueJs = new Language();
        $newVueJs->name = "VueJs";
        $newVueJs->icon = "fa-brands fa-vuejs";
        $newVueJs->save();

        $newPhp = new Language();
        $newPhp->name = "Php";
        $newPhp->icon = "fa-brands fa-php";
        $newPhp->save();

        $newLaravel = new Language();
        $newLaravel->name = "Laravel";
        $newLaravel->icon = "fa-brands fa-laravel";
        $newLaravel->save();
    }
}
