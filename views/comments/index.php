<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel istt\wp\models\CommentsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('sakila', 'Comments');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="comments-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('sakila', 'Create {modelClass}', [
    'modelClass' => 'Comments',
]), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'comment_ID',
            'comment_post_ID',
            'comment_author:ntext',
            'comment_author_email:email',
            'comment_author_url:url',
            // 'comment_author_IP',
            // 'comment_date',
            // 'comment_date_gmt',
            // 'comment_content:ntext',
            // 'comment_karma',
            // 'comment_approved',
            // 'comment_agent',
            // 'comment_type',
            // 'comment_parent',
            // 'user_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
