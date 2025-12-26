<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #5bc0de; /* สีฟ้าตามรูป */
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        .form-container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 500px;
        }
        .form-header {
            background-color: #2c7be5;
            color: white;
            text-align: center;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
            font-size: 24px;
            font-weight: bold;
        }
        label { font-weight: 500; margin-top: 10px; }
    </style>
</head>
<body>
    <div class="form-container">
        <div class="form-header">ฟอร์มสมัครสมาชิก</div>
        
        <form action="{{ route('workshop.store') }}" method="POST">
            @csrf
            
            <label>ชื่อ</label>
            <input type="text" name="first_name" class="form-control" required>

            <label>สกุล</label>
            <input type="text" name="last_name" class="form-control" required>

            <label>วันเดือนปีเกิด</label>
            <input type="date" name="birth_date" class="form-control" required>

            <label class="d-block">เพศ</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" value="ชาย">
                <label class="form-check-label">ชาย</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" value="หญิง">
                <label class="form-check-label">หญิง</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" value="อื่นๆ">
                <label class="form-check-label">อื่นๆ</label>
            </div>

            <label>รูปโปรไฟล์</label>
            <input type="file" name="profile_pic" class="form-control">

            <label>ที่อยู่</label>
            <textarea name="address" class="form-control" rows="3"></textarea>

            <label>สีที่ชอบ</label>
            <input type="color" name="fav_color" class="form-control form-control-color" value="#000000">

            <label class="d-block">แนวเพลงที่ชอบ</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="music[]" value="Pop"> <label>Pop</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="music[]" value="Rock"> <label>Rock</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="music[]" value="Jazz"> <label>Jazz</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="music[]" value="Hip-hop"> <label>Hip-hop</label>
            </div>

            <div class="form-check mt-3">
                <input class="form-check-input" type="checkbox" required>
                <label class="form-check-label text-danger">ยินยอมให้เก็บข้อมูล</label>
            </div>

            <div class="d-flex justify-content-between mt-4">
                <button type="reset" class="btn btn-secondary px-4">Reset</button>
                <button type="submit" class="btn btn-primary px-4">บันทึก</button>
            </div>
        </form>
    </div>
</body>
</html>