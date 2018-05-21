    var valor;
    var operacion;
        
    function agregarItem(item){
        edt = document.getElementById("pant");  
        valorviejo = edt.value;
        valornuevo = valorviejo + item;
        edt.value = valornuevo;
    }
    
    function resetear(ruta){
        document.location=ruta;
    }
    
    function reset() {
          edt = document.getElementById("pant");
          edt.value = "";
        
    }
    function borrarItem(){
        edt = document.getElementById("pant");
        valorviejo = edt.value;
        /* se puede sustituir el substring por slice pues realiza la misma funcion*/
        valornuevo = valorviejo.substring(0,valorviejo.length-1); 
        edt.value = valornuevo;
    }
            
        function calcular(){
           edt =document.getElementById("pant");
           valor = edt.value; 
           
           $.ajax({
                url:"server.php",
                type:"post",
                data:{"calculo":valor}
           }).done(function(resul){
                edt.value = resul;
              }); 
         
        }
           
        function trigonome(signo){
            edt =document.getElementById("pant");
            valor = edt.value;
            if(signo == "Sen"){
                //formulario.pantalla.value = Math.sin(num1);
                    $.ajax({
                        url:"server.php",
                        type:"post",
                        data:{"seno":valor}
                    }).done(function(resul){
                        edt.value = resul;
                    });
            }
            if(signo == "Cos"){
                //formulario.pantalla.value = Math.cos(num1);
                $.ajax({
                        url:"server.php",
                        type:"post",
                        data:{"coseno":valor}
                    }).done(function(resul){
                        edt.value = resul;
                    });
            }
            if(signo == "Tan"){
                //formulario.pantalla.value = Math.tan(num1);
                $.ajax({
                        url:"server.php",
                        type:"post",
                        data:{"tangente":valor}
                    }).done(function(resul){
                        edt.value = resul;
                    });
            }
            if(signo == "Contan"){
                //formulario.pantalla.value = Math.cot(num1);
                    $.ajax({
                        url:"server.php",
                        type:"post",
                        data:{"contangente":valor}
                    }).done(function(resul){
                        edt.value = resul;
                    });
            }
            if(signo == "Secos"){
                //formulario.pantalla.value = Math.sec(num1);
                $.ajax({
                        url:"server.php",
                        type:"post",
                        data:{"secante":valor}
                    }).done(function(resul){
                        edt.value = resul;
                    });
            }
            if(signo == "Cosen"){
                //formulario.pantalla.value = Math.cos(num1);
                $.ajax({
                        url:"server.php",
                        type:"post",
                        data:{"cosecante":valor}
                    }).done(function(resul){
                        edt.value = resul;
                    });
            }
            if(signo == "Bin"){
                //formulario.pantalla.value = valor.toString(8);
                //formulario.pantalla.value = num1.toString(2);
                $.ajax({
                        url:"server.php",
                        type:"post",
                        data:{"binario":valor}
                    }).done(function(resul){
                        edt.value = resul;
                    });
            }
            if(signo == "Hex"){
                //formulario.pantalla.value = num1.toString(16);
                $.ajax({
                        url:"server.php",
                        type:"post",
                        data:{"hexadecimal":valor}
                    }).done(function(resul){
                        edt.value = resul;
                    });
            }
        }