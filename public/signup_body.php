<div class="container mt-5">
  <div class="card mb-4 shadow-sm">
    <div class="card-body">
      <h3 class="card-title mb-5" style="text-align: center">Register Here</h3>
      
       <div class="d-flex justify-content-center mb-3 flex-column flex-md-row">
         
          <div class="d-flex flex-column flex-md-row">
            <form class="form-block my-2 my-lg-0 mr-md-3" method="post" action="register_user.php">

              <div class="row form-inline mb-3">
                <div class="row">
                  <div class="col-md-12 input-group">
                    <input class="form-control" type="text" placeholder="Enter your Name" name="name" aria-label="Full Name" required>
                  </div>
                </div>
                
              </div>

              <div class="row form-inline mb-3">
                <div class="row">
                  <div class="col-md-12 input-group">
                    <input class="form-control" type="number" placeholder="Enter your Phone" name="phone" aria-label="Phone number" required min="0">
                  </div>
                </div>
                
              </div>

              <div class="row form-inline mb-3">
                <div class="row">
                  <div class="col-md-12 input-group">
                    <input class="form-control" type="email" id="email" placeholder="Enter your Email" name="email" aria-label="username or email" required>
                  </div>
                </div>
                
              </div>

              <div class="row form-inline mb-3">
                <div class="row">
                  <div class="col-md-12 input-group"> 
                    <input class="form-control" type="password" placeholder="Enter Password" name="password"  id="password" aria-label="Password" required>
                  </div>
                </div>
              </div>

              <div class="row form-inline mb-3">
                <div class="row">
                  <div class="col-md-12 input-group"> 
                    <input class="form-control" type="password" placeholder="Confirm Password" name="cPassword" id="cPassword" aria-label="Password" required>
                  </div>
                </div>
              </div>

              <div class="row form-inline justify-content-center" >
                <div class="input-group">
                  <button class="btn btn-secondary" type="submit">Login</button>
                </div>
              </div>


            </form>
            
          </div>
        </div>
    </div>
</div>
</div>