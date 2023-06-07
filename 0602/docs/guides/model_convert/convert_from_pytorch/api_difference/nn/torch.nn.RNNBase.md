## [torch 参数更多]torch.nn.RNNBase

### [torch.nn.RNNBase](https://pytorch.org/docs/1.13/generated/torch.nn.RNNBase.html#torch.nn.RNNBase)

```python
torch.nn.RNNBase(mode, input_size, hidden_size, num_layers=1, bias=True, batch_first=False, dropout=0.0, bidirectional=False, proj_size=0, device=None, dtype=None)
```

### [paddle.nn.RNNCellBase](https://www.paddlepaddle.org.cn/documentation/docs/zh/api/paddle/nn/RNNCellBase_cn.html)

```python
paddle.nn.RNNCellBase(name_scope=None, dtype='float32')
```

需要调用 get_initial_states(batch_ref,shape=None,dtype=None,init_value=0.,batch_dim_idx=0) 生成初始状态。

其中 PyTorch 相比 Paddle 支持更多其他参数，具体如下：

### 参数映射

| PyTorch       | PaddlePaddle | 备注                                                                      |
| ------------- | ------------ | ------------------------------------------------------------------------- |
| mode          | -            | RNN 模式，Paddle 无此参数，暂无转写方式。                                 |
| input_size    | -            | 输入 x 大小，Paddle 无此参数，暂无转写方式。                              |
| hidden_size   | -            | 隐藏状态 h 大小，Paddle 无此参数，暂无转写方式。                          |
| num_layers    | -            | 循环层数量，Paddle 无此参数，暂无转写方式。                               |
| bias          | -            | 是否使用 bias ，Paddle 无此参数，暂无转写方式。                           |
| batch_first   | -            | 表示输入数据的第 0 维是否代表 batch_size，Paddle 无此参数，暂无转写方式。 |
| dropout       | -            | 包含 Dropout 层，Paddle 无此参数，暂无转写方式。                          |
| bidirectional | -            | 是否双向 RNN，Paddle 无此参数，暂无转写方式。                             |
| proj_size     | -            | 投影大小，Paddle 无此参数，暂无转写方式。                                 |
| device        | -            | Tensor 的设备，Paddle 无此参数，暂无转写方式。                            |
| dtype         | dtype        | Tensor 的数据类型。                                                       |
| -             | name_scope   | 取值名称范围，PyTorch 无此参数，Paddle 保持默认即可。                     |
