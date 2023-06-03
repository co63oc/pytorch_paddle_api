## [xxx 参数更多]torch.nn.LSTMCell

### [torch.nn.LSTMCell](https://pytorch.org/docs/1.13/generated/torch.nn.LSTMCell.html#torch.nn.LSTMCell)

```python
torch.nn.LSTMCell(input_size, hidden_size, bias=True, device=None, dtype=None)
```

### [paddle.nn.LSTMCell](https://www.paddlepaddle.org.cn/documentation/docs/zh/api/paddle/nn/LSTMCell_cn.html)

```python
paddle.nn.LSTMCell(input_size, hidden_size, weight_ih_attr=None, weight_hh_attr=None, bias_ih_attr=None, bias_hh_attr=None, name=None)
```

其中 xxx 相比 xxx 支持更多其他参数，具体如下：

### 参数映射

| PyTorch     | PaddlePaddle   | 备注                                                      |
| ----------- | -------------- | --------------------------------------------------------- |
| input_size  | input_size     | 输入的大小。                                              |
| hidden_size | hidden_size    | 隐藏状态大小。                                            |
| bias        | -              | 是否训练增加的 bias，Paddle 暂无转写方式。                |
| device      | -              | Tensor 的设备，Paddle 无此参数，需要进行转写。            |
| dtype       | -              | Tensor 的数据类型，Paddle 无此参数，需要进行转写。        |
| -           | weight_ih_attr | weight_ih 的参数，PyTorch 无此参数，Paddle 保持默认即可。 |
| -           | weight_hh_attr | weight_hh 的参数，PyTorch 无此参数，Paddle 保持默认即可。 |
| -           | bias_ih_attr   | bias_ih 的参数，PyTorch 无此参数，Paddle 保持默认即可。   |
| -           | bias_hh_attr   | bias_hh 的参数，PyTorch 无此参数，Paddle 保持默认即可。   |

### 转写示例

#### device 参数：Tensor 的设备

```python
# Pytorch 写法
y = torch.nn.LSTMCell(input_size, hidden_size, device=torch.device('cpu'))

# Paddle 写法
y = paddle.nn.LSTMCell(input_size, hidden_size)
y.cpu()
```

#### dtype 参数：Tensor 的数据类型

```python
# Pytorch 写法
y = torch.nn.LSTMCell(input_size, hidden_size, dtype=torch.float32)

# Paddle 写法
y = paddle.nn.LSTMCell(input_size, hidden_size).astype(paddle.float32)
```
