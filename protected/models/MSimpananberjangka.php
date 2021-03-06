<?php

/**
 * This is the model class for table "m_simpananberjangka".
 *
 * The followings are the available columns in table 'm_simpananberjangka':
 * @property string $No_SertifikatSB
 * @property string $Kode_Cabang
 * @property string $No_RekeningSH
 * @property string $Kode_Jenis
 * @property string $Jml_Simpanan
 * @property integer $Jangka_Waktu
 * @property string $Suku_Bunga
 * @property string $Tgl_Mulai
 * @property string $Jatuh_Tempo_Awal
 * @property string $Jatuh_Tempo_Sekarang
 * @property string $Jml_Bunga
 * @property string $Biaya_Admin_Pendaftaran
 * @property integer $Status_Sertifikat
 * @property string $Tgl_Pencairan
 * @property string $Biaya_Admin_Pencairan
 * @property string $Denda
 * @property string $Created_By
 * @property string $Created_DateTime
 * @property string $Created_Location
 * @property string $Last_Update_By
 * @property string $Last_Update_DateTime
 * @property string $Last_Update_Location
 */
class MSimpananberjangka extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return MSimpananberjangka the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'm_simpananberjangka';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Kode_Cabang, Jml_Simpanan, Jangka_Waktu, Suku_Bunga, Tgl_Mulai, Jatuh_Tempo_Awal, Jatuh_Tempo_Sekarang, Status_Sertifikat, Created_By, Created_DateTime, Created_Location, Last_Update_By, Last_Update_DateTime, Last_Update_Location', 'required'),
			array('Jangka_Waktu, Status_Sertifikat', 'numerical', 'integerOnly'=>true),
			array('No_SertifikatSB, No_RekeningSH', 'length', 'max'=>13),
			array('Kode_Cabang, Kode_Jenis', 'length', 'max'=>2),
			array('Jml_Simpanan, Jml_Bunga, Biaya_Admin_Pendaftaran, Biaya_Admin_Pencairan, Denda', 'length', 'max'=>19),
			array('Suku_Bunga, Created_Location, Last_Update_Location', 'length', 'max'=>5),
			array('Created_By, Last_Update_By', 'length', 'max'=>30),
			array('Tgl_Pencairan', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('No_SertifikatSB, Kode_Cabang, No_RekeningSH, Kode_Jenis, Jml_Simpanan, Jangka_Waktu, Suku_Bunga, Tgl_Mulai, Jatuh_Tempo_Awal, Jatuh_Tempo_Sekarang, Jml_Bunga, Biaya_Admin_Pendaftaran, Status_Sertifikat, Tgl_Pencairan, Biaya_Admin_Pencairan, Denda, Created_By, Created_DateTime, Created_Location, Last_Update_By, Last_Update_DateTime, Last_Update_Location', 'safe', 'on'=>'search'),
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
			'MPinjamanMSimpananBerjangka'=>array(self::BELONGS_TO, 'MPinjaman', 'No_RekeningSH'),
			'MJenisMSimpananBerjangka'=>array(self::BELONGS_TO, 'MJenissimpananberjangka', 'Kode_Jenis'),
			'MSimpHarianMSimpBerjangka'=>array(self::BELONGS_TO, 'MSimpananharian', 'No_RekeningSH'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'No_SertifikatSB' => 'No Sertifikat Sb',
			'Kode_Cabang' => 'Kode Cabang',
			'No_RekeningSH' => 'No Rekening Sh',
			'Kode_Jenis' => 'Kode Jenis',
			'Jml_Simpanan' => 'Jml Simpanan',
			'Jangka_Waktu' => 'Jangka Waktu',
			'Suku_Bunga' => 'Suku Bunga',
			'Tgl_Mulai' => 'Tgl Mulai',
			'Jatuh_Tempo_Awal' => 'Jatuh Tempo Awal',
			'Jatuh_Tempo_Sekarang' => 'Jatuh Tempo Sekarang',
			'Jml_Bunga' => 'Jml Bunga',
			'Biaya_Admin_Pendaftaran' => 'Biaya Admin Pendaftaran',
			'Status_Sertifikat' => 'Status Sertifikat',
			'Tgl_Pencairan' => 'Tgl Pencairan',
			'Biaya_Admin_Pencairan' => 'Biaya Admin Pencairan',
			'Denda' => 'Denda',
			'Created_By' => 'Created By',
			'Created_DateTime' => 'Created Date Time',
			'Created_Location' => 'Created Location',
			'Last_Update_By' => 'Last Update By',
			'Last_Update_DateTime' => 'Last Update Date Time',
			'Last_Update_Location' => 'Last Update Location',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('No_SertifikatSB',$this->No_SertifikatSB,true);
		$criteria->compare('Kode_Cabang',$this->Kode_Cabang,true);
		$criteria->compare('No_RekeningSH',$this->No_RekeningSH,true);
		$criteria->compare('Kode_Jenis',$this->Kode_Jenis,true);
		$criteria->compare('Jml_Simpanan',$this->Jml_Simpanan,true);
		$criteria->compare('Jangka_Waktu',$this->Jangka_Waktu);
		$criteria->compare('Suku_Bunga',$this->Suku_Bunga,true);
		$criteria->compare('Tgl_Mulai',$this->Tgl_Mulai,true);
		$criteria->compare('Jatuh_Tempo_Awal',$this->Jatuh_Tempo_Awal,true);
		$criteria->compare('Jatuh_Tempo_Sekarang',$this->Jatuh_Tempo_Sekarang,true);
		$criteria->compare('Jml_Bunga',$this->Jml_Bunga,true);
		$criteria->compare('Biaya_Admin_Pendaftaran',$this->Biaya_Admin_Pendaftaran,true);
		$criteria->compare('Status_Sertifikat',$this->Status_Sertifikat);
		$criteria->compare('Tgl_Pencairan',$this->Tgl_Pencairan,true);
		$criteria->compare('Biaya_Admin_Pencairan',$this->Biaya_Admin_Pencairan,true);
		$criteria->compare('Denda',$this->Denda,true);
		$criteria->compare('Created_By',$this->Created_By,true);
		$criteria->compare('Created_DateTime',$this->Created_DateTime,true);
		$criteria->compare('Created_Location',$this->Created_Location,true);
		$criteria->compare('Last_Update_By',$this->Last_Update_By,true);
		$criteria->compare('Last_Update_DateTime',$this->Last_Update_DateTime,true);
		$criteria->compare('Last_Update_Location',$this->Last_Update_Location,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}