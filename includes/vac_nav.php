<link rel="stylesheet" type="text/css" href="../css/vacina.css">

<nav>
    <ul class="nav nav-pills nav-fill">
        <li class="nav-item">
            <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'vacina.php') ? " active disabled bg-danger" : ''; ?>" href="vacina.php">Vacinas</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'vac_pfizer.php') ? " active disabled bg-danger " : ''; ?>"  href="vac_pfizer.php">Pfizer</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'vac_coronavac.php') ? " active disabled bg-danger " : ''; ?>" href="vac_coronavac.php">Coronavac</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'vac_astrazeneca.php') ? " active disabled bg-danger " : ''; ?>" href="vac_astrazeneca.php">Astrazeneca</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'vac_jansen.php') ? " active disabled bg-danger " : ''; ?>" href="vac_jansen.php">Johnson & Johnson</a>
        </li>
    </ul>
</nav>
