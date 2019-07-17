@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Make Order') }}</div>

                <div class="card-body">
                    <form method="POST" action="/order">
                        @csrf
                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('title') }}</label>
                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" required  autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('description') }}</label>
                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control" name="description" value="{{ old('description') }}" required  autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('price') }}</label>
                            <div class="col-md-6">
                                <input id="price" type="text" class="form-control" name="price" value="{{ old('price') }}" required  autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="deadline" class="col-md-4 col-form-label text-md-right">{{ __('deadline') }}</label>
                            <div class="col-md-6">
                                <input id="deadline" type="date" class="form-control" name="deadline" value="{{ old('deadline') }}" required  autofocus>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Make') }}
                                </button>
                            </div>
                        </div>
                    </form>


@endsection

