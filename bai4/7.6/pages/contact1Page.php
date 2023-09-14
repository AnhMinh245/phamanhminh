<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kết Quả Liên Hệ</title>
    <script>
        function showResult() {
            // Lấy dữ liệu từ biểu mẫu
            const username = document.getElementById("username").value;
            const password = document.getElementById("password").value;
            const gender = document.querySelector('input[name="gender"]:checked').value;
            const address = document.getElementById("address").value;
            const languages = Array.from(document.querySelectorAll('input[name="languages[]"]:checked')).map(el => el.value);
            const skill = document.getElementById("skill").value;
            const note = document.getElementById("note").value;

            // Hiển thị kết quả và ẩn biểu mẫu
            const resultContainer = document.getElementById("contactResult");
            resultContainer.innerHTML = "<h2>Thông Tin Đăng Ký</h2>";
            resultContainer.innerHTML += "<p>Username: " + username + "</p>";
            resultContainer.innerHTML += "<p>Password: " + password + "</p>";
            resultContainer.innerHTML += "<p>Gender: " + gender + "</p>";
            resultContainer.innerHTML += "<p>Address: " + address + "</p>";
            resultContainer.innerHTML += "<p>Programming Languages: " + languages.join(", ") + "</p>";
            resultContainer.innerHTML += "<p>Skill Level: " + skill + "</p>";
            resultContainer.innerHTML += "<p>Note: " + note + "</p>";

            // Ẩn biểu mẫu
            const formContainer = document.getElementById("contactForm");
            formContainer.style.display = "none";

            // Hiển thị kết quả
            resultContainer.style.display = "block";
        }
    </script>
</head>
<body>
    <h1>Kết Quả Liên Hệ</h1>

    <!-- Biểu mẫu đăng ký -->
    <div id="contactForm">
        <h2>Form Đăng Ký</h2>
        <form>
            <label for="username">Username:</label>
            <input type="text" id="username" required><br><br>

            <label for="password">Password:</label>
            <input type="password" id="password" required><br><br>

            <label>Gender:</label>
            <input type="radio" id="male" name="gender" value="Male" required>
            <label for="male">Nam</label>
            <input type="radio" id="female" name="gender" value="Female" required>
            <label for="female">Nữ</label><br><br>

            <label for="address">Address:</label>
            <select id="address" required>
                <option value="Hanoi">Hà Nội</option>
                <option value="HCMC">TP.HCM</option>
                <option value="Danang">Đà Nẵng</option>
                <option value="Hue">Huế</option>
                <option value="Nhatrang">Nha Trang</option>
            </select><br><br>

            <label>Enable Programming Language:</label><br>
            <input type="checkbox" id="java" name="languages[]" value="Java">
            <label for="java">Java</label><br>
            <input type="checkbox" id="python" name="languages[]" value="Python">
            <label for="python">Python</label><br>
            <input type="checkbox" id="csharp" name="languages[]" value="C#">
            <label for="csharp">C#</label><br><br>

            <label for="skill">Skill Level (1-5):</label>
            <input type="number" id="skill" min="1" max="5" required><br><br>

            <label for="note">Note:</label><br>
            <textarea id="note" rows="4" cols="50"></textarea><br><br>

            <button type="button" onclick="showResult()">Contact</button>
            <input type="reset" value="Reset">
        </form>
    </div>

    <!-- Kết quả đăng ký (ban đầu ẩn đi) -->
    <div id="contactResult" style="display: none;"></div>
</body>
</html>
