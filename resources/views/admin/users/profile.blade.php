
@extends('backend.layouts.master')

@section('content')
            <div class="col-lg-8 col-lg-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading text-center ">{{ __(' User Profile') }}</div>

                <div class="panel-body">
                    <form method="POST" action="" class="form-horizontal">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-3 control-lebel">{{ __('Name') }}</label>

                            <div class="col-md-9">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" autocomplete="name" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-3 control-lebel">{{ __('Email') }}</label>

                            <div class="col-md-9">
                                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" autocomplete="name" autofocus>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            </div>

@endsection