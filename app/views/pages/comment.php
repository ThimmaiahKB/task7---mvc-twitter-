<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/comment.css">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<div class="cform">

    <div class="cinnerlogin">
        <form action="<?php echo URLROOT . '/Pages/postandlogout' ?>" method="post">
               
    <h1><i class='fab fa-twitter'></i></h1><h3><?php echo "Welcome ".$_SESSION['username'] ?></h3>
            <textarea name="comment" rows="10" cols="30" placeholder="What's happening?"></textarea>
            <div class="tweetsubmit">
                <hr>
                <input type="submit" name="tweetbutton" value="tweet">
                <input type="submit" name="logoutbutton" value="logout">
                <hr>    
            </div>
            <h4><?php echo $data['showcomment']; ?></h4>
        </form>
    </div>
</div>
<div>
   
</div>