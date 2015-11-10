<?php

require_once dirname(__FILE__) . '/helper.php';
$parameterone = $params->get('value1', '1');
$parametertwo = $params->get('value2', '1');
$hi="hello World";
$value1 = googlechart::getvalueone( $parameterone );
$value2 = googlechart::getvaluetwo( $parametertwo );
$chartpartone="https://chart.googleapis.com/chart?chs=250x100&chd=t:";
$chartparttwo="&cht=p3&chl=Hello|World";
require JModuleHelper::getLayoutPath('mod_googlechart');
?>