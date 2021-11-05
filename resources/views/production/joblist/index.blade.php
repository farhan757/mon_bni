@extends('layouts.master')

@section('content')
<div class="content-wrapper">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title"><span class="mdi mdi-ticket-confirmation"></span> Table Job Ticket</h4>
                <p class="card-description">
                <div class="input-group">
                    <button type="button" class="btn btn-outline-success btn-fw"><span class="ti-plus" id="adddata"> </span> Create Ticket</button>                                          
                </div>
                </p>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>
                                    Job Ticket
                                </th>
                                <th>
                                    Submit Date
                                </th>
                                <th>
                                    Project Name
                                </th>
                                <th>
                                    Status
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