@include('admin.adminHeader')
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="container py-5 col-xl-9">
                <div class="card p-5 col mx-auto">
                    <form class="row g-4 needs-validation" novalidate method="POST" action="addprovider" enctype="multipart/form-data">
                        @csrf
                        <h1>Registration</h1>
                        <div class="col-md-9">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" required>
                        </div>
                        <div class="col-md-9">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>
                        <div class="col-md-9">
                            <label for="address" class="form-label">Address</label>
                            <textarea class="form-control" name="address" rows="3"></textarea>
                        </div>
                        <div class="col-md-9">
                            <label for="photo" class="form-label">Photo</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                        <div class="col-md-9">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" required>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary" type="submit">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
