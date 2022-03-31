@extends('layouts.master')
@section('content')

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-4">
                                    <h4 class="card-title">Modifier le client</h4>

                                </div>
                                <form action="{{ route('clients.update') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$client->id}}">
                                    <div class="form-group">
                                        <label for="name">Nom <span style="color: red">*</span></label>
                                        <input type="text" name="name" id="name" class="form-control"  value="{{$client->name}}">
                                        @error("name")
                                            <div class="error">
                                                {{$message}}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email <span style="color: red">*</span></label>
                                        <input type="email" name="email" id="email" class="form-control"  value="{{$client->email}}">
                                        @error("email")
                                        <div class="error">
                                            {{$message}}
                                        </div>
                                    @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="number">Numéro de téléphone <span style="color: red">*</span></label>
                                        <input type="tel" name="phone" id="phone" class="form-control" value="{{$client->phone}}" >
                                        @error('phone')
                                        <div class="error">
                                            {{$message}}
                                        </div>
                                    @enderror
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
