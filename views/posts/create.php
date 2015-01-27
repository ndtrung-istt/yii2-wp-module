<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model istt\wp\models\Posts */

$this->title = Yii::t('sakila', 'Create {modelClass}', [
    'modelClass' => 'Posts',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('sakila', 'Posts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="posts-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
