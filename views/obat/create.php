<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Obat */

$this->title = 'Obat Baru';
$this->params['breadcrumbs'][] = ['label' => 'Obats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="obat-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
