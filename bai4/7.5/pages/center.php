<div class="rightcolumn">
    <!-- __________________________Content_________________________ -->
    <div class="card" id="bt2">
        <h3>7.5. Nhiệm vụ 5: mảng</h3>
        <ul class="subNav">
            <li><a href="index.php?page=Home">Home</a></li>
            <li><a href="index.php?page=Ar1Chieu">Ar1Chieu</a></li>
            <li><a href="index.php?page=Matrix">Matrix</a></li>
            <li><a href="index.php?page=AssociateArr">AssociateArr</a></li>
        </ul>

        <?php
            if (!empty($_GET['page'])) {
                switch ($_GET['page']) {
                    case "Home":
                        include_once("./pages/Home.php");
                        break;
                    case "Ar1Chieu":
                        include_once("./pages/arr1Chieu.php");
                        break;
                    case "Matrix":
                        include_once("./pages/Matrix.php");
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