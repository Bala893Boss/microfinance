<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Login Form Design | CodeLab</title>
      <link rel="stylesheet" href="<?php echo e(asset('css/login.css')); ?>">
   </head>
   <body>
      <div class="wrapper">
        <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div><?php endif; ?>
        <?php if($message = Session::get('error')): ?>
        <div class="alert alert-danger">
            <p><?php echo e($message); ?></p>
        </div><?php endif; ?>
         <div class="title">
            Login Form
         </div>
         <form action="<?php echo e(route('userlogin')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="field">
               <input type="text" name="email" required>
               <label>Email Address</label>
            </div>
            <div class="field">
               <input type="password" name="password" required>
               <label>Password</label>
            </div>
            <div class="content">
               <div class="checkbox">
                  <input type="checkbox" id="remember-me">
                  <label for="remember-me">Remember me</label>
               </div>
               <div class="pass-link">
                  <a href="#">Forgot password?</a>
               </div>
            </div>
            <div class="field">
               <input type="submit" value="Login">
            </div>
            <div class="signup-link">
               Not a member? <a href="<?php echo e(route('signup')); ?>"">Signup now</a>
            </div>
         </form>
      </div>
   </body>
</html><?php /**PATH D:\xampp\htdocs\microfinance\resources\views/login/login.blade.php ENDPATH**/ ?>