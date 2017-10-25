<?php
/**
 * created by Yudo Hartono Trisunu
 * Desc
 * this only simulator for ISO 8583 message
 * Dummy Response can be set in Config file
 * This file only Adapter to switch request type (ISO,JSON,XML and other)
 * 
 */
ignore_user_abort(true);
set_time_limit(0);
date_default_timezone_set('Asia/Jakarta');

//
if (empty($_REQUEST)) {
    $dataPOST = trim(file_get_contents('php://input'));
    $aRequest = explode('&', $dataPOST);
    foreach ($aRequest as $kVal) {
        $cValue = explode('=', $kVal);
        $_REQUEST[$cValue[0]] = $cValue[1];
    }
}
//logError(print_r($_REQUEST,true));
foreach ($_REQUEST as $key => $value) {
    if (strstr($key, '?')) {
        $nkey = str_replace('?', '', $key);
        $_REQUEST[$nkey] = $value;
    }
}
?>