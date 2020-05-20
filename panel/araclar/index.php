<?php
require_once('../header.php');
require_once('../sidebar.php');
?>
  <div class="admin-panel bg-light float-left h-100 p-5" >
    <div class="admin-panel-content bg-light w-100 h-100 p-5">
      <div class="col-md-12 border-left border-success border-width-10 p-5">
          <h1 class="border-bottom border-primary pb-3">
            ARAÇLAR
          </h1>
          <p class=" font-weight-light font-italic pt-3">Bu sekmede araçlarınızı düzenleyebilir, yeni araç ekleyebilir, mevcut aracınızı güncelleyebilirsiniz.</p>
      </div>
      <div class="col-md-12 mt-5">
        <div class="card border-success mb-3 ">
          <div class="card-header bg-success text-light">Araçlar</div>
            <div class="card-body text-success">
              <div class="table-responsive" style="overflow-x:auto;overflow-y:auto;">
                <table class="table">
                  <thead class="thead-dark">
                    <tr>
                      <th></th>
                      <th></th>
                      <th>#</th>
                      <th>Plaka</th>
                      <th>Marka</th>
                      <th>Model</th>
                      <th>Yıl</th>
                      <th>Kira Ücreti(saatlik)</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <button class="btn btn-primary" type="button" name="button">Güncelle</button>
                      </td>
                      <td>
                        <button class="btn btn-danger" type="button" name="button">Sil</button>
                      </td>
                      <td>1</td>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                      <td>@mdo</td>
                      <td>@mdo</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
require_once('../footer.php');
 ?>
