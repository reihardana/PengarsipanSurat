<!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'
                  <h3 class='box-title'>SURAT MASUK</h3>
                      <div class='box box-primary'>
        <form action="<?php echo $action; ?>" method="post"><table class='table table-bordered'>
	    <tr><td>Nomor Surat <?php echo form_error('nomor_surat') ?></td>
            <td><input type="text" class="form-control" name="nomor_surat" id="nomor_surat" placeholder="420/.../422.101/<?php echo date('Y');?>" value="<?php echo $nomor_surat; ?>" />
        </td>
	    <tr><td>Perihal <?php echo form_error('perihal') ?></td>
            <td><select type="text" class="form-control" name="perihal" id="perihal" placeholder="Perihal" value="<?php echo $perihal; ?>">
            <option value="Kegiatan 1">Perihal 1</option>
            <option value="Kegiatan 2">Perihal 2</option> 
          </select>
        </td>
	    <tr><td>Tanggal <?php echo form_error('tanggal') ?></td>
            <td><input type="date" class="form-control" name="tanggal" id="tanggal" placeholder="Tanggal" value="<?php echo $tanggal; ?>" />
        </td>
	    <tr><td>Pengirim <?php echo form_error('pengirim') ?></td>
            <td><input type="text" class="form-control" name="pengirim" id="pengirim" placeholder="Pengirim" value="<?php echo $pengirim; ?>" />
        </td>
	    <tr><td>Penerima <?php echo form_error('penerima') ?></td>
            <td><input type="text" class="form-control" name="penerima" id="penerima" placeholder="Penerima" value="<?php echo $penerima; ?>" />
        </td>
	    <input type="hidden" name="id_masuk" value="<?php echo $id_masuk; ?>" /> 
	    <tr><td colspan='2'><button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('surat_masuk') ?>" class="btn btn-default">Cancel</a></td></tr>
	
    </table></form>
    </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->