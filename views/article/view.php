<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Article */

$this->params['breadcrumbs'][] = ['label' => 'Articles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $model->title;
\yii\web\YiiAsset::register($this);
?>
<div class="article-view">

    <h1><?= $model->getEncoded('title') ?></h1>
    <p class="text-muted">
        <small>
            Created At: <b><?= Yii::$app->formatter->asRelativeTime($model->created_at) ?>, <?= Yii::$app->formatter->asDatetime($model->created_at) ?></b>
            <br>
            By : <b><?= $model->createdBy->username ?></b>
        </small>
    </p>

    <?php if (!Yii::$app->user->isGuest) : ?>
        <p>
            <?= Html::a('Update', ['update', 'slug' => $model->slug], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Delete', ['delete', 'slug' => $model->slug], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Are you sure you want to delete this item?',
                    'method' => 'post',
                ],
            ]) ?>
        </p>
    <?php endif ?>

    <div>
        <?= $model->getEncoded('body') ?>
    </div>

</div>