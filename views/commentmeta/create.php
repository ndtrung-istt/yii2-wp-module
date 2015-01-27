<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model istt\wp\models\Commentmeta */

$this->title = Yii::t('app', 'Create {modelClass}', [
    'modelClass' => 'Commentmeta',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Commentmetas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="commentmeta-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
