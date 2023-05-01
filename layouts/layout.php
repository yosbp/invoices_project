<?php

echo "<div class='container-fluid'>";
include "./layouts/sidebar.php";
echo "<div class='col px-0 text-center'>";
include "./layouts/navbar.php";
include "./views/" . $_GET['view'] . ".php";
echo "    
</div>
</div>
"

?>
