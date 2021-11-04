<?php
  require_once('flag.php');
  if ($_ = @$_GET['pass']) {
    $ua = $_SERVER['HTTP_USER_AGENT'];
    if (md5($_) + $_[0] == md5($ua)) {
      if ($_[0] == md5($_[0] . $flag)[0]) {
        echo $flag;
      }
    }
  } else {
    highlight_file(__FILE__);
  }

  // md5(param) + param[0] == md5(server['user'])
  // md5(flag + param)[0] == param[0] 
  // 35c3_password_saltf1sh_30_seconds_max