@extends('layouts.app')

@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <h1>Welcome to your user page</h1>

    <!--Display Data-->
    Hello, {{ $name }}.

    <!--get data from database-->
    @forelse ($users as $user)
        <li>{{ $user->name }}</li>
        <li>{{ $user->email }}</li>
    @empty
        <p>No users</p>
    @endforelse

    <!--check if user is authenticated-->
    @auth
    The user is authenticated...
    @endauth

    @guest
     The user is not authenticated...
    @endguest

    </br>

    <!--Using if statement-->
    @if (count($users) === 1)
    I have one user!
    @elseif (count($users) > 1)
    I have multiple users!
    @else
    I don't have any users!
    @endif

    <section> 
      <form action ="" method="POST"> 
        @csrf 
        <input type="text" name="username" placeholder="Username"> 
        <input type="password" name="password" placeholder="Password"> 
        <input type="submit" name="submit" value="Submit"> 
      </form> 
    </section> 
    @endsection

