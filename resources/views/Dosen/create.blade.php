<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Dosen</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        *{
            font-family:'Poppins',sans-serif;
        }

        body{
            min-height:100vh;
            background:linear-gradient(135deg,#4f46e5,#06b6d4);
            display:flex;
            justify-content:center;
            align-items:center;
            padding:40px 15px;
        }

        .card{
            width:100%;
            max-width:850px;
            border:none;
            border-radius:20px;
            overflow:hidden;
            backdrop-filter:blur(15px);
            background:rgba(255,255,255,.95);
        }

        .card-header{
            background:linear-gradient(90deg,#2563eb,#06b6d4);
            color:white;
            text-align:center;
            padding:25px;
        }

        .card-header h2{
            font-weight:600;
            margin-bottom:5px;
        }

        .form-label{
            font-weight:500;
        }

        .form-control{
            border-radius:12px;
            border:1px solid #ddd;
            padding:10px 15px;
        }

        .form-control:focus{
            border-color:#2563eb;
            box-shadow:0 0 10px rgba(37,99,235,.2);
        }

        .input-group-text{
            border-radius:12px 0 0 12px;
            background:#2563eb;
            color:white;
            border:none;
        }

        textarea{
            resize:none;
        }

        .btn{
            border-radius:12px;
            padding:10px 25px;
            font-weight:500;
        }

        .btn-primary{
            background:#2563eb;
            border:none;
        }

        .btn-primary:hover{
            background:#1d4ed8;
        }

        .btn-outline-secondary:hover{
            color:white;
        }
    </style>
</head>

<body>

<div class="card shadow-lg">

    <div class="card-header">
        <h2><i class="bi bi-person-workspace"></i> Form Data Dosen</h2>
        <p class="mb-0">Silakan lengkapi data dosen dengan benar.</p>
    </div>

    <div class="card-body p-4">

        <form action="{{ action([App\Http\Controllers\DosenController::class,'store']) }}" method="POST">

            @csrf

            <div class="row">

                <div class="col-md-6 mb-3">
                    <label class="form-label">Nama Lengkap</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="bi bi-person-fill"></i>
                        </span>
                        <input type="text" class="form-control" name="fullname" placeholder="Masukkan nama lengkap">
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Nomor Induk Pengajar (NIP)</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="bi bi-card-text"></i>
                        </span>
                        <input type="text" class="form-control" name="NIP" placeholder="Masukkan NIP">
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Nomor Induk Dosen Nasional (NIDN)</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="bi bi-patch-check-fill"></i>
                        </span>
                        <input type="text" class="form-control" name="NIDN" placeholder="Masukkan NIDN">
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Pendidikan Terakhir</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="bi bi-mortarboard-fill"></i>
                        </span>
                        <input type="text" class="form-control" name="pendidikan_terakhir" placeholder="Contoh: S2 Teknik Informatika">
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Jurusan ID</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="bi bi-building"></i>
                        </span>
                        <input type="text" class="form-control" name="jurusan_id" placeholder="Masukkan ID Jurusan">
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Tempat Lahir</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="bi bi-geo-alt-fill"></i>
                        </span>
                        <input type="text" class="form-control" name="tempat_lahir" placeholder="Masukkan tempat lahir">
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Tanggal Lahir</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="bi bi-calendar-event-fill"></i>
                        </span>
                        <input type="date" class="form-control" name="tanggal_lahir">
                    </div>
                </div>

                <div class="col-12 mb-4">
                    <label class="form-label">Alamat</label>
                    <textarea class="form-control" rows="4" name="alamat" placeholder="Masukkan alamat lengkap"></textarea>
                </div>

            </div>

            <div class="text-end">

                <button type="reset" class="btn btn-outline-secondary me-2">
                    <i class="bi bi-arrow-counterclockwise"></i>
                    Reset
                </button>

                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-save-fill"></i>
                    Simpan Data
                </button>

            </div>

        </form>

    </div>

</div>

</body>
</html>