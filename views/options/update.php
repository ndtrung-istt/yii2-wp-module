<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model istt\wp\models\Options */

$this->title = Yii::t('sakila', 'Update {modelClass}: ', [
    'modelClass' => 'Options',
]) . ' ' . $model->option_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('sakila', 'Options'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->option_id, 'url' => ['view', 'id' => $model->option_id]];
$this->params['breadcrumbs'][] = Yii::t('sakila', 'Update');
?>
<div class="options-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
