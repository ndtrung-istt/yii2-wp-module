<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model istt\wp\models\Usermeta */

$this->title = Yii::t('sakila', 'Create {modelClass}', [
    'modelClass' => 'Usermeta',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('sakila', 'Usermetas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usermeta-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
