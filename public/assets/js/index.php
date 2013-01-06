<?php
session_start();
$_SESSION['user'] = 5;
echo dirname(__FILE__);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            AJAX chat
        </title>
        <link rel="stylesheet" href="styles.css" />
    </head>
    <body>
        <div class="chat">
            <div id="messages" class="messages">
            </div>
            <textarea class="entry" placeholder="Type here and hit Return. Use Shift + Return far a new line."></textarea>
        </div>
        <script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
        <script src="chat.js"></script>
    </body>
</html>