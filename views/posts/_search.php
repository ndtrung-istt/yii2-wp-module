<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model istt\wp\models\PostsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="posts-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'post_author') ?>

    <?= $form->field($model, 'post_date') ?>

    <?= $form->field($model, 'post_date_gmt') ?>

    <?= $form->field($model, 'post_content') ?>

    <?php // echo $form->field($model, 'post_title') ?>

    <?php // echo $form->field($model, 'post_excerpt') ?>

    <?php // echo $form->field($model, 'post_status') ?>

    <?php // echo $form->field($model, 'comment_status') ?>

    <?php // echo $form->field($model, 'ping_status') ?>

    <?php // echo $form->field($model, 'post_password') ?>

    <?php // echo $form->field($model, 'post_name') ?>

    <?php // echo $form->field($model, 'to_ping') ?>

    <?php // echo $form->field($model, 'pinged') ?>

    <?php // echo $form->field($model, 'post_modified') ?>

    <?php // echo $form->field($model, 'post_modified_gmt') ?>

    <?php // echo $form->field($model, 'post_content_filtered') ?>

    <?php // echo $form->field($model, 'post_parent') ?>

    <?php // echo $form->field($model, 'guid') ?>

    <?php // echo $form->field($model, 'menu_order') ?>

    <?php // echo $form->field($model, 'post_type') ?>

    <?php // echo $form->field($model, 'post_mime_type') ?>

    <?php // echo $form->field($model, 'comment_count') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
