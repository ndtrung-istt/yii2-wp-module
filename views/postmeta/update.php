<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model istt\wp\models\Postmeta */

$this->title = Yii::t('sakila', 'Update {modelClass}: ', [
    'modelClass' => 'Postmeta',
]) . ' ' . $model->meta_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('sakila', 'Postmetas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->meta_id, 'url' => ['view', 'id' => $model->meta_id]];
$this->params['breadcrumbs'][] = Yii::t('sakila', 'Update');
?>
<div class="postmeta-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
