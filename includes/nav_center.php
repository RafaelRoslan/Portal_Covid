<nav>
      <ul class="nav nav-tabs justify-content-center">
      <li class="nav-item">
          <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'disseminacao.php') ? " active disabled bg-danger " : ''; ?>" href="vacina.php">Vacinas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'disseminacao.php') ? " active disabled bg-danger " : ''; ?>" href="vac_pfizer.php">Pfizer</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'dissem_mundo.php') ? " active disabled bg-danger" : ''; ?>" href="vac_coronavac.php">Coronavac</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'dissem_brasil.php') ? " active disabled bg-danger" : ''; ?>" href="vac_astrazeneca.php">Astrazeneca</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'dissem_tempo.php') ? " active disabled bg-danger" : ''; ?>" href="vac_jansen.php">Johnson & Johnson</a>
        </li>
      </ul>
</nav>