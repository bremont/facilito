<h1>Paises</h1>
<?php echo CHtml::link("Crear", array("crear")) ?>
<?php foreach ($paises as $pais): ?>
    <h2>
        <?php echo $pais->nombre ?>
        <a href="<?php echo $this->createUrl("activar", array("id" => $pais->id))?>">
            <small><?php echo $pais->estatus == 1 ? "Activo" : "Inactivo" ?></small>
        </a>

    </h2>
    <?php echo CHtml::link("Actualizar", array("actualizar", "id" => $pais->id)); ?>|
    <?php echo CHtml::link("Eliminar", array("eliminar", "id" => $pais->id), array("confirm" => "Seguro que vas a Eliminar")); ?>
    <?php echo CHtml::link("Ver", array("ver", "id" => $pais->id)); ?>
    <hr>
<?php endforeach; ?>

