
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
                            <h4 class="card-title">Orders</h4>

                            <div class="ml-auto">
                                <div class="dropdown sub-dropdown">

                                        <a href="{{ route('orders.create') }}"  class="btn-icon btn btn-info-light" role="button" aria-pressed="true">Add a new order</a>


                                </div>
                            </div>
                        </div>


                        <div class="table-responsive">
                            <table class="table table-bordered" data-page-size="10" data-pagination="true" data-search="true" data-toggle="table">
                                <thead>
                                    <tr class="border-0">
                                        <th class="border-0 font-14 font-weight-medium text-muted">N°
                                        </th>
                                        <th class="border-0 font-14 font-weight-medium text-muted px-2">client
                                        </th>
                                        <th class="border-0 font-14 font-weight-medium text-muted">user</th>
                                        <th class="border-0 font-14 font-weight-medium text-muted">price</th>
                                        <th class="border-0 font-14 font-weight-medium text-muted ">
                                            created at
                                        </th>

                                        <th class="border-0 font-14 font-weight-medium text-muted">actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($orders as $order)
                                        <tr>
                                         <td>{{$order->id}}</td>
                                         <td>{{$order->client->name}}</td>
                                         <td>{{$order->user->name}}</td>
                                         <td>{{$order->prix}}</td>

                                         <td>{{$order->created_at->format('d/m/Y')}}</td>
                                            <td>
                                            <a href="{{ route('orders.edit', ['order'=>$order]) }}" class="btn btn-sm btn-success-light btn-sm">Edit</a>
                                            <a href="{{ route('orders.delete', ['id'=>$order]) }}" onclick="return confirm('Are you sure you want to delete this user?');"class="btn btn-sm btn-danger-light btn-sm" {{$order->id}}>Delete</a>

                                            </td>

                                        </tr>
                                    @empty
                                        No records yet ! click <a href="{{ route('orders.create') }}">link</a> to add new
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





