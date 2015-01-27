<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model istt\wp\models\Users */

$this->title = Yii::t('sakila', 'Create {modelClass}', [
    'modelClass' => 'Users',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('sakila', 'Users'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
