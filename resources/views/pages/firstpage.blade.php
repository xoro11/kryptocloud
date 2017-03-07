@extends('main')

@section('title','| Home')

 @section('content')




      <div class="row">
          <div class="col-md-12">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>


  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="http://www.tectrade.com/wp-content/uploads/2015/10/encryption.jpeg" alt="Chania">
    </div>

    <div class="item">
      <img src="https://springboard-cdn.appadvice.com/apptributes/us-east-1%3Acb0034e4-ce05-4334-991d-257b7d907454/1483333791396_best_cloud_storage_apps_8400.jpg" alt="Chania">
    </div>


  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</div>
<div class="row">
  <div class="col-md-12">
  <p>

  </p>
    </div>
</div>
      <div class="row">
    <div class="col-sm-6 col-md-4">
      <div class="thumbnail">

        <div class="caption">
          <h3>Text</h3>
          <p>  <form id="myForm">
    <input type="file" id="myFile">
  </form></p>
          <p><a href="/entext" class="btn btn-primary" role="button">Upload</a></p>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-4">
      <div class="thumbnail">

        <div class="caption">
          <h3>Images</h3>
          <p>  <form id="myForm">
    <input type="file" id="myFile">
  </form></p>
          <p><a href="#" class="btn btn-primary" role="button">Upload</a></p>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-4">
      <div class="thumbnail">

        <div class="caption">
          <h3>Videos</h3>
          <p>  <form id="myForm">
    <input type="file" id="myFile">
  </form></p>
          <p><a href="#" class="btn btn-primary" role="button">Upload</a> </p>
        </div>
      </div>
    </div>
  </div>


   @endsection
