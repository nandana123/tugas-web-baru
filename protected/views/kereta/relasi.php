<?php
/* @var $this KeretaController */
/* @var $model Kereta */

$this->breadcrumbs=array(
	'Keretas'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Kereta', 'url'=>array('index')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#kereta-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Relasi Kereta</h1>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'kereta-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'ID',
		'Nama',
		array(
		'name'=>'Kelas_id',
		'type'=>'raw',
		'header'=>'Kelas',
		'value'=>'CHtml::encode(
			$data->kelas->Tipe)',
			'htmlOptions'=>array('width'=>''),
		),
		array(
		'name'=>'Kelas_id',
		'type'=>'raw',
		'header'=>'Harga',
		'value'=>'CHtml::encode(
			$data->kelas->Harga)',
			'htmlOptions'=>array('width'=>''),
		),
	),
)); ?>
