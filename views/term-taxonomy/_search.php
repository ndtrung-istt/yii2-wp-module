<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model istt\wp\models\TermTaxonomySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="term-taxonomy-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'term_taxonomy_id') ?>

    <?= $form->field($model, 'term_id') ?>

    <?= $form->field($model, 'taxonomy') ?>

    <?= $form->field($model, 'description') ?>

    <?= $form->field($model, 'parent') ?>

    <?php // echo $form->field($model, 'count') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
