<?php

session_start();
session_unset();
session_destroy();

header("Location: http://localhost/bookstore");
exit(); // Ensure that script stops execution after redirection

?>
