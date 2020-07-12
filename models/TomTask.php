<?php

namespace app\models;

use yii\db\ActiveRecord;
use app\models\TomProject;
use app\models\TomReport;

class TomTask extends ActiveRecord
{
	public static function tableName(){
		return 'tom_task';
	}
	/*
	public function getProjects(){
		return $this->hasMany(TomProject::className(), ['project_id' => 'id']);
	}
	
	public function getReports(){
		return $this->hasMany(TomReport::className(), ['id' => 'task_id']);
	}*/
	
}