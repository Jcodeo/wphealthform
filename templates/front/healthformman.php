<div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="<?php echo plugin_dir_url( dirname( __FILE__, 2 ) ) ?>assets/img/logo.jpg" alt="" width="72" height="72">
    <h2>Man Registration</h2>
  </div>
 </div>
<div class="container">
  <div class="row">
    <div class="col-md-12">
     <form method="post" action="<?php echo plugin_dir_url( dirname( __FILE__, 2 ) ) ?>inc/process/">
     <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="firstName" placeholder="Jem" name="nom">
    </div>
     
    <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Jem@email.com" aria-describedby="emailHelp" name="email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Address </label>
    <input type="text" class="form-control" id="address" placeholder="1234 Main St" name="adresse1">
    <small class="form-text text-muted">Street Address</small>
  </div>
  <div class="form-group">
    <input type="text" class="form-control" id="address" name="adresse2">
    <small class="form-text text-muted">Street Address Line 2 </small>
  </div>
  <div class="row">
          <div class="col-md-5 mb-3">
            <label for="country">Country</label>
            <select class="custom-select d-block w-100" id="country" name="">
              <option value="">Choose...</option>
              <option>United States</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid country.
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="state">State</label>
            <select class="custom-select d-block w-100" id="state" name="">
              <option value="">Choose...</option>
              <option>California</option>
            </select>
            <div class="invalid-feedback">
              Please provide a valid state.
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="zip">Zip</label>
            <input type="text" class="form-control" id="zip" placeholder="" name="">
            <div class="invalid-feedback">
              Zip code name="".
            </div>
          </div>
        </div>
       <h4 class="mb-3">Primary Residence Information</h4>
       <form>
     <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="firstName" placeholder="Jem" name="">
    </div>
     
    <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Jem@email.com" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Address </label>
    <input type="text" class="form-control" id="address" placeholder="1234 Main St" name="">
    <small class="form-text text-muted">Street Address</small>
  </div>
  <div class="form-group">
    <input type="text" class="form-control" id="address" name="">
    <small class="form-text text-muted">Street Address Line 2 </small>
  </div>
  <div class="row">
          <div class="col-md-5 mb-3">
            <label for="country">Country</label>
            <select class="custom-select d-block w-100" id="country" name="">
              <option value="">Choose...</option>
              <option>United States</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid country.
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="state">State</label>
            <select class="custom-select d-block w-100" id="state" name="">
              <option value="">Choose...</option>
              <option>California</option>
            </select>
            <div class="invalid-feedback">
              Please provide a valid state.
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="zip">Zip</label>
            <input type="text" class="form-control" id="zip" placeholder="" name="">
            <div class="invalid-feedback">
              Zip code name="".
            </div>
          </div>
        </div>
<hr class="mb-4">
  <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit_form_man">Submit</button>
  </form>
    </div>
  </div>
  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2020-2021 Company Name</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
  </div>