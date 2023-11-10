<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="">

    </form>
    <?php
    require 'Telnet.class.php';
    $inst = new Telnet();
    $inst->login("gaobao", "127.0.0.1");
    $execv = $inst->exec("ls -al");
    echo "$execv" . "\n";
    ?>
</body>

</html>