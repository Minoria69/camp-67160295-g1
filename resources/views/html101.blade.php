<!-- file: resources/views/html101.blade.php -->
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        body {
            background-color: #4db8ff; /* พื้นหลังสีฟ้าตามรูป */
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            padding: 20px;
        }
        .container {
            background-color: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
            width: 100%;
            max-width: 500px;
        }
        h2 {
            text-align: center;
            margin-bottom: 30px;
            font-size: 24px;
        }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; font-weight: 500; font-size: 14px; }
        input[type="text"], input[type="date"], input[type="file"], textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }
        textarea { height: 80px; resize: none; }
        .radio-group, .checkbox-group {
            display: flex;
            gap: 15px;
            font-size: 14px;
            align-items: center;
        }
        .button-group {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }
        .btn-reset {
            background-color: #7d8590;
            color: white;
            border: none;
            padding: 10px 25px;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn-submit {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 25px;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="color"] {
            border: none;
            width: 40px;
            height: 40px;
            padding: 0;
            cursor: pointer;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>ฟอร์มสมัครสมาชิก</h2>
    <form id="regForm">
        <div class="form-group">
            <label>ชื่อ</label>
            <input type="text" id="fname">
        </div>

        <div class="form-group">
            <label>สกุล</label>
            <input type="text" id="lname">
        </div>

        <div class="form-group">
            <label>วันเดือนปีเกิด</label>
            <input type="date" id="bdate">
        </div>

        <div class="form-group">
            <label>อายุ</label>
            <input type="number" id="age" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
        </div>

        <div class="form-group">
            <label>เพศ</label>
            <div class="radio-group">
                <label><input type="radio" name="gender" value="ชาย"> ชาย</label>
                <label><input type="radio" name="gender" value="หญิง"> หญิง</label>
                <label><input type="radio" name="gender" value="อื่นๆ"> อื่นๆ</label>
            </div>
        </div>

        <div class="form-group">
            <label>รูปโปรไฟล์</label>
            <input type="file" id="profile">
        </div>

        <div class="form-group">
            <label>ที่อยู่</label>
            <textarea id="address"></textarea>
        </div>

        <div class="form-group">
            <label>สีที่ชอบ</label>
            <input type="color" id="favcolor" value="#000000">
        </div>

        <div class="form-group">
            <label>แนวเพลงที่ชอบ</label>
            <div class="checkbox-group" style="flex-wrap: wrap;">
                <label><input type="checkbox" name="music" value="Pop"> Pop</label>
                <label><input type="checkbox" name="music" value="Rock"> Rock</label>
                <label><input type="checkbox" name="music" value="Jazz"> Jazz</label>
                <label><input type="checkbox" name="music" value="Hip-hop"> Hip-hop</label>
            </div>
        </div>

        <div class="form-group">
            <label style="font-weight: normal;">
                <input type="checkbox" id="agree"> ยินยอมให้เก็บข้อมูล
            </label>
        </div>

        <div class="button-group">
            <button type="reset" class="btn-reset">Reset</button>
            <button type="submit" class="btn-submit">บันทึก</button>
        </div>
    </form>
</div>

<script>
    document.getElementById('regForm').addEventListener('submit', function(e) {
        e.preventDefault();

        const fname = document.getElementById('fname').value;
        const lname = document.getElementById('lname').value;
        const bdate = document.getElementById('bdate').value;
        const age = document.getElementById('age').value;
        const gender = document.querySelector('input[name="gender"]:checked');
        const profile = document.getElementById('profile').value;
        const address = document.getElementById('address').value;
        const music = document.querySelector('input[name="music"]:checked');
        const agree = document.getElementById('agree').checked;

        // ตรวจสอบความครบถ้วน
        if (!fname || !lname || !bdate || !age || !gender || !profile || !address || !music || !agree) {
            alert("❌ Error: กรุณากรอกข้อมูลให้ครบถ้วนทุกช่อง!");
        } else {
            alert("✅ Pass: บันทึกข้อมูลเรียบร้อยแล้ว!");
        }
    });
</script>

</body>
</html>