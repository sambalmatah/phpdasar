<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>

    <style>
        .warna-baris {
            background-color: silver;
        }
    </style>

</head>
<body>
    <h1>Test Table</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php 
            for( $i = 1; $i <= 8; $i++ ) : ?>
                <?php if( $i % 2 == 1) : ?>
                <tr>
                <?php else : ?>
                <tr class="warna-baris">
                <?php endif; ?>
                <?php for( $j = 1; $j <= 5; $j++ ) : ?> 
                    <td>
                        <?php echo "$i,$j" ?>
                    </td>
                <?php endfor; ?>
                </tr>
        <?php endfor; ?>
    </table>
</body>
</html>