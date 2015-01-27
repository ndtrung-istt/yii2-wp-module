<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model istt\wp\models\TermRelationships */

$this->title = Yii::t('sakila', 'Update {modelClass}: ', [
    'modelClass' => 'Term Relationships',
]) . ' ' . $model->object_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('sakila', 'Term Relationships'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->object_id, 'url' => ['view', 'object_id' => $model->object_id, 'term_taxonomy_id' => $model->term_taxonomy_id]];
$this->params['breadcrumbs'][] = Yii::t('sakila', 'Update');
?>
<div class="term-relationships-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
