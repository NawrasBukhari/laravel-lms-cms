@extends('layouts.master')
@section('page_title', 'Manage Frontend')
@section('content')
<div class="card">
    <div class="card-header">
        <div class="alert alert-info" role="alert">
            Here is the view of website content you can not edit anything from here directly
        </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
        @foreach ($frontend as $l)

    <br>
    {{--------------------------------Things starts here-----------------------------------}}
    <style>
        .input-group{
            padding: 15px;

        }
    </style>
    <form>
        <div class="input-group mb-3">
            <input type="text" class="form-control" value="{{ $l-> hero_title }}" readonly  aria-describedby="basic-addon2">
            <div class="input-group-append">
                <a href ="{{route('edit')}}"> <button class="btn btn-outline-warning" type="button" > Edit </button> </a>
            </div>
        </div>
        <div class="input-group mb-3">
            <input type="text" class="form-control" value="{{ $l-> hero_paragraph }}" readonly   aria-describedby="basic-addon2">
            <div class="input-group-append">
                <a href ="{{route('edit')}}"> <button class="btn btn-outline-warning" type="button" > Edit </button> </a>
            </div>
        </div>
        <div class="input-group mb-3">
            <input type="text" class="form-control" value="{{ $l-> card_1_title }}" readonly   aria-describedby="basic-addon2">
            <div class="input-group-append">
                <a href ="{{route('edit')}}"> <button class="btn btn-outline-warning" type="button" > Edit </button> </a>
            </div>
        </div>
        <div class="input-group mb-3">
            <input type="text" class="form-control" value="{{ $l-> card_1_paragraph }}" readonly   aria-describedby="basic-addon2">
            <div class="input-group-append">
                <a href ="{{route('edit')}}"> <button class="btn btn-outline-warning" type="button" > Edit </button> </a>
            </div>
        </div>
        <div class="input-group mb-3">
            <input type="text" class="form-control" value="{{ $l-> card_2_title }}" readonly   aria-describedby="basic-addon2">
            <div class="input-group-append">
                <a href ="{{route('edit')}}"> <button class="btn btn-outline-warning" type="button" > Edit </button> </a>
            </div>
        </div>
        <div class="input-group mb-3">
            <input type="text" class="form-control" value="{{ $l-> card_2_paragraph }}" readonly   aria-describedby="basic-addon2">
            <div class="input-group-append">
                <a href ="{{route('edit')}}"> <button class="btn btn-outline-warning" type="button" > Edit </button> </a>
            </div>
        </div><div class="input-group mb-3">
            <input type="text" class="form-control" value="{{ $l-> card_3_title }}" readonly   aria-describedby="basic-addon2">
            <div class="input-group-append">
                <a href ="{{route('edit')}}"> <button class="btn btn-outline-warning" type="button" > Edit </button> </a>
            </div>
        </div>
        <div class="input-group mb-3">
            <input type="text" class="form-control" value="{{ $l-> card_4_paragraph }}" readonly   aria-describedby="basic-addon2">
            <div class="input-group-append">
                <a href ="{{route('edit')}}"> <button class="btn btn-outline-warning" type="button" > Edit </button> </a>
            </div>
        </div><div class="input-group mb-3">
            <input type="text" class="form-control" value="{{ $l-> card_5_title }}" readonly   aria-describedby="basic-addon2">
            <div class="input-group-append">
                <a href ="{{route('edit')}}"> <button class="btn btn-outline-warning" type="button" > Edit </button> </a>
            </div>
        </div>
        <div class="input-group mb-3">
            <input type="text" class="form-control" value="{{ $l-> card_5_paragraph }}" readonly   aria-describedby="basic-addon2">
            <div class="input-group-append">
                <a href ="{{route('edit')}}"> <button class="btn btn-outline-warning" type="button" > Edit </button> </a>
            </div>
        </div><div class="input-group mb-3">
            <input type="text" class="form-control" value="{{ $l-> card_6_title }}" readonly   aria-describedby="basic-addon2">
            <div class="input-group-append">
                <a href ="{{route('edit')}}"> <button class="btn btn-outline-warning" type="button" > Edit </button> </a>
            </div>
        </div>
        <div class="input-group mb-3">
            <input type="text" class="form-control" value="{{ $l-> card_6_paragraph }}" readonly   aria-describedby="basic-addon2">
            <div class="input-group-append">
                <a href ="{{route('edit')}}"> <button class="btn btn-outline-warning" type="button" > Edit </button> </a>
            </div>
        </div>
        <div class="input-group mb-3">
            <input type="text" class="form-control" value="{{ $l-> value_title }}" readonly   aria-describedby="basic-addon2">
            <div class="input-group-append">
                <a href ="{{route('edit')}}"> <button class="btn btn-outline-warning" type="button" > Edit </button> </a>
            </div>
        </div>
        <div class="input-group mb-3">
            <input type="text" class="form-control" value="{{ $l-> value_paragraph }}" readonly   aria-describedby="basic-addon2">
            <div class="input-group-append">
                <a href ="{{route('edit')}}"> <button class="btn btn-outline-warning" type="button" > Edit </button> </a>
            </div>
        </div>
        <div class="input-group mb-3">
            <input type="text" class="form-control" value="{{ $l-> value_card_title }}" readonly   aria-describedby="basic-addon2">
            <div class="input-group-append">
                <a href ="{{route('edit')}}"> <button class="btn btn-outline-warning" type="button" > Edit </button> </a>
            </div>
        </div>
        <div class="input-group mb-3">
            <input type="text" class="form-control" value="{{ $l-> value_card_subtitle }}" readonly   aria-describedby="basic-addon2">
            <div class="input-group-append">
                <a href ="{{route('edit')}}"> <button class="btn btn-outline-warning" type="button" > Edit </button> </a>
            </div>
        </div>
        <div class="input-group mb-3">
            <input type="text" class="form-control" value="{{ $l-> values_to_gain_1 }}" readonly   aria-describedby="basic-addon2">
            <div class="input-group-append">
                <a href ="{{route('edit')}}"> <button class="btn btn-outline-warning" type="button" > Edit </button> </a>
            </div>
        </div>
        <div class="input-group mb-3">
            <input type="text" class="form-control" value="{{ $l-> values_to_gain_2 }}" readonly   aria-describedby="basic-addon2">
            <div class="input-group-append">
                <a href ="{{route('edit')}}"> <button class="btn btn-outline-warning" type="button" > Edit </button> </a>
            </div>
        </div>
        <div class="input-group mb-3">
            <input type="text" class="form-control" value="{{ $l-> values_to_gain_3 }}" readonly   aria-describedby="basic-addon2">
            <div class="input-group-append">
                <a href ="{{route('edit')}}"> <button class="btn btn-outline-warning" type="button" > Edit </button> </a>
            </div>
        </div>
        <div class="input-group mb-3">
            <input type="text" class="form-control" value="{{ $l-> values_to_gain_4 }}" readonly   aria-describedby="basic-addon2">
            <div class="input-group-append">
                <a href ="{{route('edit')}}"> <button class="btn btn-outline-warning" type="button" > Edit </button> </a>
            </div>
        </div>
        <div class="input-group mb-3">
            <input type="text" class="form-control" value="{{ $l-> small_container_slug }}" readonly   aria-describedby="basic-addon2">
            <div class="input-group-append">
                <a href ="{{route('edit')}}"> <button class="btn btn-outline-warning" type="button" > Edit </button> </a>
            </div>
        </div>
        <div class="input-group mb-3">
            <input type="text" class="form-control" value="{{ $l-> copyright }}" readonly   aria-describedby="basic-addon2">
            <div class="input-group-append">
                <a href ="{{route('edit')}}"> <button class="btn btn-outline-warning" type="button" > Edit </button> </a>
            </div>
        </div>
        <div class="input-group mb-3">
            <input type="text" class="form-control" value="{{ $l-> facebook }}" readonly   aria-describedby="basic-addon2">
            <div class="input-group-append">
                <a href ="{{route('edit')}}"> <button class="btn btn-outline-warning" type="button" > Edit </button> </a>
            </div>
        </div>
        <div class="input-group mb-3">
            <input type="text" class="form-control" value="{{ $l-> twitter }}" readonly   aria-describedby="basic-addon2">
            <div class="input-group-append">
                <a href ="{{route('edit')}}"> <button class="btn btn-outline-warning" type="button" > Edit </button> </a>
            </div>
        </div>
        <div class="input-group mb-3">
            <input type="text" class="form-control" value="{{ $l-> google }}" readonly   aria-describedby="basic-addon2">
            <div class="input-group-append">
                <a href ="{{route('edit')}}"> <button class="btn btn-outline-warning" type="button" > Edit </button> </a>
            </div>
        </div>

{{-----------------------------------------------------------------------------------------------------------------------------------}}

    </form>

        @endforeach

    {!! $frontend->links() !!}
    </div>
</div>
@endsection
