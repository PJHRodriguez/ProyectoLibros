<?php
    // Incluir el archivo de conexión a la base de datos
    include("../bd.php");

    // Definir la consulta SQL
    $query = "SELECT * FROM usuarios WHERE estado = 'usuario no registrado'";

    // Ejecutar la consulta SQL
    $resultado = pg_query($conexion, $query);

    // Verificar si la consulta fue exitosa
    if (!$resultado) {
        echo "Error al ejecutar la consulta.";
        exit;
    }
?>

<?php include("./templates/header.php"); ?>

<div class="overflow-x-auto mx-auto max-w-5xl rounded-lg">
    <table class="w-full bg-white shadow-md ">
        <thead>
            <tr class="bg-gray-900 text-white">
                <th class="px-4 py-3 text-left">Nombre</th>
                <th class="px-4 py-3 text-left">Correo</th>
                <th class="px-4 py-3 text-left">Código Estudiante</th>
                <th class="px-4 py-3 text-left">Teléfono</th>
                <th class="px-4 py-3 text-left">Acción</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Iterar sobre los resultados de la consulta
            while ($fila = pg_fetch_assoc($resultado)) {
            ?>
                <tr class="hover:bg-gray-100 text-black">
                    <td class="px-4 py-3 border-b"><?php echo $fila['nombre_completo']; ?></td>
                    <td class="px-4 py-3 border-b"><?php echo $fila['correo']; ?></td>
                    <td class="px-4 py-3 border-b"><?php echo $fila['codigo_estudiante']; ?></td>
                    <td class="px-4 py-3 border-b"><?php echo $fila['telefono']; ?></td>
                    <td class="px-4 py-3 border-b">
                        <a href="validaciones.php?txtID=<?php echo $fila['id']; ?>"class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Ver más</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<?php include("./templates/footer.php"); ?>
