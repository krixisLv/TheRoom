$(document).ready(function() {
  document.getElementById('messages').scrollTop = 9999999;
});


var chat = {};
//var id = parseInt($('#val').value);
//var id = document.getElementById('val').value;


chat.fetchMessages = function(){
    //console.log(id);
    $.ajax({
        url: 'http://localhost/Demo/public/assets/chat/ajax/chat.php',
        //url: 'ajax/chat.php',
        type: 'post',
        data: {method: 'fetch'},
        success: function(data){
            $('.chat .messages').html(data);
            $(".messages").scrollTop($(".messages")[0].scrollTop = 9999999);
        }
    });
}

chat.throwMessage = function(message){
    if($.trim(message).length != 0){
        console.log(message);
        //console.log(id);
        $.ajax({
            url: 'http://localhost/Demo/public/assets/chat/ajax/chat.php',
            type: 'post',
            data: {method: 'throw', message: message},
            success: function(){
                chat.fetchMessages();
                chat.entry.val('');
            }
        });
    }
    $(".messages").scrollTop($(".messages")[0].scrollTop = 9999999);
}

chat.entry = $('.entry');
chat.entry.bind('keydown',function(e){
    console.log(e.keyCode);
    if(e.keyCode === 13 && e.shiftKey === false){
        //throw message
        chat.throwMessage($(this).val())
        e.preventDefault();
        $(".messages").scrollTop($(".messages")[0].scrollHeight);
    }
});

chat.interval = setInterval(chat.fetchMessages, 6000);
chat.fetchMessages();
