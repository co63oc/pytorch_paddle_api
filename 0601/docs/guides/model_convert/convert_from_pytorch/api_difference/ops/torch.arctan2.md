## [torch 参数更多]torch.arctan2

### [torch.arctan2](https://pytorch.org/docs/1.13/generated/torch.arctan2.html#torch.arctan2)

```python
torch.arctan2(input, other, *, out=None)
```

### [paddle.atan2](https://www.paddlepaddle.org.cn/documentation/docs/zh/api/paddle/atan2_cn.html)

```python
paddle.atan2(x, y, name=None)
```

其中 PyTorch 相比 Paddle 支持更多其他参数，具体如下：

### 参数映射

| PyTorch | PaddlePaddle | 备注                                               |
| ------- | ------------ | -------------------------------------------------- |
| input   | x            | 输入的 Tensor，仅参数名不一致。                    |
| other   | y            | 输入的 Tensor，仅参数名不一致。                    |
| out     | -            | 表示输出的 Tensor，Paddle 无此参数，需要进行转写。 |

### 转写示例

#### out 参数：输出的 Tensor

```python
# PyTorch 写法:
torch.arctan2(x1, x2, out=y)

# Paddle 写法:
paddle.assign(paddle.atan2(x1, x2), y)
```
