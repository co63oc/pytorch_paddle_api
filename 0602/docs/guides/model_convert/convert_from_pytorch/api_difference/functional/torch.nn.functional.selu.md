## [torch 参数更多]torch.nn.functional.selu

### [torch.nn.functional.selu](https://pytorch.org/docs/1.13/generated/torch.nn.functional.selu.html#torch.nn.functional.selu)

```python
torch.nn.functional.selu(input, inplace=False)
```

### [paddle.nn.functional.selu](https://www.paddlepaddle.org.cn/documentation/docs/zh/api/paddle/nn/functional/selu_cn.html)

```python
paddle.nn.functional.selu(x, scale=1.0507009873554804934193349852946, alpha=1.6732632423543772848170429916717, name=None)
```

其中 PyTorch 相比 Paddle 支持更多其他参数，具体如下：

### 参数映射

| PyTorch | PaddlePaddle | 备注                                                                                  |
| ------- | ------------ | ------------------------------------------------------------------------------------- |
| input   | x            | 输入的 Tensor，仅参数名不一致。                                                       |
| inplace | -            | 表示在不更改变量的内存地址的情况下，直接修改变量的值，Paddle 无此参数，需要进行转写。 |
| -       | scale        | selu 激活计算公式中的 scale 值，PyTorch 无此参数，Paddle 保持默认即可。               |
| -       | alpha        | selu 激活计算公式中的 alpha 值，PyTorch 无此参数，Paddle 保持默认即可。               |

### 转写示例

#### inplace 参数：表示在不更改变量的内存地址的情况下，直接修改变量的值

```python
# PyTorch 写法:
torch.nn.functional.selu(x, inplace=True)

# Paddle 写法:
paddle.assign(paddle.nn.functional.selu(x), x)
```
