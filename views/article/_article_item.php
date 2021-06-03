<?php

use yii\helpers\StringHelper;
use yii\helpers\Url;

?>

<div>
    <a href="<?= Url::to(['/article/view', 'slug' => $model->getEncoded('slug')]) ?>">
        <h3><?= $model->getEncoded('title') ?></h3>
    </a>
    <div>
        <?= StringHelper::truncateWords($model->getEncoded('body'), 40); ?>
    </div>
    <p class="text-muted text-right">
        <small>
            Created At: <b><?= Yii::$app->formatter->asRelativeTime($model->created_at) ?>, <?= Yii::$app->formatter->asDatetime($model->created_at) ?></b>
            <br>
            By : <b><?= $model->createdBy->username ?></b>
        </small>
    </p>
    <hr>
</div>