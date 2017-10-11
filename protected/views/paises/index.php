<h1>Paises</h1>
<?php echo CHtml::link("Crear", array("crear")) ?>
<?php foreach ($paises as $pais): ?>
    <h2>
        <?php echo $pais->nombre ?>
        <small><?php echo $pais->estatus == 1 ? "Activo" : "Inactivo" ?></small>
        <?php echo CHtml::link("Actualizar", array("actualizar","id" =>$pais->id));?>|
        <?php echo CHtml::link("Eliminar", array("eliminar","id" =>$pais->id),array("confirm" =>"Seguro que vas a Eliminar"));?>
    </h2>
<?php endforeach; ?>

