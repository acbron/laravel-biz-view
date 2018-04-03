<?php

require ("app/Utils/QueryUtils.php");

// tmall
$url = 'https://detail.tmall.com/item.htm?spm=a220m.1000858.1000725.1.14c674a7BdkXOs&id=560257961625&areaId=440300&user_id=1917047079&cat_id=2&is_b=1&rn=557170d3986b143f0e1fdacdc14b98c3&sku_properties=10004:709990523';
$url2 = 'https://detail.tmall.com/item.htm?spm=a220m.1000858.1000725.1.7bd25faaJAC37j&id=532185466067&skuId=3727248999094&areaId=440300&user_id=379092709&cat_id=50076895&is_b=1&rn=8c62af3eee85374b12500ad2a3c70d46';

// taobao
$url3 = 'https://item.taobao.com/item.htm?spm=a219r.lm5173.14.72.5c673218cawly1&id=552896797339&ns=1&abbucket=18#detail';
$url4 = 'https://item.taobao.com/item.htm?spm=a230r.1.14.55.63f05351FRvVn8&id=563378033857&ns=1&abbucket=18#detail';
$result2 = QueryUtils::getCopyContent($url4, 2);
print_r($result2);
?>