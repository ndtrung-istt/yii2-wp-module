<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model istt\wp\models\Users */

$this->title = Yii::t('sakila', 'Update {modelClass}: ', [
    'modelClass' => 'Users',
]) . ' ' . $model->ID;
$this->params['breadcrumbs'][] = ['label' => Yii::t('sakila', 'Users'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID, 'url' => ['view', 'id' => $model->ID]];
$this->params['breadcrumbs'][] = Yii::t('sakila', 'Update');
?>
<div class="users-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
