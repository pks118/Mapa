@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <a href="/add_tiding" class="btn btn-primary">Новости</a>
                            <a href="" class="btn btn-primary">Сообщения</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
