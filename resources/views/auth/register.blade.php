@extends('layouts.app')

@section('content')
    <section class="container">
        <div class="column is-half is-offset-one-quarter">
            <div class="card mt-5">
                <div class="card-content">
                    <div class="content">
                        <h1 class="title has-text-centered mb-5">Register</h1>
                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            <div class="field">
                                <div class="field-body">
                                    <div class="field">
                                        <label class="label">First Name</label>
                                        <div class="control has-icons-left has-icons-right">
                                            <input class="input {{ $errors->has('firstname') ? 'is-danger' : '' }}" name="firstname" value="{{ old('firstname') }}" name="firstname" id="firstname" type="text" autofocus>
                                            <span class="icon is-small is-left">
                                                <i class="fa fa-user"></i>
                                            </span>
                                            @if ($errors->has('firstname'))
                                                <span class="icon is-small is-right">
                                                    <i class="fa fa-exclamation-triangle"></i>
                                                </span>
                                            @endif
                                        </div>
                                        @if ($errors->has('firstname'))
                                            <p class="help is-danger">{{ $errors->first('firstname') }}</p>
                                        @endif
                                    </div>
    
                                    <div class="field">
                                        <label class="label">Last Name</label>
                                        <div class="control has-icons-left has-icons-right">
                                            <input class="input {{ $errors->has('lastname') ? 'is-danger' : '' }}" name="lastname" value="{{ old('lastname') }}" name="lastname" id="lastname" type="text">
                                            <span class="icon is-small is-left">
                                                <i class="fa fa-user"></i>
                                            </span>
                                            @if ($errors->has('lastname'))
                                                <span class="icon is-small is-right">
                                                    <i class="fa fa-exclamation-triangle"></i>
                                                </span>
                                            @endif
                                        </div>
                                        @if ($errors->has('lastname'))
                                            <p class="help is-danger">{{ $errors->first('lastname') }}</p>
                                        @endif
                                    </div>
                                </div>  
                            </div>

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