<?php
/* @var $this StTujController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'St Tujs',
);

$this->menu=array(
	array('label'=>'Create StTuj', 'url'=>array('create')),
	array('label'=>'Manage StTuj', 'url'=>array('admin')),
);
?>

<h1>St Tujs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
