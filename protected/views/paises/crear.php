<h1>Crear Paises</h1>
<?php $form = $this->beginWidget("CActiveForm"); ?>
<b>Nombre</b>
<?php echo $form->textField($objPais, "nombre"); ?>
<?php echo $form->error($objPais, "nombre"); ?>
<br>
<b>Estatus</b>
<?php echo $form->textField($objPais, "estatus"); ?>
<?php echo $form->error($objPais, "estatus"); ?>
<br>
<?php echo CHtml::submitButton("Crear") ?>
<?php $this->endWidget("CActiveForm"); ?>