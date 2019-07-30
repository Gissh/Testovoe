<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;

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
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body>
    <?php $this->beginBody() ?>
    <div class="wrap">


        <header>

            <div class="container headerContainer">
                <div class="headerInfo">
                    <h5><b>Телефон: (499) 340-94-71</b></h5>
                    <h5><b>Email: <u>info@future-group.ru</u></b></h5>

                    <h1 class='headerComment'>Комментарии</h1>
                </div>

                <?php echo Html::img('@web/images/headerLogo.png', ['class' => 'headerLogo']); ?>
            </div>
        </header>


        <div class="container mainContainer">
            <?= $content ?>
        </div>


        <footer class="footer">
            <div class="container">
                <?php echo html::img('@web/images/footerLogo.png',['class'=>'footerLogo']); ?>


                <div class="footerInfo">
                    <h5><b>Телефон: (499) 340-94-71</b></h5>
                    <h5><b>Email: <u>info@future-group.ru</u></b></h5>
                    <h5><b>Адрес: <u>115088 Москва, ул. 2-я Машиностроения, д. 7 стр. 1</u></b></h5>
                    <h5 class='footerComment'>© 2010 - 2014 Future. Все права защищены</h5>
                </div>
            </div>
        </footer>
    </div>
    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>
