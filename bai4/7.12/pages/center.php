<div class="rightcolumn">
    <!-- __________________________Content_________________________ -->
    <div class="card" id="bt2">
        <h3>7.12. Nhiệm vụ 12: Website đa ngôn ngữ</h3>
        <ul class="subNav">
            <li><a href="index.php?page=Home">Home</a></li>
            <li><a href="index.php?page=contact">contact</a></li>
            <li><a href="index.php?page=introduction">introduction</a></li>
            <li><a href="index.php?page=Introducion">Introduction</a></li>
        </ul>

        <?php
            if (!empty($_GET['page'])) {
                switch ($_GET['page']) {
                    case "Home":
                        include_once("./pages/Home.php");
                        break;
                    case "contact":
                        include_once("./pages/contact.php");
                        break;
                    case "introduction":
                        include_once("./pages/introduction.php");
                        break;
                    case "AssociateArr":
                        include_once("./pages/associateArray.php");
                        break;
                }
            } else {
                echo "No page";
            }
            ?>
        <!-- __________________________Main Content_________________________ -->
    </div>
</div>