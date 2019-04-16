@extends('layouts.app')

@section('content')
    <section class="container">
        <div class="column is-half is-offset-one-quarter">
            <div class="card mt-5">
                <div class="card-content">
                    <div class="content">
                        <h1 class="title has-text-centered mb-5">Login</h1>
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="field">
                                <label class="label">Email</label>
                                <div class="control has-icons-left has-icons-right">
                                    <input class="input {{ $errors->has('email') ? 'is-danger' : '' }}" name="email" value="{{ old('email') }}" name="email" id="email" type="email" value="bulma@app.com" autofocus>
                                    <span class="icon is-small is-left">
                                        <i class="fa fa-envelope"></i>
                                    </span>
                                    @if ($errors->has('email'))
                                        <span class="icon is-small is-right">
                                            <i class="fa fa-exclamation-triangle"></i>
                                        </span>
                                    @endif
                                </div>
                                @if ($errors->has('email'))
                                    <p class="help is-danger">{{ $errors->first('email') }}</p>
                                @endif
                            </div>

                            <div class="field">
                                <label class="label">Password</label>
                                <div class="control has-icons-left has-icons-right">
                                    <input class="input {{ $errors->has('password') ? 'is-danger' : '' }}" name="password" value="{{ old('password') }}" name="password" id="password" type="password">
                                    <span class="icon is-small is-left">
                                        <i class="fa fa-lock"></i>
                                    </span>
                                    @if ($errors->has('password'))
                                        <span class="icon is-small is-right">
                                            <i class="fa fa-exclamation-triangle"></i>
                                        </span>
                                    @endif
                                </div>
                                @if ($errors->has('password'))
                                    <p class="help is-danger">{{ $errors->first('password') }}</p>
                                @endif
                            </div>
                                                        
                            <div class="field">
                                <div class="control">
                                    <label class="checkbox">
                                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        Remember me
                                    </label>
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <button class="button is-link is-fullwidth">Submit</button>
                                </div>
                            </div>    
                        </form>    
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
