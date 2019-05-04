<!DOCTYPE html>
<html lang="vi" xmlns="http://www.w3.org/1999/xhtml">

    <head>

        <meta charset="UTF-8">
        <title>shoes</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/fonts/font-awesome.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include ( './libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/style.less', 'css/style.css');
        ?>
        <link href="css/style.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <?php include './63-content.php'; ?>

    </body>

</html>