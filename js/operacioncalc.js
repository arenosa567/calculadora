    var valor;
    var operacion;
    var punto;
    
    function getlastchar(){ //obtener el ultimo caracter 
        var len =formulario.pantalla.length;
        if(len){
            return formulario.pantalla.value[len -1];
        }else{
            return "";
        }
    }
   function agregarItem(item){ //agregar en la pantalla las teclas numericas y operaciones basicas
        formulario.pantalla.value +=item;
                
    }
    
    function NumText(valor){//solo letras y caracteres especificados
        var out = '';
       
        var filtro = '1234567890+-*/^r%.,';//Caracteres validos

        for (var i=0; i<valor.length; i++)
           if(filtro.indexOf(valor.charAt(i)) != -1)
             out += valor.charAt(i);
                 return out;
                   
        }

    function resetear(ruta){ //volver a la ruta, especificada en el parametro
        window.location=ruta;
        return ruta;
    }

    function reset() {
       formulario.pantalla.value = "";
               
    }
    function borrarItem(){ //eliminar uno a uno el caracter empezando desde el final
        valor = formulario.pantalla.value;
        valor = valor.substring(0,valor.length-1);
        formulario.pantalla.value = valor;
    }
    
    /*function haypunto(pantalla){ //no poner dos o mas puntos en la pantalla
        punto = false;
        for(i=0;i < pantalla.length; i++){ //recorrer la pantalla evaluando si hay punto en la pantalla
            if(pantalla.substring(i,i+1) == "."){
                punto = true;
                break; //cerrara el for
            }
        }
            return punto; //si no ecuentra el punto retornara el punto  
    }

    function escribirpunto(){
        
        if(formulario.pantalla.value.length == ""){
            formulario.pantalla.value ="0."; 
        }else{ //si la pantalla no esta vacia
            if(!haypunto(formulario.pantalla.value)){
                    
                    formulario.pantalla.value +=  ".";
              }          
        }
    }*/
            
    function calcular(){
        valor = formulario.pantalla.value;
        $.ajax({
            url:"server.php",
            type:"post",
            data:{"calculo":valor}
        }).done(function(resul){
            formulario.pantalla.value = resul;
        }); 
    }

    function trigonome(signo){
        valor =formulario.pantalla.value; 
        if(signo == "Sen"){
          
            $.ajax({
                url:"server.php",
                type:"post",
                data:{"seno":valor}
            }).done(function(resul){
                formulario.pantalla.value = resul;
            });
        }
        
        else if(signo == "Cos"){
          
            $.ajax({
                url:"server.php",
                type:"post",
                data:{"coseno":valor}
            }).done(function(resul){
                formulario.pantalla.value = resul;
            });
        }
        
        else if(signo == "Tan"){
            
            $.ajax({
                url:"server.php",
                type:"post",
                data:{"tangente":valor}
            }).done(function(resul){
                formulario.pantalla.value = resul;
            });
        }
        
        else if(signo == "Cotan"){
        
            $.ajax({
                url:"server.php",
                type:"post",
                data:{"contangente":valor}
            }).done(function(resul){
                formulario.pantalla.value = resul;
            });
        }
        
        else if(signo == "Secos"){
           
            $.ajax({
                url:"server.php",
                type:"post",
                data:{"secante":valor}
            }).done(function(resul){
                formulario.pantalla.value = resul;
            });
        }
        
        else if(signo == "Cosen"){
            
            $.ajax({
                url:"server.php",
                type:"post",
                data:{"cosecante":valor}
            }).done(function(resul){
                formulario.pantalla.value = resul;
            });
        }
        
        else if(signo == "Bin"){
            
            $.ajax({
                url:"server.php",
                type:"post",
                data:{"binario":valor}
            }).done(function(resul){
                formulario.pantalla.value = resul;
            });
        }
        
        else if(signo == "Hex"){
            
            $.ajax({
                url:"server.php",
                type:"post",
                data:{"hexadecimal":valor}
            }).done(function(resul){
                formulario.pantalla.value = resul;
            });
        }
    }
