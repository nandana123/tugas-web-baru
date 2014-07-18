<?php
/* @var $this StKbController */
/* @var $model StKb */

$this->breadcrumbs=array(
	'St Kbs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List StKb', 'url'=>array('index')),
	array('label'=>'Manage StKb', 'url'=>array('admin')),
);
?>

<h1>Create StKb</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>