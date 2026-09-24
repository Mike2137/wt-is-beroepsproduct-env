<?php

session_start();

// End the current session and redirect the user to the homepage.
session_destroy();

header("Location: index.php");
exit;
