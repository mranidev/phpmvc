<div class="wrapper">
        <div class="form-left">
            <h2 class="text-uppercase">information</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et molestie ac feugiat sed. Diam volutpat commodo.
            </p>
            <p class="text">
                <span>Sub Head:</span>
                Vitae auctor eu augudsf ut. Malesuada nunc vel risus commodo viverra. Praesent elementum facilisis leo vel.
            </p>
            <div class="form-field">
                <input type="submit" class="account" value="Have an Account?">
            </div>
        </div>
        <form method="post" action="" class="form-right">
            <h2 class="text-uppercase">Registration form</h2>
            <div class="row">
                <div class="col-sm-6 mb-3">
                    <label>First Name</label>
                    <input type="text" name="first_name" id="first_name" value="<?php echo $model->first_name; ?>"
                    class="form-control <?php echo $model->hasError('first_name') ? ' is-invalid' : ''; ?>">
                    <div class="invalid-feedback">
                        <small><?php echo $model->getFirstError('first_name'); ?></small>
                    </div>
                </div>
                <div class="col-sm-6 mb-3">
                    <label>Last Name</label>
                    <input type="text" name="last_name" id="last_name" class="input-field" value="<?php echo $model->last_name; ?>">
                </div>
            </div>
            <div class="mb-3">
                <label>Your Email</label>
                <input type="text" class="input-field" name="email" value="<?php echo $model->email; ?>">
            </div>
            <div class="row">
                <div class="col-sm-6 mb-3">
                    <label>Password</label>
                    <input type="password" name="password" id="password" class="input-field">
                </div>
                <div class="col-sm-6 mb-3">
                    <label>Confirm Password</label>
                    <input type="password" name="confirmPassword" id="confirmPassword" class="input-field">
                </div>
            </div>
            <div class="mb-3">
                <label class="option">I agree to the <a href="#">Terms and Conditions</a>
                    <input type="checkbox" checked>
                    <span class="checkmark"></span>
                </label>
            </div>
            <div class="form-field">
                <input type="submit" value="Register" class="register" name="register">
            </div>
        </form>
    </div>