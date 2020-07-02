<!DOCTYPE html>
<html>
    <head><meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><meta
        name="viewport"
        content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no"><link rel="icon" href=/favicon.ico>
        <title>Portal Mecánico</title><link href=/static/css/chunk-elementUI.717c90ab.css rel="stylesheet"><link href=/static/css/chunk-libs.3dfb7769.css rel="stylesheet"><link href=/static/css/app.1f08997a.css rel="stylesheet"></head>
    <body>
        <noscript>
            <strong>We're sorry but Portal Mecánico doesn't work properly without JavaScript
                enabled. Please enable it to continue.</strong>
        </noscript>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header"><h2>List of Roles</h2></div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif








                            <table class="table table-bordered">
                                <thead>
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Slug</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Full access</th>
                                    <th colspan="3"></th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>

                                    @foreach ($roles as $role)
                                        <th scope="row">{{ $role->id}}</th>
                                        <td>{{ $role->name}}</td>
                                        <td>{{ $role->slug}}</td>
                                        <td>{{ $role->description}}</td>
                                        <td>{{ $role['full-access']}}</td>
                                        <td> <a class="btn btn-info" href="{{ route('role.show',$role->id)}}">Show</a> </td>
                                        <td> <a class="btn btn-success" href="{{ route('role.edit',$role->id)}}">Edit</a> </td>
                                        <td> <a class="btn btn-danger" href="{{ route('role.edit',$role->id)}}">Delete</a> </td>

                                    @endforeach



                                  </tr>

                                </tbody>
                              </table>

                              {{ $roles->links() }}




                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src=/static/js/chunk-elementUI.8860b63b.js></script>
        <script src=/static/js/chunk-libs.98a27529.js></script>
        <script src=/static/js/app.18adafeb.js></script>
    </body>
</html>
