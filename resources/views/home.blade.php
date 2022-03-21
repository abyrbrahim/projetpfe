
@extends('layouts.master')
@section('content')

<div class="page-container">
      <!-- Main Page Content -->
<div class="page-content">
    <div class="row mt-n24">
        <div class="col-6 col-sm-4 col-lg-2 col-md-3 mt-24">
								<div class="widget widget-sm h-full">
									<svg fill="#000" viewBox="0 0 36 32">
										<path d="M0.5 31.983c0.268 0.067 0.542-0.088 0.612-0.354 1.030-3.843 5.216-4.839 7.718-5.435 0.627-0.149 1.122-0.267 1.444-0.406 2.85-1.237 3.779-3.227 4.057-4.679 0.034-0.175-0.029-0.355-0.165-0.473-1.484-1.281-2.736-3.204-3.526-5.416-0.022-0.063-0.057-0.121-0.103-0.171-1.045-1.136-1.645-2.337-1.645-3.294 0-0.559 0.211-0.934 0.686-1.217 0.145-0.087 0.236-0.24 0.243-0.408 0.221-5.094 3.849-9.104 8.299-9.13 0.005 0 0.102 0.007 0.107 0.007 4.472 0.062 8.077 4.158 8.206 9.324 0.004 0.143 0.068 0.277 0.178 0.369 0.313 0.265 0.459 0.601 0.459 1.057 0 0.801-0.427 1.786-1.201 2.772-0.037 0.047-0.065 0.101-0.084 0.158-0.8 2.536-2.236 4.775-3.938 6.145-0.144 0.116-0.212 0.302-0.178 0.483 0.278 1.451 1.207 3.44 4.057 4.679 0.337 0.146 0.86 0.26 1.523 0.403 2.477 0.536 6.622 1.435 7.639 5.232 0.060 0.223 0.262 0.37 0.482 0.37 0.043 0 0.086-0.006 0.13-0.017 0.267-0.072 0.425-0.346 0.354-0.613-1.175-4.387-5.871-5.404-8.393-5.95-0.585-0.127-1.090-0.236-1.336-0.344-1.86-0.808-3.006-2.039-3.411-3.665 1.727-1.483 3.172-3.771 3.998-6.337 0.877-1.14 1.359-2.314 1.359-3.317 0-0.669-0.216-1.227-0.644-1.663-0.238-5.604-4.237-10.017-9.2-10.088l-0.149-0.002c-4.873 0.026-8.889 4.323-9.24 9.83-0.626 0.46-0.944 1.105-0.944 1.924 0 1.183 0.669 2.598 1.84 3.896 0.809 2.223 2.063 4.176 3.556 5.543-0.403 1.632-1.55 2.867-3.414 3.676-0.241 0.105-0.721 0.22-1.277 0.352-2.541 0.604-7.269 1.729-8.453 6.147-0.071 0.267 0.087 0.54 0.354 0.612z"></path>
									</svg>
									<h4><span class="counter">{{$users}}</span></h4>
									<h6>Users</h6>
								</div>
     </div>
     <div class="col-6 col-sm-4 col-lg-2 col-md-3 mt-24">
                <div class="widget widget-sm h-full">
                    <svg fill="#000" viewBox="0 0 36 32">
                        <path d="M0.5 31.983c0.268 0.067 0.542-0.088 0.612-0.354 1.030-3.843 5.216-4.839 7.718-5.435 0.627-0.149 1.122-0.267 1.444-0.406 2.85-1.237 3.779-3.227 4.057-4.679 0.034-0.175-0.029-0.355-0.165-0.473-1.484-1.281-2.736-3.204-3.526-5.416-0.022-0.063-0.057-0.121-0.103-0.171-1.045-1.136-1.645-2.337-1.645-3.294 0-0.559 0.211-0.934 0.686-1.217 0.145-0.087 0.236-0.24 0.243-0.408 0.221-5.094 3.849-9.104 8.299-9.13 0.005 0 0.102 0.007 0.107 0.007 4.472 0.062 8.077 4.158 8.206 9.324 0.004 0.143 0.068 0.277 0.178 0.369 0.313 0.265 0.459 0.601 0.459 1.057 0 0.801-0.427 1.786-1.201 2.772-0.037 0.047-0.065 0.101-0.084 0.158-0.8 2.536-2.236 4.775-3.938 6.145-0.144 0.116-0.212 0.302-0.178 0.483 0.278 1.451 1.207 3.44 4.057 4.679 0.337 0.146 0.86 0.26 1.523 0.403 2.477 0.536 6.622 1.435 7.639 5.232 0.060 0.223 0.262 0.37 0.482 0.37 0.043 0 0.086-0.006 0.13-0.017 0.267-0.072 0.425-0.346 0.354-0.613-1.175-4.387-5.871-5.404-8.393-5.95-0.585-0.127-1.090-0.236-1.336-0.344-1.86-0.808-3.006-2.039-3.411-3.665 1.727-1.483 3.172-3.771 3.998-6.337 0.877-1.14 1.359-2.314 1.359-3.317 0-0.669-0.216-1.227-0.644-1.663-0.238-5.604-4.237-10.017-9.2-10.088l-0.149-0.002c-4.873 0.026-8.889 4.323-9.24 9.83-0.626 0.46-0.944 1.105-0.944 1.924 0 1.183 0.669 2.598 1.84 3.896 0.809 2.223 2.063 4.176 3.556 5.543-0.403 1.632-1.55 2.867-3.414 3.676-0.241 0.105-0.721 0.22-1.277 0.352-2.541 0.604-7.269 1.729-8.453 6.147-0.071 0.267 0.087 0.54 0.354 0.612z"></path>
                    </svg>
                    <h4><span class="counter">{{$clients}}</span></h4>
                    <h6>Clients</h6>
     </div>
</div>



<div class="col-6 col-sm-4 col-lg-2 col-md-3 mt-24">
								<div class="widget widget-sm h-full">
									<svg fill="#000" viewBox="0 0 42 32">
										<path d="M39.5 14h-37c-0.154 0-0.3 0.071-0.395 0.192s-0.128 0.279-0.091 0.429l4.006 16.017c0.096 0.337 0.391 1.362 1.48 1.362h27c1.093 0 1.385-1.026 1.485-1.379l4-16c0.037-0.149 0.004-0.308-0.091-0.429s-0.24-0.192-0.394-0.192zM35.020 30.363c-0.182 0.637-0.37 0.637-0.52 0.637h-27c-0.149 0-0.336 0-0.515-0.621l-3.844-15.379h35.719l-3.84 15.363zM18.5 28c0.276 0 0.5-0.224 0.5-0.5v-9c0-0.276-0.224-0.5-0.5-0.5s-0.5 0.224-0.5 0.5v9c0 0.276 0.224 0.5 0.5 0.5zM11.499 28c0.019 0 0.037-0.001 0.057-0.003 0.274-0.031 0.472-0.278 0.441-0.552l-1-9c-0.030-0.275-0.27-0.469-0.553-0.442-0.274 0.031-0.472 0.278-0.441 0.552l1 9c0.028 0.256 0.245 0.445 0.496 0.445zM24.5 28c0.276 0 0.5-0.224 0.5-0.5v-9c0-0.276-0.224-0.5-0.5-0.5s-0.5 0.224-0.5 0.5v9c0 0.276 0.224 0.5 0.5 0.5zM30.444 27.997c0.020 0.002 0.038 0.003 0.057 0.003 0.251 0 0.468-0.189 0.496-0.445l1-9c0.030-0.274-0.167-0.521-0.441-0.552-0.287-0.028-0.522 0.167-0.553 0.442l-1 9c-0.030 0.274 0.167 0.521 0.441 0.552zM34.5 12c0.116 0 0.232-0.040 0.327-0.122 0.209-0.181 0.231-0.496 0.051-0.705l-9.5-11c-0.181-0.21-0.496-0.231-0.705-0.052-0.209 0.181-0.231 0.496-0.051 0.705l9.5 11c0.099 0.115 0.238 0.174 0.378 0.174zM17.816 0.113c-0.213-0.173-0.528-0.144-0.703 0.071l-9 11c-0.175 0.213-0.144 0.528 0.070 0.704 0.093 0.075 0.206 0.112 0.317 0.112 0.145 0 0.288-0.062 0.387-0.184l9-11c0.175-0.213 0.143-0.528-0.071-0.703zM41.5 10h-4c-0.276 0-0.5 0.224-0.5 0.5s0.224 0.5 0.5 0.5h4c0.276 0 0.5-0.224 0.5-0.5s-0.224-0.5-0.5-0.5zM13.5 11h16c0.276 0 0.5-0.224 0.5-0.5s-0.224-0.5-0.5-0.5h-16c-0.276 0-0.5 0.224-0.5 0.5s0.224 0.5 0.5 0.5zM0.5 11h5c0.276 0 0.5-0.224 0.5-0.5s-0.224-0.5-0.5-0.5h-5c-0.276 0-0.5 0.224-0.5 0.5s0.224 0.5 0.5 0.5z"></path>
									</svg>
									<h4><span class="counter">{{$orders}}</span></h4>
									<h6>Orders</h6>
								</div>
			</div>
            <div class="col-md-6 mt-24">

                <div class="widget-media-3 h-full">

                    <div class="widget-img">
                        <img src="../../assets/svg/undraw/undraw_product_tour_foyt.svg" alt="" class="img-fluid">
                    </div>
                    <div class="widget-body">
                        <h5 class="widget-title font-weight-500">You have {{$orders}} @if ($orders > 1)
                            orders
                        @else
                        order
                        @endif </h5>
                        <a  href="{{route('orders.create')}}" role="button" class="btn btn-has-icon btn-dark font-weight-300">
                            <span class="icon"><svg style="width: 16px; height: 16px; margin-right: 2px; margin-left: 2px;" viewBox="0 0 32 32"><path d="M 15 5 L 15 15 L 5 15 L 5 17 L 15 17 L 15 27 L 17 27 L 17 17 L 27 17 L 27 15 L 17 15 L 17 5 Z"/></svg></span>
                            <span>Add orders </span>
                        </a>
                    </div>

                </div>
            </div>

	</div>
</div>
@endsection





