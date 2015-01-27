<?php

namespace istt\wp\models;

use Yii;

/**
 * This is the model class for table "{{%term_relationships}}".
 *
 * @property string $object_id
 * @property string $term_taxonomy_id
 * @property integer $term_order
 */
class TermRelationships extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%term_relationships}}';
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
            [['object_id', 'term_taxonomy_id'], 'required'],
            [['object_id', 'term_taxonomy_id', 'term_order'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'object_id' => Yii::t('wp', 'Object ID'),
            'term_taxonomy_id' => Yii::t('wp', 'Term Taxonomy ID'),
            'term_order' => Yii::t('wp', 'Term Order'),
        ];
    }
}
