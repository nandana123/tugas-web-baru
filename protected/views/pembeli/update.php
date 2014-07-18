<?php
/* @var $this PembeliController */
/* @var $model Pembeli */

$this->breadcrumbs=array(
	'Pembelis'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Pembeli', 'url'=>array('index')),
	array('label'=>'Create Pembeli', 'url'=>array('create')),
	array('label'=>'View Pembeli', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage Pembeli', 'url'=>array('admin')),
);
?>

<h1>Update Pembeli <?php echo $model->ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>