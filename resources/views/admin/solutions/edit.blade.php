@extends('admin.layout.master')

@section('adminTitle', 'Edit Solution')

@section('adminContent')


<div class="row">
    <div class="col-md-6">
      <div class="card mb-4">
        <h5 class="card-header">Update Solution</h5>
        <div class="card-body">
            <form action="{{ route('solutionUpdate', $solution->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="form-floating">
                    <input
                    type="text"
                    class="form-control"
                    id="floatingInput"
                    placeholder="Enter Solution Title"
                    aria-describedby="floatingInputHelp"
                    name="name"
                    value="{{ $solution->name }}"
                    />
                    <label for="floatingInput">Name</label>
                    <span class="text-danger">@error('name') {{ $message }} @enderror</span>
                </div>
                <br>
                <div class="form-floating">
                    <input
                    type="text"
                    class="form-control"
                    id="floatingInput"
                    placeholder="Enter Solution Short Description"
                    aria-describedby="floatingInputHelp"
                    name="short_desc"
                    value="{{ $solution->short_desc }}"
                    />
                    <label for="floatingInput">Short Description</label>
                    <span class="text-danger">@error('short_desc') {{ $message }} @enderror</span>
                </div>
                <br>
                <div class="form-floating">
                    <textarea
                    class="form-control"
                    style="height: 170px;"
                    name="description"
                    >{{ $solution->description }}</textarea>
                    <label for="floatingInput">Description</label>
                    <span class="text-danger">@error('description') {{ $message }} @enderror</span>
                </div>
                <br>
                <div class="form-floating">
                    <input
                    type="file"
                    class="form-control"
                    id="FLEmpImage"
                    placeholder="Please Select an image file"
                    aria-describedby="floatingInputHelp"
                    name="image"
                    />
                    <label for="floatingInput">Image</label>
                    <span class="text-danger">@error('image') {{ $message }} @enderror</span>
                </div>
                <br>
                <button type="submit" class="btn btn-warning">Update</button>
            </form>
        </div>
      </div>
    </div>
    <div class="col-md-6" id="imgMediaDisplay">
        <div class="card mb-4">
            <h5 class="card-header">Image Preview</h5>
            <div class="card-body">
                <img src="" id="imgupload" alt="Please Upload file" style="height:380px; width:460px;" />
            </div>
        </div>
    </div>
</div>

@endsection

<script src="https://code.jquery.com/jquery-3.6.3.min.js"
integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        // $('#imgMediaDisplay').hide();
		$('#FLEmpImage').change(function () {
			readURL(this);
			$('#imgMediaDisplay').show();
		});
    })
    function readURL(input) {
		if (input.files && input.files[0]) {
			let reader = new FileReader();
			reader.onload = function (e) {
				$('img#imgupload').attr("src", e.target.result).width(460).height(375);
			};
		reader.readAsDataURL(input.files[0]);
		}
	}
</script>
