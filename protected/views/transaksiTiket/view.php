<?php
/* @var $this TransaksiTiketController */
/* @var $model TransaksiTiket */

$this->breadcrumbs=array(
	'Transaksi Tikets'=>array('index'),
	$model->ID,
);

$this->menu=array(

);
?>

<h1>View TransaksiTiket #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'pembeli_id',
		'Kereta_id',
		'id_keb',
		'id_tuj',
		'Tgl_Berangkat',
		'Jumlah',
		'Total',
	),
)); ?>
