@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard Admin</div>

                <div class="panel-body">
                    Assalamualaikum admin : <b> {{ Auth::user() -> name }} </b>
                    <br>
                    Anda login sebagai Admin, anda bisa melakukan manajemen data! 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
