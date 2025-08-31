<?php 
// pengulangan pada array
// for / foreach
$angkas = [3, 2, 6, 8, 14, 54, 1, 9, 25];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forEach Array</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }

        .clear {
            clear: both;
        }
    </style>
</head>
<body>

    <?php for( $i = 0; $i < count($angkas); $i++ ) { ?>
            <div class="kotak"><?php echo "$angkas[$i]"; ?></div>
    <?php } ?>

    <div class="clear"></div>

    <?php foreach( $angkas as $angka) { ?>
        <div class="kotak"><?php echo $angka; ?></div>
    <?php } ?>

    <div class="clear"></div>

    <?php foreach( $angkas as $angka ) : ?>
        <div class="kotak"><?= $angka; ?></div>
    <?php endforeach; ?>
</body>
</html>