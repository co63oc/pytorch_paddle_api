## [torch 参数更多]torch.linalg.det

### [torch.linalg.det](https://pytorch.org/docs/1.13/generated/torch.linalg.det.html#torch.linalg.det)

```python
torch.linalg.det(A, *, out=None)
```

### [paddle.linalg.det](https://www.paddlepaddle.org.cn/documentation/docs/zh/api/paddle/linalg/det_cn.html)

```python
paddle.linalg.det(x)
```

其中 PyTorch 相比 Paddle 支持更多其他参数，具体如下：

### 参数映射

| PyTorch | PaddlePaddle | 备注                                                 |
| ------- | ------------ | ---------------------------------------------------- |
| A       | x            | 输入 Tensor，仅参数名不一致。                        |
| out     | -            | 表示输出的 Tensor ， Paddle 无此参数，需要进行转写。 |

### 转写示例

#### out 参数：输出的 Tensor

```python
# PyTorch 写法:
torch.linalg.det(x, out=y)

# Paddle 写法:
paddle.assign(paddle.linalg.det(x), y)
```