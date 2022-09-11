<?php
$porcentaje = $_POST['porcentaje'];
if($_REQUEST['porcentaje'] > 80)
{
    echo "<img src=cara_verde.png>";    
    echo "<br/> Hay un buen desempeño en las ventas";
}else{
    if(($_REQUEST['porcentaje'] > 50) & ($_REQUEST['porcentaje'] < 79) )
    {
        echo "<img src=cara_amarilla.png>";    
        echo "<br/> Hay un desempeño medio en las ventas";
    }else{
        echo "<img src=cara_rojo.png>";    
        echo "<br/> Hay un desempeño bajo en las ventas";
    }
}


?>