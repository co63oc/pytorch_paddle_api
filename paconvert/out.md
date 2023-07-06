9  paddle.nanquantile not exists
141  paddle.fluid.core.nvprof_nvtx_push not exists
142  paddle.fluid.core.nvprof_nvtx_pop not exists
218  paddle.utils.profiler.profiler not exists
302  paddle.incubate.sparse.sparse_csr_tensor not exists
401  paddle.nn.Layer.clear_grad not exists
| pytorch | paddle | 有文档 |
| - | - | - |
| [004 torch.copysign](https://pytorch.org/docs/1.13/generated/torch.copysign.html#torch.copysign) |  |  |
| [030 torch.can_cast](https://pytorch.org/docs/1.13/generated/torch.can_cast.html#torch.can_cast) |  |  |
| [031 torch._assert](https://pytorch.org/docs/1.13/generated/torch._assert.html#torch._assert) |  |  |
| [032 torch.nn.ParameterDict](https://pytorch.org/docs/1.13/generated/torch.nn.ParameterDict.html#torch.nn.ParameterDict) |  |  |
| [033 torch.nn.modules.module.register_module_forward_pre_hook](https://pytorch.org/docs/1.13/generated/torch.nn.modules.module.register_module_forward_pre_hook.html#torch.nn.modules.module.register_module_forward_pre_hook) |  |  |
| [034 torch.nn.modules.module.register_module_forward_hook](https://pytorch.org/docs/1.13/generated/torch.nn.modules.module.register_module_forward_hook.html#torch.nn.modules.module.register_module_forward_hook) |  |  |
| [047 torch.testing.assert_close]() |  |  |
| [086 torch.Tensor.is_signed](https://pytorch.org/docs/1.13/generated/torch.Tensor.is_signed.html#torch.Tensor.is_signed) |  |  |
| [087 torch.Tensor.lstsq](https://pytorch.org/docs/1.13/generated/torch.Tensor.lstsq.html#torch.Tensor.lstsq) |  [paddle.Tensor.lstsq](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/Tensor_cn.html#{api_name}) |  |
| [088 torch.Tensor.lu_solve](https://pytorch.org/docs/1.13/generated/torch.Tensor.lu_solve.html#torch.Tensor.lu_solve) |  |  |
| [089 torch.Tensor.map_](https://pytorch.org/docs/1.13/generated/torch.Tensor.map_.html#torch.Tensor.map_) |  |  |
| [090 torch.Tensor.masked_scatter](https://pytorch.org/docs/1.13/generated/torch.Tensor.masked_scatter.html#torch.Tensor.masked_scatter) |  |  |
| [091 torch.Tensor.matrix_exp](https://pytorch.org/docs/1.13/generated/torch.Tensor.matrix_exp.html#torch.Tensor.matrix_exp) |  |  |
| [092 torch.Tensor.nan_to_num](https://pytorch.org/docs/1.13/generated/torch.Tensor.nan_to_num.html#torch.Tensor.nan_to_num) |  [paddle.Tensor.nan_to_num](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/Tensor_cn.html#nan-to-num) |  |
| [093 torch.Tensor.nextafter](https://pytorch.org/docs/1.13/generated/torch.Tensor.nextafter.html#torch.Tensor.nextafter) |  [paddle.Tensor.nextafter](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/Tensor_cn.html#{api_name}) |  |
| [097 torch.Tensor.resize_as_](https://pytorch.org/docs/1.13/generated/torch.Tensor.resize_as_.html#torch.Tensor.resize_as_) |  |  |
| [112 torch.autograd.set_grad_enabled](https://pytorch.org/docs/1.13/generated/torch.autograd.set_grad_enabled.html#torch.autograd.set_grad_enabled) |  |  |
| [113 torch.autograd.profiler.profile](https://pytorch.org/docs/1.13/generated/torch.autograd.profiler.profile.html#torch.autograd.profiler.profile) |  |  |
| [114 torch.autograd.backward](https://pytorch.org/docs/1.13/generated/torch.autograd.backward.html#torch.autograd.backward) |  [paddle.autograd.backward](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/autograd/backward_cn.html) | docs/guides/model_convert/convert_from_pytorch/api_difference/others/torch.autograd.backward.md |
| [115 torch.autograd.grad](https://pytorch.org/docs/1.13/generated/torch.autograd.grad.html#torch.autograd.grad) |  [paddle.grad](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/grad_cn.html) | docs/guides/model_convert/convert_from_pytorch/api_difference/others/torch.autograd.grad.md |
| [116 torch.autograd.functional.jacobian](https://pytorch.org/docs/1.13/generated/torch.autograd.functional.jacobian.html#torch.autograd.functional.jacobian) |  [paddle.incubate.autograd.Jacobian](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/incubate/autograd/Jacobian_cn.html) | docs/guides/model_convert/convert_from_pytorch/api_difference/others/torch.autograd.functional.jacobian.md |
| [117 torch.autograd.functional.hessian](https://pytorch.org/docs/1.13/generated/torch.autograd.functional.hessian.html#torch.autograd.functional.hessian) |  [paddle.incubate.autograd.Hessian](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/incubate/autograd/Hessian_cn.html) | docs/guides/model_convert/convert_from_pytorch/api_difference/others/torch.autograd.functional.hessian.md |
| [118 torch.autograd.functional.vjp](https://pytorch.org/docs/1.13/generated/torch.autograd.functional.vjp.html#torch.autograd.functional.vjp) |  [paddle.incubate.autograd.vjp](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/incubate/autograd/vjp_cn.html) | docs/guides/model_convert/convert_from_pytorch/api_difference/others/torch.autograd.functional.vjp.md |
| [119 torch.autograd.functional.jvp](https://pytorch.org/docs/1.13/generated/torch.autograd.functional.jvp.html#torch.autograd.functional.jvp) |  [paddle.incubate.autograd.jvp](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/incubate/autograd/jvp_cn.html) | docs/guides/model_convert/convert_from_pytorch/api_difference/others/torch.autograd.functional.jvp.md |
| [120 torch.cuda.device](https://pytorch.org/docs/1.13/generated/torch.cuda.device.html#torch.cuda.device) |  [paddle.CUDAPlace](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/CUDAPlace_cn.html) | docs/guides/model_convert/convert_from_pytorch/api_difference/cuda/torch.cuda.device.md |
| [121 torch.cuda.default_stream](https://pytorch.org/docs/1.13/generated/torch.cuda.default_stream.html#torch.cuda.default_stream) |  |  |
| [126 torch.cuda.get_rng_state_all](https://pytorch.org/docs/1.13/generated/torch.cuda.get_rng_state_all.html#torch.cuda.get_rng_state_all) |  [paddle.get_cuda_rng_state](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/get_cuda_rng_state_cn.html) | docs/guides/model_convert/convert_from_pytorch/api_difference/cuda/torch.cuda.get_rng_state_all.md |
| [127 torch.cuda.set_rng_state](https://pytorch.org/docs/1.13/generated/torch.cuda.set_rng_state.html#torch.cuda.set_rng_state) |  [paddle.set_cuda_rng_state](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/set_cuda_rng_state_cn.html) |  |
| [128 torch.cuda.set_rng_state_all](https://pytorch.org/docs/1.13/generated/torch.cuda.set_rng_state_all.html#torch.cuda.set_rng_state_all) |  [paddle.set_cuda_rng_state](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/set_cuda_rng_state_cn.html) | docs/guides/model_convert/convert_from_pytorch/api_difference/cuda/torch.cuda.set_rng_state_all.md |
| [129 torch.cuda.manual_seed_all](https://pytorch.org/docs/1.13/generated/torch.cuda.manual_seed_all.html#torch.cuda.manual_seed_all) |  |  |
| [130 torch.cuda.seed](https://pytorch.org/docs/1.13/generated/torch.cuda.seed.html#torch.cuda.seed) |  |  |
| [131 torch.cuda.seed_all](https://pytorch.org/docs/1.13/generated/torch.cuda.seed_all.html#torch.cuda.seed_all) |  |  |
| [132 torch.cuda.initial_seed](https://pytorch.org/docs/1.13/generated/torch.cuda.initial_seed.html#torch.cuda.initial_seed) |  |  |
| [133 torch.cuda.comm.broadcast](https://pytorch.org/docs/1.13/generated/torch.cuda.comm.broadcast.html#torch.cuda.comm.broadcast) |  [paddle.distributed.broadcast](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/distributed/broadcast_cn.html) | docs/guides/model_convert/convert_from_pytorch/api_difference/cuda/torch.cuda.comm.broadcast.md |
| [134 torch.cuda.comm.broadcast_coalesced](https://pytorch.org/docs/1.13/generated/torch.cuda.comm.broadcast_coalesced.html#torch.cuda.comm.broadcast_coalesced) |  |  |
| [135 torch.cuda.comm.reduce_add](https://pytorch.org/docs/1.13/generated/torch.cuda.comm.reduce_add.html#torch.cuda.comm.reduce_add) |  |  |
| [136 torch.cuda.comm.scatter](https://pytorch.org/docs/1.13/generated/torch.cuda.comm.scatter.html#torch.cuda.comm.scatter) |  |  |
| [137 torch.cuda.comm.gather](https://pytorch.org/docs/1.13/generated/torch.cuda.comm.gather.html#torch.cuda.comm.gather) |  |  |
| [138 torch.cuda.list_gpu_processes](https://pytorch.org/docs/1.13/generated/torch.cuda.list_gpu_processes.html#torch.cuda.list_gpu_processes) |  |  |
| [139 torch.cuda.memory_cached](https://pytorch.org/docs/1.13/generated/torch.cuda.memory_cached.html#torch.cuda.memory_cached) |  |  |
| [140 torch.cuda.max_memory_cached](https://pytorch.org/docs/1.13/generated/torch.cuda.max_memory_cached.html#torch.cuda.max_memory_cached) |  |  |
| [141 torch.cuda.nvtx.range_push](https://pytorch.org/docs/1.13/generated/torch.cuda.nvtx.range_push.html#torch.cuda.nvtx.range_push) |  [paddle.fluid.core.nvprof_nvtx_push]() |  |
| [142 torch.cuda.nvtx.range_pop](https://pytorch.org/docs/1.13/generated/torch.cuda.nvtx.range_pop.html#torch.cuda.nvtx.range_pop) |  [paddle.fluid.core.nvprof_nvtx_pop]() |  |
| [143 torch.distributed.Backend](https://pytorch.org/docs/1.13/distributed.html#torch.distributed.Backend) |  |  |
| [144 torch.distributed.ReduceOp](https://pytorch.org/docs/1.13/distributed.html#torch.distributed.ReduceOp) |  [paddle.distributed.ReduceOp](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/distributed/ReduceOp_cn.html) | docs/guides/model_convert/convert_from_pytorch/api_difference/distributed/torch.distributed.ReduceOp.md |
| [145 torch.distributed.reduce_op](https://pytorch.org/docs/1.13/distributed.html#torch.distributed.reduce_op) |  |  |
| [146 torch.distributed.get_backend](https://pytorch.org/docs/1.13/distributed.html#torch.distributed.get_backend) |  |  |
| [147 torch.distributed.send](https://pytorch.org/docs/1.13/distributed.html#torch.distributed.send) |  [paddle.distributed.send](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/distributed/send_cn.html) | docs/guides/model_convert/convert_from_pytorch/api_difference/distributed/torch.distributed.send.md |
| [148 torch.distributed.recv](https://pytorch.org/docs/1.13/distributed.html#torch.distributed.recv) |  [paddle.distributed.recv](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/distributed/recv_cn.html) | docs/guides/model_convert/convert_from_pytorch/api_difference/distributed/torch.distributed.recv.md |
| [149 torch.distributed.isend](https://pytorch.org/docs/1.13/distributed.html#torch.distributed.isend) |  [paddle.distributed.isend](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/distributed/isend_cn.html) |  |
| [150 torch.distributed.irecv](https://pytorch.org/docs/1.13/distributed.html#torch.distributed.irecv) |  [paddle.distributed.irecv](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/distributed/irecv_cn.html) |  |
| [151 torch.distributed.broadcast_object_list](https://pytorch.org/docs/1.13/distributed.html#torch.distributed.broadcast_object_list) |  |  |
| [152 torch.distributed.reduce](https://pytorch.org/docs/1.13/distributed.html#torch.distributed.reduce) |  [paddle.distributed.reduce](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/distributed/reduce_cn.html) | docs/guides/model_convert/convert_from_pytorch/api_difference/distributed/torch.distributed.reduce.md |
| [153 torch.distributed.all_gather_object](https://pytorch.org/docs/1.13/distributed.html#torch.distributed.all_gather_object) |  |  |
| [154 torch.distributed.gather_object](https://pytorch.org/docs/1.13/distributed.html#torch.distributed.gather_object) |  |  |
| [155 torch.distributed.scatter](https://pytorch.org/docs/1.13/distributed.html#torch.distributed.scatter) |  [paddle.distributed.scatter](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/distributed/scatter_cn.html) | docs/guides/model_convert/convert_from_pytorch/api_difference/distributed/torch.distributed.scatter.md |
| [156 torch.distributed.scatter_object_list](https://pytorch.org/docs/1.13/distributed.html#torch.distributed.scatter_object_list) |  |  |
| [157 torch.distributed.reduce_scatter](https://pytorch.org/docs/1.13/distributed.html#torch.distributed.reduce_scatter) |  |  |
| [158 torch.distributed.all_to_all](https://pytorch.org/docs/1.13/distributed.html#torch.distributed.all_to_all) |  [paddle.distributed.alltoall](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/distributed/alltoall_cn.html) | docs/guides/model_convert/convert_from_pytorch/api_difference/distributed/torch.distributed.all_to_all.md |
| [159 torch.distributed.broadcast_multigpu](https://pytorch.org/docs/1.13/distributed.html#torch.distributed.broadcast_multigpu) |  |  |
| [160 torch.distributed.all_reduce_multigpu](https://pytorch.org/docs/1.13/distributed.html#torch.distributed.all_reduce_multigpu) |  |  |
| [161 torch.distributed.reduce_multigpu](https://pytorch.org/docs/1.13/distributed.html#torch.distributed.reduce_multigpu) |  |  |
| [162 torch.distributed.all_gather_multigpu](https://pytorch.org/docs/1.13/distributed.html#torch.distributed.all_gather_multigpu) |  |  |
| [163 torch.distributed.reduce_scatter_multigpu](https://pytorch.org/docs/1.13/distributed.html#torch.distributed.reduce_scatter_multigpu) |  |  |
| [164 torch.distributions.distribution.Distribution](https://pytorch.org/docs/1.13/distributions.html#torch.distributions.distribution.Distribution) |  [paddle.distribution.Distribution](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/distribution/Distribution_cn.html) | docs/guides/model_convert/convert_from_pytorch/api_difference/distributions/torch.distributions.distribution.Distribution.md |
| [165 torch.distributions.exp_family.ExponentialFamily](https://pytorch.org/docs/1.13/distributions.html#torch.distributions.exp_family.ExponentialFamily) |  [paddle.distribution.ExponentialFamily](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/distribution/ExponentialFamily_cn.html) | docs/guides/model_convert/convert_from_pytorch/api_difference/distributions/torch.distributions.exp_family.ExponentialFamily.md |
| [166 torch.distributions.bernoulli.Bernoulli](https://pytorch.org/docs/1.13/distributions.html#torch.distributions.bernoulli.Bernoulli) |  |  |
| [167 torch.distributions.binomial.Binomial](https://pytorch.org/docs/1.13/distributions.html#torch.distributions.binomial.Binomial) |  |  |
| [168 torch.distributions.categorical.Categorical](https://pytorch.org/docs/1.13/distributions.html#torch.distributions.categorical.Categorical) |  [paddle.distribution.Categorical](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/distribution/Categorical_cn.html) | docs/guides/model_convert/convert_from_pytorch/api_difference/distributions/torch.distributions.categorical.Categorical.md |
| [169 torch.distributions.cauchy.Cauchy](https://pytorch.org/docs/1.13/distributions.html#torch.distributions.cauchy.Cauchy) |  [paddle.distribution.Cauchy](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/distribution/Cauchy_cn.html) |  |
| [170 torch.distributions.continuous_bernoulli.ContinuousBernoulli](https://pytorch.org/docs/1.13/distributions.html#torch.distributions.continuous_bernoulli.ContinuousBernoulli) |  |  |
| [171 torch.distributions.dirichlet.Dirichlet](https://pytorch.org/docs/1.13/distributions.html#torch.distributions.dirichlet.Dirichlet) |  [paddle.distribution.Dirichlet](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/distribution/Dirichlet_cn.html) | docs/guides/model_convert/convert_from_pytorch/api_difference/distributions/torch.distributions.dirichlet.Dirichlet.md |
| [172 torch.distributions.exponential.Exponential](https://pytorch.org/docs/1.13/distributions.html#torch.distributions.exponential.Exponential) |  |  |
| [173 torch.distributions.geometric.Geometric](https://pytorch.org/docs/1.13/distributions.html#torch.distributions.geometric.Geometric) |  |  |
| [174 torch.distributions.gumbel.Gumbel](https://pytorch.org/docs/1.13/distributions.html#torch.distributions.gumbel.Gumbel) |  |  |
| [175 torch.distributions.independent.Independent](https://pytorch.org/docs/1.13/distributions.html#torch.distributions.independent.Independent) |  [paddle.distribution.Independent](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/distribution/Independent_cn.html) | docs/guides/model_convert/convert_from_pytorch/api_difference/distributions/torch.distributions.independent.Independent.md |
| [176 torch.distributions.laplace.Laplace](https://pytorch.org/docs/1.13/distributions.html#torch.distributions.laplace.Laplace) |  |  |
| [177 torch.distributions.log_normal.LogNormal](https://pytorch.org/docs/1.13/distributions.html#torch.distributions.log_normal.LogNormal) |  |  |
| [178 torch.distributions.multinomial.Multinomial](https://pytorch.org/docs/1.13/distributions.html#torch.distributions.multinomial.Multinomial) |  [paddle.distribution.Multinomial](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/distribution/Multinomial_cn.html) | docs/guides/model_convert/convert_from_pytorch/api_difference/distributions/torch.distributions.multinomial.Multinomial.md |
| [179 torch.distributions.normal.Normal](https://pytorch.org/docs/1.13/distributions.html#torch.distributions.normal.Normal) |  [paddle.distribution.Normal](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/distribution/Normal_cn.html) | docs/guides/model_convert/convert_from_pytorch/api_difference/distributions/torch.distributions.normal.Normal.md |
| [180 torch.distributions.one_hot_categorical.OneHotCategorical](https://pytorch.org/docs/1.13/distributions.html#torch.distributions.one_hot_categorical.OneHotCategorical) |  |  |
| [181 torch.distributions.transformed_distribution.TransformedDistribution](https://pytorch.org/docs/1.13/distributions.html#torch.distributions.transformed_distribution.TransformedDistribution) |  |  |
| [182 torch.distributions.uniform.Uniform](https://pytorch.org/docs/1.13/distributions.html#torch.distributions.uniform.Uniform) |  [paddle.distribution.Uniform](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/distribution/Uniform_cn.html) | docs/guides/model_convert/convert_from_pytorch/api_difference/distributions/torch.distributions.uniform.Uniform.md |
| [183 torch.distributions.transforms.Transform](https://pytorch.org/docs/1.13/distributions.html#torch.distributions.transforms.Transform) |  |  |
| [184 torch.distributions.transforms.ComposeTransform](https://pytorch.org/docs/1.13/distributions.html#torch.distributions.transforms.ComposeTransform) |  [paddle.distribution.ChainTransform](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/distribution/ChainTransform_cn.html) | docs/guides/model_convert/convert_from_pytorch/api_difference/distributions/torch.distributions.transforms.ComposeTransform.md |
| [193 torch.distributions.transforms.SoftmaxTransform](https://pytorch.org/docs/1.13/distributions.html#torch.distributions.transforms.SoftmaxTransform) |  [paddle.distribution.SoftmaxTransform](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/distribution/SoftmaxTransform_cn.html) |  |
| [194 torch.distributions.transforms.StickBreakingTransform](https://pytorch.org/docs/1.13/distributions.html#torch.distributions.transforms.StickBreakingTransform) |  [paddle.distribution.StickBreakingTransform](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/distribution/StickBreakingTransform_cn.html) |  |
| [195 torch.distributions.transforms.StackTransform](https://pytorch.org/docs/1.13/distributions.html#torch.distributions.transforms.StackTransform) |  [paddle.distribution.StackTransform](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/distribution/StackTransform_cn.html) |  |
| [196 torch.distributions.constraints.Constraint](https://pytorch.org/docs/1.13/distributions.html#torch.distributions.constraints.Constraint) |  |  |
| [197 torch.distributions.constraint_registry.ConstraintRegistry](https://pytorch.org/docs/1.13/distributions.html#torch.distributions.constraint_registry.ConstraintRegistry) |  |  |
| [201 torch.hub.list](https://pytorch.org/docs/1.13/hub.html#torch.hub.list) |  [paddle.hub.list](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/hub/list_cn.html) | docs/guides/model_convert/convert_from_pytorch/api_difference/hub/torch.hub.list.md |
| [202 torch.hub.help](https://pytorch.org/docs/1.13/hub.html#torch.hub.help) |  [paddle.hub.help](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/hub/help_cn.html) | docs/guides/model_convert/convert_from_pytorch/api_difference/hub/torch.hub.help.md |
| [203 torch.hub.load](https://pytorch.org/docs/1.13/hub.html#torch.hub.load) |  [paddle.hub.load](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/hub/load_cn.html) | docs/guides/model_convert/convert_from_pytorch/api_difference/hub/torch.hub.load.md |
| [204 torch.hub.download_url_to_file](https://pytorch.org/docs/1.13/hub.html#torch.hub.download_url_to_file) |  [paddle.utils.download.get_weights_path_from_url](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/utils/download/get_weights_path_from_url_cn.html) | docs/guides/model_convert/convert_from_pytorch/api_difference/hub/torch.hub.download_url_to_file.md |
| [205 torch.hub.get_dir](https://pytorch.org/docs/1.13/hub.html#torch.hub.get_dir) |  |  |
| [206 torch.hub.set_dir](https://pytorch.org/docs/1.13/hub.html#torch.hub.set_dir) |  |  |
| [207 torch.jit.trace_module](https://pytorch.org/docs/1.13/generated/torch.jit.trace_module.html#torch.jit.trace_module) |  |  |
| [208 torch.linalg.cond](https://pytorch.org/docs/1.13/generated/torch.linalg.cond.html#torch.linalg.cond) |  [paddle.linalg.cond](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/linalg/cond_cn.html) | docs/guides/model_convert/convert_from_pytorch/api_difference/linalg/torch.linalg.cond.md |
| [215 torch.linalg.tensorsolve](https://pytorch.org/docs/1.13/generated/torch.linalg.tensorsolve.html#torch.linalg.tensorsolve) |  |  |
| [216 torch.linalg.inv](https://pytorch.org/docs/1.13/generated/torch.linalg.inv.html#torch.linalg.inv) |  [paddle.linalg.inv](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/linalg/inv_cn.html) | docs/guides/model_convert/convert_from_pytorch/api_difference/linalg/torch.linalg.inv.md |
| [217 torch.linalg.qr](https://pytorch.org/docs/1.13/generated/torch.linalg.qr.html#torch.linalg.qr) |  [paddle.linalg.qr](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/linalg/qr_cn.html) | docs/guides/model_convert/convert_from_pytorch/api_difference/linalg/torch.linalg.qr.md |
| [218 torch.profiler.profile](https://pytorch.org/docs/1.13/profiler.html#torch.profiler.profile) |  [paddle.utils.profiler.profiler]() | docs/guides/model_convert/convert_from_pytorch/api_difference/others/torch.profiler.profile.md |
| [219 torch.profiler.schedule](https://pytorch.org/docs/1.13/profiler.html#torch.profiler.schedule) |  [paddle.profiler.make_scheduler](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/profiler/make_scheduler_cn.html) | docs/guides/model_convert/convert_from_pytorch/api_difference/others/torch.profiler.schedule.md |
| [220 torch.nn.init.calculate_gain](https://pytorch.org/docs/1.13/nn.init.html#torch.nn.init.calculate_gain) |  [paddle.nn.initializer.calculate_gain](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/nn/initializer/calculate_gain_cn.html) | docs/guides/model_convert/convert_from_pytorch/api_difference/init/torch.nn.init.calculate_gain.md |
| [221 torch.distributed.rpc.WorkerInfo](https://pytorch.org/docs/1.13/distributed.html#torch.distributed.rpc.WorkerInfo) |  |  |
| [222 torch.distributed.rpc.rpc_sync](https://pytorch.org/docs/1.13/distributed.html#torch.distributed.rpc.rpc_sync) |  |  |
| [223 torch.distributed.rpc.rpc_async](https://pytorch.org/docs/1.13/distributed.html#torch.distributed.rpc.rpc_async) |  |  |
| [224 torch.distributed.rpc.get_worker_info](https://pytorch.org/docs/1.13/distributed.html#torch.distributed.rpc.get_worker_info) |  |  |
| [225 torch.distributed.rpc.shutdown](https://pytorch.org/docs/1.13/distributed.html#torch.distributed.rpc.shutdown) |  |  |
| [226 torch.distributed.rpc.functions.async_execution](https://pytorch.org/docs/1.13/distributed.html#torch.distributed.rpc.functions.async_execution) |  |  |
| [227 torch.random.initial_seed](https://pytorch.org/docs/1.13/random.html#torch.random.initial_seed) |  |  |
| [228 torch.sparse.addmm](https://pytorch.org/docs/1.13/generated/torch.sparse.addmm.html#torch.sparse.addmm) |  [paddle.sparse.addmm](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/sparse/addmm_cn.html) | docs/guides/model_convert/convert_from_pytorch/api_difference/sparse/torch.sparse.addmm.md |
| [229 torch.sparse.mm](https://pytorch.org/docs/1.13/generated/torch.sparse.mm.html#torch.sparse.mm) |  [paddle.sparse.matmul](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/sparse/matmul_cn.html) | docs/guides/model_convert/convert_from_pytorch/api_difference/sparse/torch.sparse.mm.md |
| [230 torch.sparse.softmax](https://pytorch.org/docs/1.13/generated/torch.sparse.softmax.html#torch.sparse.softmax) |  [paddle.sparse.nn.functional.softmax](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/sparse/nn/functional/softmax_cn.html) | docs/guides/model_convert/convert_from_pytorch/api_difference/sparse/torch.sparse.softmax.md |
| [231 torch.utils.cpp_extension.load](https://pytorch.org/docs/1.13/cpp_extension.html#torch.utils.cpp_extension.load) |  [paddle.utils.cpp_extension.load](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/utils/cpp_extension/load_cn.html) | docs/guides/model_convert/convert_from_pytorch/api_difference/utils/torch.utils.cpp_extension.load.md |
| [232 torch.utils.cpp_extension.load_inline](https://pytorch.org/docs/1.13/cpp_extension.html#torch.utils.cpp_extension.load_inline) |  |  |
| [233 torch.utils.cpp_extension.include_paths](https://pytorch.org/docs/1.13/cpp_extension.html#torch.utils.cpp_extension.include_paths) |  |  |
| [234 torch.utils.data.TensorDataset](https://pytorch.org/docs/1.13/data.html#torch.utils.data.TensorDataset) |  [paddle.io.TensorDataset](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/io/TensorDataset_cn.html) | docs/guides/model_convert/convert_from_pytorch/api_difference/utils/torch.utils.data.TensorDataset.md |
| [235 torch.utils.data.ConcatDataset](https://pytorch.org/docs/1.13/data.html#torch.utils.data.ConcatDataset) |  [paddle.io.ComposeDataset](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/io/ComposeDataset_cn.html) |  |
| [236 torch.utils.data.ChainDataset](https://pytorch.org/docs/1.13/data.html#torch.utils.data.ChainDataset) |  [paddle.io.ChainDataset](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/io/ChainDataset_cn.html) | docs/guides/model_convert/convert_from_pytorch/api_difference/utils/torch.utils.data.ChainDataset.md |
| [237 torch.utils.data.Subset](https://pytorch.org/docs/1.13/data.html#torch.utils.data.Subset) |  [paddle.io.Subset](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/io/Subset_cn.html) | docs/guides/model_convert/convert_from_pytorch/api_difference/utils/torch.utils.data.Subset.md |
| [238 torch.utils.data.SubsetRandomSampler](https://pytorch.org/docs/1.13/data.html#torch.utils.data.SubsetRandomSampler) |  |  |
| [239 torch.utils.data.get_worker_info](https://pytorch.org/docs/1.13/data.html#torch.utils.data.get_worker_info) |  [paddle.io.get_worker_info](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/io/get_worker_info_cn.html) |  |
| [243 torch.linalg.inv_ex](https://pytorch.org/docs/1.13/generated/torch.linalg.inv_ex.html#torch.linalg.inv_ex) |  |  |
| [244 torch.testing.assert_close]() |  |  |
| [245 torch.take_along_dim](https://pytorch.org/docs/1.13/generated/torch.take_along_dim.html#torch.take_along_dim) |  [paddle.take_along_axis](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/take_along_axis_cn.html) | docs/guides/model_convert/convert_from_pytorch/api_difference/ops/torch.take_along_dim.md |
| [246 torch.nn.LazyBatchNorm1d](https://pytorch.org/docs/1.13/generated/torch.nn.LazyBatchNorm1d.html#torch.nn.LazyBatchNorm1d) |  |  |
| [247 torch.Tensor.sparse_resize_and_clear_](https://pytorch.org/docs/1.13/generated/torch.Tensor.sparse_resize_and_clear_.html#torch.Tensor.sparse_resize_and_clear_) |  |  |
| [248 torch.linalg.svdvals](https://pytorch.org/docs/1.13/generated/torch.linalg.svdvals.html#torch.linalg.svdvals) |  [paddle.linalg.svd](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/linalg/svd_cn.html) |  |
| [249 torch.Tensor.take_along_dim](https://pytorch.org/docs/1.13/generated/torch.Tensor.take_along_dim.html#torch.Tensor.take_along_dim) |  [paddle.Tensor.take_along_axis](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/Tensor_cn.html#take-along-axis-arr-index-axis) | docs/guides/model_convert/convert_from_pytorch/api_difference/Tensor/torch.Tensor.take_along_dim.md |
| [250 torch.linalg.matrix_power](https://pytorch.org/docs/1.13/generated/torch.linalg.matrix_power.html#torch.linalg.matrix_power) |  [paddle.linalg.matrix_power](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/linalg/matrix_power_cn.html) | docs/guides/model_convert/convert_from_pytorch/api_difference/linalg/torch.linalg.matrix_power.md |
| [251 torch.linalg.matrix_norm](https://pytorch.org/docs/1.13/generated/torch.linalg.matrix_norm.html#torch.linalg.matrix_norm) |  |  |
| [252 torch.dsplit](https://pytorch.org/docs/1.13/generated/torch.dsplit.html#torch.dsplit) |  [paddle.split](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/split_cn.html) | docs/guides/model_convert/convert_from_pytorch/api_difference/ops/torch.dsplit.md |
| [253 torch.autograd.profiler.profile.export_chrome_trace](https://pytorch.org/docs/1.13/generated/torch.autograd.profiler.profile.export_chrome_trace.html#torch.autograd.profiler.profile.export_chrome_trace) |  [paddle.profiler.export_chrome_tracing](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/profiler/export_chrome_tracing_cn.html) |  |
| [254 torch.gradient](https://pytorch.org/docs/1.13/generated/torch.gradient.html#torch.gradient) |  |  |
| [255 torch.special.gammaln](https://pytorch.org/docs/1.13/special.html#torch.special.gammaln) |  |  |
| [256 torch.special.expm1](https://pytorch.org/docs/1.13/special.html#torch.special.expm1) |  [paddle.expm1](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/expm1_cn.html) | docs/guides/model_convert/convert_from_pytorch/api_difference/others/torch.special.expm1.md |
| [257 torch.nn.utils.parametrize.is_parametrized](https://pytorch.org/docs/1.13/generated/torch.nn.utils.parametrize.is_parametrized.html#torch.nn.utils.parametrize.is_parametrized) |  |  |
| [258 torch.nn.HuberLoss](https://pytorch.org/docs/1.13/generated/torch.nn.HuberLoss.html#torch.nn.HuberLoss) |  [paddle.nn.SmoothL1Loss](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/nn/SmoothL1Loss_cn.html) |  |
| [259 torch.special.erfc](https://pytorch.org/docs/1.13/special.html#torch.special.erfc) |  |  |
| [260 torch.linalg.vector_norm](https://pytorch.org/docs/1.13/generated/torch.linalg.vector_norm.html#torch.linalg.vector_norm) |  |  |
| [261 torch.special.i0e](https://pytorch.org/docs/1.13/special.html#torch.special.i0e) |  [paddle.i0e](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/i0e_cn.html) |  |
| [262 torch.nn.functional.group_norm](https://pytorch.org/docs/1.13/generated/torch.nn.functional.group_norm.html#torch.nn.functional.group_norm) |  |  |
| [263 torch.special.erfinv](https://pytorch.org/docs/1.13/special.html#torch.special.erfinv) |  [paddle.erfinv](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/erfinv_cn.html) |  |
| [264 torch.special.logit](https://pytorch.org/docs/1.13/special.html#torch.special.logit) |  [paddle.logit](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/logit_cn.html) |  |
| [265 torch.special.expit](https://pytorch.org/docs/1.13/special.html#torch.special.expit) |  |  |
| [266 torch.nn.Mish](https://pytorch.org/docs/1.13/generated/torch.nn.Mish.html#torch.nn.Mish) |  [paddle.nn.Mish](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/nn/Mish_cn.html) |  |
| [267 torch.linalg.multi_dot](https://pytorch.org/docs/1.13/generated/torch.linalg.multi_dot.html#torch.linalg.multi_dot) |  [paddle.linalg.multi_dot](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/linalg/multi_dot_cn.html) | docs/guides/model_convert/convert_from_pytorch/api_difference/linalg/torch.linalg.multi_dot.md |
| [268 torch.linalg.cholesky_ex](https://pytorch.org/docs/1.13/generated/torch.linalg.cholesky_ex.html#torch.linalg.cholesky_ex) |  |  |
| [269 torch.Tensor.sparse_resize_](https://pytorch.org/docs/1.13/generated/torch.Tensor.sparse_resize_.html#torch.Tensor.sparse_resize_) |  |  |
| [270 torch.positive](https://pytorch.org/docs/1.13/generated/torch.positive.html#torch.positive) |  |  |
| [271 torch.vsplit](https://pytorch.org/docs/1.13/generated/torch.vsplit.html#torch.vsplit) |  [paddle.split](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/split_cn.html) |  |
| [272 torch.nn.functional.mish](https://pytorch.org/docs/1.13/generated/torch.nn.functional.mish.html#torch.nn.functional.mish) |  [paddle.nn.functional.mish](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/nn/functional/mish_cn.html) | docs/guides/model_convert/convert_from_pytorch/api_difference/functional/torch.nn.functional.mish.md |
| [273 torch.hsplit](https://pytorch.org/docs/1.13/generated/torch.hsplit.html#torch.hsplit) |  [paddle.split](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/split_cn.html) |  |
| [274 torch.Tensor.is_coalesced](https://pytorch.org/docs/1.13/generated/torch.Tensor.is_coalesced.html#torch.Tensor.is_coalesced) |  [paddle.Tensor.is_coalesced](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/Tensor_cn.html#{api_name}) |  |
| [275 torch.special.exp2](https://pytorch.org/docs/1.13/special.html#torch.special.exp2) |  |  |
| [276 torch.nn.utils.parametrizations.spectral_norm](https://pytorch.org/docs/1.13/generated/torch.nn.utils.parametrizations.spectral_norm.html#torch.nn.utils.parametrizations.spectral_norm) |  |  |
| [277 torch.cuda.StreamContext](https://pytorch.org/docs/1.13/generated/torch.cuda.StreamContext.html#torch.cuda.StreamContext) |  |  |
| [278 torch.nn.LazyBatchNorm2d](https://pytorch.org/docs/1.13/generated/torch.nn.LazyBatchNorm2d.html#torch.nn.LazyBatchNorm2d) |  |  |
| [279 torch.nn.functional.gaussian_nll_loss](https://pytorch.org/docs/1.13/generated/torch.nn.functional.gaussian_nll_loss.html#torch.nn.functional.gaussian_nll_loss) |  |  |
| [280 torch.Tensor.hsplit](https://pytorch.org/docs/1.13/generated/torch.Tensor.hsplit.html#torch.Tensor.hsplit) |  [paddle.Tensor.split](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/Tensor_cn.html#split-num-or-sections-axis-0-name-none) |  |
| [281 torch.autograd.profiler.profile.self_cpu_time_total](https://pytorch.org/docs/1.13/generated/torch.autograd.profiler.profile.self_cpu_time_total.html#torch.autograd.profiler.profile.self_cpu_time_total) |  |  |
| [282 torch.frexp](https://pytorch.org/docs/1.13/generated/torch.frexp.html#torch.frexp) |  [paddle.frexp](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/frexp_cn.html) | docs/guides/model_convert/convert_from_pytorch/api_difference/ops/torch.frexp.md |
| [283 torch.Tensor.vsplit](https://pytorch.org/docs/1.13/generated/torch.Tensor.vsplit.html#torch.Tensor.vsplit) |  [paddle.Tensor.split](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/Tensor_cn.html#split-num-or-sections-axis-0-name-none) |  |
| [284 torch.profiler.ProfilerActivity](https://pytorch.org/docs/1.13/profiler.html#torch.profiler.ProfilerActivity) |  |  |
| [285 torch.nn.functional.huber_loss](https://pytorch.org/docs/1.13/generated/torch.nn.functional.huber_loss.html#torch.nn.functional.huber_loss) |  [paddle.nn.functional.smooth_l1_loss](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/nn/functional/smooth_l1_loss_cn.html) |  |
| [286 torch.special.entr](https://pytorch.org/docs/1.13/special.html#torch.special.entr) |  |  |
| [287 torch.nn.LazyBatchNorm3d](https://pytorch.org/docs/1.13/generated/torch.nn.LazyBatchNorm3d.html#torch.nn.LazyBatchNorm3d) |  |  |
| [288 torch.autograd.function.FunctionCtx.mark_dirty](https://pytorch.org/docs/1.13/generated/torch.autograd.function.FunctionCtx.mark_dirty.html#torch.autograd.function.FunctionCtx.mark_dirty) |  |  |
| [289 torch.autograd.function.FunctionCtx.mark_non_differentiable](https://pytorch.org/docs/1.13/generated/torch.autograd.function.FunctionCtx.mark_non_differentiable.html#torch.autograd.function.FunctionCtx.mark_non_differentiable) |  |  |
| [290 torch.autograd.Function.forward](https://pytorch.org/docs/1.13/generated/torch.autograd.Function.forward.html#torch.autograd.Function.forward) |  |  |
| [291 torch.autograd.function.Function](https://pytorch.org/docs/1.13/generated/torch.autograd.function.Function.html#torch.autograd.function.Function) |  |  |
| [292 torch.autograd.function.FunctionCtx.set_materialize_grads](https://pytorch.org/docs/1.13/generated/torch.autograd.function.FunctionCtx.set_materialize_grads.html#torch.autograd.function.FunctionCtx.set_materialize_grads) |  |  |
| [293 torch.autograd.function.FunctionCtx.save_for_backward](https://pytorch.org/docs/1.13/generated/torch.autograd.function.FunctionCtx.save_for_backward.html#torch.autograd.function.FunctionCtx.save_for_backward) |  |  |
| [294 torch.autograd.Function.backward](https://pytorch.org/docs/1.13/generated/torch.autograd.Function.backward.html#torch.autograd.Function.backward) |  |  |
| [295 torch.profiler.ProfilerAction](https://pytorch.org/docs/1.13/profiler.html#torch.profiler.ProfilerAction) |  |  |
| [296 torch.cuda.set_stream](https://pytorch.org/docs/1.13/generated/torch.cuda.set_stream.html#torch.cuda.set_stream) |  [paddle.device.set_stream](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/device/set_stream_cn.html) |  |
| [297 torch.Tensor.dsplit](https://pytorch.org/docs/1.13/generated/torch.Tensor.dsplit.html#torch.Tensor.dsplit) |  [paddle.Tensor.split](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/Tensor_cn.html#split-num-or-sections-axis-0-name-none) |  |
| [298 torch.Tensor.bitwise_right_shift](https://pytorch.org/docs/1.13/generated/torch.Tensor.bitwise_right_shift.html#torch.Tensor.bitwise_right_shift) |  |  |
| [299 torch.cumulative_trapezoid](https://pytorch.org/docs/1.13/generated/torch.cumulative_trapezoid.html#torch.cumulative_trapezoid) |  [paddle.cumulative_trapezoid](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/cumulative_trapezoid_cn.html) |  |
| [300 torch.autograd.graph.saved_tensors_hooks](https://pytorch.org/docs/1.13/generated/torch.autograd.graph.saved_tensors_hooks.html#torch.autograd.graph.saved_tensors_hooks) |  |  |
| [301 torch.bitwise_right_shift](https://pytorch.org/docs/1.13/generated/torch.bitwise_right_shift.html#torch.bitwise_right_shift) |  |  |
| [302 torch.sparse_csr_tensor](https://pytorch.org/docs/1.13/generated/torch.sparse_csr_tensor.html#torch.sparse_csr_tensor) |  [paddle.incubate.sparse.sparse_csr_tensor]() |  |
| [303 torch.special.erfcx](https://pytorch.org/docs/1.13/special.html#torch.special.erfcx) |  |  |
| [304 torch.resolve_conj](https://pytorch.org/docs/1.13/generated/torch.resolve_conj.html#torch.resolve_conj) |  |  |
| [305 torch.special.i1](https://pytorch.org/docs/1.13/special.html#torch.special.i1) |  [paddle.i1](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/i1_cn.html) |  |
| [306 torch.special.multigammaln](https://pytorch.org/docs/1.13/special.html#torch.special.multigammaln) |  |  |
| [307 torch.autocast](https://pytorch.org/docs/1.13/generated/torch.autocast.html#torch.autocast) |  |  |
| [308 torch.testing.make_tensor]() |  |  |
| [309 torch.trapezoid](https://pytorch.org/docs/1.13/generated/torch.trapezoid.html#torch.trapezoid) |  |  |
| [310 torch.nn.LazyInstanceNorm2d](https://pytorch.org/docs/1.13/generated/torch.nn.LazyInstanceNorm2d.html#torch.nn.LazyInstanceNorm2d) |  |  |
| [311 torch.nn.LazyInstanceNorm1d](https://pytorch.org/docs/1.13/generated/torch.nn.LazyInstanceNorm1d.html#torch.nn.LazyInstanceNorm1d) |  |  |
| [312 torch.resolve_neg](https://pytorch.org/docs/1.13/generated/torch.resolve_neg.html#torch.resolve_neg) |  |  |
| [313 torch.Tensor.bitwise_left_shift](https://pytorch.org/docs/1.13/generated/torch.Tensor.bitwise_left_shift.html#torch.Tensor.bitwise_left_shift) |  |  |
| [314 torch.bitwise_left_shift](https://pytorch.org/docs/1.13/generated/torch.bitwise_left_shift.html#torch.bitwise_left_shift) |  |  |
| [315 torch.Tensor.resolve_conj](https://pytorch.org/docs/1.13/generated/torch.Tensor.resolve_conj.html#torch.Tensor.resolve_conj) |  |  |
| [316 torch.special.i1e](https://pytorch.org/docs/1.13/special.html#torch.special.i1e) |  [paddle.i1e](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/i1e_cn.html) |  |
| [317 torch.special.i0](https://pytorch.org/docs/1.13/special.html#torch.special.i0) |  [paddle.i0](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/i0_cn.html) |  |
| [318 torch.special.log_softmax](https://pytorch.org/docs/1.13/special.html#torch.special.log_softmax) |  [paddle.nn.functional.log_softmax](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/nn/functional/log_softmax_cn.html) | docs/guides/model_convert/convert_from_pytorch/api_difference/others/torch.special.log_softmax.md |
| [319 torch.histogram](https://pytorch.org/docs/1.13/generated/torch.histogram.html#torch.histogram) |  [paddle.histogram](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/histogram_cn.html) |  |
| [320 torch.Tensor.resolve_neg](https://pytorch.org/docs/1.13/generated/torch.Tensor.resolve_neg.html#torch.Tensor.resolve_neg) |  |  |
| [321 torch.isin](https://pytorch.org/docs/1.13/generated/torch.isin.html#torch.isin) |  |  |
| [322 torch.Tensor.corrcoef](https://pytorch.org/docs/1.13/generated/torch.Tensor.corrcoef.html#torch.Tensor.corrcoef) |  [paddle.Tensor.corrcoef](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/Tensor_cn.html#{api_name}) |  |
| [323 torch.nn.GLU](https://pytorch.org/docs/1.13/generated/torch.nn.GLU.html#torch.nn.GLU) |  [paddle.nn.functional.glu](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/nn/functional/glu_cn.html) |  |
| [324 torch.corrcoef](https://pytorch.org/docs/1.13/generated/torch.corrcoef.html#torch.corrcoef) |  [paddle.linalg.corrcoef](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/linalg/corrcoef_cn.html) | docs/guides/model_convert/convert_from_pytorch/api_difference/ops/torch.corrcoef.md |
| [325 torch.Tensor.is_conj](https://pytorch.org/docs/1.13/generated/torch.Tensor.is_conj.html#torch.Tensor.is_conj) |  |  |
| [326 torch.Tensor.histogram](https://pytorch.org/docs/1.13/generated/torch.Tensor.histogram.html#torch.Tensor.histogram) |  [paddle.Tensor.histogram](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/Tensor_cn.html#histogram-bins-100-min-0-max-0) | docs/guides/model_convert/convert_from_pytorch/api_difference/Tensor/torch.Tensor.histogram.md |
| [327 torch.Tensor.retains_grad](https://pytorch.org/docs/1.13/generated/torch.Tensor.retains_grad.html#torch.Tensor.retains_grad) |  [paddle.Tensor.retain_grads](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/Tensor_cn.html#{api_name}) |  |
| [328 torch.distributed.monitored_barrier](https://pytorch.org/docs/1.13/distributed.html#torch.distributed.monitored_barrier) |  |  |
| [329 torch.Tensor.bitwise_left_shift_](https://pytorch.org/docs/1.13/generated/torch.Tensor.bitwise_left_shift_.html#torch.Tensor.bitwise_left_shift_) |  |  |
| [330 torch.special.xlogy](https://pytorch.org/docs/1.13/special.html#torch.special.xlogy) |  |  |
| [331 torch.Tensor.conj_physical](https://pytorch.org/docs/1.13/generated/torch.Tensor.conj_physical.html#torch.Tensor.conj_physical) |  |  |
| [332 torch.Tensor.bitwise_right_shift_](https://pytorch.org/docs/1.13/generated/torch.Tensor.bitwise_right_shift_.html#torch.Tensor.bitwise_right_shift_) |  |  |
| [333 torch.special.polygamma](https://pytorch.org/docs/1.13/special.html#torch.special.polygamma) |  [paddle.polygamma](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/polygamma_cn.html) |  |
| [334 torch.special.round](https://pytorch.org/docs/1.13/special.html#torch.special.round) |  [paddle.round](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/round_cn.html) | docs/guides/model_convert/convert_from_pytorch/api_difference/others/torch.special.round.md |
| [335 torch.nn.LazyInstanceNorm3d](https://pytorch.org/docs/1.13/generated/torch.nn.LazyInstanceNorm3d.html#torch.nn.LazyInstanceNorm3d) |  |  |
| [336 torch.optim.lr_scheduler.LinearLR](https://pytorch.org/docs/1.13/generated/torch.optim.lr_scheduler.LinearLR.html#torch.optim.lr_scheduler.LinearLR) |  |  |
| [337 torch.is_conj](https://pytorch.org/docs/1.13/generated/torch.is_conj.html#torch.is_conj) |  |  |
| [338 torch.asarray](https://pytorch.org/docs/1.13/generated/torch.asarray.html#torch.asarray) |  [paddle.to_tensor](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/to_tensor_cn.html) |  |
| [339 torch.diagonal_scatter](https://pytorch.org/docs/1.13/generated/torch.diagonal_scatter.html#torch.diagonal_scatter) |  |  |
| [340 torch.select_scatter](https://pytorch.org/docs/1.13/generated/torch.select_scatter.html#torch.select_scatter) |  |  |
| [341 torch.slice_scatter](https://pytorch.org/docs/1.13/generated/torch.slice_scatter.html#torch.slice_scatter) |  |  |
| [342 torch.scatter_reduce](https://pytorch.org/docs/1.13/generated/torch.scatter_reduce.html#torch.scatter_reduce) |  |  |
| [343 torch.set_deterministic_debug_mode](https://pytorch.org/docs/1.13/generated/torch.set_deterministic_debug_mode.html#torch.set_deterministic_debug_mode) |  |  |
| [344 torch.get_deterministic_debug_mode](https://pytorch.org/docs/1.13/generated/torch.get_deterministic_debug_mode.html#torch.get_deterministic_debug_mode) |  |  |
| [345 torch.Tensor.diagonal_scatter](https://pytorch.org/docs/1.13/generated/torch.Tensor.diagonal_scatter.html#torch.Tensor.diagonal_scatter) |  |  |
| [346 torch.Tensor.scatter_reduce](https://pytorch.org/docs/1.13/generated/torch.Tensor.scatter_reduce.html#torch.Tensor.scatter_reduce) |  |  |
| [347 torch.Tensor.select_scatter](https://pytorch.org/docs/1.13/generated/torch.Tensor.select_scatter.html#torch.Tensor.select_scatter) |  |  |
| [348 torch.Tensor.slice_scatter](https://pytorch.org/docs/1.13/generated/torch.Tensor.slice_scatter.html#torch.Tensor.slice_scatter) |  |  |
| [349 torch.Tensor.mT](https://pytorch.org/docs/1.13/generated/torch.Tensor.mT.html#torch.Tensor.mT) |  |  |
| [350 torch.Tensor.mH](https://pytorch.org/docs/1.13/generated/torch.Tensor.mH.html#torch.Tensor.mH) |  |  |
| [351 torch.autograd.Function.jvp](https://pytorch.org/docs/1.13/generated/torch.autograd.Function.jvp.html#torch.autograd.Function.jvp) |  [paddle.incubate.autograd.jvp](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/incubate/autograd/jvp_cn.html) |  |
| [352 torch.cuda.memory_usage](https://pytorch.org/docs/1.13/generated/torch.cuda.memory_usage.html#torch.cuda.memory_usage) |  |  |
| [353 torch.cuda.mem_get_info](https://pytorch.org/docs/1.13/generated/torch.cuda.mem_get_info.html#torch.cuda.mem_get_info) |  |  |
| [354 torch.fft.hfft2](https://pytorch.org/docs/1.13/generated/torch.fft.hfft2.html#torch.fft.hfft2) |  [paddle.fft.hfft2](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/fft/hfft2_cn.html) | docs/guides/model_convert/convert_from_pytorch/api_difference/fft/torch.fft.hfft2.md |
| [355 torch.fft.ihfft2](https://pytorch.org/docs/1.13/generated/torch.fft.ihfft2.html#torch.fft.ihfft2) |  [paddle.fft.ihfft2](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/fft/ihfft2_cn.html) | docs/guides/model_convert/convert_from_pytorch/api_difference/fft/torch.fft.ihfft2.md |
| [356 torch.fft.hfftn](https://pytorch.org/docs/1.13/generated/torch.fft.hfftn.html#torch.fft.hfftn) |  [paddle.fft.hfftn](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/fft/hfftn_cn.html) | docs/guides/model_convert/convert_from_pytorch/api_difference/fft/torch.fft.hfftn.md |
| [357 torch.fft.ihfftn](https://pytorch.org/docs/1.13/generated/torch.fft.ihfftn.html#torch.fft.ihfftn) |  [paddle.fft.ihfftn](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/fft/ihfftn_cn.html) | docs/guides/model_convert/convert_from_pytorch/api_difference/fft/torch.fft.ihfftn.md |
| [358 torch.linalg.lu_factor](https://pytorch.org/docs/1.13/generated/torch.linalg.lu_factor.html#torch.linalg.lu_factor) |  |  |
| [359 torch.linalg.solve_triangular](https://pytorch.org/docs/1.13/generated/torch.linalg.solve_triangular.html#torch.linalg.solve_triangular) |  [paddle.linalg.triangular_solve](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/linalg/triangular_solve_cn.html) | docs/guides/model_convert/convert_from_pytorch/api_difference/linalg/torch.linalg.solve_triangular.md |
| [360 torch.linalg.matrix_exp](https://pytorch.org/docs/1.13/generated/torch.linalg.matrix_exp.html#torch.linalg.matrix_exp) |  |  |
| [361 torch.linalg.lu_factor_ex](https://pytorch.org/docs/1.13/generated/torch.linalg.lu_factor_ex.html#torch.linalg.lu_factor_ex) |  |  |
| [362 torch.special.softmax](https://pytorch.org/docs/1.13/special.html#torch.special.softmax) |  [paddle.nn.functional.softmax](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/nn/functional/softmax_cn.html) |  |
| [363 torch.sparse.sampled_addmm](https://pytorch.org/docs/1.13/generated/torch.sparse.sampled_addmm.html#torch.sparse.sampled_addmm) |  |  |
| [364 torch.utils.data.default_collate](https://pytorch.org/docs/1.13/data.html#torch.utils.data.default_collate) |  | docs/guides/model_convert/convert_from_pytorch/api_difference/utils/torch.utils.data.default_collate.md |
| [365 torch.utils.data.default_convert](https://pytorch.org/docs/1.13/data.html#torch.utils.data.default_convert) |  |  |
| [366 torch.from_dlpack](https://pytorch.org/docs/1.13/generated/torch.from_dlpack.html#torch.from_dlpack) |  [paddle.utils.dlpack.from_dlpack](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/utils/dlpack/from_dlpack_cn.html) |  |
| [367 torch.index_copy](https://pytorch.org/docs/1.13/generated/torch.index_copy.html#torch.index_copy) |  [paddle.scatter](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/scatter_cn.html) |  |
| [368 torch.nn.Dropout1d](https://pytorch.org/docs/1.13/generated/torch.nn.Dropout1d.html#torch.nn.Dropout1d) |  [paddle.nn.Dropout2D](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/nn/Dropout2D_cn.html) |  |
| [369 torch.nn.utils.stateless.functional_call](https://pytorch.org/docs/1.13/generated/torch.nn.utils.stateless.functional_call.html#torch.nn.utils.stateless.functional_call) |  |  |
| [370 torch.nn.functional.dropout1d](https://pytorch.org/docs/1.13/generated/torch.nn.functional.dropout1d.html#torch.nn.functional.dropout1d) |  [paddle.nn.functional.dropout](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/nn/functional/dropout_cn.html) |  |
| [371 torch.layout](https://pytorch.org/docs/1.13/generated/torch.layout.html#torch.layout) |  |  |
| [372 torch.cpu.amp.autocast]() |  |  |
| [373 torch.cuda.is_current_stream_capturing](https://pytorch.org/docs/1.13/generated/torch.cuda.is_current_stream_capturing.html#torch.cuda.is_current_stream_capturing) |  |  |
| [374 torch.distributions.transforms.CatTransform](https://pytorch.org/docs/1.13/distributions.html#torch.distributions.transforms.CatTransform) |  |  |
| [375 torch.distributions.transforms.CumulativeDistributionTransform](https://pytorch.org/docs/1.13/distributions.html#torch.distributions.transforms.CumulativeDistributionTransform) |  |  |
| [376 torch.distributions.transforms.SoftplusTransform](https://pytorch.org/docs/1.13/distributions.html#torch.distributions.transforms.SoftplusTransform) |  |  |
| [377 torch.linalg.lu](https://pytorch.org/docs/1.13/generated/torch.linalg.lu.html#torch.linalg.lu) |  [paddle.linalg.lu](https://www.paddlepaddle.org.cn/documentation/docs/zh/develop/api/paddle/linalg/lu_cn.html) | docs/guides/model_convert/convert_from_pytorch/api_difference/linalg/torch.linalg.lu.md |
| [378 torch.linalg.vander](https://pytorch.org/docs/1.13/generated/torch.linalg.vander.html#torch.linalg.vander) |  |  |
| [379 torch.nn.init.trunc_normal_](https://pytorch.org/docs/1.13/nn.init.html#torch.nn.init.trunc_normal_) |  |  |
| [380 torch.onnx.enable_log](https://pytorch.org/docs/1.13/onnx.html#torch.onnx.enable_log) |  |  |
| [381 torch.onnx.disable_log](https://pytorch.org/docs/1.13/onnx.html#torch.onnx.disable_log) |  |  |
| [382 torch.cuda.amp.autocast_mode.autocast](https://pytorch.org/docs/1.13/amp.html#torch.cuda.amp.autocast_mode.autocast) |  |  |
| [383 torch.nn.modules.Module](https://pytorch.org/docs/1.13/generated/torch.nn.modules.Module.html#torch.nn.modules.Module) |  |  |
| [384 torch.nn.Module.register_parameter](https://pytorch.org/docs/stable/generated/torch.nn.Module.html#torch.nn.Module.register_parameter) |  |  |
| [385 torch.nn.Module.get_submodule](https://pytorch.org/docs/stable/generated/torch.nn.Module.html#torch.nn.Module.get_submodule) |  |  |
| [386 torch.nn.Module.get_parameter](https://pytorch.org/docs/stable/generated/torch.nn.Module.html#torch.nn.Module.get_parameter) |  |  |
| [387 torch.nn.Module.get_buffer](https://pytorch.org/docs/stable/generated/torch.nn.Module.html#torch.nn.Module.get_buffer) |  |  |
| [388 torch.nn.Module.cuda](https://pytorch.org/docs/stable/generated/torch.nn.Module.html#torch.nn.Module.cuda) |  |  |
| [389 torch.nn.Module.xpu](https://pytorch.org/docs/stable/generated/torch.nn.Module.html#torch.nn.Module.xpu) |  |  |
| [390 torch.nn.Module.cpu](https://pytorch.org/docs/stable/generated/torch.nn.Module.html#torch.nn.Module.cpu) |  |  |
| [391 torch.nn.Module.type](https://pytorch.org/docs/stable/generated/torch.nn.Module.html#torch.nn.Module.type) |  |  |
| [392 torch.nn.Module.float](https://pytorch.org/docs/stable/generated/torch.nn.Module.html#torch.nn.Module.float) |  |  |
| [393 torch.nn.Module.double](https://pytorch.org/docs/stable/generated/torch.nn.Module.html#torch.nn.Module.double) |  |  |
| [394 torch.nn.Module.half](https://pytorch.org/docs/stable/generated/torch.nn.Module.html#torch.nn.Module.half) |  |  |
| [395 torch.nn.Module.bfloat16](https://pytorch.org/docs/stable/generated/torch.nn.Module.html#torch.nn.Module.bfloat16) |  |  |
| [396 torch.nn.Module.to_empty](https://pytorch.org/docs/stable/generated/torch.nn.Module.html#torch.nn.Module.to_empty) |  |  |
| [397 torch.nn.Module.to](https://pytorch.org/docs/stable/generated/torch.nn.Module.html#torch.nn.Module.to) |  |  |
| [398 torch.nn.Module.register_full_backward_pre_hook](https://pytorch.org/docs/stable/generated/torch.nn.Module.html#torch.nn.Module.register_full_backward_pre_hook) |  |  |
| [399 torch.nn.Module.register_full_backward_hook](https://pytorch.org/docs/stable/generated/torch.nn.Module.html#torch.nn.Module.register_full_backward_hook) |  |  |
| [400 torch.nn.Module.requires_grad_](https://pytorch.org/docs/stable/generated/torch.nn.Module.html#torch.nn.Module.requires_grad_) |  |  |
| [401 torch.nn.Module.zero_grad](https://pytorch.org/docs/stable/generated/torch.nn.Module.html#torch.nn.Module.zero_grad) |  [paddle.nn.Layer.clear_grad]() |  |
| [402 torch.HalfTensor](https://pytorch.org/docs/1.13/generated/torch.HalfTensor.html#torch.HalfTensor) |  |  |
| [403 torch.cuda.HalfTensor](https://pytorch.org/docs/1.13/generated/torch.cuda.HalfTensor.html#torch.cuda.HalfTensor) |  |  |
| [404 torch.ShortTensor](https://pytorch.org/docs/1.13/generated/torch.ShortTensor.html#torch.ShortTensor) |  |  |
| [405 torch.cuda.ShortTensor](https://pytorch.org/docs/1.13/generated/torch.cuda.ShortTensor.html#torch.cuda.ShortTensor) |  |  |
| [406 torch.cuda.ByteTensor](https://pytorch.org/docs/1.13/generated/torch.cuda.ByteTensor.html#torch.cuda.ByteTensor) |  |  |
| [407 torch.DoubleTensor](https://pytorch.org/docs/1.13/generated/torch.DoubleTensor.html#torch.DoubleTensor) |  |  |
| [408 torch.cuda.DoubleTensor](https://pytorch.org/docs/1.13/generated/torch.cuda.DoubleTensor.html#torch.cuda.DoubleTensor) |  |  |
