      
    <form name="formulario" id="form" class="form">
	
        	<input name ="pantalla" class="pantalla" id="pant" type="text" value="" onkeyup="this.value=NumText(this.value)"  />
				
            <div class="operacionesespeciales ">
                <input name = "binario" id="bin" type="button" class="boton cientificas" value="Bin" onClick='trigonome("Bin")'>
				<input name ="hexadecimal" id="hex" type="button" class="boton cientificas" value="Hex" onClick='trigonome("Hex")'>
                <input name ="tantociento" id="tantociento" type="button" class="boton basicas" value="%" onClick='agregarItem("%")'>
                <input name = "borrarcaracter"  type="button" class="boton control" value="<--" onClick="borrarItem()" >
				<input name ="borrar" type="button" class="boton control" value="C" onClick="reset()">
                <input name ="borrar1" type="button" class="boton control" value="CA" onClick="reset()">		   
            </div> 
        
            <div class="operacionestrigometria">
                <input name = "seno"  type="button" id="sen" class="boton cientificas" value="Sen" onClick='trigonome("Sen")' >
				<input name ="coseno" type="button" id="cos" class="boton cientificas" value="Cos" onClick='trigonome("Cos")' >
                <input name ="tangente" type="button" id="tan" class="boton cientificas" value="Tan" onClick='trigonome("Tan")' >
				<input name ="contangente" type="button" id="cotan" class="boton cientificas" value="Cotan" onClick='trigonome("Cotan")'> 
				<input name ="secante" type="button" id="secos" class="boton cientificas" value="Secos" onClick='trigonome("Secos")'>
                <input name ="cosecante" type="button" id="cosec" class="boton cientificas" value="Cosen" onClick='trigonome("Cosen")'>       
            </div>
        
			<div class = "operacionesbasicas">
                
                <input name="suma" type="button" class="boton" value="+" onClick='agregarItem("+")' >
				<input name="resta" type="button" class="boton" value="-" onClick='agregarItem("-")' >
                <input name = "multiplica" type="button" class="boton" value="*" onClick='agregarItem("*")' >
				<input name = "divide" type="button" class="boton" value="/" onClick='agregarItem("/")'> 
				<input name = "exponente" type="button" class="boton" value="^"onClick='agregarItem("^")'>
                <input name="raiz" type="button"  class="boton" value="raiz"  onClick='agregarItem("r")'> 
                
                       
            </div> 	
             
            <div class="numeros">
                <?php
                    for($i=1;$i<=9;$i++){
                        echo '<input name="' . $i . '"  type="button" class="boton" value="' . $i . '" onClick="agregarItem('.$i.')">';
                        if ($i%6==0){
                            /*echo "\n\t\t";*/
                            echo "<br>";
                        } 
                            echo "\n\t\t";
                    }
                    
                ?>
                <input name="cero" type="button" class="boton " value="0" onClick="agregarItem('0')">
                <input name="doscero" type="button" class="boton " value="00" onClick="agregarItem('00')">
                <!--<input name="punto" type="button" class="boton " value="." onClick="escribirpunto()">-->
                <input name="punto" type="button" class="boton " value="." onClick="agregarItem('.')" >
            </div>
            
            <div class="operador">
              <!--<input name="resultado" type="button" class="boton igual" value="=" onClick="calcular()" >-->
               <input name="calculo" type="button" class="boton igual" value="=" onClick="calcular()" > 
            </div>
              
           
    </form>             
               
           
            
            
                                        
            	
                               
             
            
           