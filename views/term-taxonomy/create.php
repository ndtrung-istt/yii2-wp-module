<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model istt\wp\models\TermTaxonomy */

$this->title = Yii::t('sakila', 'Create {modelClass}', [
    'modelClass' => 'Term Taxonomy',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('sakila', 'Term Taxonomies'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="term-taxonomy-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
