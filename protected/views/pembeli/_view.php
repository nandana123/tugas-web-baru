<?php
/* @var $this PembeliController */
/* @var $data Pembeli */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nama')); ?>:</b>
	<?php echo CHtml::encode($data->Nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Alamat')); ?>:</b>
	<?php echo CHtml::encode($data->Alamat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Telp')); ?>:</b>
	<?php echo CHtml::encode($data->Telp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Hp')); ?>:</b>
	<?php echo CHtml::encode($data->Hp); ?>
	<br />


</div>