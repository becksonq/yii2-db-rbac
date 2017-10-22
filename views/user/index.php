<?php
/**
 * User: Администратор
 * Date: 21.10.2017
 * Time: 19:49
 */
use yii\grid\GridView;
use yii\helpers\Html;
use yii\helpers\Url;
?>

<div class="row">
    <div class="col-sm-12">
        <h3>Действия</h3>
        <h4><a href="<?= Url::to(['/permit/access/role']) ?>">Управление ролями</a></h4>
        <h4><a href="<?= Url::to(['/permit/access/permission']) ?>">Управление правами доступа</a></h4>
    </div>
</div>
<p>
    <p></p>
</p>

<?php
echo GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],

        'id',
        'username',
        'email:email',

        ['class' => 'yii\grid\ActionColumn',
         'template' => '{view}&nbsp;&nbsp;{update}&nbsp;&nbsp;{permit}&nbsp;&nbsp;{delete}',
         'buttons' =>
             [
                 'permit' => function ($url, $model) {
                     return Html::a('<span class="glyphicon glyphicon-wrench"></span>', Url::to(['/permit/user/view', 'id' => $model->id]), [
                         'title' => Yii::t('yii', 'Change user role')
                     ]); },
             ]
        ],
    ],
]);
?>