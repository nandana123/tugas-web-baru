<?php
/* @var $this KeretaController */
/* @var $model Kereta */

$this->breadcrumbs=array(
	'Keretas'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Kereta', 'url'=>array('index')),
	array('label'=>'Create Kereta', 'url'=>array('create')),
	array('label'=>'View Kereta', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage Kereta', 'url'=>array('admin')),
);
?>

<h1>Update Kereta <?php echo $model->ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>