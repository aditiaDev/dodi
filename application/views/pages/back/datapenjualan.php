<div class="main-content">
  <div class="main-content-inner">
    <div class="page-content">

      <div class="row">
        <div class="col-md-12">
          <div class="widget-box">
            <div class="widget-header">
              <h4 class="widget-title">Data Penjualan</h4>

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
                      <th></th>
                      <th>ID Penjualan</th>
                      <th>Tanggal</th>
                      <th>Pelanggan</th>
                      <th>Total Barang</th>
                      <th>Ongkir</th>
                      <th>Total Akhir</th>
                      <th>Ekspedisi</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody></tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
      </div><!-- /.row -->
    </div><!-- /.page-content -->


  </div>
</div><!-- /.main-content -->
<script src="<?php echo base_url(); ?>assets/template/back/assets/js/jquery-2.1.4.min.js"></script>
<script>
  var tb_data

  $(document).ready(function() {
    REFRESH_DATA()
  });

  function REFRESH_DATA() {
    $('#tb_data').DataTable().destroy();
    tb_data = $("#tb_data").DataTable({
      "order": [
        [0, "desc"]
      ],
      "pageLength": 25,
      "autoWidth": false,
      "responsive": true,
      "ajax": {
        "url": "<?php echo site_url('penjualan/getAllData') ?>",
        "type": "POST",
      },
      "columns": [{
          "className": 'dt-control',
          "orderable": false,
          "data": null,
          "defaultContent": ''
        },
        {
          "data": "id_penjualan",
          className: "text-center"
        },
        {
          "data": "tgl_penjualan"
        },
        {
          "data": null,
          "render": function(data) {
            return data.id_pelanggan + "</br>" + data.nm_pelanggan
          },
        },
        {
          "data": "biaya_barang"
        },
        {
          "data": "biaya_pengiriman"
        },
        {
          "data": "tot_akhir"
        },
        {
          "data": "ekspedisi"
        },
        {
          "data": null,
          "render": function(data) {
            if (data.status_penjualan == "TERBAYAR") {
              return "<button class='btn btn-sm btn-warning' title='Change Status' onclick='changeStatus(\"" + data.id_penjualan + "\", \"PACKING\");'>Packing </button>"
            } else if (data.status_penjualan == "PACKING") {
              return "<button class='btn btn-sm btn-warning' title='Change Status' onclick='changeStatus(\"" + data.id_penjualan + "\", \"KIRIM\");'>Kirim </button>"
            } else if (data.status_penjualan == "ORDER") {
              return "Menunggu Pembayaran"
            } else {
              return data.status_penjualan
            }

          },
        },

      ]
    })
  }

  function format(d) {
    // `d` adalah objek data asli untuk baris
    return new Promise(function(resolve, reject) {
      $.ajax({
        url: "<?php echo site_url('penjualan/getDtlPenjualan') ?>",
        dataType: "JSON",
        type: "POST",
        data: {
          id_penjualan: d.id_penjualan
        },
        success: function(data) {
          let row = '<table class="table table-bordered" style="width:100%;">'
          row += '<thead>' +
            '<th>ID Barang</th>' +
            '<th style="width:250px">Nama Barang</th>' +
            '<th>Jumlah</th>' +
            '<th>Harga</th>' +
            '<th>Sub Total</th>' +
            '<th>Rating</th>' +
            '<th>Ulasan</th>' +
            '</thead><tbody>'
          $.map(data.data, function(val, i) {
            row += '<tr>' +
              '<td>' + val.id_barang + '</td>' +
              '<td>' + val.nm_barang + '</td>' +
              '<td>' + val.jumlah + '</td>' +
              '<td>' + val.harga + '</td>' +
              '<td>' + val.subtotal + '</td>' +
              '<td>' + val.average_rating + '</td>' +
              '<td>' + val.ulasan + '</td>' +
              '</tr>'
          });

          row += '</tbody></table>';
          resolve(row);
        },
        error: function(err) {
          reject(err);
        }
      });
    });
  }

  $('#tb_data tbody').on('click', 'td.dt-control', function() {
    var tr = $(this).closest('tr');
    var row = tb_data.row(tr);

    if (row.child.isShown()) {
      // Baris ini sudah terbuka - tutup
      row.child.hide();
      tr.removeClass('shown');
    } else {
      // Buka baris ini
      format(row.data()).then(function(childData) {
        row.child(childData).show();
        tr.addClass('shown');
      }).catch(function(err) {
        console.error('Error fetching child data:', err);
      });
    }
  });

  function changeStatus(id_penjualan, status) {
    $.ajax({
      url: "<?php echo site_url('penjualan/changeStatus') ?>",
      type: "POST",
      dataType: "JSON",
      data: {
        id_penjualan,
        status
      },
      success: function(data) {
        if (data.status == "success") {
          toastr.info(data.message)
          REFRESH_DATA()

        } else {
          toastr.error(data.message)
        }
      }
    })
  }
</script>