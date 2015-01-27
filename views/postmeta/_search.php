<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model istt\wp\models\PostmetaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="postmeta-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'meta_id') ?>

    <?= $form->field($model, 'post_id') ?>

    <?= $form->field($model, 'meta_key') ?>

    <?= $form->field($model, 'meta_value') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('sakila', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('sakila', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
