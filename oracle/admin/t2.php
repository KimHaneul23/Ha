<?php
 
  // session_start for caching
  session_start();
  
  require 'analytics.class.php';
  
  try {
      
      // construct the class
      $oAnalytics = new analytics('mjimenez@sitiosur.cl', 'marcejimenez');
      
      // set it up to use caching
      $oAnalytics->useCache();
      
      //$oAnalytics->setProfileByName('http://www.sitiosur.cl');
      $oAnalytics->setProfileById('ga:477833');
      
      // set the date range
      $oAnalytics->setMonth(date('n'), date('Y'));
      // or $oAnalytics->setDateRange('YYYY-MM-DD', 'YYYY-MM-DD');
      
     // echo '<pre>';
      // print out visitors for given period
      //print_r($oAnalytics->getVisitors());

    $pordia=$oAnalytics->getPageviews();
    $pordiapg=$oAnalytics->getPageviews();


      
      // print out pageviews for given period
      //print_r($oAnalytics->getPageviews());
      
      // use dimensions and metrics for output
      // see: http://code.google.com/intl/nl/apis/analytics/docs/gdata/gdataReferenceDimensionsMetrics.html
      $oAnalytics->setDateRange(date('Y').'-01-01', date('Y-m-d'));
      $pormes=$oAnalytics->getData(array(   'dimensions' => 'ga:month',
                                            'metrics'    => 'ga:pageviews',
                                            'sort'       => 'ga:month'));
                                            
                                            
      $oAnalytics->setDateRange(date('Y').'-01-01', date('Y-m-d'));
      $porpais=$oAnalytics->getData(array(   'dimensions' => 'ga:country',
                                            'metrics'    => 'ga:pageviews',
                                            'sort'       => 'ga:pageviews'));    
                                            
      $porpais=array_reverse($porpais);        
      
      
      $oAnalytics->setDateRange('2006-01-01', date('Y-m-d'));
      $poranos=$oAnalytics->getData(array(  'dimensions' => 'ga:year',
                                            'metrics'    => 'ga:pageviews',
                                            'sort'       => 'ga:year'));      
                                            
//     print_r($poranos);
      

                                            
                                            
      
  } catch (Exception $e) { 
      echo 'Caught exception: ' . $e->getMessage(); 
  }
?>
<style type="text/css">
body,td,th {
    
}
</style>
<script language="JavaScript" src="../fcf/JSClass/FusionCharts.js" type="text/javascript"></script>


<?php 
include("../fcf/Code/PHP/Includes/FusionCharts.php");
?>

<?php    
    echo '<p style="font-family: Arial, Helvetica, sans-serif;     font-size: 12px;">Visitas durante el mes actual<br>';
    echo "Fuente: Google Analytics</p>";
//****************************** por d�a ***************************************//
    $dsixml = "";
    $dsixml = $dsixml . "<graph ";
//    $dsixml = $dsixml . " caption='Contenidos actuales del sitio'";    
//    $dsixml = $dsixml . " subCaption='By Quantity'";
//    $dsixml = $dsixml . " pieSliceDepth='10'";
    $dsixml = $dsixml . " showBorder='1'";
//    $dsixml = $dsixml . " pieBorderThickness='1'";    
    $dsixml = $dsixml . " showNames='1'";
    $dsixml = $dsixml . " showValues='0'";    
    $dsixml = $dsixml . " formatNumberScale='0'";
    $dsixml = $dsixml . " baseFontSize='10'";
    $dsixml = $dsixml . " bgColor='f0f0f0'";
    $dsixml = $dsixml . " showLimits='1'";    
    $dsixml = $dsixml . " decimalPrecision='0'";    
    $dsixml = $dsixml . " thousandSeparator='.'";            
    $dsixml = $dsixml . " rotateNames='0'";            
    $dsixml = $dsixml . " xAxisName='D�a del mes'";                
    $dsixml = $dsixml . " yAxisName='Visitas'";                        
//    $dsixml = $dsixml . " numberSuffix=' Units'";
    $dsixml = $dsixml . " >";    

    $j=0;
    foreach ($pordia as &$value) {
        $j++;
        $dsixml .= "<set name='" . $j . "' value='" . $value .  "' color='FF8E46'/>";    
    }    
    
    $dsixml .= "</graph>";

    echo renderChart("../fcf/Charts/FCF_Column2D.swf", "", $dsixml, "pordia", 600, 300, false, false);
    // reset the query
//***************************************************************************************************    
?>


<?php    
//****************************** por mes ***************************************//
    echo '<p>&nbsp;</p>';
    echo '<p style="font-family: Arial, Helvetica, sans-serif;     font-size: 12px;">Visitas por mes durante el a�o actual<br>';
    echo "Fuente: Google Analytics</p>";
    $dsixml = "";
    $dsixml = $dsixml . "<graph ";
//    $dsixml = $dsixml . " caption='Contenidos actuales del sitio'";    
//    $dsixml = $dsixml . " subCaption='By Quantity'";
//    $dsixml = $dsixml . " pieSliceDepth='10'";
    $dsixml = $dsixml . " showBorder='1'";
//    $dsixml = $dsixml . " pieBorderThickness='1'";    
    $dsixml = $dsixml . " showNames='1'";
    $dsixml = $dsixml . " showValues='0'";    
    $dsixml = $dsixml . " formatNumberScale='0'";
    $dsixml = $dsixml . " baseFontSize='10'";
    $dsixml = $dsixml . " bgColor='f0f0f0'";
    $dsixml = $dsixml . " showLimits='1'";    
    $dsixml = $dsixml . " decimalPrecision='0'";    
    $dsixml = $dsixml . " thousandSeparator='.'";            
    $dsixml = $dsixml . " rotateNames='0'";            
    $dsixml = $dsixml . " xAxisName='Mes del a�o'";                
    $dsixml = $dsixml . " yAxisName='Visitas'";                        
//    $dsixml = $dsixml . " numberSuffix=' Units'";
    $dsixml = $dsixml . " >";    

    $j=0;
    foreach ($pormes as &$value) {
        $j++;
        $dsixml .= "<set name='" . $j . "' value='" . $value .  "' color='F6BD0F'/>";    
    }    
    
    $dsixml .= "</graph>";

    echo renderChart("../fcf/Charts/FCF_Column2D.swf", "", $dsixml, "pormes", 600, 300, false, false);
    // reset the query
//***************************************************************************************************    
?>


<?php    
//****************************** por a�os ***************************************//
    echo '<p>&nbsp;</p>';
    echo '<p style="font-family: Arial, Helvetica, sans-serif;     font-size: 12px;">Visitas por a�o<br>';
    echo "Fuente: Google Analytics / los datos est�n siendo registrados por Google Analytics desde 2006</p>";
    $dsixml = "";
    $dsixml = $dsixml . "<graph ";
//    $dsixml = $dsixml . " caption='Contenidos actuales del sitio'";    
//    $dsixml = $dsixml . " subCaption='By Quantity'";
//    $dsixml = $dsixml . " pieSliceDepth='10'";
    $dsixml = $dsixml . " showBorder='1'";
//    $dsixml = $dsixml . " pieBorderThickness='1'";    
    $dsixml = $dsixml . " showNames='1'";
    $dsixml = $dsixml . " showValues='0'";    
    $dsixml = $dsixml . " formatNumberScale='0'";
    $dsixml = $dsixml . " baseFontSize='10'";
    $dsixml = $dsixml . " bgColor='f0f0f0'";
    $dsixml = $dsixml . " showLimits='1'";    
    $dsixml = $dsixml . " decimalPrecision='0'";    
    $dsixml = $dsixml . " thousandSeparator='.'";            
    $dsixml = $dsixml . " rotateNames='0'";            
    $dsixml = $dsixml . " xAxisName='A�o'";                
    $dsixml = $dsixml . " yAxisName='Visitas'";                        
//    $dsixml = $dsixml . " numberSuffix=' Units'";
    $dsixml = $dsixml . " >";    

    $j=2005;
    foreach ($poranos as &$value) {
        $j++;
        $dsixml .= "<set name='" . $j . "' value='" . $value .  "' color='99cc66'/>";    
    }    
    
    $dsixml .= "</graph>";

    echo renderChart("../fcf/Charts/FCF_Column2D.swf", "", $dsixml, "poranos", 600, 300, false, false);
    // reset the query
//***************************************************************************************************    
?>