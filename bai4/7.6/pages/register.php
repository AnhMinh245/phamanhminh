<h1>Form Đăng Ký</h1>
<form action="index.php?page=RegisterProcess" method="post">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required><br><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br><br>

    <label for="gender">Gender:</label>
    <input type="radio" id="male" name="gender" value="Male" required>
    <label for="male">Nam</label>
    <input type="radio" id="female" name="gender" value="Female" required>
    <label for="female">Nữ</label><br><br>

    <label for="address">Address:</label>
    <select id="address" name="address" required>
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
    <input type="number" id="skill" name="skill" min="1" max="5" required><br><br>

    <label for="note">Note:</label><br>
    <textarea id="note" name="note" rows="4" cols="50"></textarea><br><br>

    <input type="submit" name="submit" value="Contact">
    <input type="reset" value="Reset">
</form>