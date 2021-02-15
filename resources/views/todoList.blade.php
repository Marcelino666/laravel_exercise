@extends('layout')

@section('title', 'To Do List')

@section('container')

  <div class="container">
      <div class="row">
          <div class="col-10">
            <h1 class="mt-3">My Task</h1>
            <h2 class="mt-3">New Task</h2>
            <form method="post" action="/todoList">
                @csrf
                <div class="input-group mb-3">
                    <input type="text" class="form-control @error('task') is-invalid @enderror" id="task" name="task">
                    <button type="submit" class="btn btn-primary">Add</button>
                    @error('task')
                        <div class="invalid-feedback">Fill cannot be empty</div>
                    @enderror
                </div>
            </form>
            @if (session('pesan'))
                <div class="alert alert-success">
                    {{ session('pesan') }}
                </div>
            @endif
            <h2 class="mt-3">To Do List</h2>
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
                        @if($list-> status == 1)
                            <tr>
                                <td scope="row">{{ $loop->iteration}}</td>
                                <td>{{ $list->task }}</td>
                                <td>
                                    <form action="todoList/{{$list->id}}" method="post" class="d-inline">
                                        @method('patch')
                                        @csrf
                                        <button type="submit" class="btn btn-success">Done</button>
                                    </form>
                                    <form action="todoList/{{$list->id}}" method="post" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
            @if (session('pesan2'))
                <div class="alert alert-success">
                    {{ session('pesan2') }}
                </div>
            @endif

            <h2 class="mt-3">Finished</h2>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <td scope="col">#</td>
                        <th scope="col">Finished</th>
                        <td scope="col">Action</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($todolist as $list)
                        @if($list-> status == 0)
                            <tr>
                                <td scope="row">{{ $loop->iteration }}</td>
                                <td>{{ $list->task }}</td>
                                <td>
                                    <form action="todoList/{{$list->id}}" method="post" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
            @if (session('pesan3'))
                <div class="alert alert-success">
                    {{ session('pesan3') }}
                </div>
            @endif
          </div>
      </div>
  </div>

@endsection

