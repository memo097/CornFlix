<?php
$title = 'Subcribe';
include('header.php');
?>
<form action="" method="post" class="d-flex flex-column align-items-center pt-3">
<section class="form-group">
<label for="firstname">Name : </label>
<input type="text" class="form-control px-4" id="name" placeholder="Enter your name" name="name" required>
</section>
<section class="form-group">
<label for="lastname">Lastname :</label>
<input type="text" class="form-control px-4" id="lastname" placeholder="Enter your lastname" name="lastname" required>
</section>
<section class="form-group">
<label for="email">Email :</label>
<input type="email"class="form-control px-4" id="email" placeholder="email@email.com" name="email"required>
</section>
<section class="form-group">
<label for="username">Username :</label>
<input type="text" class="form-control px-4" id="username" placeholder="" name="username" required>
</section>
<section id=pass class="form-group">
    <?php if(isset($message)){
        echo $message;}?>
<label for="password">Password :</label>
<input type="password" class="form-control px-4" id="password" placeholder="" name="password" required>
</section>
<section class="form-group">
<label for="Confirmpassword">Confirm Password :</label>
<input type="password" class="form-control px-4" id="password2" placeholder="" name="Confirmpassword" required>
</section>
<section class="form-group form-check">
<input type="checkbox" class="form-check-input" id="acceptCGV" name="acceptCGV"required>
<label class="form-check-label" for="acceptCGV">I have read and accpet the <a href="./index.php?action=cgv">CGV</a></label>
</section>
<button type="submit" class="btn   submitBtn" name="submit" >Submit</button>

</form>

<?php
include('footer.php')
?>