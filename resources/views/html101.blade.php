<!-- file: resources/views/html101.blade.php -->
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>Registration Form</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: "Sarabun", sans-serif;
            background: linear-gradient(to right, #1e90ff, #00bfff, #87cefa);
            min-height: 100vh;
            padding-top: 40px;
        }
        .form-box {
            background: white;
            padding: 30px;
            border-radius: 15px;
            max-width: 600px;
            margin: auto;
            box-shadow: 0px 4px 10px rgba(0,0,0,0.2);
        }
        h2 {
            text-align: center;
            font-weight: 700;
            margin-bottom: 25px;
        }
    </style>
</head>

<body>

<div class="form-box">

    <h2>ฟอร์มสมัครสมาชิก</h2>

    <form>

        <div class="mb-3">
            <label class="form-label">ชื่อ</label>
            <input type="text" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">สกุล</label>
            <input type="text" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">วันเดือนปีเกิด</label>
            <input type="date" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">เพศ</label><br>
            <input type="radio" name="gender"> ชาย
            <input type="radio" name="gender" class="ms-3"> หญิง
            <input type="radio" name="gender" class="ms-3"> อื่น ๆ
        </div>

        <div class="mb-3">
            <label class="form-label">รูปโปรไฟล์</label>
            <input type="file" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">ที่อยู่</label>
            <textarea class="form-control" rows="3"></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">สีที่ชอบ</label>
            <input type="color" class="form-control form-control-color">
        </div>

        <div class="mb-3">
            <label class="form-label">แนวเพลงที่ชอบ</label><br>
            <input type="checkbox"> Pop
            <input type="checkbox" class="ms-3"> Rock
            <input type="checkbox" class="ms-3"> Jazz
            <input type="checkbox" class="ms-3"> Hip-hop
        </div>

        <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox">
            <label class="form-check-label">ยินยอมให้เก็บข้อมูล</label>
        </div>

        <div class="d-flex justify-content-between">
            <button type="reset" class="btn btn-secondary px-4">Reset</button>
            <button type="submit" class="btn btn-primary px-4">บันทึก</button>
        </div>

    </form>

</div>

</body>
</html>

