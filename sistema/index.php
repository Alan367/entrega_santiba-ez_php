
<body>
    <?php
    include("./header.php");
    ?>
    <section class="carga">
        <div class="carga-contenedor">
            <h3>cargar receta</h3>
            <form class="carga-form" action="cargar_receta.php" method="POST">
                <label for="nombre">nombre</label>
                <input class="imputs" type="text" name="nombre">
                <label for="imagen"> insertar imagen</label>
                <input class="imputs" type="text" name="imagen">
                <label for="receta">receta</label>
                <textarea class="imputs" name="receta" id="" cols="30" rows="10"></textarea>
                <input class="boton" type="submit" value="carga de receta">
            </form>
            <?php
            if (isset($_GET["ok"])) {
                echo '<h3 class="ok" >su receta ha sido cargada con exito!</h3>';
            }
            ?>
        </div>
    </section>
    
</body>

</html>