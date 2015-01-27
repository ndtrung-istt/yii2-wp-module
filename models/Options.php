<?php

namespace istt\wp\models;

use Yii;

/**
 * This is the model class for table "{{%options}}".
 *
 * @property string $option_id
 * @property string $option_name
 * @property string $option_value
 * @property string $autoload
 */
class Options extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%options}}';
    }

    /**
     * @return \yii\db\Connection the database connection used by this AR class.
     */
    public static function getDb()
    {
        return Yii::$app->get('wpDb');
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['option_value'], 'required'],
            [['option_value'], 'string'],
            [['option_name'], 'string', 'max' => 64],
            [['autoload'], 'string', 'max' => 20],
            [['option_name'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'option_id' => Yii::t('wp', 'Option ID'),
            'option_name' => Yii::t('wp', 'Option Name'),
            'option_value' => Yii::t('wp', 'Option Value'),
            'autoload' => Yii::t('wp', 'Autoload'),
        ];
    }
}
