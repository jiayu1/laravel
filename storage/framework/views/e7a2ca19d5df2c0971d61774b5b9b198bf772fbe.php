<?php $__env->startSection('content'); ?>
	<!-- Text Input -->
    <div class="block-area" id="text-input">
        <h3 class="block-title">添加商品</h3>
        
        <p>填空添加用户</p>
           <?php if(count($errors) > 0): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
    <?php endif; ?>
          
        <div class="row">
            <form action='/admin/goods' method='post' enctype='multipart/form-data'>
                <?php echo e(csrf_field()); ?>

                <div class="col-lg-4">
                    <select class="form-control m-b-10" name='type'>
                        <option>--请选择--</option>
                        <?php $__currentLoopData = $ob; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value='<?php echo e($v->id); ?>'><?php echo e($v->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                    </select>
                </div>
                <div class="col-lg-4">
                    <input type="text" class="form-control m-b-10" placeholder="请输入商品名" name='g_name'>
                </div>
                <div class="col-lg-4">
                    <input type="text" class="form-control m-b-10" placeholder="请输入商品小标题" name='title'>
                </div>
                 <div class="col-lg-4">
                    <input type="text" class="form-control m-b-10" placeholder="请输入商品大小" name='size'>
                </div>
                <div class="col-lg-4">
                    <input type="text" class="form-control m-b-10" placeholder="请输入商品价格" name='price'>
                </div>
                <div class="col-lg-4">
                    <input type="text" class="form-control m-b-10" placeholder="请输入商品库存" name='stock'>
                </div>
                <div class="col-lg-4">
                    <select class="form-control m-b-10" name='statu'>
                        <option>--请选择--</option>
                        <option value='0'>下架</option>
                         
                        <option value='1'>上架</option>
                        
                    </select>
                </div>
                <div class="col-lg-12">
                    文件：<input type='file' name='mypic'>
                        <!-- <input type='file' name='mypic[]'>
                        <input type='file' name='mypic[]'> -->
                         <input type='submit' value='上传'>

                </div>
                
                <div class="col-lg-12">
                    <input type='submit' class="btn btn-block btn-alt" value='提交'>
                </div>
            </form>

        </div>
       <!-- <div class="col-lg-12"> 
        <form action='/doupload' method='post' enctype='multipart/form-data'>
            <?php echo e(csrf_field()); ?>

            文件：<input type='file' name='mypic'>
            <!-- <input type='file' name='mypic[]'>
            <input type='file' name='mypic[]'> -->
            <!-- <input type='submit' value='上传'>
           </form> -->
        <!-- </div> --> 
        <p></p>
        
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Admin.base.parent', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>