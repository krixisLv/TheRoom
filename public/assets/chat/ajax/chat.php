<?php
    require '../init.php';
    if(isset($_POST['method']) === true and empty($_POST['method']) === false){
        $chat = new Chat();
        $method = $_POST['method'];
        
        if($method === 'fetch'){
            $messages = $chat->fetchMessages();
            
            if(empty($messages) === true){
                echo "There are currently no messages in the chat";
            }else {
                $i=0;
                foreach($messages as $message){
                    ?>
                        <div class="message <?php if($i++%2 == 0) echo 'grey'?>">
                            <?php if(date('Ymd') != date('Ymd', strtotime($message['created_at']))){
                                    echo $message['created_at']." ";
                                }else{
                                    echo date('H:i:s', strtotime($message['created_at']));
                                }
                            ?>
                            <a href=""><?php echo $message['username']; ?></a> says:
                            <p><?php echo nl2br($message['message']); ?></p>
                        </div>
                    <?php
                }
            }
            
        }else if($method === 'throw' and isset($_POST['message']) === true){
            $message = trim($_POST['message']);
            if(empty($message) === false){
                    $chat->throwMessage($_SESSION['user'], $message);
            }
        }
    }
?>

