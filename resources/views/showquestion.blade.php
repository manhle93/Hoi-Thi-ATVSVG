@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
                <div class="card-header label">DANH SÁCH CÂU HỎI</div>
            <show-question :questions="{{$question}}"></show-question>
            </div>
        </div>
    </div>
</div>
@endsection