<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model istt\wp\models\Posts */

$this->title = $model->ID;
$this->params['breadcrumbs'][] = ['label' => Yii::t('sakila', 'Posts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="posts-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('sakila', 'Update'), ['update', 'id' => $model->ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('sakila', 'Delete'), ['delete', 'id' => $model->ID], [
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
            'ID',
            'post_author',
            'post_date',
            'post_date_gmt',
            'post_content:ntext',
            'post_title:ntext',
            'post_excerpt:ntext',
            'post_status',
            'comment_status',
            'ping_status',
            'post_password',
            'post_name',
            'to_ping:ntext',
            'pinged:ntext',
            'post_modified',
            'post_modified_gmt',
            'post_content_filtered:ntext',
            'post_parent',
            'guid',
            'menu_order',
            'post_type',
            'post_mime_type',
            'comment_count',
        ],
    ]) ?>

</div>
