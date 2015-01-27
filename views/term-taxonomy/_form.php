<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model istt\wp\models\TermTaxonomy */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="term-taxonomy-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'term_id')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'taxonomy')->textInput(['maxlength' => 32]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'parent')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'count')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
