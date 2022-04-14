
@extends('layouts.master')
@section('content')

<div class="page-container">

    <!-- Main Page Content -->
    <div class="page-content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body" >
                        <div class="d-flex align-items-center mb-4">
                            <h4 style="color: rgb(5, 2, 43)"class="card-title"> Liste des clients</h4>
                            <div class="ml-auto">
                                <div class="dropdown sub-dropdown">

                                        <a href="{{ route('clients.create') }}"  class="btn btn-info-light" role="button" aria-pressed="true">Ajouter un nouveau client</a>


                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered mb-0" data-page-size="10" data-pagination="true" data-search="true" data-toggle="table">
                                <thead>
                                    <tr class="bg-secondary ">
                                        <th class="text-dark ">Code Client
                                        </th>
                                        <th class="text-dark">Nom
                                        </th>
                                        <th class="text-dark">Email</th>
                                        <th class="text-dark">Téléphone</th>
                                        <th class="text-dark ">
                                            créé à
                                        </th>
                                        
                                        
                                        @if(Auth::user()->isAdmin())
                                        <th class="text-dark">actions</th>
                                        @endif
                                       
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
                                          @if(Auth::user()->isAdmin())
                                         <td>
                                            
                                                <a href="{{ route('clients.edit', ['client'=>$client]) }}" class="btn btn-sm btn-success-light btn-sm">Éditer</a>
                                                
                                                <a href="{{ route('clients.delete', ['id'=>$client]) }}" class="btn btn-sm btn-danger-light btn-sm" data-toggle="modal" data-target="#confirm-modal{{$client->id}}">Supprimer</a>
                                                
                                            </td>
                                            
                                            <div class="modal fade" tabindex="-1" role="dialog" id="confirm-modal{{$client->id}}">
                                                <div class="modal-dialog modal-dialog-centered modal-confirm confirm-danger">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <div class="icon-box">
                                                                <i class="fa fa-times"></i>

                                                            </div>
                                                            <h4 class="modal-title">Êtes-vous sûr?</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p class="text-center">Cet client <strong >{{$client->name}}</strong> sera définitivement supprimé</p>
                                                        </div>
                                                        <div class="modal-footer row">
                                                            <div class="col-md-6 px-2">
                                                                <button type="button" class="btn btn-light"data-dismiss="modal">Fermer</button>
                                                            </div>
                                                            
                                                            <div class="col-md-6 px-2">
                                                                <a href="{{ route('clients.delete',['id'=>$client->id]) }}" class="btn btn-danger">Supprimer</a>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                        </tr>
                                    @empty
                                    Pas encore d'enregistrements ! Cliquez sur<a href="{{ route('clients.create') }}">lien</a> pour ajouter de nouveaux
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





