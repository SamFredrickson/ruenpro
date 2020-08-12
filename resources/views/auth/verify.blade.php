@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Проверка вашего почтового адреса') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('На вашу почту было отправлено письмо с проверкой') }}
                        </div>
                    @endif

                    {{ __('Прежде чем продолжать, подтвердите ваш почтовый адрес') }}
                    {{ __('Если вы не получили сообщение.') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Нажмите сюда, чтобы отправить снова.') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
