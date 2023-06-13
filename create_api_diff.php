<?php
define("ROOT", dirname(__FILE__));
define("PADDLE_DOC", '/data/docs/');
define("NEW_DOC_DIR", '0613/');
define("EXIST", 'exist_0613.md');

global $pytorch_data;
global $paddle_data;

$c = file_get_contents(ROOT . '/pytorch_api.txt');
$api_list = explode("\n", $c);
$i = 0;
$pytorch_data = [];
foreach ($api_list as $api) {
	if (empty($api)) {
		continue;
	}
    $i++;

	$path1 = "docs/guides/model_convert/convert_from_pytorch/api_difference/";
	$map1 = [
		"torch.nn.functional" => "functional",
		"torch.Tensor" => "Tensor",
		"torch.cuda" => "cuda",
		"torch.backends" => "others",
		"torch.distributed" => "distributed",
		"torch.distributions" => "distributions",
		"torch.fft" => "fft",
		"torch.linalg" => "linalg",
		"torch.nn.init" => "init",
		"torch.random" => "others",
		"torch.special" => "others",
		"torch.optim" => "others",
		"torch.sparse" => "sparse",
		"torch.utils" => "utils",
		"torch.nn.utils" => "utils",
		"torch.nn." => "nn",
		"torch.autograd." => "others",
		"torch.hub." => "others",
		"torch.jit." => "others",
		"torch.profiler." => "others",
		"torch.onnx." => "others",
		];
    $format1 = "https://pytorch.org/docs/1.13/generated/{api}.html#{api}";
	$url_map1 = [
		"torch.nn.functional" => "https://pytorch.org/docs/1.13/generated/{api}.html#{api}",
		"torch.Tensor" => "https://pytorch.org/docs/1.13/generated/{api}.html#{api}",
		"torch.cuda.amp" => "https://pytorch.org/docs/1.13/amp.html#{api}",
		"torch.cuda" => "https://pytorch.org/docs/1.13/generated/{api}.html#{api}",
		"torch.backends" => "https://pytorch.org/docs/1.13/backends.html#{api}",
		"torch.distributed" => "https://pytorch.org/docs/1.13/distributed.html#{api}",
		"torch.distributions" => "https://pytorch.org/docs/1.13/distributions.html#{api}",
		"torch.fft" => $format1,
		"torch.linalg" => $format1,
		"torch.nn.init" => "https://pytorch.org/docs/1.13/nn.init.html#{api}",
		"torch.random" => "https://pytorch.org/docs/1.13/random.html#{api}",
		"torch.special" => "https://pytorch.org/docs/1.13/special.html#{api}",
		"torch.optim" => $format1,
		"torch.sparse" => $format1,
		"torch.utils.benchmark" => "https://pytorch.org/docs/1.13/benchmark_utils.html#{api}",
		"torch.utils.bottleneck" => "https://pytorch.org/docs/1.13/bottleneck.html#{api}",
		"torch.utils.checkpoint" => "https://pytorch.org/docs/1.13/checkpoint.html#{api}",
		"torch.utils.cpp_extension" => "https://pytorch.org/docs/1.13/cpp_extension.html#{api}",
		"torch.utils.data" => "https://pytorch.org/docs/1.13/data.html#{api}",
		"torch.utils.dlpack" => "https://pytorch.org/docs/1.13/dlpack.html#{api}",
		"torch.utils.mobile_optimizer" => "https://pytorch.org/docs/1.13/mobile_optimizer.html#{api}",
		"torch.utils.model_zoo" => "https://pytorch.org/docs/1.13/model_zoo.html#{api}",
		"torch.utils.tensorboard" => "https://pytorch.org/docs/1.13/tensorboard.html#{api}",
		"torch.nn.utils" => $format1,
		"torch.nn." => $format1,
		"torch.autograd." => $format1,
		"torch.hub." => "https://pytorch.org/docs/1.13/hub.html#{api}",
		"torch.jit." => $format1,
		"torch.profiler." => "https://pytorch.org/docs/1.13/profiler.html#{api}",
		"torch.onnx." => "https://pytorch.org/docs/1.13/onnx.html#{api}",
		];

	$list1 = explode(".", $api);
	if (count($list1) == 2) {
		$path2 = $path1 . "ops/" . $api . ".md";
        $url2 = str_replace("{api}", $api, $format1);
	} else {
		$found = false;
		foreach ($map1 as $k1 => $v1) {
			if (strpos($api, $k1) === 0) {
				$path2 = $path1 . $v1 . "/" . $api . ".md";
				$found = true;
				break;
			}
		}
		foreach ($url_map1 as $k1 => $v1) {
			if (strpos($api, $k1) === 0) {
                $url2 = str_replace("{api}", $api, $url_map1[$k1]);
                break;
			}
		}
	}
	if (!$found) {
		echo $api . "\n";
	}
	if (file_exists($path2)) {
		//echo $path2 . "\n";
		//echo $url2 . "\n";
	}
	//echo $path2 . "\n";
	//echo $url2 . "\n";
    $pytorch_data[$i] = ["api" => $api, "url" => $url2, "new_doc" => $path2];
}
//exit();

$c_diff = file_get_contents(ROOT . '/pytorch_diff.txt');
$api_paddle_list = explode("\n", $c_diff);
$i = 0;
// finished
$ignore_list = [
[1, 29],
[31, 49],
54,
57,
59,
66,
67,
68,
70,
72,
79
];
$paddle_data = [];
foreach ($api_paddle_list as $item) {
	if (empty($item)) {
		continue;
	}
    $i++;

    $in_ignore = false;
	foreach ($ignore_list as $ignore) {
		if (is_array($ignore)) {
			if ($i > ($ignore[0] * 10 - 10) && $i <= $ignore[1] * 10) {
				$in_ignore = true;
				break;
			}
		} else {
			if ($i > ($ignore * 10 - 10) && $i <= $ignore * 10) {
				$in_ignore = true;
				break;
			}
		}
	}
	if ($in_ignore) {
		// continue;
	}

	$list1 = explode("\t", $item);
	if (empty($list1[1])) {
		continue;
	}
	$paddle_api = $list1[1];
    $paddle_api = str_replace("(x)", "", $paddle_api);
    $paddle_api = preg_replace("|\(.*$|ims", "", $paddle_api);

	$api_dir = str_replace(".", "/", $paddle_api);
	if (strpos($paddle_api, "paddle.Tensor") === 0) {
		$format_tensor = "https://www.paddlepaddle.org.cn/documentation/docs/zh/api/paddle/Tensor_cn.html#{api_name}";
		$list_c = file_get_contents(ROOT . "/Tensor_cn.html");

		$api_name = str_replace("paddle.Tensor.", "", $paddle_api);
        $api_name1 = str_replace("_", "-", $api_name);
		$reg = "|href=\"#([^\"]*)\">%s[_(<]|ims";
		$reg2 = sprintf($reg, $api_name);
        $url2 = $format_tensor;
		preg_match($reg2, $list_c, $m);
		if (!empty($m[0])) {
			$url2 = str_replace("{api_name}", $m[1], $format_tensor);
		}
        $rst_file2 = "docs/api/paddle/Tensor_cn.rst";
	} else {
	    $format1 = "https://www.paddlepaddle.org.cn/documentation/docs/zh/api/{api_dir}_cn.html";
        $rst_file = "docs/api/{api_dir}_cn.rst";
		$url2 = str_replace("{api_dir}", $api_dir, $format1);
		$rst_file2 = str_replace("{api_dir}", $api_dir, $rst_file);
		if (!file_exists(PADDLE_DOC . $rst_file2)) {
            $url2 = "";
            echo $i . "  ";
			echo $paddle_api . " not exists\n";
            $rst_file2 = "";
		}
	}
    $paddle_data[$i] = ["api" => $paddle_api, "url" => $url2, "paddle_doc" => $rst_file2];
}
// print_r($paddle_data);

global $exist_list;
$exist_list = [];
function show_group($group_id) {
	global $pytorch_data;
	global $paddle_data;
	global $exist_list;
	$api_tpl = file_get_contents(ROOT . "/api.tpl");

	$start = $group_id * 10 - 9;
	$end = $group_id * 10;
	echo "\n";
	for ($i = $start; $i <= $end; $i++) {
		if (empty($paddle_data[$i])) {
			continue;
		}
		$replace_list = [];
		echo sprintf("%s | %s\n  %s\n  %s\n  %s\n", 
				$pytorch_data[$i]['api'], $paddle_data[$i]['api'], 
				$pytorch_data[$i]['url'], $paddle_data[$i]['url'], 
				$pytorch_data[$i]['new_doc']);
		$replace_list["label_type"] = "xxx 参数更多";
		$replace_list["torch_api"] = $pytorch_data[$i]['api'];
		$replace_list["torch_url"] = $pytorch_data[$i]['url'];
		$replace_list["paddle_api"] = $paddle_data[$i]['api'];
		$replace_list["paddle_url"] = $paddle_data[$i]['url'];
		$replace_list["label_more"] = "其中 xxx 相比 xxx 支持更多其他参数，具体如下：";
        $c = $api_tpl;
		foreach ($replace_list as $k1 => $v1) {
			$c = str_replace("{" . $k1 . "}", $v1, $c);
		}
		$new_doc = $pytorch_data[$i]['new_doc'];
		if (!file_exists(PADDLE_DOC . $new_doc)) {
			$new_file = NEW_DOC_DIR . $new_doc;
			$new_dir = dirname($new_file);
			if (!file_exists($new_dir)) {
				mkdir($new_dir, 0777, true);
			}
			file_put_contents($new_file, $c);
		} else {
            $exist_list[] = $pytorch_data[$i]['api'];
			// echo $new_doc . " exists\n";
		}
	}
}
$list1 = [64, 65, 69, 71, 73, 74, 75, 76, 77, 78];
$list1 = [80, 81, 82, 83, 84, 85];
$list1 = [51, 52, 53, 55, 56, 58, 60];
$list1 = [50, 80];
foreach ($list1 as $v) {
	show_group($v);
}

// index.md
$str = <<<EOF
| PyTorch | PaddlePaddle |
| ------- | ------------ |

EOF;
foreach ($pytorch_data as $i => $v) {
	$str .= sprintf("| [%s](%s) | [%s]%s |\n",
			$pytorch_data[$i]['api'], 
			$pytorch_data[$i]['url'], 
			$paddle_data[$i]['api'] ?? "", 
			!empty($paddle_data[$i]['url']) ? "(" . $paddle_data[$i]['url'] . ")" : ""
			);
}

// file_put_contents("/tmp/index.md", $str);
// echo "\nexists:\n";
$str = implode("\n", $exist_list);
file_put_contents(EXIST, $str);
// echo "\n";
