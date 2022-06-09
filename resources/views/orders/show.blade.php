@extends('layouts.master')
@section('content')

<div class="page-container">

    <!-- Main Page Content -->
    <div class="page-content">


        <header>
            <div class="row">
                <div class="col-md-6">
                    <h1 class="mb-0">Bon de commande N° {{ $order->id }}</h1>

                </div>
            </div>
        </header>

        <!-- Invoice #3452321 -->
        <div class="panel">
            <div class="panel-header">
                <h3 class="panel-title">Bon de commande N° {{ $order->id }}</h3>
                <div class="panel-toolbar">
                    <div class="btn-group" role="group">

                        <button type="button" class="btn btn-sm btn-icon btn-light btn-panel-print tooltip-top" title="Print Invoice">Imprimer</button>
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
                            <h5 class="heading">E-liquide Store</h5>
                            <p class="address"> B12 Immeuble Gamaoun, 4022 Av. de la République, Akouda 4022</p>
                        </div>
                        <div class="col-md-6 text-right">
                            <div class="recipient-block">
                                <h5 class="heading">Pour</h5>
                                <p>{{ $order->client->name }}</p>
                                <p>{{ $order->client->email }}</p>
                                <p>{{ $order->client->phone }}</p>

                            </div>
                        </div>

                    </div>

                    <div class="row mt-1 no-gutters bg-primary-lightened p-3">

                        <div class="col-md-6">
                            <p class="key-value">Date de creation: <span>{{ $order->created_at->format('d/m/Y') }}</span></p>
                        </div>


                    </div>

                    <div class="row mt-4">

                        <div class="col-md-12">

                            <div class="table-responsive">

                                <table class="table table-bordered mb-0">
                                    <thead>
                                        <tr class="bg-dark">
                                            <th>#</th>
                                            <th>Article</th>
                                            <th>Quantité</th>
                                            <th>Prix unitaire</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($order->products as $item)
                                        <tr>
                                            <td>{{$order->id}}</td>
                                            <td>{{$item->sku }}</td>
                                            <td>{{$item->pivot->qte }}</td>

                                            <td>{{ $item->price }}</td>
                                            <td>{{ $item->pivot->price }}</td>
                                        </tr>
                                        @endforeach

                                        <tr class="aggregation">
                                            <td colspan="3"></td>
                                            <td>Total</td>
                                            <td>{{$order->price}}</td>
                                        </tr>


                                    </tbody>
                                </table>

                            </div>

                        </div>

                    </div>


                </div>
            </div>
        </div><!-- / Invoice #3452321 -->


    </div><!-- / .page-content -->
    <!-- Main Page Content -->



</div><!-- / .page-container -->

@endsection
