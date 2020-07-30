<?php

namespace App\Reporting;

use App\Reporting\Format\HtmlFormater;
use App\Reporting\Format\HtmlSpecialFormatter;
use App\Reporting\Format\JsonFormater;

class ReportExtractor
{

    /**
     * Doit afficher l'ensemble des formats possibles pour un rapport en se servant
     * des formatters ajoutés dans le tableau
     *
     * @param Report $report
     *
     * @return array
     */
    public function process(Report $report): array
    {
        $reportResult= [];

        $htmlformater = new HtmlFormater();
        $reportResult[] = $htmlformater->FormaToHtml($report);

        $jsonFormater = new jsonFormater();
        $reportResult[] = $jsonFormater ->formatToJSON($report);


        $HtmlSpecialFormatter = new HtmlSpecialFormatter();
        $reportResult[] = $HtmlSpecialFormatter->FormaToHtml($report);

        return $reportResult;
    }
}
