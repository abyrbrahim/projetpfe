
@extends('layouts.master')
@section('content')

<div class="page-container">

    <!-- Main Page Content -->
    <div class="page-content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body" style="color: rgb(5, 2, 43)">
                        <div class="d-flex align-items-center mb-4">
                            <h4 class="card-title">Clients</h4>
                            <div class="ml-auto">
                                <div class="dropdown sub-dropdown">

                                        <a href="{{ route('clients.create') }}"  class="btn btn-info-light" role="button" aria-pressed="true">Add a new client</a>


                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered" data-page-size="10" data-pagination="true" data-search="true" data-toggle="table">
                                <thead>
                                    <tr class="border-0">
                                        <th class="border-0 font-14 font-weight-medium text-muted">Code Client
                                        </th>
                                        <th class="border-0 font-14 font-weight-medium text-muted px-2">Name
                                        </th>
                                        <th class="border-0 font-14 font-weight-medium text-muted">Email</th>
                                        <th class="border-0 font-14 font-weight-medium text-muted">Phone</th>
                                        <th class="border-0 font-14 font-weight-medium text-muted ">
                                            created at
                                        </th>

                                        <th class="border-0 font-14 font-weight-medium text-muted">actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($clients as $client)
                                        <tr>
                                         <td>{{$client->id}}</td>
                                         <td>{{$client->name}}</td>
                                         <td>{{$client->email}}</td>
                                         <td>
                                            {{$client->phone}}
                                         </td>
                                         <td>{{$client->created_at->format('d/m/Y')}}</td>
                                            <td>
                                                <a href="{{ route('clients.edit', ['client'=>$client]) }}" class="btn btn-sm btn-success-light btn-sm">Edit</a>
                                                <a href="{{ route('clients.delete', ['id'=>$client]) }}" onclick="return confirm('Are you sure you want to delete this client?');"class="btn btn-sm btn-danger-light btn-sm" {{$client->id}}>Delete</a>

                                            </td>

                                        </tr>
                                    @empty
                                        No clients yet ! click <a href="{{ route('clients.create') }}">link</a> to add new
                                    @endforelse

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div><!-- / .page-content -->
</div>
@endsection





