<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-lg-4 mb-lg-3">
        <div class="rounded bg-info pt-3 pb-3">
            <div class="container-fluid">
                <div class="row justify-content-center align-items-center mb-3 ps-2 pe-2">
                    <div class="col-md-6 text-start">
                        <h1 class="h3 fw-semibold px-2">List Product</h1>
                    </div>
                    <div class="col-md-6 text-end">
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('user.profile', ['id' => $user_id]) }}"
                                class="btn btn-primary fw-bold me-2">Lihat Profil</a>
                            <a href="{{ route('get-form', ['user_id' => $user_id]) }}"
                                class="btn btn-dark fw-bold me-2">Tambah Produk</a>
                            <a href="{{ route('show-products') }}" class="btn btn-secondary fw-bold">Kembali ke
                                Produk</a>
                        </div>
                    </div>
                </div>
                <table class="table table-striped text-center">
                    <thead>
                        <tr>
                            <th style="width: 10%">No</th>
                            <th style="width: 25%">Nama</th>
                            <th style="width: 5%">Stok</th>
                            <th style="width: 15%">Berat</th>
                            <th style="width: 17%">Harga</th>
                            <th style="width: 15%">Kondisi</th>
                            <th style="width: 13%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $loop->iteration + $products->firstItem() - 1 }}</td>
                                <td>{{ $product->nama }}</td>
                                <td>{{ $product->stok }}</td>
                                <td>{{ $product->berat }}</td>
                                <td>Rp. {{ number_format($product->harga, 0, ',', '.') }}</td>
                                <td class="text-center fw-semibold">
                                    <span
                                        class="py-2 badge rounded {{ $product->kondisi == 'Baru' ? 'bg-success' : 'bg-dark text-white' }}"
                                        style="min-width: 80px;">
                                        {{ $product->kondisi }}
                                </td>
                                <td>
                                    <a href="{{ route('edit-product', ['id' => $product->id, 'user_id' => $user_id]) }}"
                                        class="btn btn-sm btn-warning">Update</a>
                                    <form
                                        action="{{ route('delete-product', ['id' => $product->id, 'user_id' => $user_id]) }}"
                                        method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
