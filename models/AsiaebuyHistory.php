<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "asiaebuy_history".
 *
 * @property integer $id
 * @property string $note
 * @property string $remark
 * @property string $status
 * @property string $url
 * @property string $date_create
 * @property string $date_update
 * @property integer $menu_id
 */
class AsiaebuyHistory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'asiaebuy_history';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['note', 'remark', 'status','type_of_buying'], 'string'],
            [['date_create', 'date_update'], 'safe'],
            [['menu_id'], 'integer'],
            ['status', 'required', 'message' => 'Please choose a Status !'],
            ['note', 'required', 'message' => 'Please Fill In Note !'],
            [['url'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'note' => 'Note',
            'remark' => 'Remark',
            'status' => 'Status',
            'type_of_buying' => 'Type Of Buying',
            'url' => 'Url',
            'date_create' => 'Date Create',
            'date_update' => 'Date Update',
            'menu_id' => 'Menu ID',
        ];
    }
}
