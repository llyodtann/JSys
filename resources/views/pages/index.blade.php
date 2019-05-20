@extends('layouts.layout')

@section('content')
    <div class = "signup">
        <img src="{{asset('img/Logo.png')}}" class ="avatar">
         <h1><u>New User?</u></h1>
          <form>
             <h2>Username</h2>
             <input type="text" name="" placeholder="Enter Username">
             <h2>Password</h2>
             <input type="password" name="" placeholder="Enter Password">
             <h2>Confirm Password</h2>
             <input type="password" name="" placeholder="Confirm Password">
             <a href="http://youtube.com" class="sbutton"> Signup </a>

         </form>
         <br><br>
        <h1>Note: Subject to Admin Approval</h1>
    </div>
    <div class ="login">
        <h3>Welcome Back!</h3>
        <br><br><br>
        <form>
            <input type="logtext" name="" placeholder="   Enter Username">
            <input type="password" name="" placeholder="   Enter Password">

            <a href="#"><u>Forgot your password?</u></a><br>
            <br><br><br><br>
            <a href="mis home.html" class="button">Login</a>
        </form>
    </div>
@endsection