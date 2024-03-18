<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,
initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Route</title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.scss'); ?>
</head>

<body>
    <div class="container m-5">
        <h1>This is from View Route</h1>
        <p>Hello, My name is <?php echo e($name); ?></p>
    </div>
    <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
</body>

<a href="<?php echo e(url('/user/12345')); ?>" class="list-group-item
list-group-item-action">
    Route Parameter (Required Parameter) - 1
</a>
<a href="<?php echo e(url('/posts/01/comments/20')); ?>" class="list-group-item
list-group-item-action">
    Route Parameter (Required Parameter) - 2
</a>

<a href="<?php echo e(url('/username')); ?>" class="list-group-item
list-group-item-action">
    Route Parameter (Optional Parameter)
</a>



</html>
<?php /**PATH C:\Users\maris\rista-app\resources\views/view_route.blade.php ENDPATH**/ ?>