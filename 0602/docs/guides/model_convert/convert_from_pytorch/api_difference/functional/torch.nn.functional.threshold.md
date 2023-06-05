## [torch 参数更多]torch.nn.functional.threshold

### [torch.nn.functional.threshold](https://pytorch.org/docs/1.13/generated/torch.nn.functional.threshold.html#torch.nn.functional.threshold)

```python
torch.nn.functional.threshold(input, threshold, value, inplace=False)
```

### [paddle.nn.functional.thresholded_relu](https://www.paddlepaddle.org.cn/documentation/docs/zh/api/paddle/nn/functional/thresholded_relu_cn.html)

```python
paddle.nn.functional.thresholded_relu(x, threshold=1.0, name=None)
```

其中 PyTorch 相比 Paddle 支持更多其他参数，具体如下：

### 参数映射

| PyTorch   | PaddlePaddle | 备注                                                                                  |
| --------- | ------------ | ------------------------------------------------------------------------------------- |
| input     | x            | 输入的 Tensor，仅参数名不一致。                                                       |
| threshold | threshold    | thresholded_relu 激活计算公式中的 threshold 值。                                      |
| value     | -            | 用于替换的值，Paddle 无此参数，暂无转写方式。                                         |
| inplace   | -            | 表示在不更改变量的内存地址的情况下，直接修改变量的值，Paddle 无此参数，需要进行转写。 |

### 转写示例

#### inplace 参数：表示在不更改变量的内存地址的情况下，直接修改变量的值

```python
# PyTorch 写法:
torch.nn.functional.thresholded_relu(x, inplace=True)

# Paddle 写法:
paddle.assign(paddle.nn.functional.thresholded_relu(x), x)
```
