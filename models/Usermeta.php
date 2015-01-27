<?php

namespace istt\wp\models;

use Yii;

/**
 * This is the model class for table "{{%usermeta}}".
 *
 * @property string $umeta_id
 * @property string $user_id
 * @property string $meta_key
 * @property string $meta_value
 */
class Usermeta extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%usermeta}}';
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
            [['user_id'], 'integer'],
            [['meta_value'], 'string'],
            [['meta_key'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'umeta_id' => Yii::t('wp', 'Umeta ID'),
            'user_id' => Yii::t('wp', 'User ID'),
            'meta_key' => Yii::t('wp', 'Meta Key'),
            'meta_value' => Yii::t('wp', 'Meta Value'),
        ];
    }
}
