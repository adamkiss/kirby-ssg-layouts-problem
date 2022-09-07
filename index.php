<?php

define('KIRBY_HELPER_DUMP', false);
define('KIRBY_HELPER_GO', false);

require 'kirby/bootstrap.php';

echo (new Kirby)->render();
