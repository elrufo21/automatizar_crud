<?php 
class crear_class{

    var $bd;
    var $bd_campos;
    function crear(){
        mkdir("../".$this->bd,0777,true);
        $archivo_bd = fopen("../../model_class/".$this->bd.".php","w+b"); 
        $archivo=$archivo_bd;
        
       
        
        fwrite($archivo, "<?php\r\n include_once('cn.php'); \r\n ");
        
        fwrite($archivo, "class $this->bd extends cn{\r\n");
        for ($i=1; $i <= $this->bd_campos ; $i++) { 
            fwrite($archivo,"var $"."val$i;\r\n");
        }

        //Funcion crear
        fwrite($archivo, "function create(){\r\n");
        fwrite($archivo, '$'.'query="INSERT INTO '. "$this->bd" .' VALUES(0,');
        for($i=2; $i <= $this->bd_campos-4 ; $i++){
            fwrite($archivo, "'");
            fwrite($archivo, '$this->val'.$i);
            fwrite($archivo, "',");
        }
        fwrite($archivo, "now(),now(),1,1");
        fwrite($archivo, ')";'."\r\n");
        fwrite($archivo, ' $rs=mysqli_query($this->f_cn(),$query);'."\r\n");
        fwrite($archivo, ' mysqli_close($this->f_cn());'."\r\n");
        fwrite($archivo, ' return $rs;'."\r\n");
        fwrite($archivo, "} \r\n");
        //Funcion leer
        fwrite($archivo, "function read(){\r\n");
        fwrite($archivo,'$query="SELECT * FROM '."$this->bd".'";'."\r\n");
        fwrite($archivo, '$rs = mysqli_query($this->f_cn(), $query);'."\r\n");
        fwrite($archivo, 'mysqli_close($this->f_cn());'."\r\n");
        fwrite($archivo, 'return $rs;'."\r\n");
        fwrite($archivo, "} \r\n");
        //funcion update
        fwrite($archivo, "function update(){\r\n");
        fwrite($archivo,'$query="UPDATE '."$this->bd".' SET fechaactualiza=now(),id_usuarioactualiza=1 WHERE id_'."$this->bd = '".'$this->id_'."$this->bd'".'"'.";\r\n");
        fwrite($archivo,'$rs = mysqli_query($this->f_cn(), $query);'."\r\n");
        fwrite($archivo,'mysqli_close($this->f_cn());'."\r\n");
        fwrite($archivo,'return $rs;'."\r\n");
        fwrite($archivo, "} \r\n");

        fwrite($archivo, 'function estado($estado){'."\r\n");
        fwrite($archivo,'$query="UPDATE '."$this->bd"." SET estado ='".'$estado'."' WHERE id_$this->bd = "."'".'$this->id_'."$this->bd'".'";'."\r\n");
        fwrite($archivo, '$rs = mysqli_query($this->f_cn(), $query);'."\r\n");
        fwrite($archivo,'mysqli_close($this->f_cn());'."\r\n");
        fwrite($archivo,'return $rs;'."\r\n");
        fwrite($archivo, "} \r\n");
        
        fwrite($archivo, "} ?>\r\n");
        fflush($archivo);



    }
    function escribir(){
        
    }
}

?>
