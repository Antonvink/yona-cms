<?php

$root = $_SERVER['DOCUMENT_ROOT'];
$this->assets->collection('js')
->addJs($root . "/vendor/history/native.history.js")
->addJs($root . "/vendor/noty/jquery.noty.js")
->addJs($root . "/vendor/noty/themes/default.js")
->addJs($root . "/vendor/noty/layouts/center.js")
->addJs($root . "/vendor/fancybox/jquery.fancybox.pack.js")
->addJs($root . "/static/js/library.js")
->addJs($root . "/static/js/rotation.js")
->addJs($root . "/static/js/main.js")
->addJs($root . "/static/js/ajax.js");

$this->assets->collection('js')
->setLocal(true)
->addFilter(new \Phalcon\Assets\Filters\Jsmin())
->setTargetPath($root . '/assets/js.js')
->setTargetUri('assets/js.js')
->join(true);

?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title><?php echo $this->helper->title()->get(); ?></title>

    <?php echo $this->helper->meta()->get('description'); ?>
    <?php echo $this->helper->meta()->get('keywords'); ?>

    <link href="/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">

    <!--less-->
    <link href="/static/less/style.less" rel="stylesheet/less" type="text/css">
    <!--/less-->
    <!--less-->
    <script src="/vendor/js/less-1.7.3.min.js" type="text/javascript"></script>
    <!--/less-->

    <script src="/vendor/js/jquery-1.11.0.min.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="/static/vendor/js/html5shiv.js"></script>
    <![endif]-->
    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>

    <?php echo $this->assets->outputJs('js'); ?>
</head>
<body<?php if ($this->view->bodyClass) { ?> class="<?php echo $this->view->bodyClass; ?>"<?php } ?>>

<header>
        <?php echo $this->partial('main/header'); ?>
</header>

<?php echo $this->partial('main/menu'); ?>

<div id="main">
    <?php echo $this->getContent(); ?>
</div>

<footer>
    <?php echo $this->partial('main/footer'); ?>
</footer>



<?php if ($this->config->profiler) { ?>
    <?php echo $this->helper->dbProfiler(); ?>
<?php } ?>

</body>
</html>