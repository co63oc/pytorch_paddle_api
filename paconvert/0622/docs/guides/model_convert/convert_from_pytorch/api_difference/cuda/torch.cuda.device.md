## [参数不一致]torch.cuda.device

### [torch.cuda.device](https://pytorch.org/docs/1.13/generated/torch.cuda.device.html#torch.cuda.device)

```python
torch.cuda.device(device)
```

### [paddle.CUDAPlace](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/CUDAPlace_cn.html)

```python
paddle.CUDAPlace(id)
```

其中 Pytorch 与 Paddle 的参数类型不一致，具体如下：

### 参数映射

| PyTorch | PaddlePaddle | 备注                                     |
| ------- | ------------ | ---------------------------------------- |
| device  | id           | PyTorch 比 Paddle 多 torch.device 类型。 |
