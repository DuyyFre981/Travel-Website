<?php
if (is_array($listtour)) {
    foreach ($listtour as $tour) {

        extract($tour);
        $a[] = $tour['TENTOUR'];
        $b[] = $tour['GIATOUR'];
    }
}
$dataPoints = array(
    array("label" => $a[0], "y" => $b[0]),
    array("label" => $a[1], "y" => $b[1]),
    array("label" => $a[2], "y" => $b[2]),
    array("label" => $a[3], "y" => $b[3]),
    array("label" => $a[4], "y" => $b[4]),
    array("label" => $a[5], "y" => $b[5]),

    // array("label" => $tour[2]['TENTOUR'], "y" => $tour['GIATOUR']),
    // array("label" => $tour[3]['TENTOUR'], "y" => $tour['GIATOUR']),


);
if (is_array($listhotel)) {
    foreach ($listhotel as $hotel) {

        extract($hotel);
        $h[] = $hotel['TENKS'];
        $t[] = $hotel['GIA'];
    }
}



?>
<!DOCTYPE HTML>
<html style="width:100%">

<head>
    <script>
        window.onload = function() {

            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                exportEnabled: true,
                title: {
                    text: "Average Tour's Cost in GoAway"
                },
                subtitles: [{
                    text: "Currency Used: USD ($)"
                }],
                data: [{
                    type: "pie",
                    showInLegend: "true",
                    legendText: "{label}",
                    indexLabelFontSize: 16,
                    indexLabel: "{label} - #percent%",
                    yValueFormatString: "฿#,##0",
                    dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
                }]
            });
            chart.render();




        }
    </script>
</head>

<body style="width: 95%;padding:3%">
    <div class="container">
        <div id="chartContainer" style="height: 370px; width: 100%;"></div>
        <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
    </div>

    <div class="discount">
        
        <form method="post" action="index.php?act=chart">
            <h3>Change discount rate of TOUR</h3>
    
            <select name='VALUE' class="form-select" aria-label="Default select example">
                <option  selected>Chose your discount rate </option>
                <?php
                if (is_array($listkm)) {
                    foreach ($listkm as $km) {
                        echo ' <option  value="' . $km['VALUE'] . '">' . $km['MUCKM'] . '</option>
                    
                        ';
                       
                    } 
                }
                ?>

            </select> <br>
            <h4>Chose day discount until</h4>
                <input type="date" name="date" value="<?=date('Y-m-d')?>"> <br> <br>
                <input class="btn btn-primary" name="TOURRATE" type="submit" value="OK">
        </form>
    </div>
                

</body>

</html>
<style>
    .discount {
        padding: 5%;
    }
</style>