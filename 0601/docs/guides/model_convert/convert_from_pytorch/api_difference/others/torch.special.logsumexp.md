## [torch 参数更多]torch.special.logsumexp

### [torch.special.logsumexp](https://pytorch.org/docs/1.13/special.html#torch.special.logsumexp)

```python
torch.special.logsumexp(input, dim, keepdim=False, *, out=None)
```

### [paddle.logsumexp](https://www.paddlepaddle.org.cn/documentation/docs/zh/api/paddle/logsumexp_cn.html)

```python
paddle.logsumexp(x, axis=None, keepdim=False, name=None)
```

其中 PyTorch 相比 Paddle 支持更多其他参数，具体如下：

### 参数映射

| PyTorch | PaddlePaddle | 备注                                                     |
| ------- | ------------ | -------------------------------------------------------- |
| input   | x            | 待联结的 Tensor list 或者 Tensor tuple，仅参数名不一致。 |
| dim     | axis         | 指定对输入 x 进行运算的轴，仅参数名不一致。              |
| keepdim | keepdim      | 是否在输出的 Tensor 中保留和输入一样的维度。             |
| out     | -            | 表示输出的 Tensor，Paddle 无此参数，需要进行转写。       |

### 转写示例

#### out 参数：输出的 Tensor

```python
# PyTorch 写法:
torch.special.logsumexp(x, out=y)

# Paddle 写法:
paddle.assign(paddle.logsumexp(x), y)
```