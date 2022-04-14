
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
                            <h4 class="card-title" style="color: rgb(5, 2, 43)">Liste des utilisateurs</h4>

                            <div class="ml-auto">
                                <div class="dropdown sub-dropdown">

                                        <a href="{{ route('users.create') }}"  class="btn-btn-block btn btn-info-light" role="button" aria-pressed="true">Ajouter un nouveau utilisateur</a>

                                </div>
                            </div>
                        </div>

                        <table class="table table-bordered" data-page-size="10" data-pagination="true" data-search="true" data-toggle="table">
                            <thead>
                                <tr class="bg-secondary">

                                    <th  class="text-dark">Nom</th>
                                    <th class="text-dark">Email</th>
                                    <th class="text-dark">Rôle</th>
                                    <th class="text-dark">Créé à</th>
                                    <th class="text-dark">Actions</th>

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
                                        Employé
                                    @endif</td>
                                    <td>{{$user->created_at->format('d/m/Y')}}</td>

                                    <td >
                                        <a href="{{ route('users.edit', ['user'=>$user]) }}" class="btn btn-success-light btn-sm">Éditer</a>
                                        <a href="{{ route('users.delete', ['id'=>$user]) }}" class="btn  btn-danger-light btn-sm" data-toggle="modal" data-target="#confirm-modal{{$user->id}}">Delete</a>                                    </td>
                                        <div class="modal fade" tabindex="-1" role="dialog" id="confirm-modal{{$user->id}}">
                                            <div class="modal-dialog modal-dialog-centered modal-confirm confirm-danger">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <div class="icon-box">
                                                            <i class="fa fa-times"></i>

                                                        </div>
                                                        <h4 class="modal-title">Êtes-vous sûr?</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p class="text-center">Cet utilisateur <strong >{{$user->name}}</strong> sera définitivement supprimé</p>
                                                    </div>
                                                    <div class="modal-footer row">
                                                        <div class="col-md-6 px-2">
                                                            <button type="button" class="btn btn-light"data-dismiss="modal">Fermer</button>
                                                        </div>
                                                        <div class="col-md-6 px-2">
                                                            <a href="{{ route('users.delete',['id'=>$user->id]) }}" class="btn btn-danger">Supprimer</a>                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </tr>
                                @empty
                                Pas encore d'enregistrements ! Cliquez sur <a href="{{route('users.create')}}"> lien</a> pour ajouter de nouveaux

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





