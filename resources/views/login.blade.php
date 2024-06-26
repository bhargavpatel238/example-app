@extends('master')

@section('content')
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4" style="margin:0 auto;">
            <form action="login" method="POST">
                @csrf
                <!-- Email input -->
                <div class="form-group">
                    <label class="form-label" for="form2Example1">Email</label>
                  <input type="email" name="email" id="form2Example1" class="form-control" />
                </div>
              
                <!-- Password input -->
                <div class="form-group">
                    <label class="form-label" for="form2Example2">Password</label>
                  <input type="password" name="password" id="form2Example2" class="form-control"/>
                  </div><br>
                  
              
                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">Login in</button>
              
                <!-- Register buttons -->
                <div class="text-center">
                  <p>Not a member? <a href="#!">Register</a></p>
                    
                </div>
              </form>

        </div>
    </div>
</div>
@endsection
