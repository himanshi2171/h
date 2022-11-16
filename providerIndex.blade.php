@include('provider.providerHeader')

<div class="container-fluid">
    <div class="row">
        <div class="col p-5">
            <h1 class="fw-bold py-4">All Complain</h1>
            <div class="card p-3" style="width: auto; overflow-x: scroll;">
                <table class="table text-center w-100">
                    <thead>
                        <tr>
                            <th scope="col">Complain Name</th>
                            <th scope="col">Complain Description</th>
                            <th scope="col">Product ID</th>
                            <th scope="col">Complete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($comppro as $d)
                        <tr>
                            <td>{{$d->complain_name}}</td>
                            <td>{{$d->complain_des}}</td>
                            <td>{{$d->product_id}}</td>
                            <td>
                                @if($d->status == 'Success')
                                    <p class="text-success">Completed</p>
                                @else
                                <a href="{{URL :: to('statussuccess/'.$d->complain_id)}}" class="btn btn-danger">Complete</a>
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