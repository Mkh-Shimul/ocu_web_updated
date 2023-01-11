@extends('admin.layout.master')

@section('adminTitle', 'All Career Opportunity')

@section('adminContent')

@if(Session::has('success'))
<div class="alert alert-success alert-dismissible">
    {{ Session::get('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
@if(Session::has('fail'))
<div class="alert alert-danger alert-dismissible">
    {{ Session::get('fail') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

  <div class="card">
    <h5 class="card-header">All Career Opportunities</h5>
    <div class="card-body">
      <div class="table-responsive text-nowrap">
        <table class="table table-bordered">
          <thead>
            <tr class="text-center">
                <th>Position Name</th>
                <th>Experience</th>
                <th>Education</th>
                <th>Vacancy</th>
                <th>Published Date</th>
                <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach($data as $d)
            <tr>
                <td>{{ $d->position }}</td>
                <td>{{ $d->experience }} year(s)</td>
                <td>{{ $d->education }}</td>
                @if($d->vacancy < 10)
                    <td>0{{ $d->vacancy }}</td>
                @else
                    <td>{{ $d->vacancy }}</td>
                @endif
                <td>{{ date('j-M-Y', strtotime($d->created_at)) }}</td>
              <td>
                <div class="dropdown">
                  <button
                    type="button"
                    class="btn p-0 dropdown-toggle hide-arrow"
                    data-bs-toggle="dropdown"
                  >
                    <i class="bx bx-dots-vertical-rounded"></i>
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item"
                    href="{{ route('careerOpEdit', $d->id) }}"
                    >
                    <i class="bx bx-edit-alt me-1"></i> Edit</a
                    >
                    <a class="dropdown-item" href="javascript:void(0);"
                    onclick="event.preventDefault();
                    var data = confirm('Are you sure?');
                    if(data){
                        document.getElementById('delete-form-{{$d->id}}').submit();
                    }"
                      ><i class="bx bx-trash me-1"></i> Delete</a
                    >
                    <form id="delete-form-{{$d->id}}" + action="{{route('careerOpDelete', $d->id)}}" method="post">
                        @csrf @method('DELETE')
                    </form>
                  </div>
                </div>
              </td>
            </tr>
            @endforeach



          </tbody>
        </table>
      </div>
    </div>
  </div>

@endsection
