<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<div class="container w-25 p-3">
    <?php
    for ($i = 1; $i <= 10; $i++) {
        echo '<div class="row w-75 m-auto border">';
        for ($j = 1; $j <= 10; $j++) {
            if ($i % 2 == 0) {
                if ($j % 2 == 0) {
                    echo '<div class="col bg-white p-3"></div>';
                } else {
                    echo '<div class="col bg-dark p-3""></div>';
                }
            } else {
                if ($j % 2 == 0) {
                    echo '<div class="col bg-dark p-3""></div>';
                } else {
                    echo '<div class="col bg-white p-3""></div>';
                }
            }
        }
        echo '</div>';
    }
    ?>
</div>

