@include('customer.customerHeader')

<div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-9">
     <div class="card mt-4" style="border-radius: 15px;">
      <h2 style="margin-left: 350px;" class="mt-4">Register Complain </h2>
      
          <div class="card-body">
          <hr class="mx-n3">
  <form method="post" action="addcomplain" enctype="multipart/form-data">
  <input class="form-control" name="id" type="hidden" value="@isset ($ce){{$ce->id}}  @endisset" >
    @csrf
            <div class="row align-items-center pt-4 pb-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Complain:</h6>

              </div>
              <div class="col-md-9 pe-5">

                <input type="text" name="complain_name" class="form-control form-control-lg" />

              </div>
            </div>

            <hr class="mx-n3">

            <div class="row align-items-center py-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Complain Description:</h6>

              </div>
              <div class="col-md-9 pe-5">

                <textarea class="form-control" name="complain_des" rows="3"></textarea>

              </div>
            </div>

            <hr class="mx-n3">

            <div class="row align-items-center pt-4 pb-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Product Price</h6>

              </div>
              <div class="col-md-9 pe-5">

              <select name="product_id" class="form-control">

                <option value=""> Select Product Name</option>
                    @foreach($product as $pro)
                        <option value="{{ $pro->product_id}}">{{$pro->product_name}}</option>
                    @endforeach
                
            </select>

              </div>
            </div>

            <hr class="mx-n3">

            <div class="px-5 py-4">
              <button type="submit" class="btn btn-primary btn-lg">Complain</button>
            </div>
            </form>
            
          </div>
        </div>

      </div>
    </div>
  </div>

<!--  -->

<div class="container-fluid">
    <div class="row">
        <div class="col p-5">
            <h1 class="fw-bold py-4">Your Complains</h1>
            <div class="card p-3" style="width: auto; overflow-x: scroll;">
                <table class="table text-center w-100">
                    <thead>
                        <tr>
                            <th scope="col">Complain Name</th>
                            <th scope="col">Complain Description</th>
                            <th scope="col" class="text-info">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cd as $d)
                        <tr>
                            <td>{{$d->complain_name}}</td>
                            <td>{{$d->complain_des}}</td>
                            <td class="text-primary"><b>{{$d->status}}</b></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

