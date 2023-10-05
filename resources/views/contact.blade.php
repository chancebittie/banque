@extends('layouts.app')
@section('content')
    <div class="col-md-10 mx-auto ">
        <div class="row">
            <div class="row mb-3 justify-content-center">
                <label for="email" class="col-md-4 col-form-label text-md-end">Souscrire a notre newsletter et rester connecter</label>

                <div class="col-md-3">
                    <input id="email" type="email" class="form-control  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row my-5 ">
                <div class="col-3  top mx-auto mt-3" >   </div>
                <div class="col-3 ">Nous contacter</div>
                <div class="col-3 top mt-3"></div>
            </div>
        </div>
    </div>

    <style>
        .top{
            border: solid black;
            height: 1px;
        }
    </style>
@endsection
