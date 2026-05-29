




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
  
  <form method="POST" action="/ideas" >
   <?php echo csrf_field(); ?>
   <div class="col-span-full">
      <label for="idea" class="block text-sm/6 font-medium text-white">New Idea</label>
      <div class="mt-2">
         <textarea  id="idea" name="idea"  cols="30" rows="3" class="block w-full rounded-md bg-white/5 px-3"></textarea>
      </div>
           <p class="mt- 3 text-sm/6 text-white-400">You have an idea want to save for later.</p>
   </div>
   <div class="mt-6 flex items-center gap-x-6">
      <button type="submit" class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Save</button>


   </div>
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
<?php endif; ?>






<?php /**PATH C:\Users\churc\Desktop\php-laravel\lms\resources\views/ideas.blade.php ENDPATH**/ ?>