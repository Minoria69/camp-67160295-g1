<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>ข้อมูลที่ได้รับสำเร็จ</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun&display=swap" rel="stylesheet">
    <style>body { font-family: 'Sarabun', sans-serif; background-color: #56baec; }</style>
</head>
<body class="flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md text-center">
        <h2 class="text-[#3b82f6] text-xl font-bold mb-6">ข้อมูลที่ได้รับสำเร็จ</h2>
        
        <table class="w-full text-left border-collapse text-sm">
            <tr class="bg-gray-100">
                <th class="p-2 border font-bold w-1/3">ชื่อ-นามสกุล:</th>
                <td class="p-2 border">{{ $payload['first_name'] ?? '' }} {{ $payload['last_name'] ?? '' }}</td>
            </tr>
            <tr>
                <th class="p-2 border font-bold">วันเกิด:</th>
                <td class="p-2 border">{{ $payload['birth_date'] ?? '-' }}</td>
            </tr>
            <tr class="bg-gray-100">
                <th class="p-2 border font-bold">เพศ:</th>
                <td class="p-2 border">{{ $payload['gender'] ?? '-' }}</td>
            </tr>
            <tr>
                <th class="p-2 border font-bold">ที่อยู่:</th>
                <td class="p-2 border">{{ $payload['address'] ?? '-' }}</td>
            </tr>
            <tr class="bg-gray-100">
                <th class="p-2 border font-bold">แนวเพลง:</th>
                <td class="p-2 border">
                    {{ isset($payload['music']) ? implode(', ', $payload['music']) : '-' }}
                </td>
            </tr>
        </table>

        <div class="mt-6">
            <a href="/workshop" class="bg-gray-600 text-white px-6 py-2 rounded shadow hover:bg-gray-700">
                กลับไปหน้าแรก
            </a>
        </div>
    </div>
</body>
</html>