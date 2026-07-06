<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kelas</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
          rel="stylesheet">

    <style>

        *{
            font-family:'Poppins',sans-serif;
        }

        body{
            min-height:100vh;
            background:linear-gradient(135deg,#4F46E5,#2563EB,#06B6D4);
            display:flex;
            justify-content:center;
            align-items:center;
            padding:40px 15px;
        }

        .card{
            width:100%;
            max-width:950px;
            border:none;
            border-radius:22px;
            background:rgba(255,255,255,.96);
            backdrop-filter:blur(15px);
            overflow:hidden;
        }

        .card-header{
            background:linear-gradient(90deg,#2563EB,#06B6D4);
            color:white;
            text-align:center;
            padding:25px;
        }

        .card-header h2{
            font-weight:600;
            margin-bottom:5px;
        }

        .card-header p{
            margin:0;
            opacity:.9;
        }

        .form-label{
            font-weight:500;
            color:#374151;
        }

        .input-group-text{
            background:#2563EB;
            color:white;
            border:none;
        }

        .form-control,
        .form-select{
            border-radius:10px;
            padding:11px;
        }

        .form-control:focus,
        .form-select:focus{
            border-color:#2563EB;
            box-shadow:0 0 12px rgba(37,99,235,.2);
        }

        .btn{
            border-radius:10px;
            padding:10px 25px;
            font-weight:500;
        }

        .btn-primary{
            background:#2563EB;
            border:none;
        }

        .btn-primary:hover{
            background:#1D4ED8;
        }

        .radio-card{
            border:1px solid #dee2e6;
            border-radius:10px;
            padding:12px;
            transition:.3s;
        }

        .radio-card:hover{
            border-color:#2563EB;
            background:#f8fbff;
        }

    </style>

</head>
<body>

<div class="card shadow-lg">

    <div class="card-header">
        <h2><i class="bi bi-easel2-fill"></i> Tambah Kelas</h2>
        <p>Silakan lengkapi informasi kelas perkuliahan</p>
    </div>

    <div class="card-body p-4">

        <form action="{{ route('kelas.store') }}" method="POST">

            @csrf

            <div class="row">

                <div class="col-md-6 mb-3">
                    <label class="form-label">Kode Kelas</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="bi bi-hash"></i>
                        </span>
                        <input type="text"
                               name="kode_kelas"
                               class="form-control"
                               placeholder="Contoh : TI-3A">
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Mata Kuliah</label>

                    <select name="kode_mata_kuliah"
                            class="form-select">

                        <option value="">-- Pilih Mata Kuliah --</option>

                        @foreach($mata_kuliah as $id => $nama)
                            <option value="{{ $id }}">
                                {{ $nama }}
                            </option>
                        @endforeach

                    </select>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Dosen</label>

                    <select name="kode_dosen"
                            class="form-select">

                        <option value="">-- Pilih Dosen --</option>

                        @foreach($dosen as $id => $nama)
                            <option value="{{ $id }}">
                                {{ $nama }}
                            </option>
                        @endforeach

                    </select>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Hari</label>

                    <select name="hari" class="form-select">
                        <option value="senin">Senin</option>
                        <option value="selasa">Selasa</option>
                        <option value="rabu">Rabu</option>
                        <option value="kamis">Kamis</option>
                        <option value="jumat">Jumat</option>
                    </select>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Jam Kuliah</label>

                    <select name="jam" class="form-select">
                        <option>07:00 - 08:40</option>
                        <option>08:50 - 11:30</option>
                        <option>12:30 - 14:10</option>
                        <option>17:00 - 18:40</option>
                        <option>19:00 - 20:40</option>
                    </select>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Tahun Ajaran</label>

                    <input type="text"
                           name="tahun_ajaran"
                           class="form-control"
                           placeholder="Contoh : 2025/2026">
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Ruang Kelas</label>

                    <input type="text"
                           name="ruang_kelas"
                           class="form-control"
                           placeholder="Contoh : Lab 2">
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Jumlah Maksimal Mahasiswa</label>

                    <input type="number"
                           name="jumlah_max"
                           class="form-control"
                           placeholder="40">
                </div>

                <div class="col-md-6 mb-3">

                    <label class="form-label d-block">
                        Semester
                    </label>

                    <div class="row">

                        <div class="col-6">

                            <label class="radio-card w-100">

                                <input class="form-check-input me-2"
                                       type="radio"
                                       name="semester"
                                       value="ganjil">

                                Ganjil

                            </label>

                        </div>

                        <div class="col-6">

                            <label class="radio-card w-100">

                                <input class="form-check-input me-2"
                                       type="radio"
                                       name="semester"
                                       value="genap">

                                Genap

                            </label>

                        </div>

                    </div>

                </div>

            </div>

            <div class="text-end mt-4">

                <button type="reset"
                        class="btn btn-outline-secondary me-2">
                    <i class="bi bi-arrow-counterclockwise"></i>
                    Reset
                </button>

                <button type="submit"
                        class="btn btn-primary">
                    <i class="bi bi-save-fill"></i>
                    Simpan Data
                </button>

            </div>

        </form>

    </div>

</div>

</body>
</html>