<div class="titulo">Datas</div>

<?php 
echo "GMT <br> " . time() . '<br>';  
echo date('D, d \d\e M \d\e Y ') . '<br>';
echo date('D, d \d\e m \d\e Y ')  . '<br>';
echo date('d \d\e m \d\e y ')  . '<br>';
echo date('d \d\e m \d\e Y H:i A ')  . '<br>';
echo '<hr>';
echo strftime(' %A, %d de %B de %Y', time()) . '<br>';