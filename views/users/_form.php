<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model istt\wp\models\Users */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="users-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_login')->textInput(['maxlength' => 60]) ?>

    <?= $form->field($model, 'user_pass')->textInput(['maxlength' => 64]) ?>

    <?= $form->field($model, 'user_nicename')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'user_email')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'user_url')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'user_registered')->textInput() ?>

    <?= $form->field($model, 'user_activation_key')->textInput(['maxlength' => 60]) ?>

    <?= $form->field($model, 'user_status')->textInput() ?>

    <?= $form->field($model, 'display_name')->textInput(['maxlength' => 250]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('sakila', 'Create') : Yii::t('sakila', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
