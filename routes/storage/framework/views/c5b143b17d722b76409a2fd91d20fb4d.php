
<?php if (isset($component)) { $__componentOriginal23a33f287873b564aaf305a1526eada4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal23a33f287873b564aaf305a1526eada4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
  register from here:
  <form action="/register" method="POST">
    <?php echo csrf_field(); ?>
  <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4 max-auto">
  <legend class="fieldset-legend">Register</legend>

  <label class="lable" for="name" name="name">Name</label>
  <input type="text" name="name" class="input" placeholder="Your Name" required>

  <label class="label" for="email" name="email">Email</label>
  <input type="email" name="email" class="input" placeholder="Email" required />

  <label class="label">Password</label>
  <input type="password" name="password" class="input" placeholder="Password" required />

  <button class="btn btn-neutral mt-4">Register</button>
</fieldset>
</form>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $attributes = $__attributesOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__attributesOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $component = $__componentOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__componentOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?><?php /**PATH C:\Users\churc\Desktop\php-laravel\lms\resources\views/register.blade.php ENDPATH**/ ?>