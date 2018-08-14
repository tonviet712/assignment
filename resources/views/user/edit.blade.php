@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('user.update', $user)}}" >
                        {{ method_field('PUT') }}
                        @csrf

                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ Auth::user()->username }}" required autofocus disabled="">

                                @if ($errors->has('username'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ Auth::user()->email }}" required disabled="">

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="hobby" class="col-md-4 col-form-label text-md-right">{{ __('Hobby') }}</label>

                            <div class="col-md-6">
                                
                                <pre><textarea class="form-control" name="hobby" required="">{{ Auth::user()->hobby }}</textarea></pre>

                                @if ($errors->has('hobby'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('hobby') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="objective" class="col-md-4 col-form-label text-md-right">{{ __('Object') }}</label>

                            <div class="col-md-6">
                                
                                <pre><textarea class="form-control" name="objective" rows="4" required="">{{ Auth::user()->objective }}</textarea></pre>

                                @if ($errors->has('objective'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('objective') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="quote" class="col-md-4 col-form-label text-md-right">{{ __('Quote') }}</label>

                            <div class="col-md-6">
                                
                                <pre><textarea class="form-control" name="quote" required="">{{ Auth::user()->quote }}</textarea></pre>

                                @if ($errors->has('quote'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('quote') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-outline-primary">Confirm</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
