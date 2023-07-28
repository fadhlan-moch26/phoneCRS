<style>
#table_paginate { float:right !important }
#table_paginate ul { margin-top:0px !important }
.details-less { display:none }
</style>

<div class="portlet light">
    <div class="portlet-title">
        <div class="caption caption-md">
            <i class="icon-globe font-green-sharp"></i>
            <span class="caption-subject font-green-sharp bold uppercase">Form Pertanyaan</span>
        </div>
    </div>
    <div class="portlet-body form">
        <form role="form" id="frm_fr" class="form-horizontal form-bordered form-row-stripped">
            <div class="form-body">
            	<h3 class="form-section">Silahkan pilih sesuai kebutuhan anda</h3>
                <div class="form-group">
                    <label class="col-md-3 control-label">Budget</label>
                    <div class="col-md-9">
                    	<div class="col-md-5">
                        	<input type="text" name="inp2[price][start]" value="<?= $inp2['price']['start'] ?>" class="form-control col-md-5 mask_currency" />
                        </div>
                        <div class="col-md-1" style="margin-top:8px">Sampai</div>
                        <div class="col-md-5">
                        	<input type="text" name="inp2[price][end]" value="<?= $inp2['price']['end'] ?>" class="form-control col-md-5 mask_currency" />
                        </div>
                        <span class="help-block">Kosongkan pilihan budget jika tidak mempunyai budget khusus</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Merk</label>
                    <div class="col-md-9">
                        <div class="checkbox-list">
                        	<?php foreach($brand as $b) { ?>
                            <label class="checkbox-inline col-md-3" style="margin-left:0px; padding-left:0px">
                            <input type="checkbox" name="inp2[brand][]" id="" value="<?= $b ?>" <?= !empty($inp2['brand']) && in_array($b, $inp2['brand']) ? 'checked' : '' ?>> <img src="cdn/icons/<?= $b ?>.jpg" height="25" alt="<?= str_replace('_', ' ', $b) ?>">
                            </label>
                            <?php } ?>
                            <span class="help-block">Jangan dicentang jika ingin memilih semua merk</span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Sistem Operasi</label>
                    <div class="col-md-9">
                        <div class="checkbox-list">
                        	<?php foreach($os as $ido => $o) { ?>
                            <label class="checkbox-inline col-md-4" style="margin-left:0px; padding-left:0px">
                            <input type="checkbox" name="inp2[os][]" id="" value="<?= $ido ?>" <?= !empty($inp2['os']) && in_array($ido, $inp2['os']) ? 'checked' : '' ?>> <img src="cdn/icons/<?= $ido ?>.jpg" height="25" alt="<?= $o ?>">
                            </label>
                            <?php } ?>
                            <span class="help-block">Jangan dicentang jika ingin memilih semua sistem operasi</span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Jenis</label>
                    <div class="col-md-9">
                        <div class="checkbox-list">
                        	<?php foreach($type as $id => $name) { ?>
                            <label class="checkbox-inline col-md-6" style="margin-left:0px; padding-left:0px">
                            <input type="checkbox" name="inp2[type][]" id="" value="<?= $id ?>" <?= !empty($inp2['type']) && in_array($id, $inp2['type']) ? 'checked' : '' ?>> <img src="cdn/icons/<?= $id ?>.jpg" height="25"> &nbsp; <?= $name ?>
                            </label>
                            <?php } ?>
                            <span class="help-block">Jangan dicentang jika ingin memilih semua jenis handphone</span>
                        </div>
                    </div>
                </div>
            	<h3 class="form-section">Silahkan pilih satu atau lebih pilihan dibawah ini sesuai kebutuhan anda</h3>
                <div class="form-group">
                    <label class="col-md-3 control-label">Screen Technology</label>
                    <div class="col-md-9 controls">
                    	<?= $this->mainapi->chkbox('inp[screen_technology]', $screen_technology, isset($inp['screen_technology']) ? $inp['screen_technology'] : '', 'id="screen_technology" class="form-control span12"'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Screen Resolution</label>
                    <div class="col-md-9 controls">
                    	<?= $this->mainapi->chkbox('inp[screen_resolution]', $screen_resolution, isset($inp['screen_resolution']) ? $inp['screen_resolution'] : '', 'id="screen_resolution" class="form-control span12"'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Processor</label>
                    <div class="col-md-9 controls">
                    	<?= $this->mainapi->chkbox('inp[processor]', $processor, isset($inp['processor']) ? $inp['processor'] : '', 'id="processor" class="form-control span12"'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">RAM</label>
                    <div class="col-md-9 controls">
                    	<?= $this->mainapi->chkbox('inp[ram]', $ram, isset($inp['ram']) ? $inp['ram'] : '', 'id="ram" class="form-control span12"'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Primary Camera</label>
                    <div class="col-md-9 controls">
                    	<?= $this->mainapi->chkbox('inp[primary_camera]', $primary_camera, isset($inp['primary_camera']) ? $inp['primary_camera'] : '', 'id="primary_camera" class="form-control span12"'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Secondary Camera</label>
                    <div class="col-md-9 controls">
                    	<?= $this->mainapi->chkbox('inp[secondary_camera]', $secondary_camera, isset($inp['secondary_camera']) ? $inp['secondary_camera'] : '', 'id="secondary_camera" class="form-control span12"'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Internal Memmory</label>
                    <div class="col-md-9 controls">
                    	<?= $this->mainapi->chkbox('inp[internal_memmory]', $internal_memmory, isset($inp['internal_memmory']) ? $inp['internal_memmory'] : '', 'id="internal_memmory" class="form-control span12"'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Video Record</label>
                    <div class="col-md-9 controls">
                    	<?= $this->mainapi->chkbox('inp[video_record]', $video_record, isset($inp['video_record']) ? $inp['video_record'] : '', 'id="video_record" class="form-control span12"'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Screen Size</label>
                    <div class="col-md-9 controls">
                    	<?= $this->mainapi->chkbox('inp[screen_size]', $screen_size, isset($inp['screen_size']) ? $inp['screen_size'] : '', 'id="screen_size" class="form-control span12"'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Battery Capacity</label>
                    <div class="col-md-9">
                    	<?= $this->mainapi->chkbox('inp[battery_capacity]', $battery_capacity, isset($inp['battery_capacity']) ? $inp['battery_capacity'] : '', 'id="battery_capacity" class="form-control span12"'); ?>
                    </div>
                </div>
            </div>
            <div class="form-actions">
                <button type="button" onclick="recommend_sr()" class="btn purple">Rekomendasikan &nbsp; <i class="fa fa-long-arrow-right"></i></button>
            </div>
        </form>
    </div>
</div>

<div class="portlet light">
    <div class="portlet-title">
        <div class="caption caption-md">
            <i class="icon-globe font-green-sharp"></i>
            <span class="caption-subject font-green-sharp bold uppercase">Hasil Rekomendasi Produk</span>
        </div>
    </div>
    <div class="portlet-body">
    	<?php if(empty($result)) { ?>
        <div class="note note-bordered note-danger" style="text-align:center">
            <h4>Maaf produk yang anda inginkan tidak tersedia</h4>
            <button type="button" onClick="qsr()" class="btn red wrap12"><i class="fa fa-refresh"></i> &nbsp; Ulangi</button>
        </div>
        <?php } else { ?>
        <div class="note note-bordered note-danger" style="text-align:center">
            <h4>berikut ini adalah produk yang sesuai dengan spesifikasi teknis yang ada inginkan. Silakan pilih satu atau beberapa produk yang anda inginkan, kemudian klik tombol “Next” di bawah ini</h4>
            <button type="button" onClick="chsr()" class="btn red wrap12">Next &nbsp; &nbsp; <i class="fa fa-caret-right"></i></button>
        </div>
        <div class="table-container">
        	<form role="form" id="frm_r">
        	<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered table-hover" id="table">
                <thead>
                    <tr>
                        <th width="10%">Gambar</th>
                        <th width="80%">Deskripsi Produk</th>
                        <th width="10%">Pilih produk</th>
                    </tr>
                </thead>
                <tbody>
                	<?php $id = 1; foreach($result as $row) { ?>
                	<tr>
                        <td><img src="cdn/images/<?= $row['produk'] ?>.jpg" width="100" style="width:100px" /></td>
                        <td><strong><?= str_replace('_', ' ', $row['produk']) ?></strong><br />
							<p><?= $row['explain'] ?></p>
                            <button type="button" onclick="show_details(<?= $id ?>)" class="show-details btn btn-xs red">Details <i class="fa fa-caret-right"></i></button>
                            <p id="txt-<?= $id ?>" class="details-less"><?= implode('<br>', $row['detail']) ?></p></td>
                        <td><input type="checkbox" class="pilprod" name="product[]" value="<?= $row['produk'] ?>" /></td>
                    </tr>
                    <?php  $id++; }?>
                </tbody>
            </table>
            </form>
    	</div>
        <div class="note note-bordered note-danger" style="text-align:center">
            <h4>Pilih produk yang menurut anda sesuai</h4>
            <button type="button" onClick="chsr()" class="btn red wrap12">Next &nbsp; &nbsp; <i class="fa fa-caret-right"></i></button>
        </div>        
        <?php } ?>
    </div>
</div>

<script language="javascript">
var limit_viewed = <?= $this->config->item('limit_viewed') ?>;
</script>