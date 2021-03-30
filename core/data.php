<?php

require "conf.php";

class Data extends Conf
{

    public function setNameSensor($x)
    {
        $data = "";
        switch ($x) {
            case 1:
                $data = $this->sensor1;
                break;
            case 2:
                $data = $this->sensor2;
                break;
            case 3:
                $data = $this->sensor3;
                break;
            default:
                $data = "null";
                break;
        }

        return $data;
    }

    public function setNameOutput($x)
    {
        $data = "";
        switch ($x) {
            case 1:
                $data = $this->output1;
                break;
            case 2:
                $data = $this->output2;
                break;
            default:
                $data = "null";
                break;
        }

        return $data;
    }

    public function setAbout(){
        return $this->about;
    }
}
