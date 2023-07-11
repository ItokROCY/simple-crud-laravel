<div class="card shadow my-1">
    <div class="card-body">

        <form action="/cari" method="GET">
            @csrf
            <h2 style="font-weight: bold">Cari (checkbox style)</h2>
            <div class="row">
                <div class="col-lg-6">

                    <div class="input-group mb-3">
                        <div class="input-group-text">
                            <input class="form-check-input mt-0" type="checkbox" name="checkBarang" value=""
                                aria-label="Checkbox for following text input">
                        </div>
                        <input type="text" name="searchBarang" class="form-control"
                            aria-label="Text input with checkbox" placeholder="Masukan nama barang">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="input-group mb-3">
                        <div class="input-group-text">
                            <input class="form-check-input mt-0" type="checkbox" name="checkHarga" value=""
                                aria-label="Checkbox for following text input">
                        </div>
                        <input type="text" name="searchHarga" class="form-control"
                            aria-label="Text input with checkbox" placeholder="Masukan nama harga">
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-success mt-1" style="font-weight: bold;" href=""><i
                    class="fa-solid fa-magnifying-glass" style="color: #ffffff;"></i> Cari</button>
        </form>
    </div>
</div>
