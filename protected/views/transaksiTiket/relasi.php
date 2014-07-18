<?php
/* @var $this TransaksiTiketController */
/* @var $model TransaksiTiket */

$this->breadcrumbs=array(
	'Transaksi Tikets'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List TransaksiTiket', 'url'=>array('index')),
	array('label'=>'Create TransaksiTiket', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#transaksi-tiket-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Transaksi Tikets</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'transaksi-tiket-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'ID',
		array(
		'name'=>'pembeli_id',
		'type'=>'raw',
		'header'=>'Nama Pembeli',
		'value'=>'CHtml::encode(
			$data->pembeli->Nama)',
			'htmlOptions'=>array('width'=>''),
		),
		array(
		'name'=>'Kereta_id',
		'type'=>'raw',
		'header'=>'Nama Kereta',
		'value'=>'CHtml::encode(
			$data->kereta->Nama)',
			'htmlOptions'=>array('width'=>''),
		),
		array(
		'name'=>'kelas_id',
		'type'=>'raw',
		'header'=>'Kelas',
		'value'=>'CHtml::encode(
			$data->kelas->Tipe)',
			'htmlOptions'=>array('width'=>''),
		),
		array(
		'name'=>'id_keb',
		'type'=>'raw',
		'header'=>'Dari Stasiun',
		'value'=>'CHtml::encode(
			$data->keberangkatan->Nama_Stasiun)',
			'htmlOptions'=>array('width'=>''),
		),
		array(
		'name'=>'id_keb',
		'type'=>'raw',
		'header'=>'Kota',
		'value'=>'CHtml::encode(
			$data->keberangkatan->Kota)',
			'htmlOptions'=>array('width'=>''),
		),
		array(
		'name'=>'id_tuj',
		'type'=>'raw',
		'header'=>'Menuju Stasiun',
		'value'=>'CHtml::encode(
			$data->tujuan->Nama_Stasiun)',
			'htmlOptions'=>array('width'=>''),
		),
		array(
		'name'=>'id_keb',
		'type'=>'raw',
		'header'=>'Kota',
		'value'=>'CHtml::encode(
			$data->tujuan->Kota)',
			'htmlOptions'=>array('width'=>''),
		),
		'Tgl_Berangkat',
		array(
		'name'=>'kelas_id',
		'type'=>'raw',
		'header'=>'Harga',
		'value'=>'CHtml::encode(
			$data->kelas->Harga)',
			'htmlOptions'=>array('width'=>''),
		),
		'Jumlah',
		'Total',
	),
)); ?>
