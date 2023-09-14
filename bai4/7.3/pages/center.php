<div class="rightcolumn">
    <!-- __________________________Content_________________________ -->
    <div class="card" id="bt2">
        <h3>7.3. Nhiệm vụ 3: lấy dữ liệu và gửi dữ liệu</h3>
        <ul class="subNav">
            <li><a href="index.php?page=home">Home</a></li>
            <li><a href="index.php?page=Contact">Contact</a></li>
            <li><a href="index.php?page=DrawTable">DrawTable</a></li>
            <li><a href="index.php?page=Loop">loop</a></li>
        </ul>

        <?php
            if (!empty($_GET['page'])) {
                switch ($_GET['page']) {
                    case "home":
                        include_once("./pages/Home.php");
                        break;
                    case "DrawTable":
                        include_once("./pages/DrawTable.php");
                        break;
                    case "Loop":
                        include_once("./pages/Loop.php");
                        break;
                    case "Contact":
                        include_once("./pages/Contact.php");
                        break;
                }
            } else {
                echo "No page";
            }
            ?>
        <!-- __________________________Main Content_________________________ -->
    </div>
</div>