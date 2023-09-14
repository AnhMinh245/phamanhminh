<h1>Tính Tổng Ma Trận 3x3</h1>
    <form id="matrixForm">
        <h2>Nhập Ma Trận A:</h2>
        <table>
            <tbody>
                <!-- Tạo ma trận A 3x3 -->
                <?php for ($i = 0; $i < 3; $i++) : ?>
                    <tr>
                        <?php for ($j = 0; $j < 3; $j++) : ?>
                            <td><input type="number" name="matrixA[<?php echo $i; ?>][<?php echo $j; ?>]" required></td>
                        <?php endfor; ?>
                    </tr>
                <?php endfor; ?>
            </tbody>
        </table>

        <h2>Nhập Ma Trận B:</h2>
        <table>
            <tbody>
                <!-- Tạo ma trận B 3x3 -->
                <?php for ($i = 0; $i < 3; $i++) : ?>
                    <tr>
                        <?php for ($j = 0; $j < 3; $j++) : ?>
                            <td><input type="number" name="matrixB[<?php echo $i; ?>][<?php echo $j; ?>]" required></td>
                        <?php endfor; ?>
                    </tr>
                <?php endfor; ?>
            </tbody>
        </table>

        <input type="submit" value="Tính Tổng">
        <input type="reset" value="Nhập Lại">
    </form>

    <!-- Kết quả hiển thị dưới đây -->
    <div id="result"></div>

    <script>
        document.getElementById("matrixForm").addEventListener("submit", function(event) {
            event.preventDefault();
            calculateSum();
        });

        function calculateSum() {
            const matrixA = [];
            const matrixB = [];

            // Lấy giá trị từ form và đưa vào các mảng matrixA và matrixB
            for (let i = 0; i < 3; i++) {
                matrixA[i] = [];
                matrixB[i] = [];
                for (let j = 0; j < 3; j++) {
                    matrixA[i][j] = parseInt(document.querySelector(`input[name="matrixA[${i}][${j}]"]`).value);
                    matrixB[i][j] = parseInt(document.querySelector(`input[name="matrixB[${i}][${j}]"]`).value);
                }
            }

            // Tính tổng ma trận
            const resultMatrix = [];
            for (let i = 0; i < 3; i++) {
                resultMatrix[i] = [];
                for (let j = 0; j < 3; j++) {
                    resultMatrix[i][j] = matrixA[i][j] + matrixB[i][j];
                }
            }

            // Hiển thị kết quả
            const resultDiv = document.getElementById("result");
            resultDiv.innerHTML = "<h2>Kết Quả:</h2>";

            const resultTable = document.createElement("table");
            const resultTbody = document.createElement("tbody");

            for (let i = 0; i < 3; i++) {
                const row = document.createElement("tr");
                for (let j = 0; j < 3; j++) {
                    const cell = document.createElement("td");
                    cell.textContent = resultMatrix[i][j];
                    row.appendChild(cell);
                }
                resultTbody.appendChild(row);
            }

            resultTable.appendChild(resultTbody);
            resultDiv.appendChild(resultTable);
        }
    </script>