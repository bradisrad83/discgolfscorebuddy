@extends('layouts.app')

@section('content')
<div class = "container">
<h1>Create Profile</h1>
<hr>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="/profile" method="POST" enctype="multipart/form-data">

  {{ csrf_field() }}

    <div class="form-group row">
      <label for="name" class="col-sm-2 form-control-label">Name</label>
      <div class="col-sm-6">
        <input class="form-control"
               type="text"
               name="name"
               placeholder="Name">
      </div>
    </div>

    <div class="form-group row">
      <label for="age" class="col-sm-2 form-control-label">Age</label>
      <div class="col-sm-6">
        <input class="form-control"
               type="number"
               name="age"
               placeholder="Age">
      </div>
    </div>

    <div class="form-group row">
      <label for="location" class="col-sm-2 form-control-label">Location</label>
      <div class="col-sm-6">
        <input class="form-control"
               type="text"
               name="location"
               placeholder="Location">
      </div>
    </div>

    <div class="form-group row">
      <label for="pdga#" class="col-sm-2 form-control-label">PDGA#</label>
      <div class="col-sm-6">
        <input class="form-control"
               type="number"
               name="pdgaNumber"
               placeholder="PDGA#">
      </div>
    </div>

    <div class="form-group row">
      <label for="sponsor" class="col-sm-2 form-control-label">Sponsor(s)</label>
      <div class="col-sm-6">
        <input class="form-control"
               type="text"
               name="sponsor"
               placeholder="Sponsor(s)">
      </div>
    </div>

 <!--   <div class="form-group row">
      <label for="profile_img" class="col-sm-2 form-control-label">Profile Picture</label>
      <div class="col-sm-6">
        <input
               type="file"
               name="profile_img">
      </div>
    </div>
-->

    <div class="form-group row">
      <div class="col-sm-offset-2 col-sm-6">
        <button class="btn btn-primary navbar-inverse" value="submit" type="submit">Submit</button>
      </div>
    </div>

</form>