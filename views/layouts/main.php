<?php
/**
 * @author  Nick Tsai <myintaer@gmail.com
 * @since   2.0
 */

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use app\assets\AppAsset;

AppAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <div class="container">
        <nav id="w0" class="navbar-inverse navbar-fixed-top navbar" role="navigation">
           <div class="container">
              <div class="navbar-header"><button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#w0-collapse"><span class="sr-only">Toggle navigation</span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span></button><a class="navbar-brand" href="<?=Url::to(['/'])?>">My Company</a>
              </div>
              <div id="w0-collapse" class="collapse navbar-collapse">
                 <ul id="w1" class="navbar-nav navbar-right nav">
                    <li class="active"><a href="<?=Url::to(['/'])?>">Home</a></li>
                 </ul>
              </div>
           </div>
        </nav>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">
            &copy; 
            <a href="https://github.com/yidas/yii2-app-lite" target="_blank">Yii2 App Lite</a>
        </p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
