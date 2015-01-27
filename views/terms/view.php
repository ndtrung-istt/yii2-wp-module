<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model istt\wp\models\Terms */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('sakila', 'Terms'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="terms-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('sakila', 'Update'), ['update', 'id' => $model->term_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('sakila', 'Delete'), ['delete', 'id' => $model->term_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('sakila', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'term_id',
            'name',
            'slug',
            'term_group',
        ],
    ]) ?>

</div>
