@extends('layouts/contentNavbarLayout')

@section('content')

<div class="card">
  <h5 class="card-header">Curd Basic</h5>
  <div class="table-responsive text-nowrap">
  <div class="col-sm-10">
              <a href="{{ route('curd.create') }}" class="btn btn-primary">ADD</a>
            </div>
    <table class="table">
      <thead>
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Country</th>
          <th>State</th>
          <th>City</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        @foreach($data as $list)
        <tr>
          <td>{{ $list->name }}</td>
          <td>{{ $list->email }}</td>
          <td>{{ $list->phone }}</td>
          <td>{{ $list->country }}</td>
          <td>{{ $list->state }}</td>
          <td>{{ $list->city }}</td>
          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="javascript:void(0);"><i class="mdi mdi-pencil-outline me-1"></i> Edit</a>
                <a class="dropdown-item" href="javascript:void(0);"><i class="mdi mdi-trash-can-outline me-1"></i> Delete</a>
              </div>
            </div>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection