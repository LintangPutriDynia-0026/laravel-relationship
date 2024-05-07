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
    <div class="mx-lg-5 mt-lg-3 mb-lg-4">
        <div class="mb-4 pt-3 pb-3">
            <div class="container-fluid">
                <div class="row justify-content-center align-items-center ps-2 pe-2">
                    <div class="col-md-12 text-center mb-4">
                        <a href="{{ route('list-products', ['user_id' => $user_id]) }}"
                            class="btn btn-success fw-bold">Kembali Halaman Admin</a>
                    </div>
                </div>
            </div>
            <div class="grid mx-3 mt-4 align-items-stretch">
                <div class="row row-gap-4 mt-4">
                    <div class="container">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-md-5">
                                <section class="profile">
                                    <div class="card mb-3 border-3 border-dark">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-4">
                                                    <p class="fw-bold">Nama Akun</p>
                                                </div>
                                                <div class="col-8">
                                                    <p>{{ $user->name }}</p>
                                                </div>
                                                <div class="col-4">
                                                    <p class="fw-bold">Email</p>
                                                </div>
                                                <div class="col-8">
                                                    <p>{{ $user->email }}</p>
                                                </div>
                                                <div class="col-4">
                                                    <p class="fw-bold">Gender</p>
                                                </div>
                                                <div class="col-8">
                                                    <p>{{ $user->gender }}</p>
                                                </div>
                                                <div class="col-4">
                                                    <p class="fw-bold">Umur</p>
                                                </div>
                                                <div class="col-8">
                                                    <p>{{ $user->umur }}</p>
                                                </div>
                                                <div class="col-4">
                                                    <p class="fw-bold">Tanggal Lahir</p>
                                                </div>
                                                <div class="col-8">
                                                    <p>{{ $user->tanggal_lahir }}</p>
                                                </div>
                                                <div class="col-4">
                                                    <p class="fw-bold">Alamat</p>
                                                </div>
                                                <div class="col-8">
                                                    <p>{{ $user->alamat }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div class="col-md-5">
                                <section class="user">
                                    <div class="card mb-3 border-3 border-dark">
                                        <div class="card-body mb-4">
                                            <div class="row mb-4">
                                                <div class="col-4">
                                                    <p class="fw-bold">Nama Toko</p>
                                                </div>
                                                <div class="col-8">
                                                    <p>{{ $user->profile->nama_toko }}</p>
                                                </div>
                                                <div class="col-4">
                                                    <p class="fw-bold">Rate</p>
                                                </div>
                                                <div class="col-8">
                                                    <p>{{ $user->profile->rate }}</p>
                                                </div>
                                                <div class="col-4">
                                                    <p class="fw-bold">Produk Terbaik</p>
                                                </div>
                                                <div class="col-8">
                                                    <p>{{ $user->profile->produk_terbaik }}</p>
                                                </div>
                                                <div class="col-4">
                                                    <p class="fw-bold">Deskripsi</p>
                                                </div>
                                                <div class="col-8">
                                                    <p>{{ $user->profile->deskripsi }}</p>
                                                </div>
                                                <div class="col-4 mb-4">
                                                </div>
                                                <div class="col-8 mb-4">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

</html>
