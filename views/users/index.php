<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel istt\wp\models\UsersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('sakila', 'Users');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('sakila', 'Create {modelClass}', [
    'modelClass' => 'Users',
]), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'user_login',
            'user_pass',
            'user_nicename',
            'user_email:email',
            // 'user_url:url',
            // 'user_registered',
            // 'user_activation_key',
            // 'user_status',
            // 'display_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
