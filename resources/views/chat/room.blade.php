@extends('layouts.app')

@section('content')
<div class="container">
    <h4 class="mb-4"> {{ $room->title}} </h4>

    <div class="row">
        <div class="col-md-2">
            Users
        </div>
        <div class="col-md-10">
            Meesage
            New message
        </div>
    </div>
</div>
@endsection
