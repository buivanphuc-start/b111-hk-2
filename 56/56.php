<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <!-- <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> -->
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gentelella Alela! | </title>

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/invoice.less', 'css/invoice.css');
        ?>
        <link rel="stylesheet" href="css/invoice.css">

    </head>

    <body>
        <?php include './56-content.php'; ?>


        <script src="js/jquery-2.1.4.min.js"></script>
        <script src="js/bootstrap.min.js" ></script>
        <script src="js/back-to-tops.js"></script>
        <script src="js/sidebar-left.js" ></script>
        <script src="js/collapse-close.js" ></script>
    </body>
</html>