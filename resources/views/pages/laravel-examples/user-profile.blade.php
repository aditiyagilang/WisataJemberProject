<x-layout bodyClass="g-sidenav-show bg-gray-200">

    <x-navbars.sidebar activePage="user-profile"></x-navbars.sidebar>
    <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage='User Profile'></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid px-2 px-md-4">
            <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');">
                <span class="mask  bg-gradient-primary  opacity-6"></span>
            </div>
            <div class="card card-body mx-3 mx-md-4 mt-n6">
                <div class="row">
                    <div class="col-7 d-flex justify-content-end mt-n8">
                        <a href="{{ route('profile') }}" class="nav-link text-center p-0" id="profile">
                            <div class="position-relative" style="width: 210px; height: 210px; overflow: hidden; border-radius: 50%;">
                                <img src="{{ asset('assets/img/profile/'. old('photo', auth()->user()->photo) ) }}" alt="profile-img" class="img-fluid mb-n8" style="object-fit: cover; width: 100%; height: 100%;" />
                            </div>
                        </a>
                    </div>
                    <div class="col-7 d-flex justify-content-end mt-n6" style="position: relative; z-index: 1;">
                        <div class="icon icon-lg icon-shape bg-success text-center" data-bs-toggle="modal" data-bs-target="#upphoto" style="color: white; overflow: hidden; border-radius: 50%; border-radius-lg;">
                            <i class="material-icons" style="color: white;">camera_alt</i>
                        </div>
                    </div>
                </div>


                <div class="card card-plain h-100">
                    <div class="card-header pb-0 p-3">
                        <div class="row">
                            <div class="col-md-8 d-flex align-items-center">
                                <h6 class="mb-3">Profile Information</h6>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-3">
                        @if (session('status'))
                        <div class="row">
                            <div class="alert alert-success alert-dismissible text-white" role="alert">
                                <span class="text-sm">{{ Session::get('status') }}</span>
                                <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                        @endif
                        @if (Session::has('demo'))
                        <div class="row">
                            <div class="alert alert-danger alert-dismissible text-white" role="alert">
                                <span class="text-sm">{{ Session::get('demo') }}</span>
                                <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                        @endif
                        <form method="POST" action="{{ route('update-user-profile', ['id' => auth()->user()->id]) }}">
                            @csrf
                            @method('PUT') <!-- Use the PUT method for updates -->

                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Email address</label>
                                    <input type="email" name="email" class="form-control border border-2 p-2" value="{{ old('email', auth()->user()->email) }}">
                                    @error('email')
                                    <p class="text-danger inputerror">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Name</label>
                                    <input type="text" name="name" class="form-control border border-2 p-2" value="{{ old('name', auth()->user()->name) }}">
                                    @error('name')
                                    <p class="text-danger inputerror">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Phone</label>
                                    <input type="number" name="phone" class="form-control border border-2 p-2" value="{{ old('phone', auth()->user()->phone) }}">
                                    @error('phone')
                                    <p class="text-danger inputerror">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Alamat</label>
                                    <input type="text" name="alamat" class="form-control border border-2 p-2" value="{{ old('alamat', auth()->user()->alamat) }}">
                                    @error('alamat')
                                    <p class="text-danger inputerror">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <hr class="horizontal light mt-5">
                            <div class="mt-5 text-end" id="sidenav-collapse-main">
                                 <ul class="navbar-nav mt-5">
                                    <li class="nav-item mt-5">
                                        <button type="submit" class="btn btn-success btn-link text-end mt-5">Update Profile</button>
                                    </li>
                                </ul>
                            </div>
                        </form>


                    </div>
                </div>
            </div>

        </div>
        <x-footers.auth></x-footers.auth>
    </div>
    <x-plugins></x-plugins>

</x-layout>


<div class="modal fade" id="upphoto" tabindex="-1" aria-labelledby="upphoto" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="adddoc">Edit Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('update-user-profile-photo')}}" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="mb-3">
                        <input type="hidden" name="id_user" value="{{auth()->user()->id}}">
                        <label for="photo" class="form-label">Foto (jpg, png, jpeg)</label>
                        <input type="file" class="form-control" id="photo" name="photo[]" accept=".jpg, .jpeg, .png" style="border: 2px solid #245734;">
                    </div>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>

