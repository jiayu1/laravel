<?php $__env->startSection('content'); ?>
        <div class="block-area" id="tableHover">
            <h3 class="block-title">商品信息列表</h3>
             <?php if(session('msg')): ?>
        	   <div class="alert alert-success alert-icon">
			   <?php echo e(session('msg')); ?>

			   <i class="icon"></i>
			   </div>
            <?php endif; ?>
            <?php if(session('error')): ?>
        	    <div class="alert alert-warning alert-icon">
			    <?php echo e(session('error')); ?>

			     <i class="icon"></i>
			    </div>
		    <?php endif; ?>
            
            <div class="table-responsive overflow">
                 <form action='/admin/goods' method='post' name='myform'>
                      <?php echo e(csrf_field()); ?>

                      <?php echo e(method_field('DELETE')); ?>

                 </form>

                 <form action='/admin/goods' method='get'>
                     <div class='medio-body'>
    				   商品名：<input type='text' class='form-control input-sm m-b-10' name='name'>
    			     </div>
    			     
        		     <input type='submit' class='btn' value='搜索'>  
                 </form>
            <table class="table table-bordered table-hover tile">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>类别名</th>
                        <th>商品名</th>
                        <th>小标题</th>
                        <th>价格</th>
                        <th>状态</th>
                        <th>大小</th>
                        <th>库存</th>
                        <th>图片</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    	<tr>
	                        <td><?php echo e($v->id); ?></td>
                            <td><?php echo e($v->name); ?></td>
	                        <td><?php echo e($v->g_name); ?></td>
	                        <td><?php echo e($v->title); ?></td>

	                        <td><?php echo e($v->price); ?></td>
                            <td><?php echo e(($v->statu == 0)?'下架':'上架'); ?></td>
                            <td><?php echo e($v->size); ?></td>
                            <td><?php echo e($v->stock); ?></td>
                            <td><img src= "/admin/upload/<?php echo e($v->mypic); ?>" width='50' height='50'></td><!--路径-->
	                        <td>
	                        	<a class="btn btn-sm btn-alt m-r-5" href='javascript:doDel(<?php echo e($v->id); ?>)'>删除</a>
	                        	<a class="btn btn-sm btn-alt m-r-5" href='/admin/goods/<?php echo e($v->id); ?>/edit'>修改</a>
	                        </td>
	                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
             <?php echo e($list->appends($where)->links()); ?>

            </div>
        </div>
        <script type="text/javascript">
           function doDel(id){
           	  if(confirm('确定删除吗？')){
                 var form = document.myform;
                 form.action = '/admin/goods/'+id;
                 form.submit();
           	  }
           }
        </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Admin.base.parent', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>