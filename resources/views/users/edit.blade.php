@extends('layouts.master')
@section('content')

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-4">
                                    <h4 class="card-title">Modifier l'utilisateur</h4>

                                </div>
                                <form action="{{ route('users.update') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$user->id}}">
                                    <div class="form-group">
                                        <label for="name">Nom <span style="color: red">*</span></label>
                                        <input type="text" name="name" id="name" class="form-control @error('name') error @enderror"  value="{{$user->name}}">
                                        @error("name")
                                            <div class="error">
                                                {{$message}}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email <span style="color: red">*</span></label>
                                        <input type="email" name="email" id="email" class="form-control @error('email') error @enderror"  value="{{$user->email}}">
                                        @error("email")
                                        <div class="error">
                                            {{$message}}
                                        </div>
                                    @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="role">Rôle<span style="color: red">*</span></label>
                                        <select  id="role" class="form-control @error('is_admin') error @enderror" name="is_admin" value="{{$user->is_admin}}" >
                                            <option value="0">Admin</option>
                                            <option value="1">Employé</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Mot de passe <span style="color: red">*</span></label>
                                        <input type="password" name="password" id="password" class="form-control @error('password') error @enderror" >
                                        @error("password")
                                            <div class="error">
                                                {{$message}}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Confirmation mot de passe <span style="color: red">*</span></label>
                                        <input type="password" name="password_confirmation" id="password-confirm" class="form-control @error('password-confirm') error @enderror" >
                                    </div>
                                    <button type="submit" class="btn btn-sm btn-primary btn-rounded">mettre à jour</button>
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
            <!-- ============================================================== -->
            <!-- ============================================================== -->
@endsection
