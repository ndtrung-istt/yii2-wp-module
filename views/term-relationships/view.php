<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model istt\wp\models\TermRelationships */

$this->title = $model->object_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Term Relationships'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="term-relationships-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'object_id' => $model->object_id, 'term_taxonomy_id' => $model->term_taxonomy_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'object_id' => $model->object_id, 'term_taxonomy_id' => $model->term_taxonomy_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'object_id',
            'term_taxonomy_id',
            'term_order',
        ],
    ]) ?>

</div>
