<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model istt\wp\models\Comments */

$this->title = Yii::t('sakila', 'Update {modelClass}: ', [
    'modelClass' => 'Comments',
]) . ' ' . $model->comment_ID;
$this->params['breadcrumbs'][] = ['label' => Yii::t('sakila', 'Comments'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->comment_ID, 'url' => ['view', 'id' => $model->comment_ID]];
$this->params['breadcrumbs'][] = Yii::t('sakila', 'Update');
?>
<div class="comments-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
