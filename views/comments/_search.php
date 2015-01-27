<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model istt\wp\models\CommentsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="comments-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'comment_ID') ?>

    <?= $form->field($model, 'comment_post_ID') ?>

    <?= $form->field($model, 'comment_author') ?>

    <?= $form->field($model, 'comment_author_email') ?>

    <?= $form->field($model, 'comment_author_url') ?>

    <?php // echo $form->field($model, 'comment_author_IP') ?>

    <?php // echo $form->field($model, 'comment_date') ?>

    <?php // echo $form->field($model, 'comment_date_gmt') ?>

    <?php // echo $form->field($model, 'comment_content') ?>

    <?php // echo $form->field($model, 'comment_karma') ?>

    <?php // echo $form->field($model, 'comment_approved') ?>

    <?php // echo $form->field($model, 'comment_agent') ?>

    <?php // echo $form->field($model, 'comment_type') ?>

    <?php // echo $form->field($model, 'comment_parent') ?>

    <?php // echo $form->field($model, 'user_id') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
