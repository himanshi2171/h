@include('admin.adminHeader')

<div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-9">
     <div class="card mt-4" style="border-radius: 15px;">
      <h2 style="margin-left: 350px;" class="mt-4">Insert Product</h2>
      
          <div class="card-body">
          <hr class="mx-n3">
  <form method="post" action="addproduct" enctype="multipart/form-data">
    @csrf
            <div class="row align-items-center pt-4 pb-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Product Name</h6>

              </div>
              <div class="col-md-9 pe-5">

                <input type="text" name="product_name" class="form-control form-control-lg" />

              </div>
            </div>

            <hr class="mx-n3">

            <div class="row align-items-center py-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Product Description</h6>

              </div>
              <div class="col-md-9 pe-5">

                <textarea class="form-control" name="product_des" rows="3"></textarea>

              </div>
            </div>

            <hr class="mx-n3">

            <div class="row align-items-center pt-4 pb-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Product Price</h6>

              </div>
              <div class="col-md-9 pe-5">

                <input type="text" name="product_price" class="form-control form-control-lg" />

              </div>
            </div>

            <hr class="mx-n3">

            <div class="row align-items-center pt-4 pb-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Product Image</h6>

              </div>
              <div class="col-md-9 pe-5">

                <input type="file" name="product_photo" class="form-control form-control-lg" />

              </div>
            </div>

            <hr class="mx-n3">

            <div class="px-5 py-4">
              <button type="submit" class="btn btn-primary btn-lg">Insert Product</button>
            </div>
            </form>
            
          </div>
        </div>

      </div>
    </div>
  </div>
