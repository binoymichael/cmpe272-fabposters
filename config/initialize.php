<?php
// Start session
session_start();
session_regenerate_id();

require 'router.php';

// Models
require '../models/user.php';
