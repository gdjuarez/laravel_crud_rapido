@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>

<!-- agregue este alert para guardar el video tutorial -->
<div class="container mt-8">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="alert alert-success">
               <p>Tutorial CRUD rápido con Laravel y el paquete ibex crud generator</p>
                <a href='https://www.youtube.com/watch?v=j5baJsM_Adc&t=285s&ab_channel=Inform%C3%A1ticaDP'>video</a>
                <hr>
                <a href="https://github.com/awais-vteams/laravel-crud-generator">https://github.com/awais-vteams/laravel-crud-generator</a>
            </div>
            <!-- agregue este boton para ir a Productos -->
            <a href="{{ route('products.index') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Products') }}
                                </a>


        </div>
    </div>
</div>

@endsection
