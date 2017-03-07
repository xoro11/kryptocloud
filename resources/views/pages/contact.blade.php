@extends('main')

@section('title','| Contact')


@section('content')


    
       <div class="row">
        <div class="col-md-12">
          <h1>Contact Me</h1>
         <form>
         	<div class="form-group">
         		<label name="email">Email:</label>
         		<input id="email" name="email" class="form-control">
         	</div>	
         	<div class="form-group">
         		<label name="sub">Subject:</label>
         		<input id="sub" name="sub" class="form-control">
         	</div>	
         	<div class="form-group">
         		<label name="mess">Message:</label>
         		<textarea id="mess" name="mess" class="form-control">Type Your Message Here</textarea>
         	</div>	
         	<input type="submit" value="send message" class="btn btn-success">
         </form>

        </div>
      </div>  
    
@endsection