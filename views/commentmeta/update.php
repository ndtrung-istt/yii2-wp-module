<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model istt\wp\models\Commentmeta */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Commentmeta',
]) . ' ' . $model->meta_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Commentmetas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->meta_id, 'url' => ['view', 'id' => $model->meta_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="commentmeta-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
