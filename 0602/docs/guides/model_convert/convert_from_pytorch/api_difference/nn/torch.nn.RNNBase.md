## [torch 参数更多]torch.nn.RNNBase

### [torch.nn.RNNBase](https://pytorch.org/docs/1.13/generated/torch.nn.RNNBase.html#torch.nn.RNNBase)

```python
torch.nn.RNNBase(mode, input_size, hidden_size, num_layers=1, bias=True, batch_first=False, dropout=0.0, bidirectional=False, proj_size=0, device=None, dtype=None)
```

### [paddle.nn.RNNCellBase](https://www.paddlepaddle.org.cn/documentation/docs/zh/api/paddle/nn/RNNCellBase_cn.html)

```python
paddle.nn.RNNCellBase(name_scope=None, dtype='float32')
get_initial_states(batch_ref, shape=None, dtype=None, init_value=0., batch_dim_idx=0):
```

其中 PyTorch 相比 Paddle 支持更多其他参数，具体如下：

### 参数映射

| PyTorch       | PaddlePaddle  | 备注                                                                                            |
| ------------- | ------------- | ----------------------------------------------------------------------------------------------- |
| mode          | -             | RNN 模式，Paddle 暂无转写方式。                                                                 |
| input_size    | -             | 输入 x 大小，Paddle 使用 cell 参数转写。                                                        |
| hidden_size   | -             | 隐藏状态 h 大小，Paddle 使用 cell 参数转写。                                                    |
| num_layers    | -             | 循环层数量，Paddle 暂无转写方式。                                                               |
| bias          | -             | 是否使用 bias ，Paddle 暂无转写方式。                                                           |
| batch_first   | -             | 设置输入输出 Tensor 顺序，Paddle 暂无转写方式。                                                 |
| dropout       | -             | 包含 Dropout 层，Paddle 暂无转写方式。                                                          |
| bidirectional | -             | 是否双向 RNN，Paddle 暂无转写方式。                                                             |
| proj_size     | -             | 投影大小，Paddle 暂无转写方式。                                                                 |
| device        | -             | Tensor 的设备，Paddle 暂无转写方式。                                                            |
| dtype         | dtype         | Tensor 的数据类型。                                                                             |
| -             | name_scope    | 取值名称范围，PyTorch 无此参数，Paddle 保持默认即可。                                           |
| -             | batch_ref     | 一个 Tensor，其形状决定了生成初始状态使用的 batch_size，PyTorch 无此参数，Paddle 保持默认即可。 |
| -             | shape         | 隐藏层的形状，PyTorch 无此参数，Paddle 保持默认即可。                                           |
| -             | init_value    | 用于初始状态的浮点数值，PyTorch 无此参数，Paddle 保持默认即可。                                 |
| -             | batch_dim_idx | 用于指定 batch_size 在 batch_ref 的索引位置的整数值，PyTorch 无此参数，Paddle 保持默认即可。    |
