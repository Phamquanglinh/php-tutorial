<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<div class="container w-50 p-3">
    <?php
    function snt(int $nummber){
        if($nummber <2){
            return false;
        }
        $sq = sqrt($nummber);
        for($i = 2; $i <= $sq ; $i++){
            if ($nummber  %  $i == 0){
                return false;
            }
        }
        return true;
    }
    $value =1;
    for($i=1 ;$i<=10; $i++){
        echo '<div class="row w-75 m-auto border">';
        for($j=1;$j<=10;$j++){
                if(snt($value)){
                    echo '<div class="col bg-success p-3">'.$value.'</div>';
                }else{
                    echo '<div class="col bg-white p-3">'.$value.'</div>';
                }
                $value++;
            }
        echo '</div>';
    }
    ?>
</div>

