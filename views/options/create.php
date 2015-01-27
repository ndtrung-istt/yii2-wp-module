<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model istt\wp\models\Options */

$this->title = Yii::t('sakila', 'Create {modelClass}', [
    'modelClass' => 'Options',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('sakila', 'Options'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="options-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
