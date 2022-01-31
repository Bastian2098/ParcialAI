<?php

    if(isset($_POST["crear"])){
        $estudiante = new Estudiante("", $_POST["nombre"], $_POST["apellido"], $_POST["fecNacimiento"]);
        $estudiante -> crear();
    }

?>
<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Crear</button>
    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Consultar</button>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
      Crear
      <form method="POST">
        <div class="input-group">
            <span class="input-group-text">Nombre y Apellido</span>
            <input type="text" aria-label="Nombre" name="nombre" class="form-control">
            <input type="text" aria-label="Apellido" name="apellido" class="form-control">
            <div class="input-group mb-3">
				<span class="input-group-text">Fecha de nacimiento</span>
                <input type="date" name="fecNacimiento" class="form-control">
			</div>
            <button type="submit" name="crear" class="btn btn-primary">Crear</button>
        </div>
      </form>
  </div>
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
        Consultar
        <?php

            $estudiante -> consultar();

        ?>
  </div>
</div>
