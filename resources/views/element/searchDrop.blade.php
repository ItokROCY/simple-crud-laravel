    <div class="card shadow my-1">
        <div class="card-body">

            <form action="/cariDrop" method="GET">
                @csrf
                <h2 style="font-weight:bold">Cari (dropbox style)</h2>
                <div class="col-sm-3">
                    <select class="form-select" name="jenis" aria-label="Default select example">
                        <option selected>Pilih Jenis</option>
                        <option value="barang">Barang</option>
                        <option value="harga">Harga</option>
                    </select>
                </div>
                <div class="row">
                    <div class="col-lg-6">

                        <div class="col-sm-5">
                            <input type="text" class="form-control my-2" id="hasilDrop" name="hasilDrop">
                        </div>

                        <button type="submit" class="btn btn-success mt-1" style="font-weight: bold;" href=""><i
                                class="fa-solid fa-magnifying-glass" style="color: #ffffff;"></i> Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
