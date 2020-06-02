<footer class="main-footer">
      <!-- Services block-->
      <div class="bg-light text-dark">
        <div class="container">
          <div class="row text-center">
            <div class="col-lg-4 py-5">
              <div class="row border-right">
                <div class="col-lg-3">
                  <i class="fal fa-shipping-fast fa-3x"></i>
                </div>
                <div class="col-lg-9 pl-0 text-left">
                  <h6 class="text-uppercase">Free shipping &amp; return</h6>
                  <small class="text-muted">Free Shipping over $100</small>
                </div>
              </div>

            </div>
            <div class="col-lg-4 py-5">
              <div class="row border-right">
                <div class="col-lg-3">
                  <i class="fal fa-usd-circle fa-3x"></i>
                </div>
                <div class="col-lg-9 pl-0 text-left">
                  <h6 class="text-uppercase">Money back guarantee</h6>
                  <small class="text-muted">30 Days Money Back Guarantee</small>
                </div>
              </div>
            </div>
            <div class="col-lg-4 py-5">
              <div class="row">
                <div class="col-lg-3">
                  <i class="fal fa-headset fa-3x"></i>
                </div>
                <div class="col-lg-9 pl-0 text-left">
                  <h6 class="text-uppercase">We are here for you</h6>
                  <small class="text-muted">24/7 Available Support</small>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Main block - menus, subscribe form-->
      <div class="py-5 bg-light text-muted">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 mb-5 mb-lg-0">
              <div class="font-weight-bold text-uppercase text-dark mb-3">Let's hang</div>
              <ul class="list-inline">
                <li class="list-inline-item"><a href="#" target="_blank" title="twitter" class="text-muted text-hover-primary"><i class="fab fa-twitter"></i></a></li>
                <li class="list-inline-item"><a href="#" target="_blank" title="facebook" class="text-muted text-hover-primary"><i class="fab fa-facebook"></i></a></li>
                <li class="list-inline-item"><a href="#" target="_blank" title="instagram" class="text-muted text-hover-primary"><i class="fab fa-instagram"></i></a></li>
                <li class="list-inline-item"><a href="#" target="_blank" title="pinterest" class="text-muted text-hover-primary"><i class="fab fa-pinterest"></i></a></li>
                <li class="list-inline-item"><a href="#" target="_blank" title="vimeo" class="text-muted text-hover-primary"><i class="fab fa-vimeo"></i></a></li>
              </ul>
            </div>
            <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
              <h6 class="text-uppercase text-dark mb-3">Useful Links</h6>
              <ul class="list-unstyled">
                <li> <a href="#" class="text-muted">Our producs</a></li>
                <li> <a href="#" class="text-muted">About us</a></li>
                <li> <a href="#" class="text-muted">Contact us</a></li>
              </ul>
            </div>
            <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
              <h6 class="text-uppercase text-dark mb-3">Company</h6>
              <ul class="list-unstyled">
                <li> <a href="#" class="text-muted">Login</a></li>
                <li> <a href="#" class="text-muted">Register</a></li>
                <li> <a href="#" class="text-muted">Wishlist</a></li>
                <li> <a href="#" class="text-muted">Our Products</a></li>
                <li> <a href="#" class="text-muted">Checkouts</a></li>
              </ul>
            </div>
            <div class="col-lg-3">
              <h6 class="text-uppercase text-dark mb-3">Weekly Offers &amp; Discounts</h6>
              <p class="mb-3"> Check with us weekly for promotions and specials.</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Copyright section of the footer-->
      <div class="py-4 font-weight-light bg-dark text-white">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6 text-center text-md-left">
              <p class="mb-md-0">&copy; 2018 Monkeys Development - All rights reserved.</p>
            </div>
            <div class="col-md-6">
              <ul class="list-inline mb-0 mt-2 mt-md-0 text-center text-right">
                <li class="list-inline-item"><i class="fab fa-cc-stripe fa-2x"></i></li>
                <li class="list-inline-item"><i class="fab fa-cc-mastercard fa-2x"></i></li>
                <li class="list-inline-item"><i class="fab fa-cc-visa fa-2x"></i></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>

<!-- Login Modal -->
<div class="modal fade" id="accountModal" tabindex="-1" data-backdrop="true" role="dialog" aria-labelledby="accountModalLabel" aria-hidden="false">
<div class="modal-dialog modal-lg" role="document">
  <div class="modal-content">

    <div class="modal-header border-bottom-0">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>

    <div class="row">

      <div class="col-6">
        <div class="modal-body">
          <h5 class="card-title text-center">Login <small class="text-muted">(returning customer)</small></h5>
          <form id="login_form" class="needs-validation" action="login.php" method="POST" novalidate>
            <div class="form-group">
              <label class="form-label">Email</label>
              <input type="email" name="email_login" class="form-control" required />
              <div class="valid-feedback">
                Looks good!
              </div>
              <div class="invalid-feedback">
                Must be a valid email address!
              </div>
            </div>
            <div class="form-group">
              <label class="form-label">Password</label>
              <input type="password" name="password_login" class="form-control" required minlength="5" maxlength="20" />
              <div class="valid-feedback">
                Looks good!
              </div>
              <div class="invalid-feedback">
                Must be 6-20 characters long.
              </div>
            </div>
            <div class="form-group text-center">
              <button type="submit" class="btn btn-outline-dark"><i class="fa fa-sign-in-alt mr-2"></i> Log in</button>
            </div>
          </form>
            <div id="loginerr_login" style="display:none" class="alert alert-danger alert-dismissible fade show" role="alert">
              <p>Wrong username / password. Please try again.</p>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div id="loginsucc_login" style="display:none" class="alert alert-success alert-dismissible fade show" role="alert">
              <p>Welcome!</p>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          </div>

      </div>
      <div class="col-6">
        <div class="modal-body">
          <h5 class="card-title text-center">Signup <small class="text-muted">(new customer?)</small></h5>
          <form id="registration_form" class="needs-validation" action="registration.php" method="POST" novalidate>
            <div class="form-group">
              <label class="form-label">Full Name</label>
              <input type="text" name="fname" class="form-control" required>
              <div class="valid-feedback">
                Looks good!
              </div>
              <div class="invalid-feedback">
                This field is required.
              </div>
            </div>
            <div class="form-group">
              <label class="form-label">Email</label>
              <input type="email" name="email_reg" class="form-control" required>
              <div class="valid-feedback">
                Looks good!
              </div>
              <div class="invalid-feedback">
                Must be a valid email address!
              </div>
            </div>
            <div class="form-group">
              <label class="form-label">Password</label>
              <input type="password" name="password_reg" class="form-control" required minlength="5" maxlength="20">
              <div class="valid-feedback">
                Looks good!
              </div>
              <div class="invalid-feedback">
                Must be 6-20 characters long.
              </div>
            </div>
            <div class="form-group text-center">
              <button type="submit" class="btn btn-outline-dark"><i class="fa fa-sign-in-alt mr-2"></i> Register</button>
            </div>
          </form>
            <div id="loginerr_reg" style="display:none" class="alert alert-danger alert-dismissible fade show" role="alert">
              <p>User already esists.</p>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div id="loginsucc_reg" style="display:none" class="alert alert-success alert-dismissible fade show" role="alert">
              <p>Thanks for that!</p>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
