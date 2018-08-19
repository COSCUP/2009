<?php
if(preg_match('/zh/i', $_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
    header('Location: zh_tw/');
} else {
    header('Location: en/');
}
exit();
