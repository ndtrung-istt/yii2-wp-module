<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model istt\wp\models\TermRelationships */

$this->title = Yii::t('sakila', 'Create {modelClass}', [
    'modelClass' => 'Term Relationships',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('sakila', 'Term Relationships'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="term-relationships-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
