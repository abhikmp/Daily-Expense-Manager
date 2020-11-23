<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>home1</title>
    </head>
    <body>


            <?php if(isset($_SESSION['username'])) : ?>
                <h3>Welcome <?php print($_SESSION['username']);?></h3>
            <?php endif?>

    </body>
</html>