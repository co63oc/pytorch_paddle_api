## [torch 参数更多]torch.distributed.get_rank

### [torch.distributed.get_rank](https://pytorch.org/docs/1.13/distributed.html#torch.distributed.get_rank)

```python
torch.distributed.get_rank(group=None)
```

### [paddle.distributed.get_rank](https://www.paddlepaddle.org.cn/documentation/docs/zh/api/paddle/distributed/get_rank_cn.html)

```python
paddle.distributed.get_rank()
```

其中 PyTorch 相比 Paddle 支持更多其他参数，具体如下：

### 参数映射

| PyTorch | PaddlePaddle | 备注                                                         |
| ------- | ------------ | ------------------------------------------------------------ |
| group   | -            | 进程组，Paddle 无此参数，一般对网络训练结果影响不大，可直接删除。 |
