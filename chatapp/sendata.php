<?php

$filebath = "chatlog.txt";

$msg = $_POST['n'] . "#" . $_POST['m'] . "#" . date('h:i A') . "\n";

file_put_contents($filebath, $msg, FILE_APPEND);
