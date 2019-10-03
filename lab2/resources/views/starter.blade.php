@extends('layouts')
@section('title')
    Starter
@endsection

@section('content')
<!-- code -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Page Header
        <small>Optional description</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>
    
    <!-- Main content -->
    <section class="content container-fluid">
      <a href="{{route('users.create')}}" class="btn btn-success">Create</a>
        @if(empty($users))
    <p>no data</p>
      @else
        <table class="table">
          <thead>
            <th>name</th>
            <th>birthday</th>
            <th>email</th>
          </thead>
          <tbody>
            @foreach($users as $user)
              <tr> 
                <td>{{ $user['name'] }}</td>
                <td>{{ $user['birthday'] }}</td>
                <td>{{ $user['email'] }}</td>
                <td><a href="#" class="btn btn-primary">Update</a></td>
                <td><a href="#" class="btn btn-danger">Delete</a></td>
              </tr>

            @endforeach
          </tbody>
        </table>
      @endif
      <!--------------------------
        | Your Page Content Here |
        -------------------------->

    </section>
    <!-- /.content -->
  </div>

@endsection