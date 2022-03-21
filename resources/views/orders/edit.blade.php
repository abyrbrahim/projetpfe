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
                                    <h4 class="card-title">Update N° {{$order->id}}</h4>

                                </div>
                                <form action="{{ route('orders.update') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$order->id}}">
                                    <div class="form-group">
                                        <label for="name">Client <span style="color: red">*</span></label>
                                       <select name="client_id" id="client_id" class="form-control">
                                           @forelse ($clients as $item)
                                                <option value="{{$item->id}}" @if($item->id == $order->client_id) selected @endif>{{$item->name}}</option>
                                           @empty

                                           @endforelse
                                       </select>
                                        @error('client_id')
                                            <div class="error">
                                                {{$message}}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Description <span style="color: red">*</span></label>
                                        <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{$order->description}}</textarea>
                                        @error('description')
                                            <div class="error">
                                                {{$message}}
                                            </div>
                                        @enderror
                                    </div>


                                    <div class="form-group">
                                        <label for="price">Price <span style="color: red">*</span></label>
                                        <input type="number" name="prix" id="prix" class="form-control" value="{{$order->prix}}" >
                                        @error('prix')
                                            <div class="error">
                                                {{$message}}
                                            </div>
                                        @enderror
                                    </div>

                                    <button type="submit" class="btn btn-sm btn-primary btn-rounded">Submit</button>
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

