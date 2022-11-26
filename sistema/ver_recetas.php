
<body>
<?php
    include("./header.php");
    ?>
    <section class="ver_recetas">
        <?php
        include("./conexion.php");
        $consulta_db = mysqli_query ($conexion_db, "SELECT * FROM recetas");
        while($mostrar_datos = mysqli_fetch_assoc ($consulta_db)){
        ?>
        <div class="caja-receta">
            <h2> <?php echo $mostrar_datos['nombre'];?></h2>
            <img class="foto" src="./imagenes/<?php echo $mostrar_datos['imagen'];?>" alt="">
            <p><?php echo $mostrar_datos['Receta'];?></p>
            <a class="boton2" href="./eliminar_receta.php?id=<?php echo $mostrar_datos['id']?>">elmiminar receta</a>
        </div>
        <?php }
        ?>
    </section>
    <section class="comentarios_contenedor" >
        <h1>Caja de comentarios</h1>
        <form class="carga-form" action="enviar_comentario.php" method="POST">
            <input type="text" name="nombre" placeholder="insertar nombre">
            <textarea name="comentario" id="" cols="30" rows="10"></textarea>
            <input class="boton" type="submit" value="enviar">
        </form>

        <div>
        <?php
        $archivo= fopen('registro.txt', 'r');
        echo '<div class="caja_comentarios">'. fread($archivo, 1000,). "<div>";
        fclose($archivo);
        ?>
        </div>
    </section>
</body>
</html>