<?php
/* @var $this TransaksiTiketController */
/* @var $model TransaksiTiket */

$this->breadcrumbs=array(
	'Transaksi Tikets'=>array('index'),
	'Create',
);

$this->menu=array(
);
?>

<h1>Pengecekan Transaksi Tiket</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>