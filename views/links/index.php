<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel istt\wp\models\LinksSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Links');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="links-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create {modelClass}', [
    'modelClass' => 'Links',
]), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'link_id',
            'link_url:url',
            'link_name',
            'link_image',
            'link_target',
            // 'link_description',
            // 'link_visible',
            // 'link_owner',
            // 'link_rating',
            // 'link_updated',
            // 'link_rel',
            // 'link_notes:ntext',
            // 'link_rss',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
