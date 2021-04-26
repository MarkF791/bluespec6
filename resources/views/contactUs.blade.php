@extends ('layouts.layout')

@section('content')
<div class="container-fluid" style="padding-top:50px;">
  <img width="100%" height="60" src="http://www.rdplast.in/wp-content/uploads/2018/01/contact-us-banner-1024x303.jpg" class="img-fluid" alt="Responsive image">
</div>
<div class="container text-center" style="padding-top:50px;">
  <h1>Contact Us</h1>
  <hr>
  <p>Please use the form below to get in touch with the team</p>
  @if (Session::has('flash_message'))
  <div class="alert alert-sucess">{{ Session::get('flash_message') }}</div>
  @endif
  <form method="POST" action="{{ route('contact.store')}}">
    {{ csrf_field() }}
    <div class="container">
      <div class="form-group">
        <label for="inputEmail">Email address</label>
        <input type="email" class="form-control" id="inputEmail" name="email" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        @if ($errors->has('email'))
        <small class="form-text invalid-feedback" style="display:block">{{ $errors->first('email')}}</small>
        @endif
      </div>
      <div class="row">
        <div class="col">
          <label for="inputFName">Your First Name</label>
          <input type="text" class="form-control" id="inputFName" name="inputFName" aria-describedby="nameHelp" placeholder="Enter First Name">
          <small id="nameHelp" class="form-text text-muted"></small>
          @if ($errors->has('name'))
          <small class="form-text invalid-feedback" style="display:block">{{ $errors->first('name')}}</small>
          @endif
        </div>
        <div class="col">
          <label for="inputLName">Your Last Name</label>
          <input type="text" class="form-control" id="inputLName" name="inputLName" aria-describedby="nameHelp" placeholder="Enter Second Name">
          <small id="nameHelp" class="form-text text-muted"></small>
          @if ($errors->has('name'))
          <small class="form-text invalid-feedback" style="display:block">{{ $errors->first('name')}}</small>
          @endif
        </div>
      </div>
      <div class="form-group">
        <label for="inputMessage">Your Message</label>
        <textarea class="form-control" id="inputMessage" rows="5" name="message" placeholder="Enter your message here"></textarea>
        @if ($errors->has('message'))
        <small class="form-text invalid-feedback" style="display:block">{{ $errors->first('message')}}</small>
        @endif
      </div>
      <button type="submit" class="btn btn-block btn-success">Submit</button>
    </div>
  </form>
</div>

@endsection