<?php
use yii\helpers\Html;

\exocet\BootstrapMD\MaterialAsset::register($this); // include css and js
\exocet\BootstrapMD\MaterialIconsAsset::register($this); // include icons (optional)
\exocet\BootstrapMD\MaterialInitAsset::register($this); // add $.material.init(); js (optional)



?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?php echo Yii::$app->language ?>">
<head>
    <meta charset="<?php echo Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <?php echo Html::csrfMetaTags() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="container">
<?php echo $content; ?>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>