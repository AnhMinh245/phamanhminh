<div class="rightcolumn">
    <!-- __________________________Content_________________________ -->
    <div class="card" id="bt2">
        <h3>7.4. Nhiệm vụ 4: Form tính toán</h3>
        <ul class="subNav">
            <li><a href="index.php?page=Home">Home</a></li>
            <li><a href="index.php?page=Calculate">Tính toán</a></li>
            <li><a href="index.php?page=score">Tính điểm</a></li>
        </ul>

        <?php
            if (!empty($_GET['page'])) {
                switch ($_GET['page']) {
                    case "Home":
                        include_once("./pages/Home.php");
                        break;
                    case "Calculate":
                        include_once("./pages/Calculate.php");
                        break;
                    case "score":
                        include_once("./pages/score.php");
                        break;
                }
            } else {
                echo "No page";
            }
            ?>
        <!-- __________________________Main Content_________________________ -->
    </div>
</div>