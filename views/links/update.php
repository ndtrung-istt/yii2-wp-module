<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model istt\wp\models\Links */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Links',
]) . ' ' . $model->link_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Links'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->link_id, 'url' => ['view', 'id' => $model->link_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="links-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
