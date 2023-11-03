<?php

namespace App\Http\Controllers;

class SeriesController
{
    public function listarSeries()
    {
        $series = [
            "Servant",
            "Raised by Wolves",
            "Lost",
        ];

        $html = "<ul>";
        foreach ($series as $serie) {
            $html .= "<li>$serie</li>";
        }

        $html .= "</ul>";

        echo $html;
    }
}