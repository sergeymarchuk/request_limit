<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SMS Auth</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body class="text-center">
<?php
    
    const TIME_LIMIT = 10;
    
    require_once "block_with_limit.php";

    blockRequest(TIME_LIMIT);

?>
    <form class='form-signin mt-5' action='index.php' method='post' style="width: 30%; min-width: 350px; margin: auto;">
        <h1 class="h3 mb-3 font-weight-normal">Pleae sign in</h1>
        <input class="mb-3 btn-block" type='text' placeholder='your phone number' name='phoneNumber'>
        <input class="mb-3 btn-block" type='password' placeholder='entry password' name='password'>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <p class="mt-5 mb-3 text-muted">&copy 2018</p>
    </form>  
</body>
</html>
    