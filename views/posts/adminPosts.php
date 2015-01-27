<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel istt\wp\models\PostsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('wp', 'Posts');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="posts-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create {modelClass}', [
    'modelClass' => 'Posts',
]), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//             'ID',
//             'post_author',
//             'post_date',
//             'post_date_gmt',
            'post_title:ntext',
            'post_content:html',
            // 'post_excerpt:ntext',
            'post_status',
            // 'comment_status',
            // 'ping_status',
            // 'post_password',
            // 'post_name',
            // 'to_ping:ntext',
            // 'pinged:ntext',
            'post_modified',
            // 'post_modified_gmt',
            // 'post_content_filtered:ntext',
            // 'post_parent',
            // 'guid',
            // 'menu_order',
            // 'post_type',
            // 'post_mime_type',
            // 'comment_count',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
