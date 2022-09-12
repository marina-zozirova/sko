<?php

namespace app\models;

use yii\db\ActiveRecord;

class Dispersion extends ActiveRecord {
    public function rules(){
        return [
            [['time', 'amount'], 'required'],
            [['time'], 'integer'],
        ];
    }
   
}