<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Mahasiswa</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body{
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #4facfe, #00f2fe);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card-form{
            width: 100%;
            max-width: 650px;
            border-radius: 20px;
            border: none;
            overflow: hidden;
        }

        .card-header{
            background: #0d6efd;
            color: white;
            text-align: center;
            padding: 20px;
        }

        .card-header h3{
            margin: 0;
            font-weight: 600;
        }

        .form-control{
            border-radius: 10px;
            padding: 10px;
        }

        .btn{
            border-radius: 10px;
            padding: 10px 25px;
        }

        .btn-success{
            background: #198754;
        }

        .btn-secondary{
            background: #6c757d;
        }
    </style>
</head>
<body>

<div class="card shadow-lg card-form">
    <div class="card-header">
        <h3>📚 Form Input Data Mahasiswa</h3>
        <small>Silakan lengkapi data mahasiswa dengan benar</small>
    </div>

    <div class="card-body p-4">

        <form action="{{ action([App\Http\Controllers\MahasiswaController::class,'store']) }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label">Nama Lengkap</label>
                <input type="text" name="fullname" class="form-control" placeholder="Masukkan nama lengkap">
            </div>

            <div class="mb-3">
                <label class="form-label">Nomor Induk Mahasiswa (NIM)</label>
                <input type="text" name="NIM" class="form-control" placeholder="Masukkan NIM">
            </div>

            <div class="mb-3">
                <label class="form-label">Nomor Induk Siswa Nasional (NIDN)</label>
                <input type="text" name="NIDN" class="form-control" placeholder="Masukkan NIDN">
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Tempat Lahir</label>
                    <input type="text" name="tempat_lahir" class="form-control" placeholder="Masukkan tempat lahir">
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" class="form-control">
                </div>
            </div>

            <div class="mb-4">
                <label class="form-label">Alamat</label>
                <textarea name="alamat" rows="4" class="form-control" placeholder="Masukkan alamat lengkap"></textarea>
            </div>

            <div class="d-flex justify-content-end gap-2">
                <button type="reset" class="btn btn-secondary">
                    Reset
                </button>

                <button type="submit" class="btn btn-success">
                    Simpan Data
                </button>
            </div>

        </form>

    </div>
</div>

</body>
</html>