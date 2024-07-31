<?php
require "../template/header.php";
?>
<div class="container-xxl flex-grow-1 container-p-y">
              <div class="card mb-4">
                <h5 class="card-header">Servicios<button type="button" Onclick="modalagregar()" class="btn btn-primary float-right">Agregar Servicio</button></h5>
                <div class="card-body">
                <div class="card-datatable table-responsive pt-0">
                <table class="datatables-basic table border-top" id="TablaServicios">
                        <thead class="thead-light">
                            <tr>
                                <th>Nombre Servicio</th>
                                <th>Color</th>
                                <th>Icono</th>
                                <th>Letra</th>
                                <th>Estado</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                    </table>
                </div>
                </div>
              </div>
            </div>

            <div class="modal fade" id="modalAgregarservicios" tabindex="-1" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="modalCenterTitle">Registrar Servicio</h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body">
                              <form id="registrar_servicios" class="registrar_servicios">
                              <div class="row">
                                  <div class="col-6 mb-2">
                                    <label class="form-label">Nombre Servicio</label>
                                    <input
                                      type="text"
                                      id="nombreservicio" name="nombreservicio"
                                      class="form-control"
                                    />
                                  </div>
                                  <div class="col-6 mb-2">
                                  <label class="form-label">Color</label>
                                <select id="colorservicio" name="colorservicio" class="form-select select-color">
                                    <option value="" disabled>Seleccionar</option>
                                </select>
                                  </div>
                                </div>
                              <div class="row">
                                  <div class="col-6 mb-2">
                                    <label class="form-label">Icono</label>
                                <select id="iconoservicio" name="iconoservicio" class="select2 form-select">
                                   <option value="bx-plus-medical" data-icon="bx bx-plus-medical">Medicina</option>
                                   <option value="bxs-thermometer" data-icon="bx bxs-thermometer">LC</option>
                                    <option value="bx-pulse" data-icon="bx bx-pulse">EC</option>
                                    <option value="bxs-heart" data-icon="bx bxs-heart">EM</option>
                                    <option value="bx-dumbbell" data-icon="bx bx-dumbbell">TF</option>
                                    <option value="bxs-band-aid" data-icon="bx bxs-band-aid">V</option>
                                    <option value="bxs-radiation" data-icon="bx bxs-radiation">RD</option>
                                    <option value="bx-glasses-alt" data-icon="bx bx-glasses-alt">OT</option>
                                    <option value="bxs-capsule" data-icon="bx bxs-capsule">EF</option>
                                    <option value="bx-headphone" data-icon="bx bx-headphone">AM</option>
                                </select>
                                  </div>
                                  <div class="col-6 mb-2">
                                    <label class="form-label">Letra</label>
                                    <input
                                      type="text"
                                      id="letraservicio" name="letraservicio"
                                      class="form-control"
                                    />
                                  </div>
                                  <div class="col-6">
                                    <input
                                      type="hidden"
                                      id="idunicodelservicio" name="idunicodelservicio"
                                      class="form-control"
                                    />
                                  </div>
                                </div>
                              </div>
                              </form>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">
                                  Cancelar
                                </button>
                                <button type="button" id="botondeeditar" class="btn btn-primary"><span id="btnText">Guardar</span></button>
                              </div>
                            </div>
                          </div>
                        </div>
<?php
require "../template/footer.php";
?>
<script src="../../controllers/serviciosController.js"></script>