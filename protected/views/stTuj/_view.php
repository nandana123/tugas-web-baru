<?php
/* @var $this StTujController */
/* @var $data StTuj */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nama_Stasiun')); ?>:</b>
	<?php echo CHtml::encode($data->Nama_Stasiun); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Kota')); ?>:</b>
	<?php echo CHtml::encode($data->Kota); ?>
	<br />


</div>