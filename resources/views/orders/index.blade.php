
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
                            <h4 class="card-title">Liste des commandes</h4>

                            <div class="ml-auto">
                                <div class="dropdown sub-dropdown">

                                        <a href="{{ route('orders.create') }}"  class="btn-icon btn btn-info-light" role="button" aria-pressed="true">Ajouter une nouvelle commande</a>


                                </div>
                            </div>
                        </div>


                        <div class="table-responsive">
                            <table class="table table-bordered" data-page-size="10" data-pagination="true" data-search="true" data-toggle="table">
                                <thead>
                                    <tr class="bg-secondary">
                                        <th class="text-dark">N°
                                        </th>
                                        <th class="text-dark">client
                                        </th>
                                        <th class="text-dark">Utilisateur</th>
                                        <th class="text-dark">Prix</th>
                                        <th class="text-dark">
                                            Créé à
                                        </th>

                                        <th class="text-dark">actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($orders as $order)
                                        <tr>
                                         <td>{{$order->id}}</td>
                                         <td>{{$order->client->name}}</td>
                                         <td>{{$order->user->name}}</td>
                                         <td>{{$order->price}}</td>

                                         <td>{{$order->created_at->format('d/m/Y')}}</td>
                                            <td>
                                            <a href="{{ route('orders.show', ['order'=>$order]) }}" class="btn btn-sm btn-warning-light btn-sm">Imprimer</a>
                                            <a href="{{ route('orders.edit', ['order'=>$order]) }}" class="btn btn-sm btn-success-light btn-sm">Éditer</a>
                                            <a href="{{ route('orders.delete', ['id'=>$order]) }}" onclick="return confirm('Voulez-vous vraiment supprimer cet commande ?');"class="btn btn-sm btn-danger-light btn-sm" {{$order->id}}>Supprimer</a>

                                            </td>

                                        </tr>
                                    @empty
                                    Pas encore d'enregistrements ! Cliquez sur<a href="{{ route('orders.create') }}">lien</a> pour ajouter de nouveaux
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





