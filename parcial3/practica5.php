<?php

    $cuadros = $_POST["cuadro"];


    for($i=0; $i<count($cuadros); $i++){
        if($cuadros[$i] != "X" && $cuadros [$i] != "O"){
            echo "<h2>Solo se permiten X y/o O</h2>";
            return;
        }

    }

    /*
     [X][X][X]
     [ ][ ][ ]
     [ ][ ][ ]
    */
    if($cuadros[0] == "X" && $cuadros[1] == "X"&& $cuadros[2] == "X"){
        echo "<h1>Ganador <br>[X][X][X]<br>
        [ ][ ][ ]<br>
        [ ][ ][ ]</h1>";
        return;
    } else if($cuadros[0] == "O" && $cuadros[1] == "O" && $cuadros[2] == "O"){
        echo "<h1>Ganador <br>[O][O][O]<br>
        [ ][ ][ ]<br>
        [ ][ ][ ]</h1>";
        return;
    }
    /*
     [ ][ ][ ]
     [X][X][X]
     [ ][ ][ ]
    */
    if($cuadros[3] == "X" && $cuadros[4] == "X"&& $cuadros[5] == "X"){
        echo "<h1>Ganador <br>[ ][ ][ ]<br>
        [X][X][X]<br>
        [ ][ ][ ]</h1>";
        return;
    } else if($cuadros[3] == "O" && $cuadros[4] == "O" && $cuadros[5] == "O"){
        echo "<h1>Ganador <br>[ ][ ][ ]<br>
        [O][O][O]<br>
        [ ][ ][ ]</h1>";
        return;
    }
    /*
     [ ][ ][ ]
     [ ][ ][ ]
     [X][X][X]
    */
    if($cuadros[6] == "X" && $cuadros[7] == "X"&& $cuadros[8] == "X"){
        echo "<h1>Ganador <br>[ ][ ][ ]<br>
        [ ][ ][ ]<br>
        [X][X][X]</h1>";
        return;
    } else if($cuadros[6] == "O" && $cuadros[7] == "O" && $cuadros[8] == "O"){
        echo "<h1>Ganador <br>[ ][ ][ ]<br>
        [ ][ ][ ]<br>
        [O][O][O]</h1>";
        return;
    }
     /*
     [X][ ][ ]
     [X][ ][ ]
     [X][ ][ ]
    */
    if($cuadros[0] == "X" && $cuadros[3] == "X"&& $cuadros[6] == "X"){
        echo "<h1>Ganador <br>[X][ ][ ]<br>
        [X][ ][ ]<br>
        [X][ ][ ]</h1>";
        return;
    } else if($cuadros[0] == "O" && $cuadros[3] == "O" && $cuadros[6] == "O"){
        echo "<h1>Ganador <br>[O][ ][ ]<br>
        [O][ ][ ]<br>
        [O][ ][ ]</h1>";
        return;
    }
     /*
     [ ][X][ ]
     [ ][X][ ]
     [ ][X][ ]
    */
    if($cuadros[1] == "X" && $cuadros[4] == "X"&& $cuadros[7] == "X"){
        echo "<h1>Ganador <br>[ ][X][ ]<br>
        [ ][X][ ]<br>
        [ ][X][ ]</h1>";
        return;
    } else if($cuadros[1] == "O" && $cuadros[4] == "O" && $cuadros[7] == "O"){
        echo "<h1>Ganador <br>[ ][O][ ]<br>
        [ ][O][ ]<br>
        [ ][O][ ]</h1>";
        return;
    }
     /*
     [ ][ ][X]
     [ ][ ][X]
     [ ][ ][X]
    */
    if($cuadros[2] == "X" && $cuadros[5] == "X"&& $cuadros[8] == "X"){
        echo "<h1>Ganador <br>[ ][ ][X]<br>
        [ ][ ][X]<br>
        [ ][ ][X]</h1>";
        return;
    } else if($cuadros[2] == "O" && $cuadros[5] == "O" && $cuadros[8] == "O"){
        echo "<h1>Ganador <br>[ ][ ][O]<br>
        [ ][ ][O]<br>
        [ ][ ][O]</h1>";
        return;
    }
     /*
     [X][ ][ ]
     [ ][X][ ]
     [ ][ ][X]
    */
    if($cuadros[0] == "X" && $cuadros[4] == "X"&& $cuadros[8] == "X"){
        echo "<h1>Ganador <br>[X][ ][ ]<br>
        [ ][X][ ]<br>
        [ ][ ][X]</h1>";
        return;
    } else if($cuadros[0] == "O" && $cuadros[4] == "O" && $cuadros[8] == "O"){
        echo "<h1>Ganador <br>[O][ ][ ]<br>
        [ ][O][ ]<br>
        [ ][ ][O]</h1>";
        return;
    }
     /*
     [ ][ ][X]
     [ ][X][ ]
     [X][ ][ ]
    */
    if($cuadros[2] == "X" && $cuadros[4] == "X"&& $cuadros[6] == "X"){
        echo "<h1>Ganador <br>[ ][ ][X]<br>
        [ ][X][ ]<br>
        [X][ ][ ]</h1>";
        return;
    } else if($cuadros[2] == "O" && $cuadros[4] == "O" && $cuadros[6] == "O"){
        echo "<h1>Ganador <br>[ ][ ][O]<br>
        [ ][O][ ]<br>
        [O][ ][ ]</h1>";
        return;
    }
?>