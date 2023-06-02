## [torch 参数更多]torch.Tensor.to

### [torch.Tensor.to](https://pytorch.org/docs/1.13/generated/torch.Tensor.to.html#torch.Tensor.to)

```python
torch.Tensor.to(dtype, non_blocking=False, copy=False, memory_format=torch.preserve_format)
```

### [paddle.Tensor.cast](https://www.paddlepaddle.org.cn/documentation/docs/zh/api/paddle/Tensor_cn.html#cast-dtype)

```python
paddle.Tensor.cast(dtype)
```

其中 PyTorch 相比 Paddle 支持更多其他参数，具体如下：

### 参数映射

| PyTorch       | PaddlePaddle | 备注                                                         |
| ------------- | ------------ | ------------------------------------------------------------ |
| dtype         | dtype        | 表示输出 Tensor 的数据类型。                                 |
| non_blocking  | -            | 控制 cpu 和 gpu 数据的异步复制，Paddle 无此参数，一般对网络训练结果影响不大，可直接删除。 |
| copy          | -            | 表示是否复制，Paddle 无此参数，一般对网络训练结果影响不大，可直接删除。 |
| memory_format | -            | 表示内存格式，Paddle 无此参数，一般对网络训练结果影响不大，可直接删除。 |
