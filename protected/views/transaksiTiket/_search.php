<?php
/* @var $this TransaksiTiketController */
/* @var $model TransaksiTiket */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ID'); ?>
		<?php echo $form->textField($model,'ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pembeli_id'); ?>
		<?php echo $form->textField($model,'pembeli_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Kereta_id'); ?>
		<?php echo $form->textField($model,'Kereta_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_keb'); ?>
		<?php echo $form->textField($model,'id_keb'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_tuj'); ?>
		<?php echo $form->textField($model,'id_tuj'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Tgl_Berangkat'); ?>
		<?php echo $form->textField($model,'Tgl_Berangkat'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Jumlah'); ?>
		<?php echo $form->textField($model,'Jumlah'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Total'); ?>
		<?php echo $form->textField($model,'Total'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->