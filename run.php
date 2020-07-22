<?php
    $command = escapeshellcmd('C:\Users\DELL\Desktop\test.py');
    $output = shell_exec($command);
    echo $output;

?>
<br>
<br>

<a href="index.php" class="btn btn-dark">Back</a>