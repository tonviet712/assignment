@extends('layouts.main')

@section('content')

<?php $user = \App\User::where('username','tonnyviet')->first(); ?>

            @if (!is_null($user))


            <div class="content">
                <div class="title m-b-md">
                  Information 
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
            </div>

            @endif

@endsection