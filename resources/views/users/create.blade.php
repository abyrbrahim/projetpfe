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
                                    <h4 class="card-title">Créer un nouvel utilisateur</h4>

                                </div>
                                <form action="{{ route('users.store') }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">Nom <span style="color: red">*</span></label>
                                        <input type="text" name="name" id="name" class="form-control @error('name') error @enderror" value="{{old('name')}}" >
                                        @error('name')
                                            <div class="error">
                                                {{$message}}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email <span style="color: red">*</span></label>
                                        <input type="email" name="email" id="email" class="form-control @error('email') error @enderror" value="{{old('email')}}">
                                        @error('email')
                                            <div class="error">
                                                {{$message}}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="role">Rôle<span style="color: red">*</span></label>
                                        <select  id="role" class="form-control @error('is_admin') error @enderror" name="is_admin" >
                                            <option value="0">Admin</option>
                                            <option value="1">Employé</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Mot de passe <span style="color: red">*</span></label>
                                        <input type="password" name="password" id="password" class="form-control @error('password') error @enderror" >
                                        @error('password')
                                            <div class="error">
                                                {{$message}}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Confirmation mot de passe <span style="color: red">*</span></label>
                                        <input type="password" name="password_confirmation" id="password_confirmation-confirm" class="form-control @error('password_confirmation') error @enderror" >
                                        @error('password_confirmation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>

                                    <button type="submit" class="btn btn-sm btn-primary btn-rounded">Enregistrer</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- *************************************************************** -->
                <!-- End Top Leader Table -->
                <!-- *************************************************************** -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
        </div>      <!-- ============================================================== -->
    </div>          <!-- ============================================================== -->
@endsection

