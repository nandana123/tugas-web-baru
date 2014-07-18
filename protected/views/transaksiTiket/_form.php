<?php
/* @var $this TransaksiTiketController */
/* @var $model TransaksiTiket */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'transaksi-tiket-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php $Nama = CHtml::listData(Pembeli::model()->findAll(),'id','Nama'); ?>
		<?php echo $form->dropDownList($model,'pembeli_id',$Nama,array('style'=>'width:155px;')); ?>
		<?php echo $form->error($model,'pembeli_id'); ?>
	</div>
	
	<div class="row">
		<?php echo ('Pilih Kelas'.'<br>'); ?>
		<?php $Nama = CHtml::listData(Kelas::model()->findAll(),'id','Tipe'); ?>
		<?php echo $form->dropDownList($model,'Kereta_id',$Nama,array('style'=>'width:155px;')); ?>
		<?php echo $form->error($model,'Kereta_id'); ?>
	</div>

	<div class="row">
		<?php echo ('Pilih Kereta'.'<br>'); ?>
		<?php $Nama = CHtml::listData(Kereta::model()->findAll(),'id','Nama'); ?>
		<?php echo $form->dropDownList($model,'Kereta_id',$Nama,array('style'=>'width:155px;')); ?>
		<?php echo $form->error($model,'Kereta_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_keb'); ?>
		<?php $Nama = CHtml::listData(StKb::model()->findAll(),'ID','Nama_Stasiun'); ?>
		<?php echo $form->dropDownList($model,'id_keb',$Nama,array('style'=>'width:155px;')); ?>
		<?php echo $form->error($model,'id_keb'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_tuj'); ?>
		<?php $Nama = CHtml::listData(StTuj::model()->findAll(),'ID','Nama_Stasiun'); ?>
		<?php echo $form->dropDownList($model,'id_tuj',$Nama,array('style'=>'width:155px;')); ?>
		<?php echo $form->error($model,'id_tuj'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Tgl_Berangkat'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker',
		array(
			'model'=>$model,
			'attribute'=>'Tgl_Berangkat',
			'value'=>$model->Tgl_Berangkat,
			'options' => array(
					'dateFormat'=>'dd-mm-yy',
					'showOn'=>'button',
					'yearRange'=>'2011',
					'changeMonth'=>'true',
					'changeYear'=>'true',
					'constrainInput'=>'false',
					'duration'=>'fast',
					'showAnim'=>'slide'
					),
		'htmlOptions'=>array('size'=>20),
		));
		?>
		<?php echo $form->error($model,'Tgl_Berangkat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Jumlah'); ?>
		<?php echo $form->textField($model,'Jumlah'); ?>
		<?php echo $form->error($model,'Jumlah'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Total'); ?>
		<?php echo $form->textField($model,'Total'); ?>
		<?php echo $form->error($model,'Total'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->