<div id="user_side">
    <?php foreach ($chat_users as $user) : ?>
        <h5>
            <?php
                echo $user;
            ?>
        </h5> 
    <?php endforeach;?>
    <?php foreach ($chat_mods as $user) : ?>
        <h5>
            <?php
                echo $user;
            ?>
        </h5> 
    <?php endforeach;?>
    <?php foreach ($sleep_users as $user) : ?>
        <h2>
            <?php
                echo $user;
            ?>
        </h2> 
    <?php endforeach;?>
</div>
