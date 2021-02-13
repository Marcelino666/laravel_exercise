@extends('layout')

@section('title', 'To Do List')

@section('container')

  <div class="container">
      <div class="row">
          <div class="col-10">
              <h1 class="mt-3">To Do List</h1>

              <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <td scope="col">#</td>
                        <th scope="col">To Do List</th>
                        <td scope="col">Action</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($todolist as $list)
                        <tr>
                            <td scope="row">{{ $loop->iteration }}</td>
                            <td>{{ $list->activities }}</td>
                            <td>
                                <a href="" class="btn btn-success">Done</a>
                                <a href="" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
          </div>
      </div>
  </div>

@endsection

