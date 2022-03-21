
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

                                        <a href="{{ route('orders.create') }}"  class="btn  btn-outline-success btn-lg active" role="button" aria-pressed="true">Add a new order</a>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table no-wrap v-middle mb-0">
                                <thead>
                                    <tr class="border-0">
                                        <th class="border-0 font-14 font-weight-medium text-muted">ID Order
                                        </th>
                                        <th class="border-0 font-14 font-weight-medium text-muted px-2">User
                                        </th>
                                        <th class="border-0 font-14 font-weight-medium text-muted">Description</th>
                                        <th class="border-0 font-14 font-weight-medium text-muted">Client name </th>
                                        <th class="border-0 font-14 font-weight-medium text-muted">Price</th>
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
                                         <td>{{$order->user->name}}</td>
                                         <td>{{$order->description}}</td>
                                         <td>{{$order->client->name}}</td>
                                         <td>{{$order->prix}}</td>

                                         <td>{{$order->created_at->format('d/m/Y')}}</td>
                                            <td>

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





