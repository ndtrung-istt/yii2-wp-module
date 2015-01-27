<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model istt\wp\models\Posts */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="posts-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'post_author')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'post_date')->textInput() ?>

    <?= $form->field($model, 'post_date_gmt')->textInput() ?>

    <?= $form->field($model, 'post_content')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'post_title')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'post_excerpt')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'post_status')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'comment_status')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'ping_status')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'post_password')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'post_name')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'to_ping')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'pinged')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'post_modified')->textInput() ?>

    <?= $form->field($model, 'post_modified_gmt')->textInput() ?>

    <?= $form->field($model, 'post_content_filtered')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'post_parent')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'guid')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'menu_order')->textInput() ?>

    <?= $form->field($model, 'post_type')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'post_mime_type')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'comment_count')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('sakila', 'Create') : Yii::t('sakila', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
