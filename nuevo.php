<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>nuevo</title>
        <script src="js/script.js" language="Javascript"></script> 
    </head>
    <body>
        
        
        <header> 
          <p id='mensaje'> Soy un elemento párrafo en header</p> 

          <p id='nuevo_mensaje'>ESTO SE MODIFICA, PODRÍA NO HABER NADA TAMBIÉN</p> 
          
          <br>
            <input type='button' value='Modificar elemento' onclick='anadirelemento();'>
          <br>
          
          <p id='idobjeto'>voy a mostrar el objeto</p> 
          <br>
            <input type='button' value='Modificar objeto' onclick='fobjeto();'>
          <br>
          
        </header>
        
        <?php
        // put your code here
        echo "hola de nuevo, despues de header";
        ?>
        <input type="text" name="mostrar" id="mostrar" size='80'>
        <input type='button' value='Imprimir Arreglo' onclick='imprimirArreglo();'>
        
        
    </body>
</html>
