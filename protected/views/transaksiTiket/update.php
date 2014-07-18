<?php
/* @var $this TransaksiTiketController */
/* @var $model TransaksiTiket */

$this->breadcrumbs=array(
	'Transaksi Tikets'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(

);
?>

<h1>Update TransaksiTiket <?php echo $model->ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>