<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Result</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #5bc0de; display: flex; justify-content: center; align-items: center; min-height: 100vh; }
        .result-container { background: white; padding: 30px; border-radius: 10px; width: 100%; max-width: 500px; }
    </style>
</head>
<body>
    <div class="result-container shadow">
        <h3 class="text-center text-primary mb-4">ข้อมูลที่ได้รับสำเร็จ</h3>
        <table class="table table-striped">
            <tr><th>ชื่อ-นามสกุล:</th><td>{{ $payload['first_name'] }} {{ $payload['last_name'] }}</td></tr>
            <tr><th>วันเกิด:</th><td>{{ $payload['birth_date'] }}</td></tr>
            <tr><th>เพศ:</th><td>{{ $payload['gender'] ?? '-' }}</td></tr>
            <tr><th>ที่อยู่:</th><td>{{ $payload['address'] }}</td></tr>
            <tr><th>แนวเพลง:</th><td>{{ isset($payload['music']) ? implode(', ', $payload['music']) : '-' }}</td></tr>
        </table>
        <div class="text-center mt-3">
            <a href="{{ route('workshop.index') }}" class="btn btn-secondary">กลับไปหน้าแรก</a>
        </div>
    </div>
</body>
</html>