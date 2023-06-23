<?php
$final = 0;
for ($i=10 ; $i>1 ; --$i){
    $arr = str_split($_POST['national_code']);
    $result = @arr[10-$i]*$i;
    $final = $final+$result;
}
$mod = $final % 11;
if($mod<2 and $mod==$arr[9]){
    echo "ok";
}