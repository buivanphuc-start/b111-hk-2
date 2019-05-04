<!DOCTYPE html>
<html lang="en-US">
    <head>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
         <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/type-64.less', 'css/type-64.css');
        ?>
        <link href="css/type-64.css" rel="stylesheet" type="text/css"/>
       
        <title>custombyduy</title>
    </head>
    <body>
        <?php include './64-content.php'; ?>
    </body>
</html>