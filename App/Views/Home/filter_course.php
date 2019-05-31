<section class="paddingTop-10 paddingBottom-10">
  <div class="container">
    <div class="row">
      <div class="col-8 z-index-10" data-offset-top-md="-120">
        <div class="input-group bg-white rounded p-5 padding-y-md-50 shadow-v2">
        <div class="input-group-prepend">
         <select class="form-control rounded-right-0 border-right-0">
           <option selected disabled default> Category</option>
           <option value="1">Engineering</option>
           <option value="2">Big Data</option>
           <option value="3">Arts</option>
           <option value="4">Demo category</option>
         </select>
         <select class="form-control rounded-left-0 rounded-right-0">
           <option selected disabled default> Course Status</option>
           <option value="1">Best Selling</option>
           <option value="2">Top rated</option>
           <option value="3">Newest</option>
           <option value="4">Top authors</option>
         </select>
        </div>
        <input type="text" class="form-control" placeholder="what you want to learn">
        <div class="input-group-append">
          <button class="btn btn-primary">Search</button>
        </div>
       </div>
      </div>
      <div class="col-4 z-index-10" data-offset-top-md="-120">
          <div class="card shadow-v2 z-index-5" data-offset-top-xl="-160">
              <div class="card-header bg-primary text-white border-bottom-0">
                <span class="lead font-semiBold text-uppercase">
                  Be On Demand 
                </span>
              </div>
              
              <div class="p-4 border-bottom wow fadeInUp">
                <p class="text-primary mb-1">
                  July 02, 2018
                </p>
                <a href="#">
                  Maximizing potential through individual attention.
                </a>
              </div>
              
              <div class="p-4 border-bottom wow fadeInUp">
                <p class="text-primary mb-1">
                  July 17, 2018
                </p>
                <a href="#">
                  Nullam quis ante etiam sit amet eget eros faucibus
                </a>
              </div>
              
              
            </div>
          
      </div>
    </div> <!-- END row-->
  </div> <!-- END container-->
</section> 
<?php include 'courses_list.php'; ?>