<?php
include "query.php";
class Component extends Query{

    function __construct()
    {   
        echo '<script src="../asset/js/jquery-latest.js"></script>';
        echo '<script type="text/javascript" src="../asset/js/jquery-3.4.0.min.js"></script>';
        echo '<script type="text/javascript" src="../asset/js/mdb.min.js"></script>';
    }
    
    public function setComponent($id, $loadfile)
    {
        echo "<script>
        var refreshId = setInterval(function() {
            $('#".$id."').load('component/".$loadfile.".php');
        }, 1000);
        </script>";
    }
    
    public function makeSensor($title, $sensor, $unit){
        $data = array();
        $query = new Query();
        
        $data['title'] = $title;
        $data['unit'] = $unit;
        foreach($query->getData('device', 'id_device', 1) as $dt) {
            $data['value'] = $dt[$sensor];
            break;
        }
        return $data;        
    }

    public function makeControl($title, $output){
        $data = array();
        $query = new Query();
        
        $data['title'] = $title;
        foreach($query->getData('device', 'id_device', 1) as $dt) {
            $value = $dt[$output];
            break;
        }

        if($value==1){
            $data['condition'] = "ON";
        }else{
            $data['condition'] = "OFF";
        }
        return $data;        
    }

    public function buttonControl($kondisi, $output){
        if ($kondisi == "ON") {
            $btn = "<a href='../core/actionBtnOutput.php?out=".$output."&val=0' type='button' class='btn btn-success d-flex justify-content-center'>Matikan</a>";
        }else{
            $btn = "<a href='../core/actionBtnOutput.php?out=".$output."&val=1' type='button' class='btn btn-secondary d-flex justify-content-center'>Hidupkan</a>";
        }
        return $btn;
    }
}

