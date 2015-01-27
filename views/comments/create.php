<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model istt\wp\models\Comments */

$this->title = Yii::t('sakila', 'Create {modelClass}', [
    'modelClass' => 'Comments',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('sakila', 'Comments'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="comments-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
