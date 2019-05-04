<!DOCTYPE HTML>


<html lang="vi" xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta charset="UTF-8">
        <title>module 89</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/custom-css.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('./less/custom-less.less', './css/custom-css.css');
        ?>

        <script src="js/jquery-3.1.0.min.js" ></script>
    </head>

    <body>
            <?php include './89-content.php'; ?>
    </body>

</html>