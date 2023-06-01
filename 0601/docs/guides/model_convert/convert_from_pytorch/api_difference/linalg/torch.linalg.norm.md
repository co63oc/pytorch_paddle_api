## [torch 参数更多]torch.linalg.norm

### [torch.linalg.norm](https://pytorch.org/docs/1.13/generated/torch.linalg.norm.html#torch.linalg.norm)

```python
torch.linalg.norm(A, ord=None, dim=None, keepdim=False, *, out=None, dtype=None)
```

### [paddle.linalg.norm](https://www.paddlepaddle.org.cn/documentation/docs/zh/api/paddle/linalg/norm_cn.html)

```python
paddle.linalg.norm(x, p='fro', axis=None, keepdim=False, name=None)
```

其中 PyTorch 相比 Paddle 支持更多其他参数，具体如下：

### 参数映射

| PyTorch | PaddlePaddle | 备注                                                |
| ------- | ------------ | --------------------------------------------------- |
| A       | x            | 输入 Tensor，仅参数名不一致。                       |
| ord     | p            | 范数(ord)的种类，仅参数名不一致。                   |
| dim     | axis         | 使用范数计算的轴，仅参数名不一致。                  |
| keepdim | keepdim      | 是否在输出的 Tensor 中保留和输入一样的维度。        |
| out     | -            | 表示输出的 Tensor，Paddle 无此参数，需要进行转写。 |
| dtype   | -            | 参数类型，Paddle 无此参数。需要进行转写。               |

### 转写示例

#### out 参数：输出的 Tensor

```python
# PyTorch 写法:
torch.linalg.norm(x, out=y)

# Paddle 写法:
paddle.assign(paddle.linalg.norm(x), y)
```

#### dtype 参数：参数类型

```python
# PyTorch 写法:
torch.linalg.norm(x, dtype=torch.float32)

# Paddle 写法:
paddle.linalg.norm(x).astype(paddle.float32)
```
