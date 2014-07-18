<?php
/* @var $this StTujController */
/* @var $model StTuj */

$this->breadcrumbs=array(
	'St Tujs'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List StTuj', 'url'=>array('index')),
	array('label'=>'Create StTuj', 'url'=>array('create')),
	array('label'=>'Update StTuj', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete StTuj', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage StTuj', 'url'=>array('admin')),
);
?>

<h1>View StTuj #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'Nama_Stasiun',
		'Kota',
	),
)); ?>
