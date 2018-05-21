
<?php

function piecalculadora(){
?>
 <span>&copy;fco. Garcia Martinez</span>
 <?php
 }
function navegacion2(){
	?>
	<!--<div class="boton "><a href="../../index.php">páginaInicio</a></div>-->
        <!--<a class="boton" href="../../index.php">páginaInicio</a>-->
        <button class="btn btn-primary btn-lg botonnav" onClick = resetear("../../index.php")>pagprincipal</button>
        <button class="btn btn-primary btn-lg botonnav" onClick = resetear("index.php")>reset</button>
	<?php
}
function logo($logo){
if($logo==0){
	?>
<img src="images/logo/arenosa1.gif" alt="arenosa"/>
<?php
}
if($logo==1){
?>
<img src="../images/logo/arenosa1.gif" alt="arenosa"/>
<?php
}
if($logo==2){
?>
<img src="../../images/logo/arenosa1.gif" alt="arenosa"/>
<?php
}
}

function desconectarsesion(){
	?>
	<a class="boton" href="logout.php">desconectarsesion</a>
	<?php
	}

function encabezado(){
?>	
Arenosa
<?php
}

