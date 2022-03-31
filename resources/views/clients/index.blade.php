
@extends('layouts.master')
@section('content')

<div class="page-container">

    <!-- Main Page Content -->
    <div class="page-content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body" style="color: rgb(5, 2, 43)">
                        <div class="d-flex align-items-center mb-4">
                            <h4 class="card-title">Clients</h4>
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

                                        <th class="text-dark">actions</th>
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
                                            <td>
                                                <a href="{{ route('clients.edit', ['client'=>$client]) }}" class="btn btn-sm btn-success-light btn-sm">Éditer</a>
                                                <a href="{{ route('clients.delete', ['id'=>$client]) }}" onclick="return confirm('Voulez-vous vraiment supprimer cet client ?');"class="btn btn-sm btn-danger-light btn-sm" {{$client->id}}>Supprimer</a>

                                            </td>

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





