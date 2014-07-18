<?php
/* @var $this PembeliController */
/* @var $model Pembeli */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pembeli-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Nama'); ?>
		<?php echo $form->textField($model,'Nama',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'Nama'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Alamat'); ?>
		<?php echo $form->textField($model,'Alamat',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'Alamat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Telp'); ?>
		<?php echo $form->textField($model,'Telp',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'Telp'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Hp'); ?>
		<?php echo $form->textField($model,'Hp',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'Hp'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->