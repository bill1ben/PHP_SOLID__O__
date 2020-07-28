<?php
namespace App\Reporting\Format;
use App\Reporting\Report;

class JsonFormater {

    public function formatToJSON(Report $report)
    {
        return json_encode($report->getContents());
    }

}

