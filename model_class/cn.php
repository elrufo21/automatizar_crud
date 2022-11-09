<?php

define("BASE_URL","http://192.168.0.101/freky/desarrollos_freky-master/");// cambiar en produccion

class cn{


    public function f_cn()
    {
        $hostname_cn="localhost";
        $database_cn="bd_dev";
        $user_cn="root";
        $pass_cn="123"; //edit password for : Jhon
        
        return $cn=mysqli_connect($hostname_cn,$user_cn,$pass_cn,$database_cn);
    }

}

?>