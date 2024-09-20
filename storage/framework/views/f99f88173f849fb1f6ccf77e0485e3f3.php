<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Register Form Design | CodeLab</title>
      <link rel="stylesheet" href="<?php echo e(asset('css/login.css')); ?>">
   </head>
   <body>
      <div class="wrapper">
         <div class="title">
            Register Form
         </div>
         <form action="<?php echo e(route('registerpost')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="field">
               <input type="text" name="username" required>
               <label>Username</label>
            </div>
            <div class="field">
               <input type="text" name="email" required>
               <label>Email</label>
            </div>
            <div class="field">
               <input type="password" name="password" required>
               <label>Password</label>
            </div>
           
            <div class="field">
               <input type="submit" value="Register">
            </div>
            
         </form>
      </div>
   </body>
</html><?php /**PATH D:\xampp\htdocs\microfinance\resources\views/signup/register.blade.php ENDPATH**/ ?>