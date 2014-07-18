<?php
/* @var $this StKbController */
/* @var $model StKb */

$this->breadcrumbs=array(
	'St Kbs'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List StKb', 'url'=>array('index')),
	array('label'=>'Create StKb', 'url'=>array('create')),
	array('label'=>'Update StKb', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete StKb', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage StKb', 'url'=>array('admin')),
);
?>

<h1>View StKb #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'Nama_Stasiun',
		'Kota',
	),
)); ?>
