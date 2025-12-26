<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workshop #HTML-FORM - Group 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">แบบฟอร์มบันทึกข้อมูล (Workshop)</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('workshop.store') }}" method="POST">
                            @csrf <div class="mb-3">
                                <label for="student_id" class="form-label">รหัสนิสิต</label>
                                <input type="text" class="form-control" name="student_id" placeholder="ระบุรหัสนิสิต" required>
                            </div>

                            <div class="mb-3">
                                <label for="fullname" class="form-label">ชื่อ-นามสกุล</label>
                                <input type="text" class="form-control" name="fullname" placeholder="ระบุชื่อ-นามสกุล" required>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">อีเมล</label>
                                <input type="email" class="form-control" name="email" placeholder="example@email.com" required>
                            </div>

                            <div class="mb-3">
                                <label for="major" class="form-label">สาขาวิชา</label>
                                <select class="form-select" name="major">
                                    <option value="วิทยาการคอมพิวเตอร์">วิทยาการคอมพิวเตอร์</option>
                                    <option value="เทคโนโลยีสารสนเทศ">เทคโนโลยีสารสนเทศ</option>
                                    <option value="วิศวกรรมคอมพิวเตอร์">วิศวกรรมคอมพิวเตอร์</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="note" class="form-label">หมายเหตุ</label>
                                <textarea class="form-control" name="note" rows="3"></textarea>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">ส่งข้อมูลด้วย POST Method</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>