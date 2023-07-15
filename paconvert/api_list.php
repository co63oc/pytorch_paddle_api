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
	$list1[2] = trim($list1[2], " \"");
	$pytorch_data[$list1[0]] = $list1;
	$pytorch_data[$list1[0]]['url'] = get_pytorch_url($list1[1]);
	if (!empty($list1[2])) {
		$pytorch_data[$list1[0]]['url2'] = get_paddle_url($list1[2], $list1[0]);
	}
}


$list1 = [302,306];
foreach ($list1 as $v) {
	// print_r($pytorch_data[$v]);
}

echo "| pytorch | paddle | 有文档 |\n";
echo "| - | - | - |\n";

foreach ($pytorch_data as $k => $v) {
	if (in_id_list($k)) {
		continue;
	}
	if (!empty($v[2])) {
		$str2 = sprintf(" [%s](%s)", $v[2], $v['url2'][0]);
	} else {
		$str2 = "";
	}
    $c_mapping = file_get_contents(PADDLE_DOC . "docs/guides/model_convert/convert_from_pytorch/pytorch_api_mapping_cn.md");
    $has_doc = get_git_doc($v[1]);
	if (empty($has_doc) || !file_exists(PADDLE_DOC . $has_doc)) {
		$has_doc = "";
		if (strpos($c_mapping, "[" . $v[1] . "]") !== false) {
			$has_doc = "in mapping";
		}
	}
	echo sprintf("| [%03d %s](%s) | %s | %s |\n", $v[0], $v[1], $v['url'], $str2, $has_doc);
}
