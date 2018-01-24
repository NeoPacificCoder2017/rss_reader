@extends('layouts.app')

@section('content')
<div class="container">
  <table class="table table-bordered table-hover">
    <tr>
      <td><strong>Numéro </strong> : {{$user->id}}</td>
    </tr>
    <tr>
      <td><strong>Nom </strong> : {{$user->firstname}}</td> 
    </tr>
    <tr>
      <td><strong>Fournisseur </strong> : {{$user->lastname}}</td> 
    </tr>
    <tr>  
      <td><strong>Catégorie </strong> : {{$user->email}}</td> 
    </tr>
  </table>
</div>

@endsection