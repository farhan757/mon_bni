@extends('layouts.master')

@section('content')
<div class="content-wrapper">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title"><span class="mdi mdi-account-card-details"></span> Table User</h4>
                <p class="card-description">
                <div class="input-group">
                    <button type="button" class="btn btn-inverse-success btn-fw" onclick="showform()"><span class="ti-plus" id="adddata"> </span> Add User</button>
                </div>
                </p>
                <div class="table-responsive">
                    <table id="tb_user" class="table table-striped">
                        <thead>
                            <tr>
                                <th>
                                    User Name
                                </th>
                                <th>
                                    Email
                                </th>
                                <th>
                                    Group
                                </th>
                                <th>
                                    Created_at
                                </th>
                                <th>
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $val)
                            <tr>
                                <td>{{ $val->name }}</td>
                                <td>{{ $val->email }}</td>
                                <td>{{ $val->nama_group }}</td>
                                <td>{{ $val->created_at }}</td>
                                <td>
                                    <button class="btn btn-outline-primary" onclick="tes()">Edit</button>
                                    <button class="btn btn-outline-danger" onclick="DeleteUser()">Delete</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    $('#tb_user').DataTable({
        "aLengthMenu": [
            [5, 10, 15, -1],
            [5, 10, 15, "All"]
        ],
        "iDisplayLength": 10,
    });

    function showform(){
        window.location.href = "{{ route('user.form') }}";
    }

    function DeleteUser(id) {
        swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this user!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    swal("Poof! Your imaginary file has been deleted!", {
                        icon: "success",
                    });
                } else {
                    swal("Your imaginary file is safe!");
                }
            });
    }
</script>
@endsection