<?php
session_start();

// TODO 4: remove everything from the session and end it.

// Empty the session for this request, then end it on the server.
$_SESSION = [];
// Destroys session, but the cookie stil exists
session_destroy();

// Destroys the cookie
setcookie(session_name(), '', time() - 3600, '/');

header('Location: login.php');
exit;
