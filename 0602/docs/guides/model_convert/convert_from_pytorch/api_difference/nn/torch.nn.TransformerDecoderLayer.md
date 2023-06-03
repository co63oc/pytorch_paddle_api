## [参数完全一致]torch.nn.TransformerDecoderLayer

### [torch.nn.TransformerDecoderLayer](https://pytorch.org/docs/1.13/generated/torch.nn.TransformerDecoderLayer.html#torch.nn.TransformerDecoderLayer)

```python
torch.nn.TransformerDecoderLayer(d_model, nhead, dim_feedforward, dropout=0.1, activation='relu', attn_dropout=None, act_dropout=None, normalize_before=False, weight_attr=None, bias_attr=None)
```

### [paddle.nn.TransformerDecoderLayer](https://www.paddlepaddle.org.cn/documentation/docs/zh/api/paddle/nn/TransformerDecoderLayer_cn.html)

```python
paddle.nn.TransformerDecoderLayer(d_model, nhead, dim_feedforward, dropout=0.1, activation='relu', attn_dropout=None, act_dropout=None, normalize_before=False, weight_attr=None, bias_attr=None)
```

其中两者功能一致，参数完全一致，具体如下：

### 参数映射

| PyTorch          | PaddlePaddle     | 备注                                         |
| ---------------- | ---------------- | -------------------------------------------- |
| d_model          | d_model          | 输入输出的维度。                             |
| nhead            | nhead            | 多头注意力机制的 Head 数量。                 |
| dim_feedforward  | dim_feedforward  | 前馈神经网络中隐藏层的大小。                 |
| dropout          | dropout          | 对三个子层的输出进行处理的 dropout 值。      |
| activation       | activation       | 前馈神经网络的激活函数。                     |
| attn_dropout     | attn_dropout     | 多头自注意力机制中对注意力目标的随机失活率。 |
| act_dropout      | act_dropout      | 前馈神经网络的激活函数后的 dropout。         |
| normalize_before | normalize_before | 设置对每个子层的输入输出的处理。             |
| weight_attr      | weight_attr      | 指定权重参数属性的对象。                     |
| bias_attr        | bias_attr        | 指定偏置参数属性的对象。                     |
