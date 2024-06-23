<div class="main-content">
  <div class="main-content-inner">
    <div class="page-content">

      <div class="row">
        <div class="col-md-8">
          <div class="widget-box">
            <div class="widget-header">
              <h4 class="widget-title">Setting Cross Selling</h4>

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
                <table id="tb_data" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>Barang</th>
                      <th>Barang Rujukan</th>
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
                    <label class="col-sm-3 control-label no-padding-right"> Barang </label>

                    <div class="col-sm-9">
                      <input type="text" name="id_barang" placeholder="Barang" class="col-xs-10 col-sm-7" readonly>
                      <span class="help-inline col-xs-12 col-sm-5">
                        <button type="button" id="btnBarang" class="btn btn-sm btn-default"><i class="ace-icon fa fa-list bigger-110 icon-only"></i></button>
                      </span>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right"> Barang Rujukan </label>

                    <div class="col-sm-9">
                      <input type="text" name="id_barang_rujukan" placeholder="Barang Rujukan" class="col-xs-10 col-sm-7" readonly>
                      <span class="help-inline col-xs-12 col-sm-5">
                        <button type="button" id="btnRujukan" class="btn btn-sm btn-default"><i class="ace-icon fa fa-list bigger-110 icon-only"></i></button>
                      </span>
                    </div>
                  </div>

                  <div class="mt-5 text-right">
                    <button class="btn bg-secondary rounded-full" id="BTN_BATAL">Batal</button>
                    <button class="btn btn-primary rounded-full" id="BTN_SAVE">Simpan</button>
                  </div>
                </form>
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
          "url": "<?php echo site_url('settingcross/getBarang') ?>",
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
          "url": "<?php echo site_url('settingcross/getBarang') ?>",
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

      $('#modalRujukan').modal('hide');
    });


    $("#BTN_SAVE").click(function() {
      event.preventDefault();
      var formData = $("#FRM_DATA").serialize();
      if (save_method == 'save') {
        urlPost = "<?php echo site_url('settingcross/saveData') ?>";
      } else {
        urlPost = "<?php echo site_url('settingcross/updateData') ?>";
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
        "url": "<?php echo site_url('settingcross/getAllData') ?>",
        "type": "POST",
      },
      "columns": [{
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
          "data": null,
          "render": function(data) {
            return "<button class='btn btn-sm btn-warning' title='Edit Data' onclick='editData(" + JSON.stringify(data) + ");'>Edit </button> " +
              "<button class='btn btn-sm btn-danger' title='Hapus Data' onclick='deleteData(\"" + data.id_setting_cross + "\");'>Hapus </button>"
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
    $("[name='id_barang']").val(data.id_barang)
    $("[name='id_barang_rujukan']").val(data.id_barang_rujukan)
  }

  function deleteData(id) {
    if (!confirm('Delete this data?')) return

    urlPost = "<?php echo site_url('settingcross/deleteData') ?>";
    formData = "id=" + id
    ACTION(urlPost, formData)
  }
</script>