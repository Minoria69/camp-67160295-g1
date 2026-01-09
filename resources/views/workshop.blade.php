<!DOCTYPE html>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>ฟอร์มสมัครสมาชิก</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun&display=swap" rel="stylesheet">
    <style>body { font-family: 'Sarabun', sans-serif; }</style>
</head>
<body class="bg-[#56baec] flex items-center justify-center min-h-screen p-4">
    <div class="bg-white rounded-lg shadow-xl w-full max-w-md overflow-hidden">
        <div class="bg-[#3b82f6] p-4 text-center">
            <h1 class="text-white text-xl font-bold">ฟอร์มสมัครสมาชิก</h1>
        </div>
        <form action="{{ route('workshop.store') }}" method="POST" class="p-6 space-y-4">
            @csrf
            <div>
                <label class="block text-sm font-medium">ชื่อ</label>
                <input type="text" name="first_name" class="mt-1 block w-full border border-gray-300 rounded-md p-2">
            </div>
            <div>
                <label class="block text-sm font-medium">สกุล</label>
                <input type="text" name="last_name" class="mt-1 block w-full border border-gray-300 rounded-md p-2">
            </div>
            <div>
                <label class="block text-sm font-medium">วันเดือนปีเกิด</label>
                <input type="date" name="birth_date" class="mt-1 block w-full border border-gray-300 rounded-md p-2">
            </div>
            <div class="flex items-center space-x-4 text-sm">
                <label class="font-medium">เพศ</label>
                <label><input type="radio" name="gender" value="ชาย"> ชาย</label>
                <label><input type="radio" name="gender" value="หญิง"> หญิง</label>
            </div>
            <div>
                <label class="block text-sm font-medium">ที่อยู่</label>
                <textarea name="address" rows="3" class="mt-1 block w-full border border-gray-300 rounded-md p-2"></textarea>
            </div>
            <div>
                <label class="block text-sm font-medium">แนวเพลงที่ชอบ</label>
                <div class="flex gap-4 text-sm mt-1">
                    <label><input type="checkbox" name="music[]" value="Pop"> Pop</label>
                    <label><input type="checkbox" name="music[]" value="Rock"> Rock</label>
                </div>
            </div>
            <div class="flex justify-between pt-4">
                <button type="reset" class="bg-gray-500 text-white px-6 py-2 rounded-md">Reset</button>
                <button type="submit" class="bg-[#1d6eff] text-white px-6 py-2 rounded-md">บันทึก</button>
            </div>
        </form>
    </div>
</body>
</html>