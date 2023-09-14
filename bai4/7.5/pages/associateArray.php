<h1>Upload và Download</h1>
<form id="uploadForm" enctype="multipart/form-data">
    <label for="file">Chọn Tệp (tối đa 10 tệp):</label>
    <input type="file" id="file" name="file[]" multiple accept=".txt, .pdf"><br>
    <input type="submit" value="Tải Lên">
</form>

<h2>Danh Sách Tệp Đã Tải Lên:</h2>
<ul id="fileList"></ul>

<script>
    document.getElementById("uploadForm").addEventListener("submit", function(event) {
        event.preventDefault();
        uploadFiles();
    });

    function uploadFiles() {
        const fileList = document.getElementById("file").files;

        if (fileList.length === 0) {
            alert("Vui lòng chọn ít nhất một tệp.");
            return;
        }

        if (fileList.length > 10) {
            alert("Chỉ được tải lên tối đa 10 tệp.");
            return;
        }

        const fileListContainer = document.getElementById("fileList");
        fileListContainer.innerHTML = "";

        for (let i = 0; i < fileList.length; i++) {
            const file = fileList[i];
            const listItem = document.createElement("li");
            const downloadLink = document.createElement("a");

            // Tạo tên tệp và liên kết tải xuống
            downloadLink.textContent = file.name;
            downloadLink.href = URL.createObjectURL(file);
            downloadLink.download = file.name;

            listItem.appendChild(downloadLink);
            fileListContainer.appendChild(listItem);
        }
    }
</script>