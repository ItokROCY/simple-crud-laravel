<div class="mt-4">
    <div class="btn-group" role="group">
        <a type="button" class="btn btn-primary" href="/barang-create">Tambah
            Barang</a>
        <a type="button" class="btn btn-outline-primary" href="/barang-kategori">Tambah
            Kategori</a>
        <a type="button" class="btn btn-outline-secondary" href="/chart">Chart</a>
    </div>

    <a type="button" class="btn btn-outline-danger float-end" href="/" style="font-weight:bold"
        onclick="return confirm('Anda yakin ingin mereset hasil pencarian?')"><i
            class="fa-sharp fa-solid fa-rotate-left" style="color: white;"></i> Reset Tabel</a>
</div>



<div class="card shadow my-2">
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Jumlah Barang</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = $data->firstItem(); ?>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $item->nama_barang }}</td>
                        <td>{{ $item->jumlah_barang }}</td>
                        <td>Rp. {{ number_format($item->harga) }}</td>
                        <td>
                            <a href="/show/{{ $item->id }}" class="btn btn-sm btn-success"><i
                                    class="fa-solid fa-eye" style="color: #ffffff;"></i></a>

                            <a href="{{ route('barang.edit', $item->id) }}" class="btn btn-sm btn-warning"><i
                                    class="fa-solid fa-pen-to-square" style="color: #ffffff;"></i></a>
                            <form action="{{ route('barang.destroy', $item->id) }}" method="POST"
                                style="display: inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"
                                    onclick="return confirm('Anda yakin ingin menghapus barang ini?')"><i
                                        class="fa-solid fa-trash" style="color: #ffffff;"></i></button>
                            </form>

                            {{-- belum bisa --}}
                            <button type="submit" class="btn btn-sm btn-dark"><i class="fa-solid fa-print"
                                    style="color: #ffffff;"></i></button>
                        </td>
                    </tr>
                    <?php $i++; ?>
                @endforeach

            </tbody>
        </table>
        <br>
        <div class="">
            {{ $data->links() }}
        </div>
    </div>
</div>
