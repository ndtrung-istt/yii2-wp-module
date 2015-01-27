<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel istt\wp\models\PostmetaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('sakila', 'Postmetas');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="postmeta-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('sakila', 'Create {modelClass}', [
    'modelClass' => 'Postmeta',
]), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'meta_id',
            'post_id',
            'meta_key',
            'meta_value:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
