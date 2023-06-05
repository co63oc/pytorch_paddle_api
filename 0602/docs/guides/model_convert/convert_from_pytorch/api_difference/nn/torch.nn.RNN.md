## [torch 参数更多]torch.nn.RNN

### [torch.nn.RNN](https://pytorch.org/docs/1.13/generated/torch.nn.RNN.html#torch.nn.RNN)

```python
torch.nn.RNN(*args, **kwargs)
```

### [paddle.nn.RNN](https://www.paddlepaddle.org.cn/documentation/docs/zh/api/paddle/nn/RNN_cn.html)

```python
paddle.nn.RNN(cell, is_reverse=False, time_major=False)
```

其中 PyTorch 相比 Paddle 支持更多其他参数，具体如下：

### 参数映射

| PyTorch       | PaddlePaddle | 备注                                                                              |
| ------------- | ------------ | --------------------------------------------------------------------------------- |
| input_size    | -            | 输入 x 大小，Paddle 使用 cell 参数转写。                                          |
| hidden_size   | -            | 隐藏状态 h 大小，Paddle 使用 cell 参数转写。                                      |
| num_layers    | -            | 循环层数量，Paddle 无此参数，暂无转写方式。                                       |
| nonlinearity  | -            | 使用的非线性特征，Paddle 使用 cell 参数转写。                                     |
| bias          | -            | 是否使用 bias ，Paddle 无此参数，暂无转写方式。                                   |
| batch_first   | -            | 表示输入数据的第 0 维是否代表 batch_size，Paddle 无此参数，暂无转写方式。         |
| dropout       | -            | 包含 Dropout 层，Paddle 无此参数，暂无转写方式。                                  |
| bidirectional | -            | 是否双向 RNN，Paddle 无此参数，暂无转写方式。                                     |
| -             | cell         | RNNCellBase 类的一个实例，PyTorch 无此参数，Paddle 创建 RNNCellBase 类实例。      |
| -             | is_reverse   | 指定遍历 input 的方向，PyTorch 无此参数，Paddle 保持默认即可。                    |
| -             | time_major   | 指定 input 的第一个维度是否是 time steps，PyTorch 无此参数，Paddle 保持默认即可。 |

### 转写示例

#### cell 参数：RNNCellBase 类的一个实例

```python
# PyTorch 写法:
rnn = torch.nn.RNN(10, 20, 2, nonlinearity='tanh')

# Paddle 写法:
cell = paddle.nn.SimpleRNNCell(16, 32, activation='tanh')
rnn = paddle.nn.RNN(cell)
```
