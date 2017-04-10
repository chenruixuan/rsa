<?php
/**
 * User: chenruixuan
 * Date: 2017/4/10 下午3:06
 * Email: www@chenruixuan.com
 */

require __DIR__ . '/../autoload.php';


$rsa=\Chenruixuan\Rsa\Rsa::getInstance();
//echo $rsa->RsaEncrypt("111");

$str='zdpAAlYSmkoeIcc4tD86a3Ac/fUnCuE8XvaaYb3pBG38MKBF86Hk7F+hao2NPjdquuyKKgkAwrIcZzANAAlRW7cOMeD20pWjI4DUoUlB6ECAj4dhBKm4MNYjbrMLLrMbiArD6lvX8zeTMp9mxLOojmwfBbHESZw4CXIyKEpINf0=';
echo $rsa->RsaDecrypt($str);


