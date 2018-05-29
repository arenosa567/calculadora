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
        }).success(function(resul){
            formulario.pantalla.value = resul;
        }); 
    }

    function trigonome(signo){
        valor =formulario.pantalla.value; 
        switch(signo){
            case "Sen":
                $.ajax({
                    url:"server.php",
                    type:"post",
                    data:{"seno":valor}
                }).success(function(resul){
                    formulario.pantalla.value = resul;
                });
                break;
            case "Cos":
                $.ajax({
                    url:"server.php",
                    type:"post",
                    data:{"coseno":valor}
                }).success(function(resul){
                    formulario.pantalla.value = resul;
                });
                break;
            case "Tan":
                $.ajax({
                    url:"server.php",
                    type:"post",
                    data:{"tangente":valor}
                }).success(function(resul){
                    formulario.pantalla.value = resul;
                });
                break;
            case "Cotan":
                $.ajax({
                    url:"server.php",
                    type:"post",
                    data:{"contagente":valor}
                }).success(function(resul){
                    formulario.pantalla.value = resul;
                });
                break;
            case "Secos":
                $.ajax({
                    url:"server.php",
                    type:"post",
                    data:{"secante":valor}
                }).success(function(resul){
                    formulario.pantalla.value = resul;
                });
                break;
            case "Cosen":
                $.ajax({
                    url:"server.php",
                    type:"post",
                    data:{"cosecante":valor}
                }).success(function(resul){
                    formulario.pantalla.value = resul;
                });
                break;
            case "Bin":
                $.ajax({
                    url:"server.php",
                    type:"post",
                    data:{"binario":valor}
                }).success(function(resul){
                    formulario.pantalla.value = resul;
                });
                break;
            case "Hex":
                $.ajax({
                    url:"server.php",
                    type:"post",
                    data:{"hexadecimal":valor}
                }).success(function(resul){
                    formulario.pantalla.value = resul;
                });
                break;
        }
        
    }
