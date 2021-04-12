@extends('layout.layout')
@section('title')
Rankings
@endsection
@section('custom-css')
@endsection


@section('content')


<form method="GET" action="{{ route('counter') }}">
    <div class="container-fluid justify-content-center pt-5 pb-5" >
		<div class="row justify-content-center">
            @foreach ($counters as $counter)
            <div class ="col-sm-12 col-md-6 py-5"><h2 id="label-cont" >
                    <div class ="row">
                        <div class = "col-md-12 d-flex justify-content-center">
                            <h2 class="fonts">{{ $counter->act }}</h2>
                        </div>
                    </div>
                    <div class ="row py-5 ">
                        <div class = "col-md-12 py-5 d-flex justify-content-center">
                            <span class =" "style="font-size:10rem; color: #7ba6d3">{{ $counter->cont }}</span>
                        </div>
                    </div>
            </div>
            @endforeach
		</div>
    </div>
</form>


@endsection


@section('custom-js')

@endsection
