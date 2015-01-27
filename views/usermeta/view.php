<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model istt\wp\models\Usermeta */

$this->title = $model->umeta_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('sakila', 'Usermetas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usermeta-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('sakila', 'Update'), ['update', 'id' => $model->umeta_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('sakila', 'Delete'), ['delete', 'id' => $model->umeta_id], [
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
            'umeta_id',
            'user_id',
            'meta_key',
            'meta_value:ntext',
        ],
    ]) ?>

</div>
