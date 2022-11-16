@include('admin.adminHeader')
<div class="container-fluid">
    <div class="row">
        <div class="col p-5">
            <h1 class="fw-bold py-4">All Product </h1>
            <div class="card p-3" style="width: auto; overflow-x: scroll;">
                <table class="table text-center w-100">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Price</th>
                            <th scope="col">Image</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $s)
                        <tr>
                            <td>{{$s->product_id}}</td>
                            <td>{{$s->product_name}}</td>
                            <td>{{$s->product_des}}</td>
                            <td>{{$s->product_price}}</td>
                            <td><img src="{{asset('upload/'.$s->product_photo)}}" width="100" height="100"/></td>
                            <td><a href="{{URL :: to('editproItem/'.$s->product_id)}}" class="btn btn-success">Edit</a></td>
                            <td><a href="{{URL :: to('deleteproduct/'.$s->product_id)}}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>