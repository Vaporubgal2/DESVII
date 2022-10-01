<html lang="es">
<head>
    <title>Laboratorio 9.2</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>

<body>
    <h1>Consulta de noticias</h1>
    <form name="FormFiltro" method="post" action="lab92.php"></form>
    <br>
    Filtrar por: <SELECT NAME="campos">
        <OPTION value="texto" SELECTED> Descripcion 
        <OPTION value="titulo"> Titulo
        <OPTION value="categoria"> Categoria
</SELECT>
    con el valor
    <INPUT type="text" name="valor">
    <INPUT name="ConsultarFiltro" value= "Filtrar Datos" type="submit">
    <INPUT name="ConsultarTodos" value= "Ver todos" type="submit">
</form>

    <?php
       require_once("class/noticias.php");

       $obj_noticia = new noticia();
       $noticias = $obj_noticia->consultar_noticias();

       if(array_key_exists('ConsultarTodos', $_POST)){
        $obj_noticia = new noticia();
        $noticias_new = $obj_noticia->consultar_noticias();
        }

        if(array_key_exists('ConsultarTodos', $_POST)){
            $obj_noticia = new noticia();
            $noticias = $obj_noticia->consultar_noticias_filtro($_REQUEST['campos'],$_REQUEST['valor']);
        }

       $nfilas=count($noticias);

       if($nfilas>>0){
        print ("<TABLE>\n");
        print ("<TR>\n");
        print ("<TH>Titulo</TH>\n");
        print ("<TH>Texto</TH>\n");
        print ("<TH>Categoria</TH>\n");
        print ("<TH>Fecha</TH>\n");
        print ("<TH>Imagen</TH>\n");
        print ("</TR>\n");

        foreach ($noticias as $resultado){
            print ("<TR>\n");
            print ("<TD>" . $resultado['titulo'] . "</TD>\n");
            print ("<TD>" . $resultado['texto'] . "</TD>\n");
            print ("<TD>" . $resultado['categoria'] . "</TD>\n");
            print ("<TD>" . date("j/n/y",strtotime($resultado['fecha'])) . "</TD>\n");

            if($resultado['imagen'] != ""){
                print ("<TD><A TARGET = '_blank' HREF='img/" . $resultado['imagen'] . "'><IMG BORDER='0' SCR='img/1conotexto.gif'></A></TD>\n");
            }
            else{
                print ("<TD>&nbsp;</TD>\n");
            }
            print("</TR>\n");
        }
        print ("</TABLE>\n");
       }
       else{
        print ("No hay noticias disponibles");
       }
21
    ?>
</body>
</html>