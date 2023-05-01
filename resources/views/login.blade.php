@extends('layouts.master')
@section('title', 'Login')
@vite('resources/css/login.css')

@section('content')
<div class="login">
    
    <div class="object">
    <div class="triangle" id="triangle">
        <div class="face front">
            <h2>Login</h2><br>
            <input type="text" placeholder="Login"></input>
            <input type="password" placeholder="Password"></input><br>
            <button type="submit">Sign in</button>
        </div>

        <div class="face back">    
            
        </div>

        
        <div class="face left">
        <h2>Register</h2><br>
            <input type="text" placeholder="Email"></input><br>
            <input type="text" placeholder="Login"></input>
            <input type="password" placeholder="Password"></input></input><br>
            <button type="submit">Sign up</button>
        </div>
    
        <div class="face right">Easter Egg</div>
        
    </div>
        <i class="fa-solid fa-rotate fa-xl" id="rotate"></i>
    </div>    
</div>
@stop