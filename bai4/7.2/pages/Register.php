<h1>Form Đăng Ký</h1>
<form id="registrationForm">
    <label for="name">Họ và Tên:</label>
    <input type="text" id="name" name="name" required><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br>

    <label for="password">Mật khẩu:</label>
    <input type="password" id="password" name="password" required><br>

    <label for="address">Địa chỉ:</label>
    <textarea id="address" name="address" rows="4" cols="50"></textarea><br>

    <label for="bio">Thông tin thêm:</label>
    <textarea id="bio" name="bio" rows="4" cols="50"></textarea><br>

    <input type="button" value="Đăng Ký" onclick="displayRegistrationInfo()">
</form>

<div id="registrationInfo" style="display: none;">
    <h2>Thông tin đăng ký:</h2>
    <p id="nameInfo"></p>
    <p id="emailInfo"></p>
    <p id="passwordInfo"></p>
    <p id="addressInfo"></p>
    <p id="bioInfo"></p>
</div>

<script>
    function displayRegistrationInfo() {
        const name = document.getElementById("name").value;
        const email = document.getElementById("email").value;
        const password = document.getElementById("password").value;
        const address = document.getElementById("address").value;
        const bio = document.getElementById("bio").value;

        document.getElementById("nameInfo").innerText = "Họ và Tên: " + name;
        document.getElementById("emailInfo").innerText = "Email: " + email;
        document.getElementById("passwordInfo").innerText = "Mật khẩu: " + password;
        document.getElementById("addressInfo").innerText = "Địa chỉ: " + address;
        document.getElementById("bioInfo").innerText = "Thông tin thêm: " + bio;

        document.getElementById("registrationInfo").style.display = "block";
    }
</script>