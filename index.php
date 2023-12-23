<?php
require 'Router.php';

Router::handle('GET', '/contact', './contact.php');
Router::handle('GET', '/pricing', './pricing.php');
Router::handle('GET', '/pricing/eg', './pricing.php');
echo 'The index file is opened!';