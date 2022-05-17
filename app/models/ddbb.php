<?php

$nom_tasca = $_POST["nom_tasca"];
$nom_creador = $_POST["nom"];
$data_inici = $_POST["data_inici"];
$data_final = $_POST["data_final"];
$estat = $POST["estat"];

$array = array("tasca"=> $nom_tasca, "nom"=> $nom_creador, "inici"=> $data_inici, "final"=>$data_final, "estat"=>$estat);

if(file_exists("ddbb.json")){
    $contenido = file_get_contents("ddbb.json");
    $data = json_decode($contenido, true);
    array_push($data, $array);
    file_put_contents("ddbb.json",json_encode($data));
}else{
    $data = array();
    array_push($data, $array);
    $f = fopen("ddbb.json","w");
    fwrite($f, json_encode($data));
    fclose($f);

}
header("Location: vista.phtml")

?>