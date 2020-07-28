<?php

namespace App\Reporting\Format;

use App\Reporting\Report;

class HtmlFormater {

    public function FormaToHtml(Report $report){
        $contents = $report->getContents();
        $data = "";

        foreach ($contents['data'] as $value) {
            $data .= "<li>$value</li>";
        }

        return "
            <h2> {$contents['title']} </h2>
            <em>{$contents['date']}</em>
            <h4>Données : </h4>
            <ul>
                $data
            </ul>
        ";
    }
}