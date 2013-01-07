var chat = {};

chat.fetchUsers = function(){
    $.ajax({
        url: 'http://localhost/Demo/public/assets/online/ajax/online.php',
        type: 'post',
        data: {method: 'fetch'},
        success: function(data){
            $('#user_side').html(data);
        }
    });
}

chat.interval = setInterval(chat.fetchUsers, 10000);
chat.fetchUsers();
