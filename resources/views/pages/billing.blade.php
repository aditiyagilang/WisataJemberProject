<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <x-navbars.sidebar activePage="biling"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->

        <x-navbars.navs.auth titlePage="Biling"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="col-10">
            <h4 style="color: #245734;">Daftar harga</h4>
        </div>

        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="row">
                            <div class="col-2">
                                <div class=" me-3 my-3 text-end">
                                    <a href="javascript:;">
                                        <div class="filter-img" style="width: 50px; height: 50px; display: flex; justify-content: center; margin: 0 auto;">
                                            <img src="{{ asset('assets/img/icons/flags/icon_filter.png') }}" alt="filter-img" />
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class=" me-3 my-3 text-end d-flex mx-3">
                                    <div class="input-group input-group-outline">
                                        <label class="form-label">Type here...</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <form method="POST" action="{{ route('logout') }}" class="d-none" id="logout-form">
                                    @csrf
                                </form>
                            </div>
                            <div class="col-7">
                                <div class=" me-3 my-3 text-end">
                                    <a class="btn btn-success btn-link" href="javascript:;"><i class="material-icons text-sm">add</i>&nbsp;&nbsp;Tambah</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0" style="max-height: 400px; overflow-y: auto;">
                                <table class="table align-items-center mb-0">
                                    <thead style="background-color: #245734; color: white; ">
                                        <tr>
                                            <th class="text-center text-uppercase  text-xxs font-weight-bolder ">
                                                ID
                                            </th>
                                            <th class="text-center text-uppercase  text-xxs font-weight-bolder ">
                                                GAMBAR
                                            </th>
                                            <th class="text-center text-uppercase  text-xxs font-weight-bolder ">
                                                NAMA PAKET
                                            </th>
                                            <th class="text-center text-uppercase  text-xxs font-weight-bolder ">
                                                HARGA
                                            </th>
                                            <th class="text-center text-uppercase  text-xxs font-weight-bolder ">
                                                DURASI
                                            </th>
                                            <th class="text-center text-uppercase  text-xxs font-weight-bolder ">
                                                DESKRIPSI
                                            </th>
                                            <th class="text-center text-uppercase  text-xxs font-weight-bolder m-0">
                                                ACTION
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($datahargas as $dataharga)
                                        <tr>
                                            <td class="text-center" contenteditable="true">{{ $dataharga->id }}</td>
                                            <td class="text-center" contenteditable="true">
                                                <img src="{{ asset('assets/img/dokumentation/' . $dataharga->gambar) }}" class="avatar avatar-sm me-3 border-radius-lg" alt="{{ $dataharga->judul }}">
                                            </td>
                                            <td class="text-center" contenteditable="true">{{ $dataharga->nama }}</td>
                                            <td class="text-center" contenteditable="true">{{ $dataharga->harga }}</td>
                                            <td class="text-center" contenteditable="true">{{ $dataharga->durasi }}</td>
                                            <td class="text-center" contenteditable="true">
                                                <div class="description">
                                                    <?php
                                                    $text = $dataharga->deskripsi;
                                                    if (strlen($text) > 50) {
                                                        $text = substr($text, 0, 50) . '...'; // Mengambil 50 karakter pertama dan menambahkan elipsis
                                                    }
                                                    echo $text;
                                                    ?>
                                                </div>
                                            </td>



                                            <td class="text-center">
                                                <div class="row">
                                                    <div class="col-3"></div>
                                                    <div class="col-2">
                                                        <a rel="tooltip" class="btn btn-warning btn-link" href="" data-original-title="" title="">
                                                            <i class="material-icons">edit</i>
                                                            <div class="ripple-container"></div>
                                                        </a>
                                                    </div>
                                                    <div class="col-5">
                                                        <form action="{{ url('/deletebill', ['id' => $dataharga->id]) }}" method="post" onclick="return confirm('Yain ingin menghapus data?')">
                                                            @method('delete')
                                                            @csrf
                                                            <button type="submit" class="btn btn-danger btn-link delete-button" data-original-title="" title="" data-id="{{ $dataharga->id }}">
                                                                <i class="material-icons">delete</i>
                                                                <div class="ripple-container">
                                                            </button>
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
                </div>
            </div>
        </div>
        </div>

        <x-footers.auth></x-footers.auth>
        </div>



    </main>
    <x-plugins></x-plugins>

</x-layout>
