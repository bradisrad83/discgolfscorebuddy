@extends('layouts.app')

@section('content')
<div class="container">
<ul>
    <p>{{$profile->name}}</p>
    <!-- I need to write/store in amazon AWS for photos but will do that later-->
    <li><p><strong>Age:  </strong>{{$profile->age}}</p></li>
    <li><p><strong>Location:  </strong>{{$profile->location}}</p></li>
    <li><p><strong>PDGA#:  </strong>{{$profile->pdgaNumber}}</p></li>
    <li><p><strong>Sponsor(s):  </strong>{{$profile->sponsor}}</p></li>
    <li><h3><strong><a class="bottom" href = "profile/{{$profile->id}}/edit">Edit Profile</strong></a></h3></li> 
</ul> 
<div> 
@stop
