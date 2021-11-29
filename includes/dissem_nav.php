<nav>
      <ul class="nav nav-tabs justify-content-center">
        <li class="nav-item">
          <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'disseminacao.php') ? " active disabled bg-danger " : ''; ?>" href="disseminacao.php">Geral</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'dissem_mundo.php') ? " active disabled bg-danger" : ''; ?>" href="dissem_mundo.php">Mundo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'dissem_brasil.php') ? " active disabled bg-danger" : ''; ?>" href="dissem_brasil.php">Brasil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'dissem_tempo.php') ? " active disabled bg-danger" : ''; ?>" href="dissem_tempo.php">Linha do Tempo</a>
        </li>
      </ul>
</nav>