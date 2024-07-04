<div class="main-content">
  <div class="main-content-inner">
    <div class="page-content">
      <div class="row">
        <div class="col-md-4">
          <div class="widget-box">
            <div class="widget-header">
              <h4 class="widget-title" id="judul_entry">Tambah Data</h4>

              <div class="widget-toolbar">
                <a href="#" data-action="collapse">
                  <i class="ace-icon fa fa-chevron-up"></i>
                </a>

                <a href="#" data-action="close">
                  <i class="ace-icon fa fa-times"></i>
                </a>
              </div>
            </div>

            <div class="widget-body">
              <div class="widget-main">
                <form id="FRM_DATA" class="form-horizontal" method="post">
                  <div class="form-group">
                    <label class="col-sm-4 control-label no-padding-right"> Type Setting </label>

                    <div class="col-sm-8">
                      <select name="type" class="form-control" onchange="changeType()">
                        <option value="" selected disabled>Pilih</option>
                        <option value="0">Pembelian Banyak</option>
                        <option value="1">Referensi Barang Serupa</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-4 control-label no-padding-right"> Barang </label>

                    <div class="col-sm-8">
                      <input type="text" name="id_barang" placeholder="Barang" class="col-xs-10 col-sm-7" readonly>
                      <span class="help-inline col-xs-12 col-sm-5">
                        <button type="button" id="btnBarang" class="btn btn-sm btn-default"><i class="ace-icon fa fa-list bigger-110 icon-only"></i></button>
                      </span>
                    </div>
                  </div>



                  <span id="typeForm1">
                    <div class="form-group">
                      <label class="col-sm-4 control-label no-padding-right"> Minimal Pembelian </label>

                      <div class="col-sm-8">
                        <input type="text" name="min_beli" class="form-control" value="2">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-4 control-label no-padding-right"> Harga Asli </label>

                      <div class="col-sm-8">
                        <input type="text" name="harga" class="col-xs-10 col-sm-6" readonly>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-4 control-label no-padding-right"> Harga Diskon </label>

                      <div class="col-sm-8">
                        <input type="text" name="biaya" class="col-xs-10 col-sm-6">
                      </div>
                    </div>
                  </span>

                  <span id="typeForm2" style="display: none;">
                    <div class="form-group">
                      <label class="col-sm-4 control-label no-padding-right"> Barang Rujukan </label>

                      <div class="col-sm-8">
                        <input type="text" name="id_barang_rujukan" placeholder="Barang Rujukan" class="col-xs-10 col-sm-7" readonly>
                        <span class="help-inline col-xs-12 col-sm-5">
                          <button type="button" id="btnRujukan" class="btn btn-sm btn-default"><i class="ace-icon fa fa-list bigger-110 icon-only"></i></button>
                        </span>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-4 control-label no-padding-right"> Harga </label>

                      <div class="col-sm-8">
                        <input type="text" name="biaya_rujukan" readonly class="col-xs-10 col-sm-6">
                      </div>
                    </div>
                  </span>


                  <div class="mt-5 text-right">
                    <button class="btn bg-secondary rounded-full" id="BTN_BATAL">Batal</button>
                    <button class="btn btn-primary rounded-full" id="BTN_SAVE">Simpan</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="widget-box">
            <div class="widget-header">
              <h4 class="widget-title">Setting Up Selling</h4>

              <div class="widget-toolbar">
                <a href="#" data-action="collapse">
                  <i class="ace-icon fa fa-chevron-up"></i>
                </a>

                <a href="#" data-action="close">
                  <i class="ace-icon fa fa-times"></i>
                </a>
              </div>
            </div>

            <div class="widget-body">
              <div class="widget-main">
                <table id="tb_data" class="table table-bordered table-hover table-striped">
                  <thead>
                    <tr>
                      <th>Type Setting</th>
                      <th>Barang</th>
                      <th>Barang Rujukan</th>
                      <th>Minimal Pembelian</th>
                      <th>Harga</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

      </div><!-- /.row -->
    </div><!-- /.page-content -->
  </div>
</div><!-- /.main-content -->

<div class="modal fade" id="modalBarang">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Pilih Barang</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-xs-12 col-md-12">
            <table class="table table-bordred table-striped table-hover" id="tb_barang">
              <thead>
                <tr>
                  <th>ID Barang</th>
                  <th>Nama Barang</th>
                  <th>Satuan</th>
                  <th>Berat</th>
                  <th>Stock</th>
                </tr>
              </thead>
              <tbody></tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modalRujukan">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Pilih Barang Rujukan</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-xs-12 col-md-12">
            <table class="table table-bordred table-striped table-hover" id="tb_rujukan">
              <thead>
                <tr>
                  <th>ID Barang</th>
                  <th>Nama Barang</th>
                  <th>Satuan</th>
                  <th>Berat</th>
                  <th>Stock</th>
                </tr>
              </thead>
              <tbody></tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="<?php echo base_url(); ?>assets/template/back/assets/js/jquery-2.1.4.min.js"></script>
<script>
  var save_method = 'save';
  var id_data;
  var tb_data
  var tb_barang
  var tb_rujukan

  $(document).ready(function() {
    REFRESH_DATA()

    $("#btnBarang").click(function() {
      $('#tb_barang').DataTable().destroy();
      tb_barang = $("#tb_barang").DataTable({
        "order": [
          [0, "asc"]
        ],
        "pageLength": 25,
        "autoWidth": false,
        "responsive": true,
        "ajax": {
          "url": "<?php echo site_url('settingup/getBarang') ?>",
          "type": "POST",
        },
        "columns": [{
            "data": "id_barang"
          },
          {
            "data": "nm_barang"
          },
          {
            "data": "satuan"
          },
          {
            "data": "berat"
          },
          {
            "data": "stock"
          },
        ]
      })

      $("#modalBarang").modal('show')
    })

    $('body').on('dblclick', '#tb_barang tbody tr', function(e) {
      let Rowdata = tb_barang.row(this).data();
      $("[name='id_barang']").val(Rowdata.id_barang)

      let Type = $("[name='type']").val()

      if (Type == 0 || Type == null) {
        $("[name='harga']").val(Rowdata.harga)
      }

      $('#modalBarang').modal('hide');
    });

    $("#btnRujukan").click(function() {
      $('#tb_rujukan').DataTable().destroy();
      tb_rujukan = $("#tb_rujukan").DataTable({
        "order": [
          [0, "asc"]
        ],
        "pageLength": 25,
        "autoWidth": false,
        "responsive": true,
        "ajax": {
          "url": "<?php echo site_url('settingup/getBarang') ?>",
          "type": "POST",
        },
        "columns": [{
            "data": "id_barang"
          },
          {
            "data": "nm_barang"
          },
          {
            "data": "satuan"
          },
          {
            "data": "berat"
          },
          {
            "data": "stock"
          },
        ]
      })

      $("#modalRujukan").modal('show')
    })

    $('body').on('dblclick', '#tb_rujukan tbody tr', function(e) {
      let Rowdata = tb_rujukan.row(this).data();
      $("[name='id_barang_rujukan']").val(Rowdata.id_barang)

      let Type = $("[name='type']").val()
      if (Type == 1) {
        $("[name='biaya_rujukan']").val(Rowdata.harga)
      }

      $('#modalRujukan').modal('hide');
    });




    $("#BTN_SAVE").click(function() {
      event.preventDefault();
      var formData = $("#FRM_DATA").serialize();
      if (save_method == 'save') {
        urlPost = "<?php echo site_url('settingup/saveData') ?>";
      } else {
        urlPost = "<?php echo site_url('settingup/updateData') ?>";
        formData += "&id=" + id_data
      }

      ACTION(urlPost, formData)

    })

    $("#BTN_BATAL").click(function() {
      event.preventDefault();
      $("#FRM_DATA")[0].reset()

      $("#judul_entry").text('Tambah Data')
      save_method = 'save'
    })
  });

  function REFRESH_DATA() {
    $('#tb_data').DataTable().destroy();
    tb_data = $("#tb_data").DataTable({
      "order": [
        [0, "asc"]
      ],
      "pageLength": 25,
      "autoWidth": false,
      "responsive": true,
      "ajax": {
        "url": "<?php echo site_url('settingup/getAllData') ?>",
        "type": "POST",
      },
      "columns": [{
          "data": "nm_type"
        }, {
          "data": null,
          "render": function(data) {
            return data.id_barang + "</br>" + data.nm_barang
          },
        },
        {
          "data": null,
          "render": function(data) {
            return data.id_barang_rujukan + "</br>" + data.nm_rujukan
          },
        },
        {
          "data": "min_beli"
        },
        {
          "data": "biaya"
        },
        {
          "data": null,
          "render": function(data) {
            return "<button class='btn btn-sm btn-warning' title='Edit Data' onclick='editData(" + JSON.stringify(data) + ");'>Edit </button> " +
              "<button class='btn btn-sm btn-danger' title='Hapus Data' onclick='deleteData(\"" + data.id_setting_up + "\");'>Hapus </button>"
          },
          className: "text-center"
        },
      ]
    })

  }

  function ACTION(urlPost, formData) {
    $.ajax({
      url: urlPost,
      type: "POST",
      data: formData,
      dataType: "JSON",
      beforeSend: function() {
        $("#LOADER").show();
      },
      complete: function() {
        $("#LOADER").hide();
      },
      success: function(data) {
        console.log(data)
        if (data.status == "success") {
          toastr.info(data.message)
          REFRESH_DATA()
          $("#FRM_DATA")[0].reset()
          $("#judul_entry").text('Tambah Data')
          save_method = 'save'

        } else {
          toastr.error(data.message)
        }
      }
    })
  }

  function editData(data, index) {
    console.log(data)
    save_method = "edit"
    // $("#BTN_SAVE").css('display', 'unset')
    id_data = data.id_setting_cross;
    $("#judul_entry").text('Edit Data')
    $("[name='type']").val(data.type)
    changeType()
    $("[name='id_barang']").val(data.id_barang)
    $("[name='id_barang_rujukan']").val(data.id_barang_rujukan)
    $("[name='min_beli']").val(data.min_beli)
    $("[name='biaya']").val(data.biaya)
    $("[name='biaya_rujukan']").val(data.biaya)
  }

  function deleteData(id) {
    if (!confirm('Delete this data?')) return

    urlPost = "<?php echo site_url('settingup/deleteData') ?>";
    formData = "id=" + id
    ACTION(urlPost, formData)
  }

  function changeType() {
    let Type = $("[name='type']").val()
    if (Type == 1) {
      $("#typeForm1").css('display', 'none')
      $("#typeForm2").css('display', 'block')
    } else {
      $("#typeForm1").css('display', 'block')
      $("#typeForm2").css('display', 'none')
    }
  }
</script>