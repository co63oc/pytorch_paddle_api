<?php
include_once dirname(__FILE__) . "/../common.php";

global $pytorch_data;
$c = file_get_contents(ROOT . '/paconvert/list.txt');
$api_list = explode("\n", $c);
$i = 0;
$pytorch_data = [];
foreach ($api_list as $api) {
	if (empty($api)) {
		continue;
	}
	$i++;

	$list1 = explode("\t", $api);
	if (empty($list1[1])) {
		continue;
	}

$pytorch_data[$list1[0]] = $list1;
$pytorch_data[$list1[0]]['url'] = get_pytorch_url($list1[1]);
}


print_r($pytorch_data);
