<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model istt\wp\models\TermRelationships */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="term-relationships-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'object_id')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'term_taxonomy_id')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'term_order')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
