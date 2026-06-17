<?php
    //Trabalhando com estruturas de repetição
    // comando for
    for ($contador=0; $contador <= 100; $contador++) {
        #  code...
        echo "Contador: $contador <br>
";
    }
    ?>

    <?php
    //Pegar somente numero pares
    for ($contador=0; $contador <= 100; $contador++) {
        if ($contador % 2 == 0) {
            echo "Contador: $contador <br>
";
        }
    }
    ?>