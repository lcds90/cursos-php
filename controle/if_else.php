<div class="titulo">If Else</div>

<?php

if(true) {
    echo 'Serei impresso? <br>';
}

if(true)
    echo 'Verdadeiro <br>';
else
    echo 'Falso <br>';

if(false)
    echo 'Verdadeiro <br>';
else
    echo 'Falso <br>';

if(false) {
    echo 'Passo A <br>';
} else if (true) {
    echo 'Passo B <br>';
} else {
    echo 'Ultimo Passo <br>';
}

if(false) {
    echo 'Passo A <br>';
} else if (false) {
    echo 'Passo B <br>';
} else if (true) {
    echo 'Passo C <br>';
} else {
    echo 'Ultimo Passo <br>';
}

if(false){

} else if(false){

} else {
    echo 'Aqui! <br>';
}

echo 'Fim <br>';