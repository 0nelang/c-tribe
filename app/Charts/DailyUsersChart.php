<?php

namespace App\Charts;

use Carbon\Carbon;
use App\Models\Visitor;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class DailyUsersChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\LineChart
    {
        $months = [];
        $visitors = [];
        for ($i=1; $i <= 12 ; $i++) {
            $month = 'o1-' . $i . '-' . date('Y');
            $visitor = Visitor::whereMonth('created_at', Carbon::parse($month))->count();
            array_push($visitors, $visitor);
            array_push($months, Carbon::parse($month)->format('F'));
        }
        return $this->chart->lineChart()
            ->setTitle('Monthly Visitors')
            ->addData('Physical sales', $visitors)
            ->setXAxis($months)
            ->setFontFamily('Poppins')
            ->setFontColor('#f3f4f7');
    }
}
