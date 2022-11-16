@include('admin.adminHeader')
<div class="container-fluid">
    <div class="row">
        <div class="col p-5">
            <h1 class="fw-bold py-4">All Complain</h1>
            <div class="card p-3" style="width: auto; overflow-x: scroll;">
                <table class="table text-center w-100">
                    <thead>
                        <tr>
                            <th scope="col">Customer ID</th>
                            <th scope="col">Complain ID</th>
                            <th scope="col">Complain Name</th>
                            <th scope="col">Complain Description</th>
                            <th scope="col">Product ID</th>
                            <th scope="col">Status</th>
                            <th scope="col">Allocate</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $d)
                        <tr>
                            <td>{{$d->id}}</td>
                            <td>{{$d->complain_id}}</td>
                            <td>{{$d->complain_name}}</td>
                            <td>{{$d->complain_des}}</td>
                            <td>{{$d->product_id}}</td>
                            <td>{{$d->status}}</td>
                            <td>
                                @if($d->status == 'Pending' or $d->status == 'Success')
                                    <p>Allocated</p>
                                @else
                                <a href="{{URL :: to('sendallocation/'.$d->complain_id)}}" class="btn btn-danger">Allocate</a>
                                @endif
                            </td>
                            <td>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>