<div class="rightcolumn">
    <!-- __________________________Content_________________________ -->
    <div class="card" id="bt2">
        <h3>7.6. Nhiệm vụ 6: GetForm</h3>
        <ul class="subNav">
            <li><a href="index.php?page=Home">Home</a></li>
            <li><a href="index.php?page=Register">Register</a></li>
            <li><a href="index.php?page=Contact1Page">Contact1Page</a></li>
        </ul>

        <?php
            if (!empty($_GET['page'])) {
                switch ($_GET['page']) {
                    case "Home":
                        include_once("./pages/Home.php");
                        break;
                    case "Register":
                        include_once("./pages/Register.php");
                        break;
                    case "RegisterProcess":
                        include_once("./pages/RegisterProcess.php");
                        break;
                    case "Contact1Page":
                        include_once("./pages/Contact1Page.php");
                        break;
                }
            } else {
                echo "No page";
            }
            ?>
        <!-- __________________________Main Content_________________________ -->
    </div>
</div>