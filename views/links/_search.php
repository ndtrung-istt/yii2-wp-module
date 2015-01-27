<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model istt\wp\models\LinksSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="links-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'link_id') ?>

    <?= $form->field($model, 'link_url') ?>

    <?= $form->field($model, 'link_name') ?>

    <?= $form->field($model, 'link_image') ?>

    <?= $form->field($model, 'link_target') ?>

    <?php // echo $form->field($model, 'link_description') ?>

    <?php // echo $form->field($model, 'link_visible') ?>

    <?php // echo $form->field($model, 'link_owner') ?>

    <?php // echo $form->field($model, 'link_rating') ?>

    <?php // echo $form->field($model, 'link_updated') ?>

    <?php // echo $form->field($model, 'link_rel') ?>

    <?php // echo $form->field($model, 'link_notes') ?>

    <?php // echo $form->field($model, 'link_rss') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
