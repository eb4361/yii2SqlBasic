<?php

namespace app\models;

use yii\db\ActiveRecord;
use app\models\TomTask;

class TomReport extends ActiveRecord
{
	public static function tableName(){
		return 'tom_report';
	}
	
	/*
	public function getTasks(){
		return $this->hasMany(TomTask::className(), ['id' => 'task_id']);
	}
	*/
}