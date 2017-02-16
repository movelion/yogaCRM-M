<?php
require_once('config/smarty_inc.php');

if( ($rootGroup == 8) || ($rootGroup == 9) ){
    $smarty->display('templates/index.html');
}else{
    $smarty->display('templates/m/index.html');
}

?>