<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model istt\wp\models\Terms */

$this->title = Yii::t('sakila', 'Update {modelClass}: ', [
    'modelClass' => 'Terms',
]) . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('sakila', 'Terms'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->term_id]];
$this->params['breadcrumbs'][] = Yii::t('sakila', 'Update');
?>
<div class="terms-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
