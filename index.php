<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>requests-limit</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body class="text-center">
<?php
    require_once "constants.php";
    require_once "library.php";
    if (!empty($_POST['checkType'])) {
        if ($_POST['checkType'] == 'bwl') {
            require_once "block_with_limit.php";
        } elseif ($_POST['checkType'] == 'bwwl') {
            require_once "block_with_limit_wait.php";
        }
    }
    require_once "form.php";

?>  
</body>
</html>
