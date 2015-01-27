<?php

namespace istt\wp\models;

use Yii;

/**
 * This is the model class for table "{{%terms}}".
 *
 * @property string $term_id
 * @property string $name
 * @property string $slug
 * @property integer $term_group
 */
class Terms extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%terms}}';
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
            [['term_group'], 'integer'],
            [['name', 'slug'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'term_id' => Yii::t('wp', 'Term ID'),
            'name' => Yii::t('wp', 'Name'),
            'slug' => Yii::t('wp', 'Slug'),
            'term_group' => Yii::t('wp', 'Term Group'),
        ];
    }
}
