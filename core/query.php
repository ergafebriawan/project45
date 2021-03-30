<?php

require "conf.php";

class Query extends Conf
{

    var $connect;

    function __construct()
    {
        $this->connect = mysqli_connect($this->host, $this->username, $this->password, $this->database);
    }


    ////////////////////////////////////////get data/////////////////////////////////////////////////////////////////////////
    public function getData($table, $field = null, $id = null)
    {
        if($id === null || $field === null){
            return mysqli_query($this->connect, "SELECT * FROM `$table`");
        }else{
            return mysqli_query($this->connect, "SELECT * FROM $table WHERE $field='$id'");
        }
    }

    public function tombolOutput($output, $x){
        $update = mysqli_query($this->connect, "UPDATE `device` SET `$output` = '$x' WHERE `device`.`id_device` = 1");
        return $update;
    }

    public function getColumn($column){
        return mysqli_query($this->connect, "SELECT $column FROM ( SELECT * FROM log ORDER BY id DESC LIMIT 20) Var1 ORDER BY ID ASC");
    }

    public function dataLog(){
        $data = mysqli_query($this->connect, "SELECT * FROM log ORDER BY ID DESC LIMIT 0,20");
        return $data;
    }
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    ///////////////////////////////////////API data /////////////////////////////////////////////////////////////////////////
    public function getDevice($id = null){
        if($id === null){
            $data = mysqli_query($this->connect, "SELECT * FROM `device`");
        }else{
            $data = mysqli_query($this->connect, "SELECT * FROM `device` WHERE id_device=$id");
        }
        $array_data = array();
        while($baris = mysqli_fetch_assoc($data)){
            $array_data[] = $baris;
        }

        return $array_data;
    }

    public function updateDevice($id, $sensor1, $sensor2, $sensor3, $output1, $output2){
        return mysqli_query($this->connect, "UPDATE `device` SET `sensor1` = $sensor1, `sensor2` = $sensor2, `sensor3` = $sensor3, `output1` = $output1, `output2` = $output2 WHERE `device`.`id_device` = $id;");
    }

    public function logData($sensor1, $sensor2, $sensor3, $output1, $output2){
        return mysqli_query($this->connect, "INSERT INTO `log` VALUES (NULL, NOW(), $sensor1, $sensor2, $sensor3, $output1, $output2)");
    }
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    ////////////////////////////////////////login/////////////////////////////////////////////////////////////////////////////
    public function login($email,$password,$remember)
	{
		$query = mysqli_query($this->connect,"SELECT * FROM user WHERE email='$email'");
		$data_user = $query->fetch_array();
		if(($password['password']))
		{
			if($remember)
			{
				setcookie('email', $email, time() + (60 * 60 * 24 * 5), '/');
				setcookie('username', $data_user['username'], time() + (60 * 60 * 24 * 5), '/');
			}
			$_SESSION['email'] = $email;
			$_SESSION['username'] = $data_user['username'];
			$_SESSION['is_login'] = TRUE;
			return TRUE;
		}
	}

	public function relogin($email)
	{
		$query = mysqli_query($this->connect,"SELECT * FROM user WHERE email='$email'");
		$data_user = $query->fetch_array();
		$_SESSION['email'] = $email;
		$_SESSION['username'] = $data_user['username'];
		$_SESSION['is_login'] = TRUE;
	}
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
}
