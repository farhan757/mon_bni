@extends('layouts.master')

@section('content')
<div class="content-wrapper">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title"><span class="mdi mdi-city"></span> Table Project</h4>
                <p class="card-description">
                <div class="input-group">
                    <button type="button" class="btn btn-inverse-success btn-fw"><span class="ti-plus" id="adddata"> </span> Add Project</button>
                </div>
                </p>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>
                                    Nama Project
                                </th>
                                <th>
                                    Desc Project
                                </th>
                                <th>
                                    Created At
                                </th>                                
                                <th>
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection