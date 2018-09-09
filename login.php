  <?php require_once 'header.php'; ?>
  <section class="container cont-Login">
    <div class="row login">
      <div class="col-xs-12 col-sm-12 col-md-12">
        <form role="form" class="formulario">
          <fieldset>
            <h1>Logueate</h1>
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  <input type="email" name="email" class="form-control input-lg" placeholder="E-mail">
                </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  <input type="password" name="password" class="form-control input-lg" placeholder="Contraseña">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12 btnLLogin login">
                <input type="submit" class="btn btn-lg btn-success btn-block" value="Login">
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12 btnLRegister register">
                <p>No tienes cuenta? Registrate gratis</p>
                <a href="register.php" class="btn btn-lg btn-primary btn-block">Register</a>
              </div>
            </div>
          </fieldset>
        </form>
      </div>
    </div>
  </section>
  <?php require_once 'footer.php'; ?>
