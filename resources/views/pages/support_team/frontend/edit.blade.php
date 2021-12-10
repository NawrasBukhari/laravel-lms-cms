@extends('layouts.master')
@section('page_title', 'Manage Frontend')
@section('content')

        <div class="card">
    <div class="card-header">
        <div class="alert alert-info" role="alert">Please do not forget to fill all fields
        </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> All fields are required!!<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('update')}}" method="POST">
        @csrf
        @method('PUT')
        <div class="input-group mb-3">
            <input type="text" name="id" id="id" class="form-control" required hidden value="1" readonly placeholder="" >
            <div class="input-group-append">
            </div>
        </div>

        <label>Hero title</label>
        <div class="input-group mb-3">
            <input type="text" name="hero_title" id="hero_title" class="form-control" required value="" placeholder="" >
            <div class="input-group-append">
            </div>
        </div>
        <label>Hero paragraph</label>
        <div class="input-group mb-3">
            <input type="text" name="hero_paragraph" id="hero_paragraph" class="form-control" required value="" placeholder=""  >
            <div class="input-group-append">
            </div>
        </div>
        <label>first card title</label>
        <div class="input-group mb-3">
            <input type="text" name="card_1_title" id="card_1_title" class="form-control" required value="" placeholder=""  >
            <div class="input-group-append">
            </div>
        </div>
        <label>first card paragraph</label>
        <div class="input-group mb-3">
            <input type="text" name="card_1_paragraph" id="card_1_paragraph" class="form-control" required value="" placeholder=""  >
            <div class="input-group-append">
            </div>
        </div>
        <label>second card title</label>
        <div class="input-group mb-3">
            <input type="text" name="card_2_title" id="card_2_title" class="form-control" required value="" placeholder=""  >
            <div class="input-group-append">
            </div>
        </div>
        <label>second card paragraph</label>
        <div class="input-group mb-3">
            <input type="text" name="card_2_paragraph" id="card_2_paragraph" class="form-control" required value="" placeholder=""  >
            <div class="input-group-append">
            </div>
        </div>
        <label>third card title</label>
        <div class="input-group mb-3">
            <input type="text" name="card_3_title" id="card_3_title" class="form-control" required value="" placeholder=""  >
            <div class="input-group-append">
            </div>
        </div>
        <label>third card paragraph</label>
        <div class="input-group mb-3">
            <input type="text" name="card_3_paragraph" id="card_3_paragraph" class="form-control" required value="" placeholder=""  >
            <div class="input-group-append">
            </div>
        </div>
        <label>fourth card title</label>
        <div class="input-group mb-3">
            <input type="text" name="card_4_title" id="card_4_paragraph" class="form-control" required value="" placeholder=""  >
            <div class="input-group-append">
            </div>
        </div>
        <label>fourth card paragraph</label>
        <div class="input-group mb-3">
            <input type="text" name="card_4_paragraph" id="card_4_paragraph" class="form-control" required value="" placeholder=""  >
            <div class="input-group-append">
            </div>
        </div>
        <label>fifth card title</label>
        <div class="input-group mb-3">
            <input type="text" name="card_5_title" id="card_5_title" class="form-control" required value="" placeholder=""  >
            <div class="input-group-append">
            </div>
        </div>
        <label>fifth card paragraph</label>
        <div class="input-group mb-3">
            <input type="text" name="card_5_paragraph" id="card_5_paragraph" class="form-control" required value="" placeholder=""  >
            <div class="input-group-append">
            </div>
        </div>
        <label>sixth card title</label>
        <div class="input-group mb-3">
            <input type="text" name="card_6_title" id="card_6_title" class="form-control" required value="" placeholder=""  >
            <div class="input-group-append">
            </div>
        </div>
        <label>sixth card paragraph</label>
        <div class="input-group mb-3">
            <input type="text" name="card_6_paragraph" id="card_6_paragraph" class="form-control" required value="" placeholder=""  >
            <div class="input-group-append">
            </div>
        </div>
        <label>value title</label>
        <div class="input-group mb-3">
            <input type="text" name="value_title" id="value_title" class="form-control" required value="" placeholder=""  >
            <div class="input-group-append">
            </div>
        </div>
        <label>value paragraph</label>
        <div class="input-group mb-3">
            <input type="text" name="value_paragraph" id="value_paragraph" class="form-control" required value="" placeholder=""  >
            <div class="input-group-append">
            </div>
        </div>
        <label>value card title</label>
        <div class="input-group mb-3">
            <input type="text" name="value_card_title" id="value_card_title" class="form-control" required value="" placeholder=""  >
            <div class="input-group-append">
            </div>
        </div>
        <label>value card subtitle</label>
        <div class="input-group mb-3">
            <input type="text" name="value_card_subtitle" id="value_card_subtitle" class="form-control" required value="" placeholder=""  >
            <div class="input-group-append">
            </div>
        </div>
        <label>values to gain № 1</label>
        <div class="input-group mb-3">
            <input type="text" name="values_to_gain_1" id="values_to_gain_1" class="form-control" required value="" placeholder=""  >
            <div class="input-group-append">
            </div>
        </div>
        <label>values to gain № 2</label>
        <div class="input-group mb-3">
            <input type="text" name="values_to_gain_2" id="values_to_gain_2" class="form-control" required value="" placeholder=""  >
            <div class="input-group-append">
            </div>
        </div>
        <label>values to gain № 3</label>
        <div class="input-group mb-3">
            <input type="text" name="values_to_gain_3" id="values_to_gain_3" class="form-control" required value="" placeholder=""  >
            <div class="input-group-append">
            </div>
        </div>
        <label>values to gain № 4</label>
        <div class="input-group mb-3">
            <input type="text" name="values_to_gain_4" id="values_to_gain_4" class="form-control" required value="" placeholder=""  >
            <div class="input-group-append">
            </div>
        </div>
        <label>small container slug</label>
        <div class="input-group mb-3">
            <input type="text" name="small_container_slug" id="small_container_slug" class="form-control" required value="" placeholder=""  >
            <div class="input-group-append">
            </div>
        </div>
        <label>copyright</label>
        <div class="input-group mb-3">
            <input type="text" name="copyright" id="copyright" class="form-control" required value="" placeholder=""  >
            <div class="input-group-append">
            </div>
        </div>
        <label>facebook</label>
        <div class="input-group mb-3">
            <input type="text" name="facebook" id="facebook" class="form-control" required value="" placeholder=""  >
            <div class="input-group-append">
            </div>
        </div>
        <label>twitter</label>
        <div class="input-group mb-3">
            <input type="text" name="twitter" id="twitter" class="form-control" required value="" placeholder=""  >
            <div class="input-group-append">
            </div>
        </div>
        <label>google</label>
        <div class="input-group mb-3">
            <input type="text" name="google" id="google" class="form-control" required value="" placeholder=""  >
            <div class="input-group-append">
            </div>
        </div>

        <div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-outline-success">Submit</button>
            </div>
        </div>
    </form>
    </div>
</div>
@endsection
