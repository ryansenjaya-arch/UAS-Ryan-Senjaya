<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Jurusan</title>

    <!-- Bootstrap CSS -->
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
            display:flex;
            justify-content:center;
            align-items:center;
            background:linear-gradient(135deg,#4F46E5,#3B82F6,#06B6D4);
            padding:20px;
        }

        .card{
            width:100%;
            max-width:550px;
            border:none;
            border-radius:22px;
            overflow:hidden;
            background:rgba(255,255,255,.95);
            backdrop-filter:blur(15px);
        }

        .card-header{
            background:linear-gradient(90deg,#2563EB,#0EA5E9);
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
            font-size:14px;
        }

        .form-label{
            font-weight:500;
            color:#374151;
        }

        .input-group-text{
            background:#2563EB;
            color:white;
            border:none;
            border-radius:12px 0 0 12px;
        }

        .form-control{
            border-radius:0 12px 12px 0;
            border:1px solid #d1d5db;
            padding:12px;
        }

        .form-control:focus{
            border-color:#2563EB;
            box-shadow:0 0 10px rgba(37,99,235,.25);
        }

        .btn{
            border-radius:12px;
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

        .btn-outline-secondary:hover{
            color:white;
        }
    </style>
</head>

<body>

<div class="card shadow-lg">

    <div class="card-header">
        <h2><i class="bi bi-building"></i> Data Jurusan</h2>
        <p>Silakan lengkapi informasi jurusan</p>
    </div>

    <div class="card-body p-4">

        <form action="{{ action([App\Http\Controllers\JurusanController::class,'store']) }}" method="POST">

            @csrf

            <div class="mb-4">
                <label class="form-label">
                    Nama Jurusan
                </label>

                <div class="input-group">
                    <span class="input-group-text">
                        <i class="bi bi-mortarboard-fill"></i>
                    </span>

                    <input
                        type="text"
                        name="nama_jurusan"
                        class="form-control"
                        placeholder="Contoh : Sistem dan Teknologi Informasi"
                        required>
                </div>
            </div>

            <div class="mb-4">
                <label class="form-label">
                    Kode Jurusan
                </label>

                <div class="input-group">
                    <span class="input-group-text">
                        <i class="bi bi-upc-scan"></i>
                    </span>

                    <input
                        type="text"
                        name="kode_jurusan"
                        class="form-control"
                        placeholder="Contoh : STI"
                        required>
                </div>
            </div>

            <div class="d-flex justify-content-end">

                <button type="reset" class="btn btn-outline-secondary me-2">
                    <i class="bi bi-arrow-counterclockwise"></i>
                    Reset
                </button>

                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-save-fill"></i>
                    Simpan
                </button>

            </div>

        </form>

    </div>

</div>

</body>
</html>