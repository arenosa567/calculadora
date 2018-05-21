<?php
include "librerias/header.php";
?>
    <body>
        <header>
            <h1>Calculadora Científica</h1>
        </header>     
        <section>
            <header>
            <?php
                navegacion2();
            ?>
            </header> 
                <div id="contenido">
                <?php
                    include "librerias/formulario.php"
                ?>
                </div>    
            <footer>
                <?php
                    piecalculadora();
                ?>    
            </footer>     
        </section>
    </body>
        <script src="js/jquery-2.2.2.min.js"></script> 
        <script src="js/bootstrap.min.js"> </script>      
        <script src="js/operacioncalc.js"></script> 
</html>