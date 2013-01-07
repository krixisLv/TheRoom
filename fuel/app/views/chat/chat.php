<?php 
    $sauth = Auth::instance();
    $uid = $sauth->get_user_id();
    $_SESSION['user'] = $uid[1];
?>
<div class="chat">
    <div id="messages" class="messages">
    </div>
    <textarea class="entry" placeholder="Type here and hit Return. Use Shift + Return for a new line."></textarea>
</div>

<script src="http://code.jquery.com/jquery-1.8.3.js"></script>
<script type="text/javascript" src="http://localhost/Demo/public/assets/js/chat.js"></script>