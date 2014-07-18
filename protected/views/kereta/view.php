<?php
/* @var $this KeretaController */
/* @var $model Kereta */

$this->breadcrumbs=array(
	'Keretas'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List Kereta', 'url'=>array('index')),
	array('label'=>'Create Kereta', 'url'=>array('create')),
	array('label'=>'Update Kereta', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete Kereta', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Kereta', 'url'=>array('admin')),
);
?>

<h1>View Kereta #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'Nama',
		'Kelas_id',
	),
)); ?>
