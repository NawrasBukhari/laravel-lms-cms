@extends('layouts.master')
@section('page_title', 'Manage Frontend')
@section('content')


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    @foreach ($frontend as $f)
    <br>
    {{--------------------------------Things starts here-----------------------------------}}
    <style>
        .input-group{
            padding: 15px;

        }
    </style>
    <form>
    <div class="input-group">
        <input type="text" class="form-control" value="{{ $f-> hero_title }}" readonly aria-label="Text input with dropdown button">
        <div class="input-group-append">
            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('frontend.edit', $frontend) }}">Edit</a>
                <a class="dropdown-item" href="{{ route('frontend.edit', $frontend) }}">Show</a>
            </div>
        </div>
    </div>

    <div class="input-group">
        <input type="text" class="form-control" value="{{ $f-> hero_paragraph }}" readonly aria-label="Text input with dropdown button">
        <div class="input-group-append">
            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('frontend.edit', $frontend) }}">Edit</a>
                <a class="dropdown-item" href="{{ route('frontend.edit', $frontend) }}">Show</a>
            </div>
        </div>
    </div>
    <div class="input-group">
        <input type="text" class="form-control" value="{{ $f-> card_1_title }}" readonly aria-label="Text input with dropdown button">
        <div class="input-group-append">
            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('frontend.edit', $frontend) }}">Edit</a>
                <a class="dropdown-item" href="{{ route('frontend.edit', $frontend) }}">Show</a>
            </div>
        </div>
    </div>
    <div class="input-group">
        <input type="text" class="form-control" value="{{ $f-> card_1_paragraph }}" readonly aria-label="Text input with dropdown button">
        <div class="input-group-append">
            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('frontend.edit', $frontend) }}">Edit</a>
                <a class="dropdown-item" href="{{ route('frontend.edit', $frontend) }}">Show</a>
            </div>
        </div>
    </div>
    <div class="input-group">
        <input type="text" class="form-control" value="{{ $f-> card_2_title }}" readonly aria-label="Text input with dropdown button">
        <div class="input-group-append">
            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('frontend.edit', $frontend) }}">Edit</a>
                <a class="dropdown-item" href="{{ route('frontend.edit', $frontend) }}">Show</a>
            </div>
        </div>
    </div>
    <div class="input-group">
        <input type="text" class="form-control" value="{{ $f-> card_2_paragraph }}" readonly aria-label="Text input with dropdown button">
        <div class="input-group-append">
            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('frontend.edit', $frontend) }}">Edit</a>
                <a class="dropdown-item" href="{{ route('frontend.edit', $frontend) }}">Show</a>
            </div>
        </div>
    </div>
    <div class="input-group">
        <input type="text" class="form-control" value="{{ $f-> card_3_title }}" readonly aria-label="Text input with dropdown button">
        <div class="input-group-append">
            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('frontend.edit', $frontend) }}">Edit</a>
                <a class="dropdown-item" href="{{ route('frontend.edit', $frontend) }}">Show</a>
            </div>
        </div>
    </div>
    <div class="input-group">
        <input type="text" class="form-control" value="{{ $f-> card_3_paragraph }}" readonly aria-label="Text input with dropdown button">
        <div class="input-group-append">
            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('frontend.edit', $frontend) }}">Edit</a>
                <a class="dropdown-item" href="{{ route('frontend.edit', $frontend) }}">Show</a>
            </div>
        </div>
    </div>
    <div class="input-group">
        <input type="text" class="form-control" value="{{ $f-> card_4_title }}" readonly aria-label="Text input with dropdown button">
        <div class="input-group-append">
            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('frontend.edit', $frontend) }}">Edit</a>
                <a class="dropdown-item" href="{{ route('frontend.edit', $frontend) }}">Show</a>
            </div>
        </div>
    </div>
    <div class="input-group">
        <input type="text" class="form-control" value="{{ $f-> card_4_paragraph }}" readonly aria-label="Text input with dropdown button">
        <div class="input-group-append">
            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('frontend.edit', $frontend) }}">Edit</a>
                <a class="dropdown-item" href="{{ route('frontend.edit', $frontend) }}">Show</a>
            </div>
        </div>
    </div>
    <div class="input-group">
        <input type="text" class="form-control" value="{{ $f-> card_5_title }}" readonly aria-label="Text input with dropdown button">
        <div class="input-group-append">
            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('frontend.edit', $frontend) }}">Edit</a>
                <a class="dropdown-item" href="{{ route('frontend.edit', $frontend) }}">Show</a>
            </div>
        </div>
    </div>
    <div class="input-group">
        <input type="text" class="form-control" value="{{ $f-> card_5_paragraph }}" readonly aria-label="Text input with dropdown button">
        <div class="input-group-append">
            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('frontend.edit', $frontend) }}">Edit</a>
                <a class="dropdown-item" href="{{ route('frontend.edit', $frontend) }}">Show</a>
            </div>
        </div>
    </div>
    <div class="input-group">
        <input type="text" class="form-control" value="{{ $f-> card_6_title }}" readonly aria-label="Text input with dropdown button">
        <div class="input-group-append">
            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('frontend.edit', $frontend) }}">Edit</a>
                <a class="dropdown-item" href="{{ route('frontend.edit', $frontend) }}">Show</a>
            </div>
        </div>
    </div>
    <div class="input-group">
        <input type="text" class="form-control" value="{{ $f-> card_6_paragraph }}" readonly aria-label="Text input with dropdown button">
        <div class="input-group-append">
            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('frontend.edit', $frontend) }}">Edit</a>
                <a class="dropdown-item" href="{{ route('frontend.edit', $frontend) }}">Show</a>
            </div>
        </div>
    </div>
    <div class="input-group">
        <input type="text" class="form-control" value="{{ $f-> value_title }}" readonly aria-label="Text input with dropdown button">
        <div class="input-group-append">
            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('frontend.edit', $frontend) }}">Edit</a>
                <a class="dropdown-item" href="{{ route('frontend.edit', $frontend) }}">Show</a>
            </div>
        </div>
    </div>
    <div class="input-group">
        <input type="text" class="form-control" value="{{ $f-> value_paragraph }}" readonly aria-label="Text input with dropdown button">
        <div class="input-group-append">
            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('frontend.edit', $frontend) }}">Edit</a>
                <a class="dropdown-item" href="{{ route('frontend.edit', $frontend) }}">Show</a>
            </div>
        </div>
    </div>

    <div class="input-group">
        <input type="text" class="form-control" value="{{ $f-> value_card_title }}" readonly aria-label="Text input with dropdown button">
        <div class="input-group-append">
            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('frontend.edit', $frontend) }}">Edit</a>
                <a class="dropdown-item" href="{{ route('frontend.edit', $frontend) }}">Show</a>
            </div>
        </div>
    </div>
    <div class="input-group">
        <input type="text" class="form-control" value="{{ $f-> value_card_subtitle }}" readonly aria-label="Text input with dropdown button">
        <div class="input-group-append">
            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('frontend.edit', $frontend) }}">Edit</a>
                <a class="dropdown-item" href="{{ route('frontend.edit', $frontend) }}">Show</a>
            </div>
        </div>
    </div>
    <div class="input-group">
        <input type="text" class="form-control" value="{{ $f->values_to_gain_1}}" readonly aria-label="Text input with dropdown button">
        <div class="input-group-append">
            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('frontend.edit', $frontend) }}">Edit</a>
                <a class="dropdown-item" href="{{ route('frontend.edit', $frontend) }}">Show</a>
            </div>
        </div>
    </div>
    <div class="input-group">
        <input type="text" class="form-control" value="{{ $f->values_to_gain_2}}" readonly aria-label="Text input with dropdown button">
        <div class="input-group-append">
            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('frontend.edit', $frontend) }}">Edit</a>
                <a class="dropdown-item" href="{{ route('frontend.edit', $frontend) }}">Show</a>
            </div>
        </div>
    </div><div class="input-group">
        <input type="text" class="form-control" value="{{ $f->values_to_gain_3}}" readonly aria-label="Text input with dropdown button">
        <div class="input-group-append">
            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('frontend.edit', $frontend) }}">Edit</a>
                <a class="dropdown-item" href="{{ route('frontend.edit', $frontend) }}">Show</a>
            </div>
        </div>
    </div>
    <div class="input-group">
        <input type="text" class="form-control" value="{{ $f->values_to_gain_4}}" readonly aria-label="Text input with dropdown button">
        <div class="input-group-append">
            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('frontend.edit', $frontend) }}">Edit</a>
                <a class="dropdown-item" href="{{ route('frontend.edit', $frontend) }}">Show</a>
            </div>
        </div>
    </div>
    <div class="input-group">
        <input type="text" class="form-control" value="{{ $f->small_container_slug}}" readonly aria-label="Text input with dropdown button">
        <div class="input-group-append">
            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('frontend.edit', $frontend) }}">Edit</a>
                <a class="dropdown-item" href="{{ route('frontend.edit', $frontend) }}">Show</a>
            </div>
        </div>
    </div>
    <div class="input-group">
        <input type="text" class="form-control" value="{{ $f->copyright}}" readonly aria-label="Text input with dropdown button">
        <div class="input-group-append">
            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('frontend.edit', $frontend) }}">Edit</a>
                <a class="dropdown-item" href="{{ route('frontend.edit', $frontend) }}">Show</a>
            </div>
        </div>
    </div>
    <div class="input-group">
        <input type="text" class="form-control" value="{{ $f->facebook}}" readonly aria-label="Text input with dropdown button">
        <div class="input-group-append">
            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('frontend.edit', $frontend) }}">Edit</a>
                <a class="dropdown-item" href="{{ route('frontend.edit', $frontend) }}">Show</a>
            </div>
        </div>
    </div>
    <div class="input-group">
        <input type="text" class="form-control" value="{{ $f->twitter}}" readonly aria-label="Text input with dropdown button">
        <div class="input-group-append">
            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('frontend.edit', $frontend) }}">Edit</a>
                <a class="dropdown-item" href="{{ route('frontend.edit', $frontend) }}">Show</a>
            </div>
        </div>
    </div>
    <div class="input-group">
        <input type="text" class="form-control" value="{{ $f->google}}" readonly aria-label="Text input with dropdown button">
        <div class="input-group-append">
            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('frontend.edit', $frontend) }}">Edit</a>
                <a class="dropdown-item" href="{{ route('frontend.edit', $frontend) }}">Show</a>
            </div>
        </div>
    </div>
    </form>
    {{--------------------------------Things Ends here-----------------------------------}}

        @endforeach

{{--    {!! $frontend->links() !!}--}}
@endsection
