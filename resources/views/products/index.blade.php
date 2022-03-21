
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
                            <h4 class="card-title">Products</h4>
                            <div class="ml-auto">
                                <div class="dropdown sub-dropdown">

                                        <a href="{{route('products.create')}}"  class="btn-icon btn btn-info-light" role="button" aria-pressed="true">Add</a>


                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered" data-page-size="10" data-pagination="true" data-search="true" data-toggle="table">
                                <thead>
                                    <tr class="border-0">
                                        <th class="border-0 font-14 font-weight-medium text-muted">ID
                                        </th>
                                        <th class="border-0 font-14 font-weight-medium text-muted px-2">Stock keeping unit
                                        </th>
                                        <th class="border-0 font-14 font-weight-medium text-muted">Quantity</th>

                                        <th class="border-0 font-14 font-weight-medium text-muted ">
                                            created at
                                        </th>

                                        <th class="border-0 font-14 font-weight-medium text-muted">actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($products as $product)
                                        <tr>
                                         <td>{{$product->id}}</td>
                                         <td>{{$product->sku}}</td>
                                         <td>{{$product->qte}}</td>

                                         <td>{{$product->created_at->format('d/m/Y')}}</td>
                                            <td>
                                                <a href="{{route('products.edit', ['product'=>$product])}}" class="btn btn-sm btn-success-light btn-sms">Edit</a>

                                                <a href="{{ route('products.delete', ['id'=>$product]) }}" onclick="return confirm('Are you sure you want to delete this product?');"class="btn btn-sm btn-danger-light btn-sm"  {{$product->id}}>Delete</a>

                                            </td>

                                        </tr>
                                    @empty
                                        No Products yet ! click <a href="">link</a> to add new
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





