<?php
//to do outo increment
function storeJson(array $data, string $path): array
{

$oldData = file_get_contents($path);
$dataArr = json_decode($oldData, true);

if(empty($dataArr)){

    $id=1;
} else { 
//$lastUser = end($dataArr);
//$lastId = $lastUser['id'] 
$id = end($dataArr)['id'] + 1;
}



$data['id'] = $id;
$dataArr[] = $data;
$dataJson = json_encode($dataArr);

file_put_contents($path, $dataJson);

return $data ;
}