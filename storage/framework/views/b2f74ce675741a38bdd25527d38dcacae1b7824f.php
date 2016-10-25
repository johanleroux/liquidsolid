<?php if(count($errors) > 0): ?>
  <div class="alert alert-danger margin-top-15">
    <b>An error has occured</b><br>
    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
      <?php echo e($error); ?> <br>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
  </div>
<?php endif; ?>
