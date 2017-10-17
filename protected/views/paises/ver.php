<h1>Ver detalles</h1>
<table class="table">
    <tr>
        <td><strong>Id</strong></td>
        <td><?php echo $pais->id?></td>
    </tr>
    <tr>
        <td><strong>Nombre</strong></td>
        <td><?php echo $pais->nombre?></td>
    </tr>
    <tr>
        <td><strong>Estatus</strong></td>
        <td><?php echo $pais->estatus == 1 ? "Activo" : "Inactivo" ?></td>
    </tr>
</table>