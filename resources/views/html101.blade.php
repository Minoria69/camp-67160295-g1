<!-- file: resources/views/html101.blade.php -->
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workshop #html-form</title>
    <style>
        /* สไตล์เดิมของคุณ */
        body {
            background-color: #87CEEB; /* สีฟ้า */
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            width: 400px;
        }
        h2 {
            background-color: #4CAF50; /* แถบสีเขียว */
            color: white;
            padding: 10px;
            text-align: center;
            border-radius: 5px 5px 0 0;
            margin: -20px -20px 20px -20px;
        }
        .form-group { margin-bottom: 12px; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        input[type="text"], input[type="number"], input[type="date"], textarea, input[type="file"] {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover { background-color: #45a049; }
        .error-hint { color: red; font-size: 12px; display: none; }
    </style>
</head>
<body>

<div class="container">
    <h2>Workshop #html-form</h2>
    <form id="workshopForm">
        <div class="form-group">
            <label>ชื่อ-สกุล:</label>
            <div style="display: flex; gap: 5px;">
                <input type="text" id="fname" placeholder="ชื่อ">
                <input type="text" id="lname" placeholder="สกุล">
            </div>
        </div>

        <div class="form-group">
            <label>วันเดือนปีเกิด / อายุ:</label>
            <div style="display: flex; gap: 5px;">
                <input type="date" id="bdate">
                <input type="number" id="age" placeholder="อายุ" style="width: 80px;">
            </div>
        </div>

        <div class="form-group">
            <label>เพศ:</label>
            <input type="radio" name="gender" value="male"> ชาย
            <input type="radio" name="gender" value="female"> หญิง
        </div>

        <div class="form-group">
            <label>รูปโปรไฟล์:</label>
            <input type="file" id="profile_img">
        </div>

        <div class="form-group">
            <label>ที่อยู่:</label>
            <textarea id="address" rows="2"></textarea>
        </div>

        <div class="form-group">
            <label>สีที่ชอบ:</label>
            <input type="color" id="fav_color" style="height: 30px;">
        </div>

        <div class="form-group">
            <label>แนวเพลงที่ชอบ:</label>
            <input type="checkbox" name="music" value="pop"> Pop
            <input type="checkbox" name="music" value="rock"> Rock
        </div>

        <div class="form-group">
            <input type="checkbox" id="agree"> <span style="font-size: 14px;">ยินยอมให้เก็บข้อมูล</span>
        </div>

        <button type="submit">Submit</button>
    </form>
</div>

<script>
    document.getElementById('workshopForm').addEventListener('submit', function(e) {
        e.preventDefault();

        // ดึงค่ามาตรวจสอบตามโจทย์
        const fname = document.getElementById('fname').value.trim();
        const lname = document.getElementById('lname').value.trim();
        const bdate = document.getElementById('bdate').value;
        const age = document.getElementById('age').value;
        const gender = document.querySelector('input[name="gender"]:checked');
        const img = document.getElementById('profile_img').value;
        const address = document.getElementById('address').value.trim();
        const music = document.querySelector('input[name="music"]:checked');
        const agree = document.getElementById('agree').checked;

        // ตรวจสอบว่ามีช่องไหนว่างไหม
        if (!fname || !lname || !bdate || !age || !gender || !img || !address || !music || !agree) {
            alert("Error: กรุณากรอกข้อมูลให้ครบถ้วนทุกช่อง!");
        } else {
            alert("Pass: ตรวจสอบข้อมูลสำเร็จ!");
        }
    });
</script>

</body>
</html>