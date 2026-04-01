<?php 
function redirectHome ($theMsg){
  $_SESSION['redirect_msg'] = $theMsg;

  $seconds = 0; // delay in seconds
  $redirect_url = !empty($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'index.php';
  header("Refresh: $seconds; URL=$redirect_url");
}
