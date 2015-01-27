<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model istt\wp\models\Posts */
?>
<div class="posts-view">

    <h1><?= Html::a($model->post_title, ['view', 'id' => $model->ID]) ?></h1>

    <?= $model->post_content ?>

    <?php /*
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
    ]) */ ?>

</div>
