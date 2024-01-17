<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <div class="main">
        <?php
            spl_autoload_register(function($class){
                include_once 'system/libr/'.$class.'.php';
            });
            include_once 'app/config/config.php';

            $main = new Main();
       
        ?>
    </div>
   
    
</body>
</html>