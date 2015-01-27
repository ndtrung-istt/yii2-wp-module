<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model istt\wp\models\Links */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="links-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'link_url')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'link_name')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'link_image')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'link_target')->textInput(['maxlength' => 25]) ?>

    <?= $form->field($model, 'link_description')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'link_visible')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'link_owner')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'link_rating')->textInput() ?>

    <?= $form->field($model, 'link_updated')->textInput() ?>

    <?= $form->field($model, 'link_rel')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'link_notes')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'link_rss')->textInput(['maxlength' => 255]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('sakila', 'Create') : Yii::t('sakila', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
