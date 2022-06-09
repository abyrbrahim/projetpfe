@extends('layouts.master')

@error('quantity')
<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){
         $('#quantity-modal{{ old('id') }}').modal("show");


    });

</script>
@enderror



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

                                    <a href="{{route('products.create')}}" class="btn-icon btn btn-info-light"
                                        role="button" aria-pressed="true">Ajouter un nouveau produit</a>


                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered" data-page-size="10" data-pagination="true"
                                data-search="true" data-toggle="table">
                                <thead>
                                    <tr class="bg-secondary">
                                        <th class="text-dark">ID
                                        </th>
                                        <th class="text-dark">Unité de gestion des stocks
                                        </th>
                                        <th class="text-dark">Quantité

                                        </th>

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
                                        <td> <a href="#" data-toggle="modal"
                                                data-target="#quantity-modal{{ $product->id }}"> {{$product->qte}}</a>
                                        </td>
                                        <td>{{$product->price}}</td>

                                        <td>{{$product->created_at->format('d/m/Y')}}</td>
                                        @if(Auth::user()->isAdmin())
                                        <td>


                                            <a href="{{route('products.edit', ['product'=>$product])}}"
                                                class="btn btn-sm btn-success-light btn-sms">Éditer</a>

                                            <a href="{{ route('products.delete', ['id'=>$product]) }}"
                                                class="btn btn-sm btn-danger-light btn-sm" data-toggle="modal"
                                                data-target="#confirm-modal{{$product->id}}">Supprimer</a>

                                        </td>
                                        <div class="modal fade" tabindex="-1" role="dialog"
                                            id="confirm-modal{{$product->id}}">
                                            <div
                                                class="modal-dialog modal-dialog-centered modal-confirm confirm-danger">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <div class="icon-box">
                                                            <i class="fa fa-times"></i>

                                                        </div>
                                                        <h4 class="modal-title">Êtes-vous sûr?</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p class="text-center">Cet produit
                                                            <strong>{{$product->sku}}</strong> définitivement supprimé
                                                        </p>
                                                    </div>
                                                    <div class="modal-footer row">
                                                        <div class="col-md-6 px-2">
                                                            <button type="button" class="btn btn-light"
                                                                data-dismiss="modal">Fermer</button>
                                                        </div>
                                                        <div class="col-md-6 px-2">
                                                            <a href="{{ route('products.delete',['id'=>$product->id]) }}"
                                                                class="btn btn-danger">Supprimer</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                        @endif
                                    </tr>
                                    <div class="modal fade" tabindex="-1" role="dialog"
                                        id="quantity-modal{{ $product->id }}">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Ajouter une quantité</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="#333333"
                                                            viewBox="0 0 24 24" width="24" height="24">
                                                            <path
                                                                d="M16.24 14.83a1 1 0 0 1-1.41 1.41L12 13.41l-2.83 2.83a1 1 0 0 1-1.41-1.41L10.59 12 7.76 9.17a1 1 0 0 1 1.41-1.41L12 10.59l2.83-2.83a1 1 0 0 1 1.41 1.41L13.41 12l2.83 2.83z" />
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('products.update.quantity') }}"
                                                        method="post">
                                                        @csrf

                                                        <div class="form-group">
                                                            <label for="number">Quantité<span
                                                                    style="color: red">*</span></label>
                                                            <input type="hidden" name="id" value="{{ $product->id }}">
                                                            <input type="number" name="quantity" id="number"
                                                                class="form-control @error('quantity') error @enderror">
                                                            @error('quantity')
                                                            <div class="error">
                                                                {{$message}}
                                                            </div>
                                                            @enderror
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="submit"
                                                                class="btn btn-success">Ajouter</button>

                                                            <button type="button" class="btn btn-light"
                                                                data-dismiss="modal">Annuler</button>
                                                        </div>


                                                    </form>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    @empty
                                    Pas encore d'enregistrements ! Cliquez sur <a
                                        href="{{route('products.create')}}">lien</a> pour ajouter de nouveaux
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
