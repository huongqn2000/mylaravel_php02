<main>

    <form action="login-process.php" method="post" style="width: 50%; margin: 50px 0 50px 50px;">
        <div class="row mb-3">
            <label for="txtEmail" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="email" name="txtEmail"
                       class="form-control <?php if(isset($_SESSION['errors']['txtEmail'])):?>is-invalid<?php endif?>"
                       id="txtEmail" aria-describedby="emailHelp" >
                <?php if(isset($_SESSION['errors']['txtEmail'])):?>
<div class="invalid-feedback">
    <?php echo $_SESSION['errors']['txtEmail'];?>
</div>
<?php endif?>
</div>
</div>
<div class="row mb-3">
    <label for="txtPass" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
        <input type="password" name="txtPass"
               class="form-control <?php if(isset($_SESSION['errors']['txtPass'])):?>is-invalid<?php endif?>"
               id="txtPass" >
        <?php if(isset($_SESSION['errors']['txtPass'])):?>
        <div class="invalid-feedback">
            <?php echo $_SESSION['errors']['txtPass'];?>
        </div>
        <?php endif?>
    </div>
</div>
<button type="submit" class="btn btn-primary">Login</button>
</form>
</main>
