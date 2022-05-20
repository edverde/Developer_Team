<?php

class Model_ddbb extends Model{
    private $dbjson;
    public function __construct(){
        $this->dbjson = json_decode(file_get_contents(ROOT_PATH . '/app/models/ddbb.json'));
    }
    public function testdbug(){
        echo "hola estic conectat";
    }

    public function novaTasca($nom_tasca, $nom_creador, $data_inici, $data_final, $estat){
        // $nom_tasca = $_POST["nom_tasca"];
        // $nom_creador = $_POST["nom"];
        // $data_inici = $_POST["data_inici"];
        // $data_final = $_POST["data_final"];
        // $estat = $POST["estat"];

        $array = array("tasca"=> $nom_tasca, "nom"=> $nom_creador, "inici"=> $data_inici, "final"=>$data_final, "estat"=>$estat, "id"=>null);
    
        
        if(file_exists("../app/models/ddbb.json")){
            
            $contenido = file_get_contents("../app/models/ddbb.json");
            $data = json_decode($contenido, true);
            $array['id']= count($data)+1;
            array_push($data, $array);
            
            file_put_contents("../app/models/ddbb.json",json_encode($data, JSON_PRETTY_PRINT));
        
        }else{
            $data = array();
            $array['id']= 1;
            array_push($data, $array);
            $f = fopen("../app/models/ddbb.json","w");
            fwrite($f, json_encode($data, JSON_PRETTY_PRINT));
            fclose($f);


            

        }
        header("Location: /web/index");
    }
    public function ImprimirTasques(){
        // $data = [];
        $contenido = file_get_contents("../app/models/ddbb.json");
        $data = json_decode($contenido, true);
        return $data;
    }
    
}


?>