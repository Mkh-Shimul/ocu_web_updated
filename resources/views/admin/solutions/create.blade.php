@extends('admin.layout.master')

@section('adminTitle', 'Create Solution')

@section('adminContent')


<div class="row">
    <div class="col-md-6">
      <div class="card mb-4">
        <h5 class="card-header">Create Solution</h5>
        <div class="card-body">
            <form action="#" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-floating">
                    <input
                    type="text"
                    class="form-control"
                    id="floatingInput"
                    placeholder="Enter Solution Title"
                    aria-describedby="floatingInputHelp"
                    name="title"
                    />
                    <label for="floatingInput">Title</label>
                    <span class="text-danger">@error('title') {{ $message }} @enderror</span>
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
                    />
                    <label for="floatingInput">Short Description</label>
                    <span class="text-danger">@error('short_desc') {{ $message }} @enderror</span>
                </div>
                <br>
                <div class="form-floating">
                    <textarea
                    class="form-control"
                    placeholder="Hi, Do you have a moment to talk Joe?"
                    style="height: 170px;"
                    ></textarea>
                    <label for="floatingInput">Paragraph</label>
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
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
      </div>
    </div>
    <div class="col-md-6" id="imgMediaDisplay">
        <div class="card mb-4">
            <h5 class="card-header">Image Preview</h5>
            <div class="card-body">
                <img src="" id="imgupload" alt="" style="height:380px; width:450px;" />
            </div>
        </div>
    </div>
</div>



    <!-- Basic Layout -->
    <div class="row">
        <div class="col-xl">
          <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
              <h5 class="mb-0">Solution Create</h5>
            </div>
            <div class="card-body">
              <form>
                <div class="mb-3">
                  <label class="form-label" for="basic-default-fullname">Solution Name</label>
                  <input type="text" class="form-control" id="basic-default-fullname" placeholder="John Doe" />
                </div>
                <div class="mb-3">
                  <label class="form-label" for="basic-default-company">Short Description</label>
                  <input type="text" class="form-control" id="basic-default-company" placeholder="ACME Inc." />
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Solution Image</label>
                    <input class="form-control" type="file" id="formFile" />
                  </div>
                <div class="mb-3">
                  <label class="form-label" for="basic-default-message">Message</label>
                  <textarea
                    id="basic-default-message"
                    class="form-control"
                    placeholder="Hi, Do you have a moment to talk Joe?"
                  ></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
              </form>
            </div>
          </div>
        </div>
        <div class="col-xl">
          <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
              <h5 class="mb-0">Image Preview</h5>
            </div>
            <div class="card-body">

            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / Content -->

@endsection
