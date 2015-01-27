<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model istt\wp\models\Commentmeta */

$this->title = Yii::t('sakila', 'Create {modelClass}', [
    'modelClass' => 'Commentmeta',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('sakila', 'Commentmetas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="commentmeta-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
