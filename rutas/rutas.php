<?php

$array=explode("/",$_SERVER["REQUEST_URI"]);

if(count(array_filter($array))==1){
    $json=array(
        "detalle"=>"Sin solicitudes",
    );
echo json_encode($json, true);
}else{

if(count(array_filter($array))==2){
    $json=array(
        "detalle"=>"¿Cuál es la solicitud?",
    );
echo json_encode($json, true);

}


}
?>