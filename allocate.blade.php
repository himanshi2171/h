@include('customer.customerHeader')
<div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-9">
     <div class="card mt-4" style="border-radius: 15px;">
      <h2 style="margin-left: 350px;" class="mt-4">Allocate Provider </h2>
      
          <div class="card-body">
          <hr class="mx-n3">
  <form method="post" action="{{URL :: to('allocation')}}">
  
    @csrf
    <input class="form-control" name="complain_id" type="hidden" value="{{$compid->complain_id}}">
            <hr class="mx-n3">

              <div class="col-md-9 pe-5">

              <select name="service_provider" class="form-control">

                <option value=""> Select Provider Name</option>
                    @foreach($serviceprovider as $sp)
                        <option value="{{ $sp->id}}">{{$sp->name}}</option>
                    @endforeach
                
            </select>

              </div>
            </div>

            <hr class="mx-n3">

            <div class="px-5 py-4">
              <button type="submit" class="btn btn-primary btn-lg" name="operation" value="Allocate">Allocate</button>
            </div>
            </form>
            
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
