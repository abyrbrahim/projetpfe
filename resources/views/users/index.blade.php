
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
                            <h4 class="card-title">Liste des utilisateurs</h4>

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
                                        <a href="{{ route('users.delete', ['id'=>$user]) }}" onclick="return confirm('Voulez-vous vraiment supprimer cet utilisateur ?');" class="btn  btn-danger-light btn-sm">Supprimer</a>
                                    </td>
                                </tr>
                                @empty

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





