<?php

session_start();
echo 'you are logout please wait..';

session_destroy();

header('location: /forum');


?>