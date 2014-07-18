<?php
/* @var $this TransaksiTiketController */
/* @var $data TransaksiTiket */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pembeli_id')); ?>:</b>
	<?php echo CHtml::encode($data->pembeli_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Kereta_id')); ?>:</b>
	<?php echo CHtml::encode($data->Kereta_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_keb')); ?>:</b>
	<?php echo CHtml::encode($data->id_keb); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tuj')); ?>:</b>
	<?php echo CHtml::encode($data->id_tuj); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Tgl_Berangkat')); ?>:</b>
	<?php echo CHtml::encode($data->Tgl_Berangkat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Jumlah')); ?>:</b>
	<?php echo CHtml::encode($data->Jumlah); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Total')); ?>:</b>
	<?php echo CHtml::encode($data->Total); ?>
	<br />

	*/ ?>

</div>