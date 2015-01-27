<?php

namespace istt\wp\models;

use Yii;

/**
 * This is the model class for table "{{%posts}}".
 *
 * @property string $ID
 * @property string $post_author
 * @property string $post_date
 * @property string $post_date_gmt
 * @property string $post_content
 * @property string $post_title
 * @property string $post_excerpt
 * @property string $post_status
 * @property string $comment_status
 * @property string $ping_status
 * @property string $post_password
 * @property string $post_name
 * @property string $to_ping
 * @property string $pinged
 * @property string $post_modified
 * @property string $post_modified_gmt
 * @property string $post_content_filtered
 * @property string $post_parent
 * @property string $guid
 * @property integer $menu_order
 * @property string $post_type
 * @property string $post_mime_type
 * @property integer $comment_count
 */
class Posts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%posts}}';
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
            [['post_author', 'post_parent', 'menu_order', 'comment_count'], 'integer'],
            [['post_date', 'post_date_gmt', 'post_modified', 'post_modified_gmt'], 'safe'],
            [['post_content', 'post_title', 'post_excerpt', 'to_ping', 'pinged', 'post_content_filtered'], 'required'],
            [['post_content', 'post_title', 'post_excerpt', 'to_ping', 'pinged', 'post_content_filtered'], 'string'],
            [['post_status', 'comment_status', 'ping_status', 'post_password', 'post_type'], 'string', 'max' => 20],
            [['post_name'], 'string', 'max' => 200],
            [['guid'], 'string', 'max' => 255],
            [['post_mime_type'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => Yii::t('wp', 'ID'),
            'post_author' => Yii::t('wp', 'Post Author'),
            'post_date' => Yii::t('wp', 'Post Date'),
            'post_date_gmt' => Yii::t('wp', 'Post Date Gmt'),
            'post_content' => Yii::t('wp', 'Post Content'),
            'post_title' => Yii::t('wp', 'Post Title'),
            'post_excerpt' => Yii::t('wp', 'Post Excerpt'),
            'post_status' => Yii::t('wp', 'Post Status'),
            'comment_status' => Yii::t('wp', 'Comment Status'),
            'ping_status' => Yii::t('wp', 'Ping Status'),
            'post_password' => Yii::t('wp', 'Post Password'),
            'post_name' => Yii::t('wp', 'Post Name'),
            'to_ping' => Yii::t('wp', 'To Ping'),
            'pinged' => Yii::t('wp', 'Pinged'),
            'post_modified' => Yii::t('wp', 'Post Modified'),
            'post_modified_gmt' => Yii::t('wp', 'Post Modified Gmt'),
            'post_content_filtered' => Yii::t('wp', 'Post Content Filtered'),
            'post_parent' => Yii::t('wp', 'Post Parent'),
            'guid' => Yii::t('wp', 'Guid'),
            'menu_order' => Yii::t('wp', 'Menu Order'),
            'post_type' => Yii::t('wp', 'Post Type'),
            'post_mime_type' => Yii::t('wp', 'Post Mime Type'),
            'comment_count' => Yii::t('wp', 'Comment Count'),
        ];
    }
}
