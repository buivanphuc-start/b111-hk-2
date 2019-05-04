<!DOCTYPE html>

<html lang="vi" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <?php
            if (!class_exists('lessc')) {
                include ('./libs/lessc.inc.php');
            }
            $less = new lessc;
            $less->compileFile('less/styles.less', 'css/styles.css');
            ?>
            <link href="css/styles.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <?php include './86-content.php'; ?>
    </body>
</html>