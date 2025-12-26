<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workshop Result - Group 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow border-success">
                    <div class="card-header bg-success text-white text-center">
                        <h4 class="mb-0">ข้อมูลที่ได้รับ (POST Method)</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr class="table-light">
                                <th width="40%">หัวข้อ</th>
                                <th>ข้อมูล</th>
                            </tr>
                            <tr>
                                <td><strong>รหัสนิสิต:</strong></td>
                                <td>{{ $payload['student_id'] }}</td>
                            </tr>
                            <tr>
                                <td><strong>ชื่อ-นามสกุล:</strong></td>
                                <td>{{ $payload['fullname'] }}</td>
                            </tr>
                            <tr>
                                <td><strong>อีเมล:</strong></td>
                                <td>{{ $payload['email'] }}</td>
                            </tr>
                            <tr>
                                <td><strong>สาขาวิชา:</strong></td>
                                <td>{{ $payload['major'] }}</td>
                            </tr>
                            <tr>
                                <td><strong>หมายเหตุ:</strong></td>
                                <td>{{ $payload['note'] ?? '-' }}</td>
                            </tr>
                        </table>

                        <div class="text-center mt-4">
                            <a href="{{ route('workshop.index') }}" class="btn btn-outline-secondary btn-sm">กลับไปหน้าฟอร์ม</a>
                        </div>
                    </div>
                </div>
                <p class="text-center text-muted mt-3 small">ผลลัพธ์จาก Controller@store</p>
            </div>
        </div>
    </div>
</body>
</html>