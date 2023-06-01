## [torch 参数更多]torch.Tensor.histogram

### [torch.Tensor.histogram](https://pytorch.org/docs/1.13/generated/torch.Tensor.histogram.html#torch.Tensor.histogram)

```python
torch.Tensor.histogram(bins, *, range=None, weight=None, density=False)
```

### [paddle.Tensor.histogram](https://www.paddlepaddle.org.cn/documentation/docs/zh/api/paddle/Tensor_cn.html#histogram-bins-100-min-0-max-0)

```python
paddle.Tensor.histogram(bins=100, min=0, max=0)
```

其中 PyTorch 相比 Paddle 支持更多其他参数，具体如下：

### 参数映射

| PyTorch | PaddlePaddle | 备注                                                           |
| ------- | ------------ | -------------------------------------------------------------- |
| bins    | bins         | 直方图 bins(直条)的个数。                                      |
| range   | min, max     | range 的下边界，上边界，仅参数名不一致。                       |
| weight  | -            | 权重，Paddle 无此参数，暂无转写方式。                          |
| density | -            | 结果中每个 bin 是否包含权重数，Paddle 无此参数，暂无转写方式。 |
