<?php

class Model_ddbb extends Model{
    private $dbjson;
    public function __construct(){
        $this->dbjson = json_decode(file_get_contents(ROOT_PATH . '/app/models/ddbb.json'));
    }
    public function testdbug(){
        echo "hola estic conectat";
        exit();
    }

    public function novaTasca($nom_tasca, $nom_creador, $data_inici, $data_final, $estat){
      

        $array = array("tasca"=> $nom_tasca, "nom"=> $nom_creador, "inici"=> $data_inici, "final"=>$data_final, "estat"=>$estat, "id"=>null);
    
        
        if(file_exists("../app/models/ddbb.json")){
            
            $contenido = file_get_contents("../app/models/ddbb.json");
            $data = json_decode($contenido, true);
            $ultimo = end($data);
            $array['id'] = $ultimo['id']+1;
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
    public function ImprimirTasca($nom_tasca){
          
        $contenido = file_get_contents("../app/models/ddbb.json");
        $data = json_decode($contenido, true); 
        // var_dump($contenido) ;
        
        foreach ($data as $key => $value) { 
            if($value['tasca'] == $nom_tasca){
                // echo $value['tasca'] . " és igual que " . $nom_tasca.'<br>'; 
                // echo $value['tasca'].' <br>';
                // echo $value['nom'].' <br>';
                // echo $value['estat'].' <br>';
                // echo $value['inici'].' <br>';
                // echo $value['final'].' <br>';
                
                return $value['id'];

                
                //return $data[$key];
            }
        }

        return 0;
        
    }

    public function eliminarTasca($id){
        $contenido = file_get_contents("../app/models/ddbb.json");
        $data = json_decode($contenido, true);    
        
        foreach ($data as $key => $value) { 
            
           
            
            if ($value['id'] == $id) { 
               
              
               
                unset($data[$key]);
            } 
        } 
        
        file_put_contents('../app/models/ddbb.json', json_encode($data, JSON_PRETTY_PRINT));
    }


    public function modificarTasca($tasca, $nom, $inici, $final, $estat, $id){
        $contenido = file_get_contents("../app/models/ddbb.json");
        $data = json_decode($contenido, true); 
        
        foreach ($data as $key => $value) { 
            
            if ($value['id'] == $id){
                if(isset($tasca)){$data[$key]['tasca'] = $tasca;} 
                if(isset($usuari)){$data[$key]['nom'] = $nom;} 
                if(isset($estat)){$data[$key]['estat'] = $estat;} 
                if(isset($inici)){$data[$key]['inici'] = $inici;} 
                if(isset($final)){$data[$key]['final'] = $final;} 
                if(isset($id)){$data[$key]['id'] = $id;} 
            } 
        } 
        file_put_contents('../app/models/ddbb.json', json_encode($data, JSON_PRETTY_PRINT));    
    }
    public function veureTasca($tasca, $nom, $inici, $final, $estat, $id){
        $contenido = file_get_contents("../app/models/ddbb.json");
        $data = json_decode($contenido, true); 
        
        foreach ($data as $key => $value) { 
            
            if ($value['id'] == $id){
                if(isset($tasca)){$data[$key]['tasca'] = $tasca;} 
                if(isset($usuari)){$data[$key]['nom'] = $nom;} 
                if(isset($estat)){$data[$key]['estat'] = $estat;} 
                if(isset($inici)){$data[$key]['inici'] = $inici;} 
                if(isset($final)){$data[$key]['final'] = $final;} 
                if(isset($id)){$data[$key]['id'] = $id;} 
            } 
        } 
        file_put_contents('../app/models/ddbb.json', json_encode($data, JSON_PRETTY_PRINT));    
    }

    
}


?>