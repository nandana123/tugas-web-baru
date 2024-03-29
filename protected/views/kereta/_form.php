<?php
/* @var $this KeretaController */
/* @var $model Kereta */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'kereta-form',
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
		<?php echo $form->textField($model,'Nama',array('size'=>35,'maxlength'=>35)); ?>
		<?php echo $form->error($model,'Nama'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Kelas_id'); ?>
		<?php echo $form->textField($model,'Kelas_id'); ?>
		<?php echo $form->error($model,'Kelas_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->