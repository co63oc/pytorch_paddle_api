## [参数名不一致]torch.nn.functional.gelu

### [torch.nn.functional.gelu](https://pytorch.org/docs/1.13/generated/torch.nn.functional.gelu.html#torch.nn.functional.gelu)

```python
torch.nn.functional.gelu(input, approximate='none')
```

### [paddle.nn.functional.gelu](https://www.paddlepaddle.org.cn/documentation/docs/zh/api/paddle/nn/functional/gelu_cn.html)

```python
paddle.nn.functional.gelu(x, approximate=False, name=None)
```

其中功能一致, 仅参数名不一致，具体如下：

### 参数映射

| PyTorch | PaddlePaddle | 备注 |
| ------- | ------------ | ---- |
|    input    |    x    |  输入的 Tensor，仅参数名不一致。 |
|    approximate    |    approximate    | 是否使用近似计算。 |
