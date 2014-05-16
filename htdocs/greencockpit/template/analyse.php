
<?php
$js = analyse($databasename);
$labels= $js['labels'];
$data = $js['data'];
echo "$labels <br>";
echo $data;

$test = 100;
?>

<script>
$(function () { 
    $('#container').highcharts({
        chart: {
            type: 'area'
        },
         credits: {
            enabled: false
            },
        title: {
            text: 'Analyse'
        },
        xAxis: {
            categories: <?php echo "$labels"; ?>,
            labels :{ step: 5 }
           
        },
        yAxis: {
            title: {
                text: 'kWh'
            }
        },
        series: [{
            name: 'Mashine 1',
            data: [<?php echo "$data";?>]
        }, {
            name: 'Mashine 2',
            data: [5, 7, 3,5, 7, 3, 7, 3, 7, 3, 7, 3, 7, 3, 7, 3, 7, 3]
        }]
    });
});
</script>




