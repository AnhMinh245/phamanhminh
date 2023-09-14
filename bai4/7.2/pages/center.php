<div class="rightcolumn">
    <!-- __________________________Content_________________________ -->
    <div class="card" id="bt2">
        <h3>7.2 Sử dụng template</h3>
        <ul class="subNav">
            <li><a href="index.php?page=Calculate">Calculate</a></li>
            <li><a href="index.php?page=DrawTable">DrawTable</a></li>
            <li><a href="index.php?page=Register">Register</a></li>
            <li><a href="index.php?page=Contact">Contact</a></li>
        </ul>

        <?php
            if (!empty($_GET['page'])) {
                switch ($_GET['page']) {
                    case "Calculate":
                        include_once("./pages/Calculate.php");
                        break;
                    case "DrawTable":
                        include_once("./pages/DrawTable.php");
                        break;
                    case "Register":
                        include_once("./pages/Register.php");
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