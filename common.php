<?php
define("ROOT", dirname(__FILE__));
define("PADDLE_DOC", '/data/docs/');

function get_pytorch_url($api) {
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

	$url2 = "";
	$list1 = explode(".", $api);
	if (count($list1) == 2) {
		$url2 = str_replace("{api}", $api, $format1);
	} else {
		$found = false;
		foreach ($url_map1 as $k1 => $v1) {
			if (strpos($api, $k1) === 0) {
				$url2 = str_replace("{api}", $api, $url_map1[$k1]);
				break;
			}
		}
	}

	return $url2;
}

function get_paddle_url($paddle_api, $index = "") {
	$url2 = "";
	$rst_file2 = "";
    $paddle_api = str_replace("(x)", "", $paddle_api);
    $paddle_api = preg_replace("|\(.*$|ims", "", $paddle_api);
	$api_dir = str_replace(".", "/", $paddle_api);
	if (strpos($paddle_api, "paddle.Tensor") === 0) {
		$format_tensor = "https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/Tensor_cn.html#{api_name}";
		$list_c = file_get_contents(ROOT . "/develop/Tensor_cn.html");

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
		$format1 = "https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/{api_dir}_cn.html";
		$rst_file_cn = "docs/api/{api_dir}_cn.rst";
		$rst_file = "docs/api/{api_dir}.rst";
		$url2 = str_replace("{api_dir}", $api_dir, $format1);
		$rst_file2 = str_replace("{api_dir}", $api_dir, $rst_file);
		$rst_file2_cn = str_replace("{api_dir}", $api_dir, $rst_file_cn);
		if (!file_exists(PADDLE_DOC . $rst_file2) && !file_exists(PADDLE_DOC . $rst_file2_cn)) {
			$url2 = "";
			echo $index . "  ";
			echo $paddle_api . " not exists\n";
			$rst_file2 = "";
		} else {
			$rst_file2 = $rst_file2_cn;
		}
	}
	return [$url2, $rst_file2];
}

function get_git_doc($api) {
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

	$path2 = "";
	$list1 = explode(".", $api);
	if (count($list1) == 2) {
		$path2 = $path1 . "ops/" . $api . ".md";
	} else {
		$found = false;
		foreach ($map1 as $k1 => $v1) {
			if (strpos($api, $k1) === 0) {
				$path2 = $path1 . $v1 . "/" . $api . ".md";
				$found = true;
				break;
			}
		}
	}
	return $path2;
}

function in_id_list($i) {
	$ignore_list = [
		[1,3],
		[5,29],
		[35,46],
		[48,85],
		[94,96],
		[98,111],
		[122,125],
		[185,192],
		[198,200],
		[209,214],
		[240,242]
	];


		$in_ignore = false;
		foreach ($ignore_list as $ignore) {
			if (is_array($ignore)) {
				if ($i >= $ignore[0] && $i <= $ignore[1]) {
					$in_ignore = true;
					break;
				}
			} else {
				if ($i == $ignore) {
					$in_ignore = true;
					break;
				}
			}
		}

		return $in_ignore;
}

