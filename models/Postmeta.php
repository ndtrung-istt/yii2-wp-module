<?php

namespace istt\wp\models;

use Yii;

/**
 * This is the model class for table "{{%postmeta}}".
 *
 * @property string $meta_id
 * @property string $post_id
 * @property string $meta_key
 * @property string $meta_value
 */
class Postmeta extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%postmeta}}';
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
            [['post_id'], 'integer'],
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
            'meta_id' => Yii::t('wp', 'Meta ID'),
            'post_id' => Yii::t('wp', 'Post ID'),
            'meta_key' => Yii::t('wp', 'Meta Key'),
            'meta_value' => Yii::t('wp', 'Meta Value'),
        ];
    }
}
