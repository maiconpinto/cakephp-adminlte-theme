<?php $this->setLayout('AdminLTE.login'); ?>
<?php use Cake\Core\Configure; ?>

<!-- /.login-logo -->
<div class="card">
  <div class="card-body login-card-body">
    <p class="login-box-msg">Sign in to start your session</p>
    <form action="<?php echo $this->Url->build(['controller' => 'users', 'action' => 'login']); ?>" method="post">
      <div class="input-group mb-3">
        <input type="email" class="form-control" placeholder="Email">
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-envelope"></span>
          </div>
        </div>
      </div>
      <div class="input-group mb-3">
        <input type="password" class="form-control" placeholder="Password">
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-lock"></span>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-8">
          <div class="icheck-primary">
            <input type="checkbox" id="remember">
            <label for="remember">
              Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-4">
          <button type="submit" class="btn btn-primary btn-block">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <?php if (Configure::read('Theme.login.show_social')): ?>
      <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div>
      <!-- /.social-auth-links -->
    <?php endif; ?>

    <?php if (Configure::read('Theme.login.show_remember')): ?>
      <p class="mb-1">
        <a href="<?php echo $this->Url->build('/pages/examples/forgot-password'); ?>">I forgot my password</a>
      </p>
    <?php endif; ?>
    <?php if (Configure::read('Theme.login.show_register')): ?>
      <p class="mb-0">
        <a href="<?php echo $this->Url->build('/pages/examples/register'); ?>" class="text-center">Register a new membership</a>
      </p>
    <?php endif; ?>
  </div>
</div>