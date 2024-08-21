<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pendaftaran PPDB 2024</title>
    @include('partials.scripttw')
</head>
<body>
    @include('partials.navbar')
    <section>
        <div class="mt-8 max-w-md">
            <div>
                <label class="text-2xl font-bold">A. Informasi Personal</label>
            </div>
            <div>
                <div class="grid grid-cols-1 gap-6">
                    <label class="block">
                        <span>Nama Lengkap</span>
                        <input type="text" class="rounded w-full" />
                    </label>
                </div>
                <div class="grid grid-cols-1 gap-6">
                    <label class="block">
                        <span>Tempat Lahir</span>
                        <input type="text" class="rounded w-full" />
                    </label>
                </div>
                <div class="flex grid grid-cols-1">
                    <label class="block">
                        <span>Tanggal Lahir</span>
                    </label>
                    <div class="flex justify-between space-x-3 ">
                        <div class="columns-[10rem]">
                            <input type="number" maxlength="2" min="1" max="31" class="rounded w-full" />
                        </div>
                        <div class="columns-[10rem]">
                            <select class="form-select w-full rounded">
                                <!-- ... -->
                                <option value="" selected="selected">Bulan</option>
                                <option value="1">Januari</option>
                                <option value="2">Februari</option>
                                <option value="3">Maret</option>
                                <option value="4">April</option>
                                <option value="5">Mei</option>
                                <option value="6">Juni</option>
                                <option value="7">Juli</option>
                                <option value="8">Agustus</option>
                                <option value="9">September</option>
                                <option value="10">Oktober</option>
                                <option value="11">November</option>
                                <option value="12">Desember</option>
                            </select>
                        </div>
                        <div class="columns-[10rem]">
                            <input type="number" minlength="4" maxlength="4" min="1970" max="2024" class="rounded w-full" />
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1">
                    <label class="block">
                        <span>Jenis Kelamin</span>
                    </label>
                    <div class="justify-between">
                        <input id="laki" type="radio" name="sex" class="sex show form-check-input required rounded" checked="" value="L"/>
                        <label for="laki">Laki-laki</label>
                        <input id="perempuan" type="radio" name="sex" class="sex show form-check-input required rounded" value="P"/>
                        <label for="perempuan">Perempuan</label>
                    </div>
                </div>
            </div>
            <div class="mt-4">
                <label class="text-2xl font-bold">B. Informasi Personal</label>
            </div>
        </div>
    </section>
</body>
</html>