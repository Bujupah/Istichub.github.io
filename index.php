<?php
session_start();
if(isset($_GET['id_membre']))
{
    $_SESSION['id_membre'] = (int)$_GET['id_membre'];
}
else
{
    $_SESSION['id_membre'] = '0';
}
echo $_SESSION['id_membre'];
?>
<html>
    <head>
    <title>Discussion instantanée</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
        
    </head>
    
    <body>
        <div class="chat">
            <div class="messages"></div>
            <textarea class="enter"></textarea>
        </div>
    
    </body>
</html>
