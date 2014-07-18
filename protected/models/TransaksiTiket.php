<?php

/**
 * This is the model class for table "transaksi_tiket".
 *
 * The followings are the available columns in table 'transaksi_tiket':
 * @property integer $ID
 * @property integer $pembeli_id
 * @property integer $Kereta_id
 * @property integer $id_keb
 * @property integer $id_tuj
 * @property string $Tgl_Berangkat
 * @property integer $Jumlah
 * @property integer $Total
 */
class TransaksiTiket extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'transaksi_tiket';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pembeli_id','required'),
			array('pembeli_id, Kereta_id, id_keb, id_tuj, Jumlah, Total', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID, pembeli_id, Kereta_id, id_keb, id_tuj, Tgl_Berangkat, Jumlah, Total', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'pembeli'=>array(self::BELONGS_TO,'Pembeli','pembeli_id'),
			'kereta'=>array(self::BELONGS_TO,'Kereta','Kereta_id'),
			'kelas'=>array(self::BELONGS_TO,'Kelas','kelas_id'),
			'keberangkatan'=>array(self::BELONGS_TO,'StKb','id_keb'),
			'tujuan'=>array(self::BELONGS_TO,'StTuj','id_tuj'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID' => 'ID',
			'pembeli_id' => 'Pembeli',
			'kelas_id' => 'Kelas',
			'Kereta_id' => 'Kereta',
			'id_keb' => 'Id Keb',
			'id_tuj' => 'Id Tuj',
			'Tgl_Berangkat' => 'Tgl Berangkat',
			'Jumlah' => 'Jumlah',
			'Total' => 'Total',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('ID',$this->ID);
		$criteria->compare('pembeli_id',$this->pembeli_id);
		$criteria->compare('kelas_id',$this->kelas_id);
		$criteria->compare('Kereta_id',$this->Kereta_id);
		$criteria->compare('id_keb',$this->id_keb);
		$criteria->compare('id_tuj',$this->id_tuj);
		$criteria->compare('Tgl_Berangkat',$this->Tgl_Berangkat,true);
		$criteria->compare('Jumlah',$this->Jumlah);
		$criteria->compare('Total',$this->Total);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TransaksiTiket the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
