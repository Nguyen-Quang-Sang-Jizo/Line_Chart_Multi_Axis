<div style="width:75%;" id="report_render">
    <?php
    function randomScalingFactor()
    {
        return mt_rand(-100, 100);
    }

    $data = [
        ['month' => 'February',  'series1' => randomScalingFactor(), 'series2' => randomScalingFactor()],
        ['month' => 'January',   'series1' => randomScalingFactor(), 'series2' => randomScalingFactor()],
        ['month' => 'March',     'series1' => randomScalingFactor(), 'series2' => randomScalingFactor()],
        ['month' => 'April',     'series1' => randomScalingFactor(), 'series2' => randomScalingFactor()],
        ['month' => 'May',       'series1' => randomScalingFactor(), 'series2' => randomScalingFactor()],
        ['month' => 'June',      'series1' => randomScalingFactor(), 'series2' => randomScalingFactor()],
        ['month' => 'July',      'series1' => randomScalingFactor(), 'series2' => randomScalingFactor()],
    ];

    \koolreport\chartjs\LineChart::create(array(
        'dataSource' => $data,
        'columns' => array(
            "month",
            "series1" => array(
                "label" => "Series 1",
                "yAxisID" => "y-axis-1"
            ),
            "series2" => array(
                "label" => "Series 2",
                "yAxisID" => "y-axis-2"
            )
        ),        "options" => array(
            "responsive" => true,
            "hoverMode" => "index",
            "stacked" => false,
            "title" => array(
                "display" => true,
                "text" => 'Chart.js Line Chart - Multi Axis'
            ),
            "scales" => array(
                "yAxes" => array(
                    array(
                        "type" => "linear",
                        "display" => true,
                        "position" => "left",
                        "id" => "y-axis-1"
                    ),
                    array(
                        "type" => "linear",
                        "display" => true,
                        "position" => "right",
                        "id" => "y-axis-2",
                        "gridLines" => array(
                            "drawOnChartArea" => false,
                        )
                    )
                )
            )
        )
    ));
    ?>
</div>