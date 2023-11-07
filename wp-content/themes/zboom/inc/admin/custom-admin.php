
<?php

//crate new user 

$newuser = new WP_User(wp_create_user('sabuj', '123456', 'sabuj@gmail.com' ));

$newuser->set_role('editor');