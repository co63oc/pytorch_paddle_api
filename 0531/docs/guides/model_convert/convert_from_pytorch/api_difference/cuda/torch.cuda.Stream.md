## [参数完全一致]torch.cuda.Stream

### [torch.cuda.Stream](https://pytorch.org/docs/1.13/generated/torch.cuda.Stream.html#torch.cuda.Stream)

```python
torch.cuda.Stream(device=None, priority=0, **kwargs)
```

### [paddle.device.cuda.Stream](https://www.paddlepaddle.org.cn/documentation/docs/zh/api/paddle/device/cuda/Stream_cn.html)

```python
paddle.device.cuda.Stream(device=None, priority=None)
```

两者功能一致，参数完全一致，具体如下：

### 参数映射

| PyTorch  | PaddlePaddle | 备注                     |
| -------- | ------------ | ------------------------ |
| device   | device       | 希望分配 stream 的设备。 |
| priority | priority     | stream 的优先级，PyTorch 取值范围为-1、0，Paddle 的取值范围为 1、2。 |
