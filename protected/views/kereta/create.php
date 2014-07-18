<?php
/* @var $this KeretaController */
/* @var $model Kereta */

$this->breadcrumbs=array(
	'Keretas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Kereta', 'url'=>array('index')),
	array('label'=>'Manage Kereta', 'url'=>array('admin')),
);
?>

<h1>Create Kereta</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>