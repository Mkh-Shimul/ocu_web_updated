@extends('admin.layout.master')

@section('adminTitle', 'Update Career Opportunity')

@section('adminContent')

<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
      <div class="card mb-4">
        <h5 class="card-header">Update Career Opportunity</h5>
        <div class="card-body">
            <form action="{{ route('careerOpUpdate', $data->id) }}" method="POST">
                @csrf
                @method('PATCH')
                <div class="form-floating">
                    <input
                    type="text"
                    class="form-control"
                    id="floatingInput"
                    placeholder="Enter the name of position"
                    aria-describedby="floatingInputHelp"
                    autocomplete="off"
                    name="position"
                    value="{{ $data->position }}"
                    />
                    <label for="floatingInput">Position</label>
                    <span class="text-danger">@error('position') {{ $message }} @enderror</span>
                </div>
                <br>
                <div class="form-floating">
                    <input
                    type="text"
                    class="form-control"
                    id="floatingInput"
                    placeholder="Enter minimum required experience for the position"
                    aria-describedby="floatingInputHelp"
                    autocomplete="off"
                    name="experience"
                    value="{{ $data->experience }}"
                    />
                    <label for="floatingInput">Experience (in Years)</label>
                    <span class="text-danger">@error('experience') {{ $message }} @enderror</span>
                </div>
                <br>
                <div class="form-floating">
                    <input
                    type="text"
                    class="form-control"
                    id="floatingInput"
                    placeholder="Enter minimum required education for the position"
                    aria-describedby="floatingInputHelp"
                    name="education"
                    value="{{ $data->education }}"
                    />
                    <label for="floatingInput">Education</label>
                    <span class="text-danger">@error('education') {{ $message }} @enderror</span>
                </div>
                <br>
                <div class="form-floating">
                    <input
                    type="text"
                    class="form-control"
                    placeholder="Enter the number of vacancy for the position"
                    aria-describedby="floatingInputHelp"
                    name="vacancy"
                    value="{{ $data->vacancy }}"
                    />
                    <label for="floatingInput">No of Vacancy</label>
                    <span class="text-danger">@error('vacancy') {{ $message }} @enderror</span>
                </div>
                <br>
                <div class="form-floating">
                    <input
                    type="url"
                    class="form-control"
                    id="floatingInput"
                    placeholder="Enter Career Oppurtunity Link with https/http"
                    aria-describedby="floatingInputHelp"
                    autocomplete="off"
                    name="link"
                    value="{{ $data->link }}"
                    />
                    <label for="floatingInput">Url/Link</label>
                    <span class="text-danger">@error('link') {{ $message }} @enderror</span>
                </div>
                <br>
                <button type="submit" class="btn btn-warning">Update</button>
            </form>
        </div>
      </div>
    </div>
    <div class="col-md-2"></div>
</div>

@endsection
