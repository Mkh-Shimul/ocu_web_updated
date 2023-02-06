@extends('admin.layout.master')

@section('adminTitle', 'All Solution')

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

    <h4 class="fw-bold py-3 mb-4"> All Solutions</h4>
    <div class="row mb-5">
      @foreach($data as $k => $d)
      <div class="col-md-6 col-lg-4 mb-3">
          <div class="card h-100">
            <div class="card-body">
              <h5 class="card-title">{{ $d->name }}</h5>
              <img
                class="img-fluid d-flex mx-auto my-4"
                src="{{ str_replace('public', 'storage', $d->image) }}"
                alt="Card image cap"
              />

              <p class="card-text">{{ $d->short_desc }}</p>
              <a href="{{ route('solutionEdit',$d->id) }}" class="btn btn-warning btn-sm">Edit</a>
              <a href="" class="btn btn-danger btn-sm" onclick="event.preventDefault();
              document.getElementById(
                'delete-form-{{$d->id}}').submit();">
                  Delete
              </a>
              <form id="delete-form-{{$d->id}}" + action="{{route('solutionDelete', $d->id)}}" method="post">
                  @csrf @method('DELETE')
              </form>
            </div>
          </div>
        </div>
      @endforeach
    </div>

@endsection
