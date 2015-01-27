<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model istt\wp\models\TermTaxonomy */

$this->title = Yii::t('sakila', 'Update {modelClass}: ', [
    'modelClass' => 'Term Taxonomy',
]) . ' ' . $model->term_taxonomy_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('sakila', 'Term Taxonomies'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->term_taxonomy_id, 'url' => ['view', 'id' => $model->term_taxonomy_id]];
$this->params['breadcrumbs'][] = Yii::t('sakila', 'Update');
?>
<div class="term-taxonomy-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
