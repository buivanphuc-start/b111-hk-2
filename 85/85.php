<!DOCTYPE html>

<html lang="vi" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="UTF-8">
        <title>module 85</title>

        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/type-85.less', 'css/type-85.css');
        ?>
        <link href="css/type-85.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-2.1.4.min.js" ></script>
        <script src="js/bootstrap.min.js" ></script>
    </head>

    <body>
            <?php include './85-content.php'; ?>
    </body>
</html>
