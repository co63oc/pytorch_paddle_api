## [参数名不一致]torch.broadcast_shapes

### [torch.broadcast_shapes](https://pytorch.org/docs/1.13/generated/torch.broadcast_shapes.html#torch.broadcast_shapes)

```python
torch.broadcast_shapes(*shapes)
```

### [paddle.broadcast_shape](https://www.paddlepaddle.org.cn/documentation/docs/zh/api/paddle/broadcast_shape_cn.html)

```python
paddle.broadcast_shape(x_shape, y_shape)
```

其中功能一致, 仅参数名不一致，具体如下：

### 参数映射

| PyTorch | PaddlePaddle | 备注 |
| ------- | ------------ | ---- |
|    *shapes    |    x_shape, y_shape    |  输入 Tensor 的 shape，仅参数名不一致。 |
