<!DOCTYPE html>
<html lang="en">
    <head>
        
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
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
        $less->compileFile('less/login.less', 'css/login.css');
        ?>
        <link rel="stylesheet" href="css/login.css">

    </head>

    <body style="background-color: #F7F7F7;">
        <?php include './57-content.php'; ?>
    </body>
</html>