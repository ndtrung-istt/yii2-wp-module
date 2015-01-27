<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model istt\wp\models\Comments */

$this->title = $model->comment_ID;
$this->params['breadcrumbs'][] = ['label' => Yii::t('sakila', 'Comments'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="comments-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('sakila', 'Update'), ['update', 'id' => $model->comment_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('sakila', 'Delete'), ['delete', 'id' => $model->comment_ID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('sakila', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'comment_ID',
            'comment_post_ID',
            'comment_author:ntext',
            'comment_author_email:email',
            'comment_author_url:url',
            'comment_author_IP',
            'comment_date',
            'comment_date_gmt',
            'comment_content:ntext',
            'comment_karma',
            'comment_approved',
            'comment_agent',
            'comment_type',
            'comment_parent',
            'user_id',
        ],
    ]) ?>

</div>
