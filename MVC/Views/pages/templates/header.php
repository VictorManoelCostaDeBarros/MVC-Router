<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH_FULL ?>css/style.css">
    <title><?php echo self::titulo; ?></title>
</head>
<header>
    <div class="center">
        <div class="logo">
            <h2>Victor Designer</h2>
        </div><!--logo-->
        <nav class="menu">
            <?php 
                foreach ($this->menuItens as $key => $value) {
                    echo '<a href="'.INCLUDE_PATH.strtolower($value).'">'.$value.'</a>';
                }
            ?>
        </nav><!--Menu-->
        <div class="clear"></div>
    </div><!--center-->
</header>