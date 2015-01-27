<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model istt\wp\models\Comments */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="comments-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'comment_post_ID')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'comment_author')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'comment_author_email')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'comment_author_url')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'comment_author_IP')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'comment_date')->textInput() ?>

    <?= $form->field($model, 'comment_date_gmt')->textInput() ?>

    <?= $form->field($model, 'comment_content')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'comment_karma')->textInput() ?>

    <?= $form->field($model, 'comment_approved')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'comment_agent')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'comment_type')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'comment_parent')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'user_id')->textInput(['maxlength' => 20]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
