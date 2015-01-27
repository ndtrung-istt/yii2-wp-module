<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model istt\wp\models\Options */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="options-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'option_name')->textInput(['maxlength' => 64]) ?>

    <?= $form->field($model, 'option_value')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'autoload')->textInput(['maxlength' => 20]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('sakila', 'Create') : Yii::t('sakila', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
