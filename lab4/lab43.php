<!DOCTYPE html>                 
<html>
    <head>
        <title>Laboratorio 4.3</title>
        <meta charset="utf-8">
    </head>

    <body>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
            <?php
                for($i = 0; $i < 20; $i++) {
                    ?>
                    <input type="text" name="numero" value="" />
                    <br>
            <?php
                }
            ?>
                <input type="submit" value="Enviar" />
        </form>
        <?php
        foreach($_POST['numero'] as $numero) {
            echo "<p>Numero recibido: $numero</p>"; 
        }
        ?>
        <?php
   
        
    
    ?>
    </body>
</html>


