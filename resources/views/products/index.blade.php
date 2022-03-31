
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
                            <h4 class="card-title">Liste des produits</h4>
                            <div class="ml-auto">
                                <div class="dropdown sub-dropdown">

                                        <a href="{{route('products.create')}}"  class="btn-icon btn btn-info-light" role="button" aria-pressed="true">Ajouter un nouveau produit</a>


                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered" data-page-size="10" data-pagination="true" data-search="true" data-toggle="table">
                                <thead>
                                    <tr class="bg-secondary">
                                        <th class="text-dark">ID
                                        </th>
                                        <th class="text-dark">Unité de gestion des stocks
                                        </th>
                                        <th class="text-dark">Quantité</th>

                                        <th class="text-dark">
                                            créé à
                                        </th>

                                        <th class="text-dark">actions</th>
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
                                                <a href="{{route('products.edit', ['product'=>$product])}}" class="btn btn-sm btn-success-light btn-sms">Éditer</a>

                                                <a href="{{ route('products.delete', ['id'=>$product]) }}" onclick="return confirm('Voulez-vous vraiment supprimer ce produit ?');"class="btn btn-sm btn-danger-light btn-sm"  {{$product->id}}>Supprimer</a>

                                            </td>

                                        </tr>
                                    @empty
                                    Pas encore d'enregistrements ! Cliquez sur <a href="">lien</a> pour ajouter de nouveaux
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
<div class="page-content">


    <header>
        <div class="row">
            <div class="col-md-6">
                <h1 class="mb-0">Facture</h1>

            </div>
        </div>
    </header>

    <!-- Invoice #3452321 -->
    <div class="panel">
        <div class="panel-header">
            <div class="panel-toolbar">
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-sm btn-icon btn-light btn-panel-print tooltip-top" title="Print Invoice">Print</button>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <div class="invoice-1">

                <div class="row">

                    <div class="col-md-6">
                        <img src="../../../assets/misc/logos/4.png" alt="Company logo" class="logo">
                    </div>

                </div>

                <div class="row mt-4">

                    <div class="col-md-6">
                        <h5 class="heading">Cummings Agency</h5>
                        <p class="address">8888 Cummings Vista Apt. 101, Susanbury, NY 95473</p>
                    </div>
                    <div class="col-md-6 text-right">
                        <div class="recipient-block">
                            <h5 class="heading">To</h5>
                            <p>439 Karley Loaf Suite 897,West Judge, Falkland Islands</p>
                        </div>
                    </div>

                </div>

                <div class="row mt-1 no-gutters bg-primary-lightened p-3">

                    <div class="col-md-6">
                        <p class="key-value">Issued Date : <span>2020/03/08</span></p>
                    </div>
                    <div class="col-md-6 text-right">
                        <div class="recipient-block">
                            <p class="key-value">Due Date : <span>2020/04/08</span></p>
                        </div>
                    </div>

                </div>

                <div class="row mt-4">

                    <div class="col-md-12">

                        <div class="table-responsive">

                            <table class="table table-bordered mb-0">
                                <thead>
                                    <tr class="bg-dark">
                                        <th>#</th>
                                        <th>Description</th>
                                        <th>Quantity</th>
                                        <th>Unit Price</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>

                                 <tbody>
                                    @forelse ($products as $product)
                                     <tr>
                                        <td>{{$product->id}}</td>
                                        <td>{{$product->sku}}</td>
                                        <td>{{$product->qte}}</td>
                                        <td></td>
                                        <td></td>
                                        </tr>
                                        @empty
                                    @endforelse
                                  </tbody>
                            </table>

                        </div>

                    </div>

                </div>

                <div class="row mt-1 no-gutters bg-primary-lightened p-3 d-none">

                    <div class="col-md-6">
                        <h5 class="text-uppercase text-dark mb-0">Total Amount </h5>
                    </div>
                    <div class="col-md-6 text-right">
                        <div class="recipient-block">
                            <h5 class="text-danger font-weight-600 mb-0">0000</h5>
                        </div>
                    </div>

                </div>

                <hr class="m-0 d-print-none">
                <div class="row mt-3">

                    <div class="col-md-6 d-flex flex-column justify-content-center ">
                        <h5 class="text-uppercase">Total Amount : </h5>
                        <h3 class="text-danger font-weight-600 mb-0">0000</h3>
                    </div>



                </div>

                <div class="row d-print-none mt-4">

                    <div class="col-md-12">
                        <button type="button" class="btn btn-primary btn-has-icon btn-icon-split">
                            <span class="icon"><i class="fas fa-print"></i></span>
                            <span>Print</span>
                        </button>
                    </div>

                </div>

            </div>
        </div>
    </div><!-- / Invoice #3452321 -->


</div>
@endsection





