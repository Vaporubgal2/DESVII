<!DOCTYPE html>
<html>
    <head>
        <title>Laboratorio 4.3</title>
    </head>

    <body>
    <h1>Recibir numero mayor</h1>
    <?php
    if(!$_POST) {
    ?>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
        <?php
            for($i = 0; $i < 20; $i++) {
                ?>
                <input type="text" name="numero[]" value="" />
                <br>
                <?php
            }
        ?>
            <input type="submit" value="Enviar" />
        </form>
    <?php
    } else {
        foreach($_POST['numero'] as $numero) {
            $max = max($_POST['numero']);
        }
        echo "El numero mayor es ".$max;
    }
    ?>
    </form>
    </body>
</html>