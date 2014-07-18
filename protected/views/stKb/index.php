<?php
/* @var $this StKbController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'St Kbs',
);

$this->menu=array(
	array('label'=>'Create StKb', 'url'=>array('create')),
	array('label'=>'Manage StKb', 'url'=>array('admin')),
);
?>

<h1>St Kbs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
