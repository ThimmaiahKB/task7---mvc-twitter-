<?php require APPROOT . '/views/inc/header.php'; ?>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<h1 class="emailexist"><?php echo $data['mes']; ?></h1>
<div class="uform">

  <div class="inner">
  
    <form name="vlform" action="<?php echo URLROOT . '/Pages/save' ?>" onsubmit ="return validateform()" method="post">
    <h1 class="h1"><i class='fab fa-twitter'></i>Happening now</h1>
    <h2 class="h2">Join Twitter today.</h2>

    <label>Firstname</label>
    <input type="text" name="fname">
    
    <label>Lastname</label>
    <input type="text" name="lname">
   
    <label>Email</lable>
    <input type="email" name="email">
   
    <label>Phone</label>
    <input type="number" name="phone">
    
    <label>Password</label>
    <input type="password" name="password"><br>
   
    <input type="submit" name="submit" value="Sign up">

    <a class="link" href="<?php echo URLROOT . '/pages/signin' ?>">Already user? Login</a>
   </form>
  </div>
</div>
  
<?php require APPROOT . '/views/inc/footer.php'; ?>
