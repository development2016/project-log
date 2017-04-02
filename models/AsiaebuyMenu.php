<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "asiaebuy_menu".
 *
 * @property integer $id
 * @property string $menu
 * @property string $image
 * @property string $type_of_buying
 * @property string $akses
 * @property string $date_create
 * @property string $date_update
 */
class AsiaebuyMenu extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'asiaebuy_menu';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['akses'], 'string'],
            [['date_create', 'date_update'], 'safe'],
            ['akses', 'required', 'message' => 'Please Choose Who Will Access That Menu !'],
            ['menu', 'required', 'message' => 'Please Fill In Menu Name !'],
            [['menu'], 'string', 'max' => 255],
            [['count'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'menu' => 'Menu',
            'akses' => 'Akses',
            'date_create' => 'Date Create',
            'date_update' => 'Date Update',
            'count' => 'Problem ( Total )'
        ];
    }
}
