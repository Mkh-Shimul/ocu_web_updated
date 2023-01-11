@extends('admin.layout.master')

@section('adminTitle', 'All Media & Events')

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

    {{-- <div class="card">
        <h5 class="card-header">Table Basic</h5>
        <div class="table-responsive text-nowrap">
          <table class="table">
            <thead>
              <tr>
                <th>Actions</th>
                <th>Title</th>
                <th>Date</th>
                <th>Image</th>

              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach($data as $k => $d)
              <tr>
                <td>
                    <div class="dropdown">
                      <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                        <i class="bx bx-dots-vertical-rounded"></i>
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="javascript:void(0);"
                          ><i class="bx bx-edit-alt me-1"></i> Edit</a
                        >
                        <a class="dropdown-item" href="javascript:void(0);"
                          ><i class="bx bx-trash me-1"></i> Delete</a
                        >
                      </div>
                    </div>
                  </td>
                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ Str::limit($d->title, 50) }}</strong></td>
                <td>{{ date('j F, Y', strtotime($d->date)) }}</td>
                <td>
                  <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                    <li
                      data-bs-toggle="tooltip"
                      data-popup="tooltip-custom"
                      data-bs-placement="top"
                      class="avatar avatar-xs pull-up"
                      title="{{ $d->title }}"
                    >
                      <img src="{{ str_replace('public', 'storage', $d->image) }}" alt="Avatar" class="rounded-circle" />
                    </li>
                  </ul>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
    </div> --}}
      <!--/ Basic Bootstrap Table -->
      <h4 class="fw-bold py-3 mb-4"> All Media & Events</h4>
      <div class="row mb-5">
        @foreach($data as $k => $d)
        <div class="col-md-6 col-lg-4 mb-3">
            <div class="card h-100">
              <div class="card-body">
                <h5 class="card-title">{{ $d->title }}</h5>
                <img
                  class="img-fluid d-flex mx-auto my-4"
                  src="{{ str_replace('public', 'storage', $d->image) }}"
                  alt="Card image cap"
                />

                <p class="card-text">{{ date('j F, Y', strtotime($d->date)) }}</p>
                <a href="{{ route('mediaEdit',$d->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <a href="" class="btn btn-danger btn-sm" onclick="event.preventDefault();
                document.getElementById(
                  'delete-form-{{$d->id}}').submit();">
                    Delete
                </a>
                <form id="delete-form-{{$d->id}}" + action="{{route('mediaDelete', $d->id)}}" method="post">
                    @csrf @method('DELETE')
                </form>
              </div>
            </div>
          </div>
        @endforeach
      </div>



@endsection
