<?php

// Create controllers
if (isset($_SERVER['argv'][1]) && $_SERVER['argv'][1] == 'server') {
	system('php -S localhost:8080');
}
