<?php
// 先使用_GET排查問題
$input=$_GET;
// 在全部完成之後再改成_POST $input=$_GET->$input=$_POST;


// 1 看起來好處理
foreach ($input as $key => $value) {
    // code
}

// 2 實際工作會使用到
$input['name'] = 'VIP';
$input['name'] = 'VVIP';
$input['name'] = 'VVVIP';
$input['name'] = 'VVVVIP';
$input['name'] = 'VVVVVIP';
$input['name'] = 'VVVVVVIP';
$input['name'] = 'VVVVVVVIP';



$date = $input;