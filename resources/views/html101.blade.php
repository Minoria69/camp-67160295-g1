<!-- file: resources/views/html101.blade.php -->
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>Workshop HTML Form Validation</title>
    <style>
        body { font-family: sans-serif; padding: 20px; line-height: 1.6; }
        .form-group { margin-bottom: 15px; }
        label { display: block; font-weight: bold; }
        .error-text { color: red; display: none; margin-top: 10px; }
    </style>
</head>
<body>

    <h2>Workshop #html-form</h2>
    <form id="mainForm" novalidate>
        <div class="form-group">
            <label>ชื่อ:</label>
            <input type="text" id="fname" name="fname">
        </div>

        <div class="form-group">
            <label>สกุล:</label>
            <input type="text" id="lname" name="lname">
        </div>

        <div class="form-group">
            <label>วันเดือนปีเกิด:</label>
            <input type="date" id="bdate" name="bdate">
        </div>

        <div class="form-group">
            <label>อายุ:</label>
            <input type="number" id="age" name="age">
        </div>

        <div class="form-group">
            <label>เพศ:</label>
            <input type="radio" name="gender" value="male"> ชาย
            <input type="radio" name="gender" value="female"> หญิง
        </div>

        <div class="form-group">
            <label>รูป:</label>
            <input type="file" id="profile_img" name="profile_img">
        </div>

        <div class="form-group">
            <label>ที่อยู่:</label>
            <textarea id="address" name="address"></textarea>
        </div>

        <div class="form-group">
            <label>สีที่ชอบ:</label>
            <input type="color" id="fav_color" name="fav_color">
        </div>

        <div class="form-group">
            <label>แนวเพลงที่ชอบ:</label>
            <input type="checkbox" name="music" value="pop"> Pop
            <input type="checkbox" name="music" value="rock"> Rock
            <input type="checkbox" name="music" value="jazz"> Jazz
        </div>

        <div class="form-group">
            <input type="checkbox" id="agree" name="agree"> ยินยอมเงื่อนไข
        </div>

        <p id="error-message" class="error-text">** กรุณากรอกข้อมูลให้ครบทุกช่อง! **</p>
        
        <button type="submit">Submit</button>
    </form>

    <script>
        document.getElementById('mainForm').addEventListener('submit', function(e) {
            e.preventDefault(); // ป้องกันการ reload หน้าจอ

            // ดึงค่ามาตรวจสอบ
            const fname = document.getElementById('fname').value;
            const lname = document.getElementById('lname').value;
            const bdate = document.getElementById('bdate').value;
            const age = document.getElementById('age').value;
            const gender = document.querySelector('input[name="gender"]:checked');
            const file = document.getElementById('profile_img').value;
            const address = document.getElementById('address').value;
            const music = document.querySelector('input[name="music"]:checked');
            const agree = document.getElementById('agree').checked;

            const errorMsg = document.getElementById('error-message');

            // เงื่อนไขการตรวจสอบ: ถ้ามีอันไหนว่าง ให้ Error
            if (!fname || !lname || !bdate || !age || !gender || !file || !address || !music || !agree) {
                errorMsg.style.display = 'block';
                alert("ข้อมูลไม่ครบ! (Error)"); 
            } else {
                errorMsg.style.display = 'none';
                alert("กรอกข้อมูลครบถ้วนแล้ว (Pass)");
                // ถ้าจะส่งข้อมูลจริงค่อยใช้ this.submit();
            }
        });
    </script>
</body>
</html>