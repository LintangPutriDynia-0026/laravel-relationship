<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <!-- Menampilkan pesan error jika data tidak ada/tidak di isi -->
    <div class="container my-lg-3">
        @if (Session::has('error'))
            <div class="row justify-content-center">
                <div class="col-md-5 justify-content-center bg-danger rounded px-3 py-2 text-white mb-3">
                    <h1 class="h6 mt-2 fw-bold">{{ Session::get('error') }}</h1>
                </div>
            </div>
        @endif
        <div class="row justify-content-center">
            <div class="col-md-5 bg-info rounded py-3">
                <h1 class="h4 text-center fw-bold">Tambah Data Produk</h1>
                <form class="mx-1 my-2" action="{{ route('post-form', ['user_id' => $user_id]) }}" method="POST">
                    @csrf()
                    <div class="mb-2">
                        <label for="Image" class="form-label fw-semibold">Gambar Produk</label>
                        <input type="text" class="form-control" name="gambar" id="Image"
                            placeholder="Masukkan gambar produk">
                    </div>
                    <div class="mb-2">
                        <label for="Name" class="form-label fw-semibold">Nama Produk</label>
                        <input type="text" class="form-control" name="nama" id="Name"
                            placeholder="Masukkan nama produk">
                    </div>
                    <div class="mb-2">
                        <label for="Berat" class="form-label fw-semibold">Berat</label>
                        <input type="number" class="form-control" name="berat" id="Berat"
                            placeholder="Masukkan berat produk">
                    </div>
                    <div class="mb-2">
                        <label for="Harga" class="form-label fw-semibold">Harga</label>
                        <input type="number" class="form-control" name="harga" id="Harga"
                            placeholder="Masukkan harga produk">
                    </div>
                    <div class="mb-2">
                        <label for="Stok" class="form-label fw-semibold">Stok</label>
                        <input type="number" class="form-control" name="stok" id="Stok"
                            placeholder="Masukkan stok produk">
                    </div>
                    <div class="mb-2">
                        <label for="Kondisi" class="form-label fw-semibold">Kondisi Barang</label>
                        <select class="form-select" name="kondisi" id="Kondisi">
                            <option value="0" selected>Pilih Kondisi Barang</option>
                            <option value="Baru">Baru</option>
                            <option value="Bekas">Bekas</option>
                        </select>
                    </div>
                    <div class="mb-2">
                        <label for="Deskripsi" class="form-label fw-semibold">Deskripsi</label>
                        <textarea class="form-control" placeholder="Tuliskan deskripsi produk yang akan dijual" id="Deskripsi" name="deskripsi"
                            rows="3"></textarea>
                    </div>
                    <div class="d-flex">
                        <button class=" mt-3 btn btn-sm btn-dark fw-bold mx-auto" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

</html>
