<?php
/* @var $this StTujController */
/* @var $model StTuj */

$this->breadcrumbs=array(
	'St Tujs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List StTuj', 'url'=>array('index')),
	array('label'=>'Manage StTuj', 'url'=>array('admin')),
);
?>

<h1>Create StTuj</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>