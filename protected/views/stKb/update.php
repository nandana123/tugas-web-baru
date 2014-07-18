<?php
/* @var $this StKbController */
/* @var $model StKb */

$this->breadcrumbs=array(
	'St Kbs'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List StKb', 'url'=>array('index')),
	array('label'=>'Create StKb', 'url'=>array('create')),
	array('label'=>'View StKb', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage StKb', 'url'=>array('admin')),
);
?>

<h1>Update StKb <?php echo $model->ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>