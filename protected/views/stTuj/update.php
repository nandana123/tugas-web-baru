<?php
/* @var $this StTujController */
/* @var $model StTuj */

$this->breadcrumbs=array(
	'St Tujs'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List StTuj', 'url'=>array('index')),
	array('label'=>'Create StTuj', 'url'=>array('create')),
	array('label'=>'View StTuj', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage StTuj', 'url'=>array('admin')),
);
?>

<h1>Update StTuj <?php echo $model->ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>