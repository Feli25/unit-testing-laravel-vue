@extends('base.app')

@section('content')

    <div>login
        <form method="get" action="/login-form">
            <span>Welcome! Login Here</span>
            Mail: <input type="text" name="email"/>
            Password: <input type="password" name="password"/>
            <button type="submit" name="submitLogin">Login</button>
        </form>
    </div>

@endsection
