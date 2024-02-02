@extends('admin.admin_dashboard')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


<div class="page-content">

    <div class="row profile-body">
      <!-- left wrapper start -->
      <div class="d-none d-md-block col-md-4 col-xl-4 left-wrapper">
        <div class="card rounded">
          <div class="card-body">
            <div class="d-flex align-items-center justify-content-between mb-2">

              <div>
                <img class="wd-70 rounded-circle"
                src="{{ (!empty($profileData->photo))
                ? url('upload/admin_images/'.$profileData->photo)
                : url('upload/no_image.jpg') }}"
                alt="profile">
                <span class="h4 ms-3">{{ $profileData->name }}</span>
              </div>

            </div>
            <div class="mt-3">
              <label class="tx-11 fw-bolder mb-0 text-uppercase">Name:</label>
              <p class="text-muted">{{ $profileData->name }}</p>
            </div>
            <div class="mt-3">
              <label class="tx-11 fw-bolder mb-0 text-uppercase">Email:</label>
              <p class="text-muted">{{ $profileData->email }}</p>
            </div>
            <div class="mt-3">
              <label class="tx-11 fw-bolder mb-0 text-uppercase">Phone:</label>
              <p class="text-muted">{{ $profileData->phone }}</p>
            </div>
            <div class="mt-3">
              <label class="tx-11 fw-bolder mb-0 text-uppercase">Address:</label>
              <p class="text-muted">{{ $profileData->address }}</p>
            </div>
            <div class="mt-3 d-flex social-links">
              <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                <i data-feather="github"></i>
              </a>
              <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                <i data-feather="twitter"></i>
              </a>
              <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                <i data-feather="instagram"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- left wrapper end -->
      <!-- middle wrapper start -->
      <div class="col-md-8 col-xl-8 middle-wrapper">
        <div class="row">
            <div class="card">
                <div class="card-body">

                <h6 class="card-title">Update Profile Admin</h6>

                <form class="forms-sample" method="POST" action="{{ route('admin.profile.store') }}"
                enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputUsername1"
                        class="form-label">Username</label>
                        <input type="text"
                        class="form-control"
                        id="exampleInputUsername1"
                        autocomplete="off"
                        value="{{ $profileData->name }}"
                        name="username"
                        placeholder="Username">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputUsername1"
                        class="form-label">Name</label>
                        <input type="text"
                        class="form-control"
                        id="exampleInputUsername1"
                        autocomplete="off"
                        value="{{ $profileData->name }}"
                        name="name"
                        placeholder="Name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="text"
                        class="form-control"
                        id="exampleInputUsername1"
                        autocomplete="off"
                        value="{{ $profileData->email }}"
                        name="email"
                        placeholder="Email">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1"
                        class="form-label">Phone</label>
                        <input type="text"
                        class="form-control"
                        id="exampleInputUsername1"
                        autocomplete="off"
                        value="{{ $profileData->phone }}"
                        name="phone"
                        placeholder="Phone Number">
                    </div>
                    <div class="mb-3">
                        <label
                            for="exampleInputEmail1"
                            class="form-label">Address</label>
                        <input type="text"
                        class="form-control"
                        id="exampleInputUsername1"
                        autocomplete="off"
                        value="{{ $profileData->address }}"
                        name="address"
                        placeholder="Your Address">
                    </div>

                    <div class="mb-3">
                        <label
                            for="exampleInputEmail1"
                            class="form-label">Photo</label>
                        <input type="file"
                        class="form-control"
                        id="image"
                        value="{{ $profileData->address }}"
                        name="photo">
                    </div>

                    <div class="mb-3">
                        <label
                            for="exampleInputEmail1"
                            class="form-label"></label>
                            <img class="wd-70 rounded-circle"
                            id="showImage"
                            src="{{ (!empty($profileData->photo)) ? url('upload/admin_images/'.$profileData->photo) : url('upload/no_image.jpg') }}"
                            alt="profile">
                    </div>


                    <button type="submit" class="btn btn-primary me-2">Update Profile</button>
                </form>

                </div>
              </div>

        </div>
      </div>
      <!-- middle wrapper end -->
      <!-- right wrapper end -->
    </div>

        </div>


        <script type="text/javascript">
            $(document).ready(function(){
                $('#image').change(function(e){
                    var reader = new FileReader();
                    reader.onload = function(e){
                        $('#showImage').attr('src',e.target.result);
                    }
                    reader.readAsDataURL(e.target.files['0']);
                })
            })
        </script>

@endsection
