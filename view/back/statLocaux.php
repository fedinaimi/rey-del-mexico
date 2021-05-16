<?php

$graph_value = 0;
if(file_exists("../../config.php"))
{
    include '../../config.php';
    $bd=config::getConnexion();
    $sql = "SELECT * FROM local order by dateCreation ASC";
    foreach  ($bd->query($sql)  as $graph)
    {
        $graph_value++;
    }

 if($graph_value == NULL)
 {
     echo '[GRAPH_PLUGIN_Local] FATAL ERROR  (CONFIG_VAR)  : Variables corrompues,merci de consulter le mannul  ou de réinstaller leplugin.<br>';
     exit;
 }   
}
else
{
    echo '[GRAPH_PLUGIN_Local] FATAL ERROR  (FILE_NO_EXIST)  : le fichier  configuration n a pas été trouvé.<br>';
    echo '[GRAPH_PLUGIN_Local] FATAL ERROR  (CONFIG_ERR)  : Impossible  de se connecter à la base de données: vérifier l etat du fichier.<br>';
    exit;
}
?>
<html>
    <head>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart(){
            var data = google.visualization.arrayToDataTable([
                ['Année'  ,  'Surface'],

                <?php

$sql = "SELECT * FROM local order by dateCreation ASC";
foreach  ($bd->query($sql)  as $graph)
{
    echo '["'.$graph['dateCreation'].'", '.$graph['surface'].'],';
}
   ?>
                ]);
                var options = {
                  
                   title: 'Surface',
                   hAxis: {title: 'Date de la création', titleTextStyle: {color: '#333'}},
                  vAxis: {minValue: 0}     
                };
                var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
                chart.draw(data,options);
        }  </script>
    </head>
</html>