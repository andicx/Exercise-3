<?php

if (file_exists("log.txt")) {
    $file = "log.txt";
    $current = file_get_contents($file);
} else {
    $myfile = fopen("log.txt", "w");
    header("refresh:0");
}

?>
<form action = "process.php" method = "post">
        <textarea rows = "40" cols = "70" name = "comment">
            <?php
            echo $current;
            ?>
        </textarea>
        <input type = "Submit">
</form>
