<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script language="javascript">
		alert('Mi primer alerta en Script');
	</script>
    </head>
    <body>
        <?php
        // put your code here
        echo "javascript esta en head";
        echo "<br>";
        echo "<a href=\"nuevo.php\">nuevo</a>";
        
        //asi funciona tambien
        echo "<br>";
        echo "<a href=".'nuevo.php'.">nuevo</a>";
        
        echo "<br>";
        //asi no funciona
        //echo "<a href='".nuevo.php."'>nuevo</a>";
        ?>
    </body>
</html>
