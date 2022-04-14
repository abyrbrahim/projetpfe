
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
                            <h4 class="card-title" style="color: rgb(5, 2, 43)">Liste des produits</h4>
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
                                        <th class="text-dark">Prix unitaire</th>

                                        <th class="text-dark">
                                            créé à
                                        </th>
                                        @if(Auth::user()->isAdmin())
                                        <th class="text-dark">actions</th>
                                        @endif
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($products as $product)
                                        <tr>
                                         <td>{{$product->id}}</td>
                                         <td>{{$product->sku}}</td>
                                         <td>{{$product->qte}}</td>
                                         <td>{{$product->price}}</td>
                                         
                                         <td>{{$product->created_at->format('d/m/Y')}}</td>
                                         @if(Auth::user()->isAdmin())
                                            <td>
                                                <a href="{{route('products.edit', ['product'=>$product])}}" class="btn btn-sm btn-success-light btn-sms">Éditer</a>

                                                <a href="{{ route('products.delete', ['id'=>$product]) }}" class="btn btn-sm btn-danger-light btn-sm"  data-toggle="modal" data-target="#confirm-modal{{$product->id}}">Supprimer</a>

                                            </td>
                                            <div class="modal fade" tabindex="-1" role="dialog" id="confirm-modal{{$product->id}}">
                                                <div class="modal-dialog modal-dialog-centered modal-confirm confirm-danger">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <div class="icon-box">
                                                                <i class="fa fa-times"></i>

                                                            </div>
                                                            <h4 class="modal-title">Êtes-vous sûr?</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p class="text-center">Cet produit <strong>{{$product->sku}}</strong> définitivement supprimé</p>
                                                        </div>
                                                        <div class="modal-footer row">
                                                            <div class="col-md-6 px-2">
                                                                <button type="button" class="btn btn-light"data-dismiss="modal">Fermer</button>
                                                            </div>
                                                            <div class="col-md-6 px-2">
                                                                <a href="{{ route('products.delete',['id'=>$product->id]) }}" class="btn btn-danger">Supprimer</a>  </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                        </tr>
                                    @empty
                                    Pas encore d'enregistrements ! Cliquez sur <a href="{{route('products.create')}}">lien</a> pour ajouter de nouveaux
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





