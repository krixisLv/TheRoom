<div id="profile_info">
    <p>Profile Information</p>
    <div class="user-info">
        <h4><?php if(isset($information[0]['picture']) and !empty($information[0]['picture'])) echo 'PROFILE PICTURE:';?></h4>
        <img style="max-width: 100px;" id="profile-pic" src="<?php 
        if(isset($information[0]['picture']) and (substr($information[0]['picture'], strrpos($information[0]['picture'], '.') + 1) == 'jpeg' or 
                substr($information[0]['picture'], strrpos($information[0]['picture'], '.') + 1) == 'jpg' or
                substr($information[0]['picture'], strrpos($information[0]['picture'], '.') + 1) == 'png' or
                substr($information[0]['picture'], strrpos($information[0]['picture'], '.') + 1) == 'gif')) 
            echo $information[0]['picture']; 
        else
            echo "http://aux3.iconpedia.net/uploads/635055380.png";
            ?>"/></div>
    <div class="user-info">
        <h4><?php if(isset($information[0]['firstName']) and !empty($information[0]['firstName'])) echo 'FIRST NAME:'; ?></h4>
        <p><?php if(isset($information[0]['firstName'])) echo $information[0]['firstName']; ?></p></div>
    <div class="user-info">
        <h4><?php if(isset($information[0]['lastName']) and !empty($information[0]['lastName'])) echo 'LAST NAME:'; ?></h4>
        <p><?php if(isset($information[0]['lastName'])) echo $information[0]['lastName']; ?></p></div>
    <?php echo $info; ?>
    <?php 
//        $auth = Auth::instance();
//        $user_id = $auth->get_user_id();
//        var_dump($information); ?>
</div>