<?php   
session_start();
if(isset($_SESSION['user'])){
    ?>
    <html>
       <a>Hola,<?php echo $_SESSION['user']['name']?></a>
    </html>
   <?php
}else{
?>
 <html>
    <a>Registrese para poder guardar sus datos</a>
 </html>
<?php
}
$honorarios=0;
$presuntos=$honorarios*0.3;
$honorarioMax=0;
if($presuntos>$honorarioMax){
$presuntos=$honorarioMax;
}
$sueldos=0;
$factor=0;
$rebaja=0;
$base_global=($sueldos+($honorarios-$presuntos));
$final=($base_global*$factor)-($honorarios*$factor);
if($final!=0){
   if($final<0){
       ?>
    <html>
       <a>Hay devolucion</a>
    </html>
   <?php
   }else{
       ?>
    <html>
       <a>Tiene que pagar impuestos</a>
    </html>
   <?php
   }
}

?>