<?php
if (!array_key_exists('curtest',$_POST) or !is_numeric($_POST['curtest'])) {
    $_POST['curtest'] = 1;
}
print(file_get_contents("content/testimonials/".$_POST['curtest'].".html"));
