
@extends('layouts.master')
@section('content')

<div class="page-container">

    <!-- Main Page Content -->
    <div class="page-content">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-4">
                            <h4 class="card-title">Users</h4>

                            <div class="ml-auto">
                                <div class="dropdown sub-dropdown">

                                        <a href="{{ route('users.create') }}"  class="btn-btn-block btn btn-info-light" role="button" aria-pressed="true">Add a new user</a>


                                </div>
                            </div>
                        </div>

                        <table class="table table-bordered" data-page-size="10" data-pagination="true" data-search="true" data-toggle="table">
                            <thead>
                                <tr>

                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Created at</th>
                                    <th>Actions</th>

                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($users as $user)
                                <tr>

                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>@if ($user->isAdmin())
                                        Admin
                                    @else
                                        Employee
                                    @endif</td>
                                    <td>{{$user->created_at->format('d/m/Y')}}</td>

                                    <td >
                                        <a href="{{ route('users.edit', ['user'=>$user]) }}" class="btn btn-success-light btn-sm">Edit</a>
                                        <a href="{{ route('users.delete', ['id'=>$user]) }}" onclick="return confirm('Are you sure you want to delete this user?');" class="btn  btn-danger-light btn-sm">Delete</a>
                                    </td>
                                </tr>
                                @empty

                                @endforelse

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>


    </div><!-- / .page-content -->
</div>
@endsection





