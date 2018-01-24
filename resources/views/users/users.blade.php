@extends('layouts.app')


@section('content')
<div class="container">
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th> #</th>
            <th> Nom</th>
            <th> Prénom</th>
            <th> Email </th>
            <th width="150"></th>
        </tr>
    </thead>
    <tbody>
         @foreach($users as $user)
          <tr>
              <td> {{$user->id}} </td>
              <td> {{$user->firstname}} </td>
              <td> {{$user->lastname}} </td>
              <td> {{$user->email}} </td>
              <td>
              
              <a class="btn btn-info" href="{{action('UserController@show', $user->id)}}"><i class="fa fa-eye"></i></a>
                <a class="btn btn-primary" href=""><i class="fa fa-pencil"></i></a>
                <a class="btn btn-danger" href=""><i class="fa fa-trash"></i></a>
                </td>
          </tr>
         @endforeach
   </tbody>
</table>

</div>
@endsection