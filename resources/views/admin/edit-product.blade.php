<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <!-- Menampilkan pesan error jika data tidak ada/tidak di isi -->
    <div class="container my-lg-3">
        <div class="row justify-content-center">
            <div class="col-md-5 bg-info rounded py-3">
                <h1 class="h4 text-center fw-bold">Edit Data Produk {{ $product->id }}</h1>
                <form class="mx-1 my-2"
                    action="{{ route('update-product', ['id' => $product->id, 'user_id' => $user_id]) }}"
                    method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-2">
                        <label for="Image" class="form-label fw-semibold">Gambar Produk</label>
                        <input type="text" class="form-control" name="gambar" id="Image"
                            value="{{ $product->gambar }}" placeholder="Masukkan gambar produk">
                    </div>
                    <div class="mb-2">
                        <label for="Name" class="form-label fw-semibold">Nama Produk</label>
                        <input type="text" class="form-control" name="nama" id="Name"
                            value="{{ $product->nama }}" placeholder="Masukkan nama produk">
                    </div>
                    <div class="mb-2">
                        <label for="Berat" class="form-label fw-semibold">Berat</label>
                        <input type="number" class="form-control" name="berat" id="Berat"
                            value="{{ $product->berat }}" placeholder="Masukkan berat produk">
                    </div>
                    <div class="mb-2">
                        <label for="Harga" class="form-label fw-semibold">Harga</label>
                        <input type="number" class="form-control" name="harga" id="Harga"
                            value="{{ $product->harga }}" placeholder="Masukkan harga produk">
                    </div>
                    <div class="mb-2">
                        <label for="Stok" class="form-label fw-semibold">Stok</label>
                        <input type="number" class="form-control" name="stok" id="Stok"
                            value="{{ $product->stok }}" placeholder="Masukkan stok produk">
                    </div>
                    <div class="mb-2">
                        <label for="Kondisi" class="form-label fw-semibold">Kondisi Barang</label>
                        <select class="form-select" name="kondisi" id="Kondisi">
                            <option value="Baru" {{ $product->kondisi == 'Baru' ? 'selected' : '' }}>Baru</option>
                            <option value="Bekas" {{ $product->kondisi == 'Bekas' ? 'selected' : '' }}>Bekas</option>
                        </select>
                    </div>
                    <div class="mb-2">
                        <label for="Deskripsi" class="form-label fw-semibold">Deskripsi</label>
                        <textarea class="form-control" placeholder="Tuliskan deskripsi produk yang akan dijual" id="Deskripsi" name="deskripsi"
                            rows="3">{{ $product->deskripsi }}</textarea>
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
