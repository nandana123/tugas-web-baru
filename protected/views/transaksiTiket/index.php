<?php
/* @var $this TransaksiTiketController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Transaksi Tikets',
);

$this->menu=array(
	array('label'=>'Create TransaksiTiket', 'url'=>array('create')),
	array('label'=>'Manage TransaksiTiket', 'url'=>array('admin')),
	array('label'=>'Relasi TransaksiTiket', 'url'=>array('relasi')),
);
?>

<h1>Transaksi Tiket</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
