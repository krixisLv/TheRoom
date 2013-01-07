<?php
require '../init.php';
if (isset($_POST['method']) === true and empty($_POST['method']) === false) {
    $chat = new Chat();
    $method = $_POST['method'];

    if ($method === 'fetch') {
        $users = $chat->getActive();

        if (empty($users) === true) {
            echo "There are currently no users logged in the chat";
        } else {
            ?>
            <div class="users">
                <?php foreach ($users as $user) { ?>
                    <?php if ($user['group'] == 1) { ?>
                        <h5><?php echo $user['name']; ?> </h5>
                        <?php
                    }
                }
                ?>
            </div>
            <div class="users mods">
                <?php foreach ($users as $user) { ?>
                    <?php if ($user['group'] == 50) { ?>
                        <h5><?php echo $user['name']; ?> </h5>
                        <?php
                    }
                }
                ?>
            </div>
                <?php
            }
        }
    }
    ?>

