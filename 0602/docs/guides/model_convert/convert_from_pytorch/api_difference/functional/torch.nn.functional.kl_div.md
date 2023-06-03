## [torch 参数更多]torch.nn.functional.kl_div

### [torch.nn.functional.kl_div](https://pytorch.org/docs/1.13/generated/torch.nn.functional.kl_div.html#torch.nn.functional.kl_div)

```python
torch.nn.functional.kl_div(input, target, size_average=None, reduce=None, reduction='mean', log_target=False)
```

### [paddle.nn.functional.kl_div](https://www.paddlepaddle.org.cn/documentation/docs/zh/api/paddle/nn/functional/kl_div_cn.html)

```python
paddle.nn.functional.kl_div(input, label, reduction='mean', name=None)
```

其中 PyTorch 相比 Paddle 支持更多其他参数，具体如下：

### 参数映射

| PyTorch      | PaddlePaddle | 备注                                            |
| ------------ | ------------ | ----------------------------------------------- |
| input        | input        | 输入的 Tensor。                                 |
| target       | label        | 标签，仅参数名不一致。                          |
| size_average | -            | 已废弃，和 reduce 组合决定损失计算方式。        |
| reduce       | -            | 已废弃，和 size_average 组合决定损失计算方式。  |
| reduction    | reduction    | 指定应用于输出结果的计算方式。                  |
| log_target   | -            | target 是否传入 log 空间，Paddle 暂无转写方式。 |

### 转写示例

```python
# Pytorch 的 size_average、reduce 参数转为 Paddle 的 reduction 参数
if size_average is None:
    size_average = True
if reduce is None:
    reduce = True

if size_average and reduce:
    reduction = 'mean'
elif reduce:
    reduction = 'sum'
else:
    reduction = 'none'
```
