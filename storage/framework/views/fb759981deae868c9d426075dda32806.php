<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>ًApplication</title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
</head>

<body>

    <div class="container  mt-5">
        <form method="post">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control w-25" id="email" placeholder="Enter email" name="email">
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control w-25" id="pwd" placeholder="Enter password" name="password">
            </div>
            <!-- <button type="submit" class="btn btn-secondary mt-2"> <a href="/auth">Войти</a></button> -->
            <button type="submit" class="btn btn-secondary mt-2"> dsds</button>
        </form>
    </div>


    

    <?php
    
   var_dump($_POST);
   
   ?>


</body>

</html><?php /**PATH C:\Users\1686741\Desktop\3\resources\views/auth.blade.php ENDPATH**/ ?>