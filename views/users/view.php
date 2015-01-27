<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model istt\wp\models\Users */

$this->title = $model->ID;
$this->params['breadcrumbs'][] = ['label' => Yii::t('sakila', 'Users'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('sakila', 'Update'), ['update', 'id' => $model->ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('sakila', 'Delete'), ['delete', 'id' => $model->ID], [
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
            'ID',
            'user_login',
            'user_pass',
            'user_nicename',
            'user_email:email',
            'user_url:url',
            'user_registered',
            'user_activation_key',
            'user_status',
            'display_name',
        ],
    ]) ?>

</div>
