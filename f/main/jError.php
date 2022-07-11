<?php

@session_start();
@session_destroy();

// view

echo "<script>window.location='../c/main.php?m=logInEmail&n=unauthorizedAccess'</script>";
