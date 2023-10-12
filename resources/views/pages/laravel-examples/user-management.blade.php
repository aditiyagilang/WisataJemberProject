<x-layout bodyClass="g-sidenav-show  bg-gray-200">

    <x-navbars.sidebar activePage="user-management"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="User Management"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="col-10">
            <h4 style="color: #245734;">DATA CUSTOMER</h4>
        </div>
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">

                        <div class=" me-3 my-3 text-end">
                            <a class="btn bg-gradient-dark mb-0" href="javascript:;"><i class="material-icons text-sm">add</i>&nbsp;&nbsp;Add New
                                User</a>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0" style="max-height: 400px; overflow-y: auto;">
                                <table class="table align-items-center mb-0">
                                    <thead style="background-color: #245734; color: white; ">
                                        <tr>
                                            <th class="text-uppercase  text-xxs font-weight-bolder ">
                                                ID
                                            </th>
                                            <th class="text-uppercase  text-xxs font-weight-bolder ">
                                                PHOTO</th>
                                            <th class="text-uppercase  text-xxs font-weight-bolder  ps-2">
                                                NAMA</th>
                                            <th class="text-center text-uppercase  text-xxs font-weight-bolder ">
                                                EMAIL</th>
                                            <th class="text-center text-uppercase  text-xxs font-weight-bolder ">
                                                PHONE</th>
                                            <th class="text-center text-uppercase  text-xxs font-weight-bolder ">
                                                ALAMAT
                                            </th>
                                            <th class="text-center text-uppercase  text-xxs font-weight-bolder m-0">
                                                ACTION
                                            </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <p class="mb-0 text-sm">1</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div>
                                                        <img src="{{ asset('assets') }}/img/team-2.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                                                    </div>

                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">John</h6>

                                                </div>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <p class="text-xs text-secondary mb-0">john@creative-tim.com
                                                </p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">Admin</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">22/03/18</span>
                                            </td>
                                            <td class="text-center">
                                                <a rel="tooltip" class="btn btn-success btn-link" href="" data-original-title="" title="">
                                                    <i class="material-icons">edit</i>
                                                    <div class="ripple-container"></div>
                                                </a>

                                                <button type="button" class="btn btn-danger btn-link" data-original-title="" title="">
                                                    <i class="material-icons">close</i>
                                                    <div class="ripple-container"></div>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <p class="mb-0 text-sm">2</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div>
                                                        <img src="{{ asset('assets') }}/img/team-3.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user2">
                                                    </div>

                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">Alexa</h6>

                                                </div>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <p class="text-xs text-secondary mb-0">
                                                    alexa@creative-tim.com</p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">Creator</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">16/06/18</span>
                                            </td>
                                            <td class="text-center">
                                                <a rel="tooltip" class="btn btn-success btn-link" href="" data-original-title="" title="">
                                                    <i class="material-icons">edit</i>
                                                    <div class="ripple-container"></div>
                                                </a>
                                                <button type="button" class="btn btn-danger btn-link" data-original-title="" title="">
                                                    <i class="material-icons">close</i>
                                                    <div class="ripple-container"></div>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <p class="mb-0 text-sm">3</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div>
                                                        <img src="{{ asset('assets') }}/img/team-4.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user3">
                                                    </div>

                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">Laurent</h6>

                                                </div>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <p class="text-xs text-secondary mb-0">
                                                    laurent@creative-tim.com</p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">Member</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">30/06/18</span>
                                            </td>
                                            <td class="text-center">
                                                <a rel="tooltip" class="btn btn-success btn-link" href="" data-original-title="" title="">
                                                    <i class="material-icons">edit</i>
                                                    <div class="ripple-container"></div>
                                                </a>
                                                <button type="button" class="btn btn-danger btn-link" data-original-title="" title="">
                                                    <i class="material-icons">close</i>
                                                    <div class="ripple-container"></div>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <p class="mb-0 text-sm">4</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div>
                                                        <img src="{{ asset('assets') }}/img/team-3.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user4">
                                                    </div>

                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">Michael</h6>
                                                </div>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <p class="text-xs text-secondary mb-0">
                                                    michael@creative-tim.com</p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">Member</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">16/06/19</span>
                                            </td>
                                            <td class="text-center">
                                                <a rel="tooltip" class="btn btn-success btn-link" href="" data-original-title="" title="">
                                                    <i class="material-icons">edit</i>
                                                    <div class="ripple-container"></div>
                                                </a>
                                                <button type="button" class="btn btn-danger btn-link" data-original-title="" title="">
                                                    <i class="material-icons">close</i>
                                                    <div class="ripple-container"></div>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <p class="mb-0 text-sm">5</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div>
                                                        <img src="{{ asset('assets') }}/img/team-2.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user5">
                                                    </div>

                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">Richard</h6>
                                                </div>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <p class="text-xs text-secondary mb-0">
                                                    richard@creative-tim.com</p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">Creator</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">16/06/18</span>
                                            </td>
                                            <td class="text-center">
                                                <a rel="tooltip" class="btn btn-success btn-link" href="" data-original-title="" title="">
                                                    <i class="material-icons">edit</i>
                                                    <div class="ripple-container"></div>
                                                </a>
                                                <button type="button" class="btn btn-danger btn-link" data-original-title="" title="">
                                                    <i class="material-icons">close</i>
                                                    <div class="ripple-container"></div>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <p class="mb-0 text-sm">6</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div>
                                                        <img src="{{ asset('assets') }}/img/team-4.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user6">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">Miriam</h6>
                                                </div>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <p class="text-xs text-secondary mb-0">
                                                    miriam@creative-tim.com</p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">Creator</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">26/06/18</span>
                                            </td>
                                            <td class="text-center">
                                                <a rel="tooltip" class="btn btn-success btn-link" href="" data-original-title="" title="">
                                                    <i class="material-icons">edit</i>
                                                    <div class="ripple-container"></div>
                                                </a>
                                                <button type="button" class="btn btn-danger btn-link" data-original-title="" title="">
                                                    <i class="material-icons">close</i>
                                                    <div class="ripple-container"></div>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <x-footers.auth></x-footers.auth>
        </div>
        <div class="col-10">
            <h4 style="color: #245734;">DATA ADMIN</h4>
        </div>

        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">

                        <div class=" me-3 my-3 text-end">
                            <a class="btn bg-gradient-dark mb-0" href="javascript:;"><i class="material-icons text-sm">add</i>&nbsp;&nbsp;Add New
                                User</a>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0" style="max-height: 400px; overflow-y: auto;">
                                <table class="table align-items-center mb-0">
                                    <thead style="background-color: #245734; color: white; ">
                                        <tr>
                                            <th class="text-uppercase  text-xxs font-weight-bolder ">
                                                ID
                                            </th>
                                            <th class="text-uppercase  text-xxs font-weight-bolder ">
                                                PHOTO</th>
                                            <th class="text-uppercase  text-xxs font-weight-bolder  ps-2">
                                                NAMA</th>
                                            <th class="text-center text-uppercase  text-xxs font-weight-bolder ">
                                                EMAIL</th>
                                            <th class="text-center text-uppercase  text-xxs font-weight-bolder ">
                                                PHONE</th>
                                            <th class="text-center text-uppercase  text-xxs font-weight-bolder ">
                                                ALAMAT
                                            </th>
                                            <th class="text-center text-uppercase  text-xxs font-weight-bolder m-0">
                                                ACTION
                                            </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <p class="mb-0 text-sm">1</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div>
                                                        <img src="{{ asset('assets') }}/img/team-2.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                                                    </div>

                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">John</h6>

                                                </div>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <p class="text-xs text-secondary mb-0">john@creative-tim.com
                                                </p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">Admin</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">22/03/18</span>
                                            </td>
                                            <td class="text-center">
                                                <a rel="tooltip" class="btn btn-success btn-link" href="" data-original-title="" title="">
                                                    <i class="material-icons">edit</i>
                                                    <div class="ripple-container"></div>
                                                </a>

                                                <button type="button" class="btn btn-danger btn-link" data-original-title="" title="">
                                                    <i class="material-icons">close</i>
                                                    <div class="ripple-container"></div>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <p class="mb-0 text-sm">2</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div>
                                                        <img src="{{ asset('assets') }}/img/team-3.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user2">
                                                    </div>

                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">Alexa</h6>

                                                </div>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <p class="text-xs text-secondary mb-0">
                                                    alexa@creative-tim.com</p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">Creator</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">16/06/18</span>
                                            </td>
                                            <td class="text-center">
                                                <a rel="tooltip" class="btn btn-success btn-link" href="" data-original-title="" title="">
                                                    <i class="material-icons">edit</i>
                                                    <div class="ripple-container"></div>
                                                </a>
                                                <button type="button" class="btn btn-danger btn-link" data-original-title="" title="">
                                                    <i class="material-icons">close</i>
                                                    <div class="ripple-container"></div>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <p class="mb-0 text-sm">3</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div>
                                                        <img src="{{ asset('assets') }}/img/team-4.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user3">
                                                    </div>

                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">Laurent</h6>

                                                </div>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <p class="text-xs text-secondary mb-0">
                                                    laurent@creative-tim.com</p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">Member</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">30/06/18</span>
                                            </td>
                                            <td class="text-center">
                                                <a rel="tooltip" class="btn btn-success btn-link" href="" data-original-title="" title="">
                                                    <i class="material-icons">edit</i>
                                                    <div class="ripple-container"></div>
                                                </a>
                                                <button type="button" class="btn btn-danger btn-link" data-original-title="" title="">
                                                    <i class="material-icons">close</i>
                                                    <div class="ripple-container"></div>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <p class="mb-0 text-sm">4</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div>
                                                        <img src="{{ asset('assets') }}/img/team-3.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user4">
                                                    </div>

                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">Michael</h6>
                                                </div>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <p class="text-xs text-secondary mb-0">
                                                    michael@creative-tim.com</p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">Member</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">16/06/19</span>
                                            </td>
                                            <td class="text-center">
                                                <a rel="tooltip" class="btn btn-success btn-link" href="" data-original-title="" title="">
                                                    <i class="material-icons">edit</i>
                                                    <div class="ripple-container"></div>
                                                </a>
                                                <button type="button" class="btn btn-danger btn-link" data-original-title="" title="">
                                                    <i class="material-icons">close</i>
                                                    <div class="ripple-container"></div>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <p class="mb-0 text-sm">5</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div>
                                                        <img src="{{ asset('assets') }}/img/team-2.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user5">
                                                    </div>

                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">Richard</h6>
                                                </div>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <p class="text-xs text-secondary mb-0">
                                                    richard@creative-tim.com</p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">Creator</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">16/06/18</span>
                                            </td>
                                            <td class="text-center">
                                                <a rel="tooltip" class="btn btn-success btn-link" href="" data-original-title="" title="">
                                                    <i class="material-icons">edit</i>
                                                    <div class="ripple-container"></div>
                                                </a>
                                                <button type="button" class="btn btn-danger btn-link" data-original-title="" title="">
                                                    <i class="material-icons">close</i>
                                                    <div class="ripple-container"></div>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <p class="mb-0 text-sm">6</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div>
                                                        <img src="{{ asset('assets') }}/img/team-4.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user6">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">Miriam</h6>
                                                </div>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <p class="text-xs text-secondary mb-0">
                                                    miriam@creative-tim.com</p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">Creator</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">26/06/18</span>
                                            </td>
                                            <td class="text-center">
                                                <a rel="tooltip" class="btn btn-success btn-link" href="" data-original-title="" title="">
                                                    <i class="material-icons">edit</i>
                                                    <div class="ripple-container"></div>
                                                </a>
                                                <button type="button" class="btn btn-danger btn-link" data-original-title="" title="">
                                                    <i class="material-icons">close</i>
                                                    <div class="ripple-container"></div>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <x-plugins></x-plugins>

</x-layout>