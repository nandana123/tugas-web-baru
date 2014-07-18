<?php
/* @var $this KeretaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Keretas',
);

$this->menu=array(
	array('label'=>'Create Kereta', 'url'=>array('create')),
	array('label'=>'Manage Kereta', 'url'=>array('admin')),
	array('label'=>'Relasi Kereta', 'url'=>array('relasi')),
);
?>

<h1>Keretas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
