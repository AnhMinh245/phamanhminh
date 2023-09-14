<h1>Tạo Bảng</h1>
<form id="tableForm">
    <label for="numRows">Số Hàng:</label>
    <input type="number" id="numRows" name="numRows" min="1" required><br>

    <label for="numCols">Số Cột:</label>
    <input type="number" id="numCols" name="numCols" min="1" required><br>

    <input type="submit" value="Vẽ Bảng">
</form>

<div id="tableContainer"></div>

<script>
    document.getElementById("tableForm").addEventListener("submit", function(event) {
        event.preventDefault();
        createTable();
    });

    function createTable() {
        const numRows = parseInt(document.getElementById("numRows").value);
        const numCols = parseInt(document.getElementById("numCols").value);

        if (isNaN(numRows) || isNaN(numCols)) {
            alert("Vui lòng nhập số hàng và số cột hợp lệ.");
            return;
        }

        const tableContainer = document.getElementById("tableContainer");
        tableContainer.innerHTML = "";

        const table = document.createElement("table");

        for (let i = 0; i < numRows; i++) {
            const row = document.createElement("tr");
            for (let j = 0; j < numCols; j++) {
                const cell = document.createElement("td");
                cell.textContent = `Hàng ${i + 1}, Cột ${j + 1}`;
                row.appendChild(cell);
            }
            table.appendChild(row);
        }

        tableContainer.appendChild(table);
    }
</script>