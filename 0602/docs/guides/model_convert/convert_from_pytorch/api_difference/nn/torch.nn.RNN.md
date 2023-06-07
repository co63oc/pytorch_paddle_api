## [torch 参数更多]torch.nn.RNN

### [torch.nn.RNN](https://pytorch.org/docs/1.13/generated/torch.nn.RNN.html#torch.nn.RNN)

```python
torch.nn.RNN(*args, **kwargs)
```

### [paddle.nn.SimpleRNNCell](https://www.paddlepaddle.org.cn/documentation/docs/zh/api/paddle/nn/SimpleRNNCell_cn.html)

```python
paddle.nn.SimpleRNNCell(input_size, hidden_size, activation='tanh', weight_ih_attr=None, weight_hh_attr=None, bias_ih_attr=None, bias_hh_attr=None, name=None)
```

其中 PyTorch 相比 Paddle 支持更多其他参数，具体如下：

### 参数映射

| PyTorch       | PaddlePaddle   | 备注                                                                      |
| ------------- | -------------- | ------------------------------------------------------------------------- |
| input_size    | input_size     | 输入 x 大小。                                                             |
| hidden_size   | hidden_size    | 隐藏状态 h 大小。                                                         |
| num_layers    | -              | 循环层数量，Paddle 无此参数，暂无转写方式。                               |
| nonlinearity  | activation     | 使用的非线性特征，仅参数名不一致。                                        |
| bias          | -              | 是否使用 bias ，Paddle 无此参数，暂无转写方式。                           |
| batch_first   | -              | 表示输入数据的第 0 维是否代表 batch_size，Paddle 无此参数，暂无转写方式。 |
| dropout       | -              | 包含 Dropout 层，Paddle 无此参数，暂无转写方式。                          |
| bidirectional | -              | 是否双向 RNN，Paddle 无此参数，暂无转写方式。                             |
| -             | weight_ih_attr | weight_ih 的参数，PyTorch 无此参数，Paddle 保持默认即可。                 |
| -             | weight_hh_attr | weight_hh 的参数，PyTorch 无此参数，Paddle 保持默认即可。                 |
| -             | bias_ih_attr   | bias_ih 的参数，PyTorch 无此参数，Paddle 保持默认即可。                   |
| -             | bias_hh_attr   | bias_hh 的参数，PyTorch 无此参数，Paddle 保持默认即可。                   |

### 转写示例

#### paddle.nn.RNN 的使用示例

```python
# PyTorch 写法:
rnn = torch.nn.RNN(10, 20, 2, nonlinearity='tanh')

# Paddle 写法:
cell = paddle.nn.SimpleRNNCell(16, 32, activation='tanh')
rnn = paddle.nn.RNN(cell)
```
