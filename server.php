<?php
   include("MathHelp_calc.php"); 
   
   if($_POST){
       if(isset($_POST["calculo"])){
           $numbers =$_POST["calculo"];
           $resultado = MathHelp_calc::calculate_str($numbers);
            //echo number_format($resultado,2,'.','');
          
           if($resultado == "NaN"){
                echo false;
           }else{
                //los decimales con coma y los miles en punto
                echo number_format($resultado,2,'.','');
           }
       }
       
       elseif(isset($_POST["seno"])){
           $sen =$_POST["seno"];
           if($sen !="" and $sen!=0 ){
                $resultado = sin(deg2rad($sen)); //lo convierte el numero en grados y en radianes
                echo number_format($resultado,5,'.','');
                
           }else{
               return false;
           }
       }
       
       elseif(isset($_POST["coseno"])){
           $cos =$_POST["coseno"];
           if($cos !=""){
                $resultado = cos(deg2rad($cos)); //lo convierte el numero en grados y en radianes
               echo $resultado;
           }else{
               return false;
           }
       }
       
       elseif(isset($_POST["tangente"])){
           $tan =$_POST["tangente"];
           if($tan !="" and $tan!=0 ){
               $resultado = tan(deg2rad($tan)); //lo convierte el numero en grados y en radianes
               echo $resultado;
           }else{
               return false;
           }
       }
       
       elseif(isset($_POST["contangente"])){
           $cotan =$_POST["contangente"];
           if($cotan !="" and $cotan!=0 ){
                 $resultado =1/tan(deg2rad($cotan)); //lo convierte el numero en grados y en radianes
               echo $resultado;
           }else{
               return false;
           }
       }
       
       elseif(isset($_POST["secante"])){
           $secan =$_POST["secante"];
           if($secan !=""){
                $resultado =1/cos(deg2rad($secan)); //lo convierte el numero en grados y en radianes
                echo $resultado;
           }else{
               return false;
           }
       }
       
       elseif(isset($_POST["cosecante"])){
           $cosec =$_POST["cosecante"];
           if($cosec !="" and $cosec!=0 ){
                $resultado = 1/sin(deg2rad($cosec)); //lo convierte el numero en grados y en radianes
                echo $resultado;
           }else{
               return false;
           }
       }
       
       elseif(isset($_POST["binario"])){
           $bin =$_POST["binario"];
           if($bin !="" and $bin!=0 ){
                $resultado =  decbin($bin);
                echo $resultado;
           }else{
               return false;
           }
       }
       
       elseif(isset($_POST["hexadecimal"])){
           $hex =$_POST["hexadecimal"];
           if($hex !="" and $hex!=0 ){
                $resultado =  dechex($hex);
                echo $resultado;
           }else{
               return false;
           }
       }
   }
        
       
   
