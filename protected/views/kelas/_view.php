<?php
/* @var $this KelasController */
/* @var $data Kelas */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Tipe')); ?>:</b>
	<?php echo CHtml::encode($data->Tipe); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Harga')); ?>:</b>
	<?php echo CHtml::encode($data->Harga); ?>
	<br />


</div>