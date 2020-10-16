@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-xs-12 col-sm-8">
            <div class="card">
            @if (session('status'))
                <div class="btn btn-info">
                {{ session('status') }}
                </div>
                @endif
                <h4 style="color:black;text-align:center"><a href="http://localhost/crud/public/masters">List Of Quran Eudication Blog</h4>

                  </div>
                  </div>
                    <br><br>
                    <img src="download.jpg" width="400" height="400">


        @endsection
