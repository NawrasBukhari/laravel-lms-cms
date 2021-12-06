@extends('layouts.master')
@section('page_title', 'Manage Frontend')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show data</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('frontend.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $frontend->hero_title }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Copyright:</strong>
                {{ $frontend->copyright }}
            </div>
        </div>
    </div>
@endsection
