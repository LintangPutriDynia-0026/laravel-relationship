<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="mx-lg-5 mt-lg-4 mb-lg-3">
        <div class="rounded bg-info pt-3 pb-3">
            <div class="container-fluid">
                <div class="row justify-content-center align-items-center ps-2 pe-2">
                    <div class="col-md-3 text-start">
                        <a href="{{ route('list-products', ['user_id' => 1]) }}" class="btn btn-primary fw-bold">Halaman
                            Pengguna
                            Admin</a>
                    </div>
                    <div class="col-md-6 text-center ps-4">
                        <h1 class="h2 fw-bold mt-2">PRODUCTS</h1>
                    </div>
                    <div class="col-md-3 text-end">
                        <a href="{{ route('list-products', ['user_id' => 2]) }}" class="btn btn-success fw-bold">Halaman
                            Pengguna
                            Merchant</a>
                    </div>
                </div>
            </div>
            <div class="mt-3
                bg-dark mx-auto rounded" style="height: 3px;width: 75px">
            </div>
            <div class="grid mx-3 mt-4">
                <div class="row row-gap-4">
                    @foreach ($products as $produk)
                        <div class="col-3">
                            <div class="card bg-white w-100">
                                <img class="rounded img-fluid " style="object-fit: cover;height: 254px;"
                                    src="{{ $produk->gambar }}">
                                <!-- Menggunakan -> untuk mengakses properti -->
                                <div class="card-body">
                                    <div class="d-flex justify-content-between my-2" style="font-size: 18px">
                                        <p class="card-title fw-bold my-auto">{{ $produk->nama }}</p>
                                        @if ($produk->kondisi == 'Baru')
                                            <p class="my-auto rounded py-1 bg-success px-2 fw-semibold"
                                                style="font-size: 14px">{{ $produk->kondisi }}</p>
                                        @else
                                            <p class="my-auto rounded py-1 bg-warning px-2 fw-semibold"
                                                style="font-size: 14px">{{ $produk->kondisi }}
                                            </p>
                                        @endif
                                    </div>
                                    <div class="d-flex justify-content-between my-2">
                                        <div class="text-start">
                                            <p class="my-auto rounded py-1 bg-success px-2 fw-bold text-white"
                                                style="font-size: 14px">{{ $produk->stok }}</p>
                                        </div>
                                        <div class="text-center">
                                            <p class="my-auto rounded py-1 bg-info px-2 fw-semibold"
                                                style="font-size: 14px">Rp.
                                                {{ number_format($produk->harga, 0, ',', '.') }}</p>
                                        </div>
                                        <div class="text-end">
                                            <p class="my-auto rounded py-1 bg-secondary px-2 fw-bold text-white"
                                                style="font-size: 14px">{{ $produk->berat }} gr</p>
                                        </div>
                                    </div>
                                    <p
                                        style="font-size: 14px; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; margin: 10px auto;">
                                        {{ $produk->deskripsi }}
                                    </p>
                                    <button class="btn btn-primary btn-sm w-100 fw-bold">Pesan Sekarang</button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

</html>
