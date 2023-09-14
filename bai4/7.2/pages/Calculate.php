<!-- Tính giai thừa -->
<h2>Tính Giai Thừa</h2>
<label for="factorialInput">Nhập một số:</label>
<input type="number" id="factorialInput">
<button onclick="calculateFactorial()">Tính Giai Thừa</button>
<p id="factorialResult"></p>

<!-- Tính diện tích hình tròn -->
<h2>Tính Diện Tích Hình Tròn</h2>
<label for="radiusInput">Bán Kính:</label>
<input type="number" id="radiusInput">
<button onclick="calculateArea()">Tính Diện Tích</button>
<p id="areaResult"></p>

<!-- Chuyển động chữ "Hello" -->
<h2>Chuyển Động</h2>
<div id="movingTextContainer" style="position: relative; width: 100%; height: 100px; overflow: hidden;">
    <div id="movingText" style="position: absolute; top: 0; left: 0; font-size: 24px;"></div>
</div>

<quote> Vẫn chưa hiển thị được chữ "Hello" chuyển động</quote>

<script>
    // Tính giai thừa
    function calculateFactorial() {
        const input = document.getElementById("factorialInput").value;
        const result = factorial(input);
        document.getElementById("factorialResult").textContent = `Giai thừa của ${input} là ${result}`;
    }

    function factorial(n) {
        if (n === 0 || n === 1) {
            return 1;
        } else {
            return n * factorial(n - 1);
        }
    }

    // Tính diện tích hình tròn
    function calculateArea() {
        const radius = document.getElementById("radiusInput").value;
        const area = Math.PI * Math.pow(radius, 2);
        document.getElementById("areaResult").textContent = `Diện tích hình tròn là ${area.toFixed(2)}`;
    }

    // Chuyển động chữ "Hello"
    const movingText = document.getElementById("movingText");
    let left = 0;
    let direction = 1;

    function moveText() {
        if (left >= window.innerWidth - movingText.offsetWidth || left <= 0) {
            direction *= -1;
        }
        left += 5 * direction;
        movingText.style.left = left + "px";
        requestAnimationFrame(moveText);
    }

    moveText();
</script>