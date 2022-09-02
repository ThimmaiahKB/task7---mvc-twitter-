<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/signin.css">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<div class="sform">

    <div class="innerlogin">
        <form action="<?php echo URLROOT . '/pages/check' ?>" method="post">
        <h3><?php echo $data['errormessage']; ?></h3>
        
        <h1><i class='fab fa-twitter'></i>Login</h1>
   
        <label>Email</lable>
        <input type="email" name="emaill">
    
        <lable>Password</label>
        <input type="password" name="passwordl"><br>
       
        <input type="submit" name="log" value="login">


    </form>
    </div>
</div>