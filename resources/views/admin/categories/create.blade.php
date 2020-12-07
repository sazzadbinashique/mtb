@extends('backend.layouts.master')

@section('content')
            <div class="col-lg-6 col-lg-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading text-center ">{{ __('Categoy') }}</div>

                <div class="panel-body">
                    <form method="POST" action="{{ route('categories.store') }}" class="form-horizontal">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-3 control-lebel">{{ __('Name') }}</label>

                            <div class="col-md-9">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus>

                                @error('name')
                                    <span class="alert-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-offset-9 col-md-3">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            </div>

@endsection