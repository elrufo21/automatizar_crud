<?php
 include_once('cn.php'); 
 class aea extends cn{
var $val1;
var $val2;
var $val3;
var $val4;
var $val5;
var $val6;
var $val7;
var $val8;
var $val9;
var $val10;
var $val11;
var $val12;
function create(){
$query="INSERT INTO aea VALUES(0,'$this->val2','$this->val3','$this->val4','$this->val5','$this->val6','$this->val7','$this->val8',now(),now(),1,1)";
 $rs=mysqli_query($this->f_cn(),$query);
 mysqli_close($this->f_cn());
 return $rs;
} 
function read(){
$query="SELECT * FROM aea";
$rs = mysqli_query($this->f_cn(), $query);
mysqli_close($this->f_cn());
return $rs;
} 
function update(){
$query="UPDATE aea SET fechaactualiza=now(),id_usuarioactualiza=1 WHERE id_aea = '$this->id_aea'";
$rs = mysqli_query($this->f_cn(), $query);
mysqli_close($this->f_cn());
return $rs;
} 
function estado($estado){
$query="UPDATE aea SET estado ='$estado' WHERE id_aea = '$this->id_aea'";
$rs = mysqli_query($this->f_cn(), $query);
mysqli_close($this->f_cn());
return $rs;
} 
} ?>
