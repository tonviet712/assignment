@extends('layouts.main')

@section('content')

            <div class="content">
                <div class="title m-b-md">
                   <img class="img-thumbnail" src="{{ asset("storage/avatars/$user->avatar") }}" style="max-height: 200px; max-width: auto;" />
                </div>

                <table class="table table-striped table-bordered">
                  <tbody>
                    <tr>
                      <th scope="row">ID</th>
                      <td> {{$user->id}} </td>
                    </tr>
                    <tr>
                      <th scope="row">Username</th>
                      <td> {{$user->username}} </td>
                    </tr>
                    <tr>
                      <th scope="row">Email</th>
                      <td> {{$user->email}} </td>
                    </tr>
                    <tr>
                      <th scope="row">Hobby</th>
                      <td> {{$user->hobby}} </td>
                    </tr>
                    <tr>
                      <th scope="row">Objective</th>
                      <td> {{$user->objective}} </td>
                    </tr>
                    <tr>
                      <th scope="row">Quote</th>
                      <td> {{$user->quote}} </td>
                    </tr>
                  </tbody>
                </table>
                <a href="{{ route('user.edit',$user->username)}}" class="btn btn-outline-primary">Update</a>
                <a href="/wsproject/public/user/{{$user->username}}/avatar" class="btn btn-outline-primary">Change Avatar</a>
            </div>


@endsection