<!DOCTYPE html>
<html>
<head>
    <title>Tính điểm trung bình</title>
</head>
<body>
    <h1>Tính điểm trung bình</h1>
    <form method="post" action="{{ route('average') }}">
        @csrf
        <label for="num1">Số thứ nhất:</label>
        <input type="number" name="num1" id="num1"><br><br>
        <label for="num2">Số thứ hai:</label>
        <input type="number" name="num2" id="num2"><br><br>
        <button type="submit">Tính</button>
    </form>
</body>
</html>
