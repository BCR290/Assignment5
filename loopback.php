<?php
 
$array = array();
$curl = curl_init();

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo '{Type:[GET],parameters:';
    foreach ($_POST as $key => $value) {
            $array[$key] = $value;
        }
} else if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    echo '{Type:[GET],parameters:';
    foreach ($_GET as $key => $value) {
            $array[$key] = $value;
        	}	
	}
if ($array == null) {
    echo '{null}';
 } 
 else {
    echo json_encode($array);
 }
 
?>