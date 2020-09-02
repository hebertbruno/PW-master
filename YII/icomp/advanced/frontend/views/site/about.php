<?php

/* @var $this yii\web\View 

   

*/

use yii\helpers\Html;

$this->title = 'História do Jogo';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-about">
    
    <h1><?= Html::encode($this->title) ?></h1>

  
 <?= Html::img('@web/tetris2.png',['width'=>'300']) ?>
 <code><?= __FILE__ ?></code>

</div>
