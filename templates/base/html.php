

<html>


    <head>

        <meta charset="utf-8" />

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="<?php echo $BASE_URL; ?>/assets/css/reset.css" />
        <link rel="stylesheet" href="<?php echo $BASE_URL; ?>/assets/css/style.css" />


        <script>
            var App = {};
            App.BASE_URL = '<?php echo $GLOBALS["BASE_URL"]; ?>';
        </script>

    </head>


    <body>


        <?php include_once __DIR__ . '/header.php'; ?>
        <div class="page">
            <?php include_once __DIR__ . '/../../src/Views/' . $route . '/' . $template . '.php'; ?>
            <?php include_once __DIR__ . '/footer.php';?>
        </div>

    </body>

</html>
