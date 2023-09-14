<div class="rightcolumn">
    <!-- __________________________Content_________________________ -->
    <div class="card" id="bt2">
        <h3>7.10. Nhiệm vụ 10: Đọc, ghi file</h3>
        <ul class="subNav">
            <li><a href="index.php?page=Home">Home</a></li>
            <li><a href="index.php?page=addStudent">addStudent</a></li>
            <li><a href="index.php?page=listStudent">listStudent</a></li>
            <li><a href="index.php?page=login">Login</a></li>
        </ul>

        <?php
            if (!empty($_GET['page'])) {
                switch ($_GET['page']) {
                    case "Home":
                        include_once("./pages/Home.php");
                        break;
                    case "addStudent":
                        include_once("./pages/addStudent.php");
                        break;
                    case "listStudent":
                        include_once("./pages/listStudent.php");
                        break;
                    case "login":
                        include_once("./pages/login.php");
                        break;
                }
            } else {
                echo "No page";
            }
            ?>
        <!-- __________________________Main Content_________________________ -->
    </div>
</div>