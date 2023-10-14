<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <x-navbars.sidebar activePage="pesanan"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Pesanan"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="col-10">
            <h4 style="color: #245734;">PESANAN</h4>
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
                                <div class="me-3 my-3 text-end">
                                    <a class="btn btn-success btn-link" data-bs-toggle="modal" data-bs-target="#addtran">
                                        <i class="material-icons text-sm">add</i>&nbsp;&nbsp;Tambah
                                    </a>
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
                                                NAMA PAKET
                                            </th>
                                            <th class="text-center text-uppercase  text-xxs font-weight-bolder ">
                                                JUMLAH
                                            </th>
                                            <th class="text-center text-uppercase  text-xxs font-weight-bolder ">
                                                ALAMAT
                                            </th>
                                            <th class="text-center text-uppercase  text-xxs font-weight-bolder ">
                                                NO HP
                                            </th>
                                            <th class="text-center text-uppercase  text-xxs font-weight-bolder ">
                                                TANGGAL
                                            </th>
                                            <th class="text-center text-uppercase  text-xxs font-weight-bolder ">
                                                WAKTU
                                            </th>
                                            <th class="text-center text-uppercase  text-xxs font-weight-bolder ">
                                                TOTAL
                                            </th>
                                            <th class="text-center text-uppercase  text-xxs font-weight-bolder ">
                                                STATUS
                                            </th>
                                            <th class="text-center text-uppercase  text-xxs font-weight-bolder m-0">
                                                ACTION
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($transaksiDatas as $transaksiData)
                                        <tr>
                                            <td class="text-center" contenteditable="true">{{ $transaksiData->id }}</td>
                                            <td class="text-center" contenteditable="true">{{ $transaksiData->dataharga_nama }}</td>
                                            <td class="text-center" contenteditable="true">{{ $transaksiData->jumlah }}</td>
                                            <td class="text-center" contenteditable="true">{{ $transaksiData->alamat }}</td>
                                            <td class="text-center" contenteditable="true">{{ $transaksiData-> nohp}}</td>
                                            <td class="text-center" contenteditable="true">{{ \Carbon\Carbon::parse($transaksiData->created_at)->format('d-m-Y') }}</td>
                                            <td class="text-center" contenteditable="true">{{ \Carbon\Carbon::parse($transaksiData->created_at)->format('H:i') }}</td>

                                            <td class="text-center" contenteditable="true">{{ $transaksiData-> total_harga}}</td>
                                            <td class="text-center" contenteditable="true">{{ $transaksiData-> status}}</td>
                                            <td class="text-center">
                                                <div class="row">
                                                    <div class="col-3"></div>
                                                    <div class="col-2">
                                                        <a rel="tooltip" class="btn btn-warning btn-link"
                                                            href="#" data-original-title="Edit"
                                                            data-bs-toggle="modal" data-bs-target="#uptran{{$transaksiData->id }}">
                                                            <i class="material-icons">edit</i>
                                                            <div class="ripple-container"></div>
                                                        </a>
                                                    </div>
                                                    <div class="col-5">
                                                        <form action="{{ url('/deletetrans', ['id' => $transaksiData->id]) }}" method="post" onclick="return confirm('Yain ingin menghapus data?')">
                                                            @method('delete')
                                                            @csrf
                                                            <button type="submit" class="btn btn-danger btn-link delete-button" data-original-title="" title="" data-id="{{ $transaksiData->id }}">
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

@foreach ($transaksiDatas as $transaksiData)
<div class="modal fade" id="addtran" tabindex="-1" aria-labelledby="addtran"
aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="adddoc">Tambah Data</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"
                aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form method="POST" action="{{ route('inserttran.store') }}"
                enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="nama_pembeli" class="form-label">Nama Pembeli</label>
                    <input type="text" class="form-control" id="nama_pembeli" name="nama_pembeli" required style="border: 2px solid #245734;"
                     required style="border: 2px solid #245734;">
                </div>

               @foreach ($users as $user )
               <input type="hidden" class="form-control" id="users_id" name="users_id" value="{{$user->id}}">
               @endforeach
               <div class="mb-3">
                <label for="nohp" class="form-label">No Hp</label>
                <input type="text" class="form-control" id="nohp" name="nohp" required style="border: 2px solid #245734;"
                value="{{ $transaksiData->deskripsi }}" required style="border: 2px solid #245734;">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" required style="border: 2px solid #245734;"
                value="{{ $transaksiData->deskripsi }}" required style="border: 2px solid #245734;">
            </div>

                <div class="mb-3">
                    <label for="id_dataharga" class="form-label">Paket</label>
                    <select class="form-select" id="id_dataharga" name="id_dataharga" required style="border: 2px solid #245734;">
                        @foreach ($datahargas as $item)
                            <option value="{{ $item->id }}">{{ $item->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="jumlah" class="form-label">Jumlah</label>
                    <input type="text" class="form-control" id="jumlah" name="jumlah" required style="border: 2px solid #245734;"
                    value="{{ $transaksiData->deskripsi }}" required style="border: 2px solid #245734;">
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga</label>
                    <input type="text" class="form-control" id="harga" name="harga" required style="border: 2px solid #245734;"
                    value="{{ $transaksiData->harga }}" required style="border: 2px solid #245734;">
                </div>
                <div class="mb-3">
                    <label for="total_harga" class="form-label">Total Harga</label>
                    <input type="text" class="form-control" id="total_harga" name="total_harga" required style="border: 2px solid #245734;"
                    required style="border: 2px solid #245734;" readonly>
                </div>
                <button type="submit" class="btn btn-success">Simpan</button>
            </form>
        </div>
    </div>
</div>
</div>
@endforeach


@foreach ($transaksiDatas as $transaksiData)
<div class="modal fade" id="uptran{{$transaksiData->id}}" tabindex="-1" aria-labelledby="uptran"
aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="uptran">Edit Data</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"
                aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form method="POST" action="{{ route('updatetran.store', ['id' => $transaksiData->id]) }}"
                enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="nama_pembeli" class="form-label">Nama Pembeli</label>
                    <input type="text" class="form-control" id="nama_pembeli" name="nama_pembeli" required style="border: 2px solid #245734;"
                     required style="border: 2px solid #245734;"
                     value="{{ $transaksiData->nama_pembeli }}" required style="border: 2px solid #245734;">

                </div>

               @foreach ($users as $user )
               <input type="hidden" class="form-control" id="users_id" name="users_id" value="{{$user->id}}">
               @endforeach
               <div class="mb-3">
                <label for="nohp" class="form-label">No Hp</label>
                <input type="text" class="form-control" id="nohp" name="nohp" required style="border: 2px solid #245734;"
                value="{{ $transaksiData->nohp }}" required style="border: 2px solid #245734;">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" required style="border: 2px solid #245734;"
                value="{{ $transaksiData->alamat }}" required style="border: 2px solid #245734;">
            </div>

                <div class="mb-3">
                    <label for="id_dataharga" class="form-label">Paket</label>
                    <select class="form-select" id="id_dataharga" name="id_dataharga" required style="border: 2px solid #245734;">
                        @foreach ($datahargas as $item)
                            <option value="{{ $item->id }}">{{ $item->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="jumlah" class="form-label">Jumlah</label>
                    <input type="text" class="form-control" id="jumlah" name="jumlah" required style="border: 2px solid #245734;"
                    value="{{ $transaksiData->jumlah }}" required style="border: 2px solid #245734;">
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga</label>
                    <input type="text" class="form-control" id="harga" name="harga" required style="border: 2px solid #245734;"
                    value="{{ $transaksiData->harga }}" required style="border: 2px solid #245734;">
                </div>
                <div class="mb-3">
                    <label for="total_harga" class="form-label">Total Harga</label>
                    <input type="text" class="form-control" id="total_harga" name="total_harga" required style="border: 2px solid #245734;"
                    required style="border: 2px solid #245734;" value="{{ $transaksiData->total_harga }}" readonly>
                </div>
                <button type="submit" class="btn btn-success">Simpan</button>
            </form>
        </div>
    </div>
</div>
</div>
@endforeach
<script>
    // Fungsi ini akan dipanggil setiap kali opsi dalam dropdown berubah
    function updateHarga() {
        // Mendapatkan nilai yang dipilih dalam dropdown
        var selectedOption = document.getElementById("id_dataharga");
        var selectedValue = selectedOption.options[selectedOption.selectedIndex].value;

        // Lakukan permintaan ke server untuk mendapatkan harga sesuai dengan selectedValue
        // Anda harus menyesuaikan ini dengan cara Anda mengambil data harga dari server Anda
        // Misalnya, dengan menggunakan AJAX request.

        // Contoh permintaan AJAX palsu (Anda perlu menyesuaikannya):
        var xhr = new XMLHttpRequest();
        xhr.open("GET", "/get-harga/" + selectedValue, true);

        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                var response = JSON.parse(xhr.responseText);
                // Mengisi input harga dengan harga yang diterima dari server
                document.getElementById("harga").value = response.harga;
            }
        };

        xhr.send();
    }

    // Memasang event listener untuk memantau perubahan dropdown
    document.getElementById("id_dataharga").addEventListener("change", updateHarga);

    // Memanggil fungsi updateHarga saat halaman dimuat untuk mengatur harga awal
    updateHarga();
    function hitungTotalHarga() {
        // Mendapatkan nilai dari input jumlah dan input harga
        var jumlah = parseFloat(document.getElementById("jumlah").value);
        var harga = parseFloat(document.getElementById("harga").value);

        // Memastikan kedua input memiliki nilai yang valid
        if (!isNaN(jumlah) && !isNaN(harga)) {
            var totalHarga = jumlah * harga;

            // Memasukkan total harga ke dalam input durasi
            document.getElementById("total_harga").value = totalHarga;
        } else {
            // Jika salah satu input tidak valid, mengosongkan input durasi
            document.getElementById("total_harga").value = "";
        }
    }

    // Memasang event listener untuk memantau perubahan input jumlah
    document.getElementById("jumlah").addEventListener("input", hitungTotalHarga);

    // Memasang event listener untuk memantau perubahan input harga
    document.getElementById("harga").addEventListener("input", hitungTotalHarga);

    // Memanggil fungsi hitungTotalHarga saat halaman dimuat untuk mengatur total harga awal
    hitungTotalHarga();
</script>
