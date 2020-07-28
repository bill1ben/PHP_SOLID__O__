<?php

namespace App\Reporting;

class Report
{
    /**
     * @var string
     */
    protected $date;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var array
     */
    protected $data;

    /**
     * Constructeur qui reçoit la date et le titre du rapport
     *
     * @param string $date
     * @param string $title
     */
    public function __construct(string $date, string $title, array $data)
    {
        $this->date  = $date;
        $this->title = $title;
        $this->data = $data;
    }


    public function getContents()
    {
        return [
            'date'  => $this->date,
            'title' => $this->title,
            'data' => $this->data
        ];
    }
}
