<?php
/* @var $this StKbController */
/* @var $model StKb */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'st-kb-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Nama_Stasiun'); ?>
		<?php echo $form->textField($model,'Nama_Stasiun',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'Nama_Stasiun'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Kota'); ?>
		<?php echo $form->textField($model,'Kota',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'Kota'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->