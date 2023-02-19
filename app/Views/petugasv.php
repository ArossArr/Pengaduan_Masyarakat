<?=$this->extend('layout/admin')?>
<?=$this->section('title')?>

<?=$this->endSection()?>
<?=$this->section('content')?>
<div class="row">
     <div class="col">
          <div class="card mt-4">
               <div class="card-header bg-primary">
                    <a href="#" class="btn btn-light" data-petugas="" data-toggle="modal" data-target="#idPetugas"><i class="fas fa-user"></i></a>
               </div>
               <div class="card-body">
                    <table class="table table-bordered ">
                       <tr>
                         <th>No</th>
                         <th>Nama</th>
                         <th>Username</th>
                         
                         <th>No.Tlp</th>
                         <th>Status</th>
                         
                       </tr>
                       <?php
                       $no=0;
                       foreach ($petugas as $row)
                            $no++;
                       {
                            //$data = $row['nama'] . "," . $row['Username'] . "," . $row['password'] . "," . $row['no_tlp'] . "," . $row['level']."/editpetugas";
                            ?>
                            <tr>
                              <td><?= $no ?></td>
                              <td><?= $row['nama_petugas']?></td>
                              <td><?= $row['username']?></td>
                              
                              <td><?= $row['no_tlp']?></td>
                              <td><?= $row['level']?></td>
                            </tr>
                            <?php
                         }
                       ?>
                    </table>
               </div>
          </div>
     </div>
</div>
<div class="modal fade" id="idPetugas" aria-hidden="true" tabindex="-1">
      <div class="modal-dialog">
            <div class="modal-content">
                  <div class="card-header bg-dark">
                        <h3 class="text-white">Formulir Petugas</h3>
                        <button class="close" type="button" aria-label="close" data-dismis="modal"></button>
                  </div>
                  <form action="" id="fpetugas" method="post">
                        <div class="card-body">
                              <div class="form-group">
                                    <label for="nama_petugas" class="form-label">Nama Petugas</label>
                                    <input type="text" name="nama_petugas" id="nama_petugas" class="form-control">
                              </div>
                              <div class="form-group">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" name="username" id="username" class="form-control">
                              </div>
                              <div class="form-group">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" name="password" id="password" class="form-control">
                              </div>
                              <div class="form-group">
                                    <label for="no_tlp" class="form-label">No.Tlp</label>
                                    <input type="text" name="no_tlp" id="no_tlp" class="form-control">
                              </div>
                              <div class="form-group ">
                                    <label for="level" class="form-label">Status</label>
                                    <select name="level" id="level" class="form-control col-sm-3 my-1">
                                          <option value="" class="">Pilihan</option>
                                          <option value="admin">Admin</option>
                                          <option value="petugas">Petugas</option>
                                    </select>
                              </div>
                              <div class="form-group" id="renamepassword">
                                    <label for="renamepassword">Rename Password</label>
                                    <input type="checkbox" name="renamepassword" class="form-control col-sm-3 my-1">
                              </div>
                              <div class="modal-footer">
                                    <button class="btn btn-primary" type="submit"><i class="fas fa-save"></i></button>
                                    <button class="btn btn-dark" type="button" data-dismis="modal">X</button>
                              </div>
                        </div>      
                  </form>
            </div>
      </div>
</div>

<?php if (!empty(session()->getFlashdata('message'))) : ?>
      <div class="alert alert-info">
            <?php echo session()->getFlashdata('message') ; ?>
      </div>
<?php endif ?>

<?=$this->endSection()?>
<?=$this->section('script')?>
<script>
      $(document).ready(function(){
            $("#idPetugas").on('show.bs.modal',function (event){
                  var button = $(event.relatedTarget);
                  var data = button.data('petugas');
                  if (data != ""){
                        const barisdata = data.split(",");
                        $('#nama_petugas').val(barisdata[0]);
                        $('#username').val(barisdata[1]);
                        $('#password').val(barisdata[2]);
                        $('#no_tlp').val(barisdata[3]);
                        $('#level').val(barisdata[4]);
                        $('#fpetugas').attr('action',barisdata[5]);
                        $('#renamepassword').show();
                  } else {
                        $('#nama_petugas').val('');
                        $('#username').val('');
                        $('#password').val('');
                        $('#no_tlp').val('');
                        $('#level').val('');
                        $('#fpetugas').attr('action','/spetugas');
                        $('#renamepassword').hide();
                  }
            });
            $("#petugas").DataTable();    
      })
</script>
<?=$this->endSection()?>