<div class="titulo">Integração com CSS</div>

<h2 center dobro>
    <?php 
    echo 'Olá';
    echo '<small>';
    echo ' Mundo!';
    echo '</small>';
    ?>
</h2>

<?= '<div center>Outra forma de expressão</div>' ?>
<br>
<div azul center>
    <button dobro>
        <?= 'Cool'?>
    </button>
</div>

<style>
    button {
        padding:10px <?= 2*10 ?>px;
        background-color: #4286f4;
        color: #eee;
        font-weight:bold;
        border-radius:<?= 10 ?>px;
    }

    [center]{
        display:flex;
        justify-content:center;
    }

    [azul] {
        color:#4286f4;
    }

    [dobro]{
        font-size: <?= 2*4 ?>rem;
    }
</style>