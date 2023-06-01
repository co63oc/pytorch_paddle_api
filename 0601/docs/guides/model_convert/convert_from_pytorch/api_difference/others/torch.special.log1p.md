## [torch 参数更多]torch.special.log1p

### [torch.special.log1p](https://pytorch.org/docs/1.13/special.html#torch.special.log1p)

```python
torch.special.log1p(input, *, out=None)
```

### [paddle.log1p](https://www.paddlepaddle.org.cn/documentation/docs/zh/api/paddle/log1p_cn.html)

```python
paddle.log1p(x, name=None)
```

其中 PyTorch 相比 Paddle 支持更多其他参数，具体如下：

### 参数映射

| PyTorch | PaddlePaddle | 备注                                               |
| ------- | ------------ | -------------------------------------------------- |
| input   | x            | 输入的 Tensor，仅参数名不一致。                    |
| out     | -            | 表示输出的 Tensor，Paddle 无此参数，需要进行转写。 |

### 转写示例

#### out 参数：输出的 Tensor

```python
# PyTorch 写法:
torch.special.log1p(x, out=y)

# Paddle 写法:
paddle.assign(paddle.log1p(x), y)
```