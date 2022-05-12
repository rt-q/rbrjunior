@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">THANKS</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div align="center">
                        <img src="https://1516.pl/prv/laravel/snowflake.gif" />
                    </div>
                        <hr />
                        <p>Dziękuję za zaproszenie do rekrutacji, takie zadania uczą więcej niż dobre tutoriale ;-). 
                            Zostało mi jeszcze chwila do końca czasu i dużo rzeczy, które chciałbym napisać od początku więc zostawiam to tak jak jest. Pozdrawiam, Sebastian.
                            
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
