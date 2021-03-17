<?php if (isset($component)) { $__componentOriginalc822bbb98ab3ae4c9df57ce71c1cf098d20d672b = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\TamplateLayout::class, []); ?>
<?php $component->withName('tamplate-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header'); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('beranda')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="flex flex-col md:flex-row">

<div class="bg-gray-800 shadow-xl h-16 fixed bottom-0 mt-12 md:relative md:h-screen z-10 w-full md:w-48">

    <div class="md:mt-12 md:w-48 md:fixed md:left-0 md:top-0 content-center md:content-start text-left justify-between">
        <ul class="list-reset flex flex-row md:flex-col py-0 md:py-3 px-1 md:px-2 text-center md:text-left">
        <li class="mr-3 flex-1">
                <a href="<?php echo e(url('/beranda')); ?>" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-red-600">
                    <i class="fas fa-home pr-0 md:pr-3 text-red-600"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-white md:text-white block md:inline-block">Beranda</span>
                </a>
            </li>
            <li class="mr-3 flex-1">
                <a href="<?php echo e(url('/dataguru')); ?>" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-purple-500">
                    <i class="fa fa-chalkboard-teacher pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">Data Guru</span>
                </a>
            </li>
            <li class="mr-3 flex-1">
                <a href="<?php echo e(url('/datasiswa')); ?>" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-purple-500">
                    <i class="fa fa-user pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">Data Siswa</span>
                </a>
            </li>
            <li class="mr-3 flex-1">
                <a href="<?php echo e(url('/datainfo')); ?>" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-purple-500">
                    <i class="fa fa-bullhorn pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">Data Info</span>
                </a>
            </li>
        </ul>
    </div>
</div>

<div class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5">

    <div class="bg-gray-800 pt-3">
        <div class="rounded-tl-3xl bg-gradient-to-r from-red-500 to-gray-800 p-4 shadow text-2xl text-white">
            <h3 class="font-bold pl-2">Data Sekolah</h3>
        </div>
    </div>

    <div class="flex flex-wrap">
        <div class="w-full md:w-1/2 xl:w-1/3 p-6">
        
        </div>
    </div>
</div>

 <?php if (isset($__componentOriginalc822bbb98ab3ae4c9df57ce71c1cf098d20d672b)): ?>
<?php $component = $__componentOriginalc822bbb98ab3ae4c9df57ce71c1cf098d20d672b; ?>
<?php unset($__componentOriginalc822bbb98ab3ae4c9df57ce71c1cf098d20d672b); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\Lat-laravel\resources\views/admin/beranda.blade.php ENDPATH**/ ?>