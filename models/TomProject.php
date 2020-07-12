<?php

namespace app\models;

use yii\db\ActiveRecord;
use app\models\TomTask;

class TomProject extends ActiveRecord
{
	public static function tableName(){
		return 'tom_project';
	}
	/*
	public function getTasks(){
		return $this->hasMany(TomTask::className(), ['id' => 'project_id']);
	}
	*/
}