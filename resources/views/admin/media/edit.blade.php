@extends('admin.layout.master')

@section('adminTitle', 'Update Media & Events')


@section('adminContent')

<div class="row">
    <div class="col-md-12">
      <div class="card mb-4">
        <h5 class="card-header">Edit Media</h5>
        <div class="card-body">
            <form action="{{ route('mediaUpdate', $media->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="form-floating">
                    <input
                    type="text"
                    class="form-control"
                    id="floatingInput"
                    value="{{ $media->title }}"
                    aria-describedby="floatingInputHelp"
                    name="title"
                    />
                    <label for="floatingInput">Title</label>
                    <span class="text-danger">@error('title') {{ $message }} @enderror</span>
                </div>
                <br>
                <div class="form-floating">
                    <input
                    type="url"
                    class="form-control"
                    id="floatingInput"
                    value="{{ $media->link }}"
                    aria-describedby="floatingInputHelp"
                    name="link"
                    />
                    <label for="floatingInput">Url/Link</label>
                    <span class="text-danger">@error('link') {{ $message }} @enderror</span>
                </div>
                <br>
                <div class="form-floating">
                    <input
                    type="date"
                    class="form-control"
                    id="floatingInput"
                    value="{{ $media->date }}"
                    aria-describedby="floatingInputHelp"
                    name="date"
                    />
                    <label for="floatingInput">Enter Date</label>
                    <span class="text-danger">@error('date') {{ $message }} @enderror</span>
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
                <div class="row">
                    <div class="col-md-6" id="imgMediaDisplay">
                        <div class="card mb-4">
                            <h5 class="card-header">Current Image</h5>
                            <div class="card-body">
                                <img src="{{ str_replace('public', 'storage', $media->image) }}" alt="" style="height:380px; width:450px;" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" id="imgMediaDisplay">
                        <div class="card mb-4">
                            <h5 class="card-header">New Image Preview</h5>
                            <div class="card-body">
                                <img src="" id="imgupload" alt="Please Upload to view" style="height:380px; width:450px;" />
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-warning">Update</button>

            </form>
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
				$('img#imgupload').attr("src", e.target.result).width(450).height(375);
			};
		reader.readAsDataURL(input.files[0]);
		}
	}
</script>
