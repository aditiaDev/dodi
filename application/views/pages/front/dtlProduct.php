<!-- BREADCRUMB -->
<div id="breadcrumb" class="section">
  <!-- container -->
  <div class="container">
    <!-- row -->
    <div class="row">
      <div class="col-md-12">
        <ul class="breadcrumb-tree">
          <li><a href="<?php echo base_url('front'); ?>">Home</a></li>
          <li class="active"><a href="javascript;:">Product</a></li>
        </ul>
      </div>
    </div>
    <!-- /row -->
  </div>
  <!-- /container -->
</div>
<!-- /BREADCRUMB -->

<?php
$rating = $rating[0]->average_rating;
$jml_rate = $jml_rate[0]->jml_rate;
foreach ($data as $row) {
?>
  <div class="section">
    <!-- container -->
    <div class="container">
      <!-- row -->
      <div class="row">
        <!-- Product main img -->
        <div class="col-md-5 col-md-push-2">
          <img src="<?php echo base_url(); ?>assets/images/barang/<?= $row->foto_barang ?>" class="img-responsive">
        </div>
        <!-- /Product main img -->

        <!-- Product thumb imgs -->
        <div class="col-md-2  col-md-pull-5">

        </div>
        <!-- /Product thumb imgs -->

        <!-- Product details -->
        <div class="col-md-5">
          <div class="product-details">
            <h2 class="product-name"><?= $row->nm_barang ?></h2>
            <div>
              <div class="product-rating">
                <?php
                $max_rating = 5;
                $full_stars = floor($rating); // Bintang penuh
                $half_star = ($rating - $full_stars) >= 0.5 ? 1 : 0; // Bintang setengah
                $empty_stars = $max_rating - $full_stars - $half_star; // Bintang kosong

                // Menampilkan bintang penuh
                for ($i = 0; $i < $full_stars; $i++) {
                  echo '<i class="fa fa-star"></i>';
                }

                // Menampilkan bintang setengah
                if ($half_star) {
                  echo '<i style="color: #D10024;" class="fa fa-star-half-o"></i>';
                }

                // Menampilkan bintang kosong
                for ($i = 0; $i < $empty_stars; $i++) {
                  echo '<i class="fa fa-star-o"></i>';
                }
                ?>
              </div>
              <a class="review-link" href="#"><?= $jml_rate ?> Review(s) | Add your review</a>
            </div>
            <div>
              <!-- <h3 class="product-price">Rp. <?= number_format($row->harga, 0, ',', '.') ?>
                <del class="product-old-price">$990.00</del>
              </h3> -->
              <span id="divHarga">
                <h3 class="product-price">Rp. <?= number_format($row->harga, 0, ',', '.') ?></h3>
              </span>
              <span class="product-available">Stock: </span><b><?= $row->stock ?></b>
            </div>


            <!-- <div class="product-options">
              <label>
                Size
                <select class="input-select">
                  <option value="0">X</option>
                </select>
              </label>
              <label>
                Color
                <select class="input-select">
                  <option value="0">Red</option>
                </select>
              </label>
            </div> -->

            <div class="add-to-cart" style="margin-bottom: 15px;">
              <div class="qty-label">
                Qty
                <div class="input-number">
                  <input type="number" name="qty" value="1" onchange="qtyChange()" readonly>
                  <span class="qty-up">+</span>
                  <span class="qty-down">-</span>
                </div>
              </div>
              <button class="add-to-cart-btn" onclick="btnAddChart('<?= $row->id_barang ?>')"><i class="fa fa-shopping-cart"></i> add to cart</button>
            </div>
            <?php if (count($potongan) > 0) { ?>
              <div>
                <p class="review-link" style="color: #D10024;">Dapatkan Harga Special dengan minimal pembelian <?= $potongan[0]->min_beli; ?> Pcs</p>
              </div>
            <?php } ?>
            <!-- <ul class="product-btns">
              <li><a href="#"><i class="fa fa-heart-o"></i> add to wishlist</a></li>
              <li><a href="#"><i class="fa fa-exchange"></i> add to compare</a></li>
            </ul>

            <ul class="product-links">
              <li>Category:</li>
              <li><a href="#">Headphones</a></li>
              <li><a href="#">Accessories</a></li>
            </ul>

            <ul class="product-links">
              <li>Share:</li>
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              <li><a href="#"><i class="fa fa-envelope"></i></a></li>
            </ul> -->

          </div>
        </div>
        <!-- /Product details -->

        <!-- Product tab -->
        <div class="col-md-12">
          <div id="product-tab">
            <!-- product tab nav -->
            <ul class="tab-nav">
              <li class="active"><a data-toggle="tab" href="#tab1">Description</a></li>
              <li><a data-toggle="tab" href="#tab3">Reviews (3)</a></li>
            </ul>
            <!-- /product tab nav -->

            <!-- product tab content -->
            <div class="tab-content">
              <!-- tab1  -->
              <div id="tab1" class="tab-pane fade in active">
                <div class="row">
                  <div class="col-md-12">
                    <?= $row->deskripsi ?>
                  </div>
                </div>
              </div>
              <!-- /tab1  -->


              <!-- tab3  -->
              <div id="tab3" class="tab-pane fade in">
                <div class="row">
                  <!-- Rating -->
                  <div class="col-md-3">
                    <div id="rating">
                      <div class="rating-avg">
                        <span>4.5</span>
                        <div class="rating-stars">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star-o"></i>
                        </div>
                      </div>
                      <ul class="rating">
                        <li>
                          <div class="rating-stars">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                          </div>
                          <div class="rating-progress">
                            <div style="width: 80%;"></div>
                          </div>
                          <span class="sum">3</span>
                        </li>
                        <li>
                          <div class="rating-stars">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                          </div>
                          <div class="rating-progress">
                            <div style="width: 60%;"></div>
                          </div>
                          <span class="sum">2</span>
                        </li>
                        <li>
                          <div class="rating-stars">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                          </div>
                          <div class="rating-progress">
                            <div></div>
                          </div>
                          <span class="sum">0</span>
                        </li>
                        <li>
                          <div class="rating-stars">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                          </div>
                          <div class="rating-progress">
                            <div></div>
                          </div>
                          <span class="sum">0</span>
                        </li>
                        <li>
                          <div class="rating-stars">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                          </div>
                          <div class="rating-progress">
                            <div></div>
                          </div>
                          <span class="sum">0</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <!-- /Rating -->

                  <!-- Reviews -->
                  <div class="col-md-6">
                    <div id="reviews">
                      <ul class="reviews">
                        <li>
                          <div class="review-heading">
                            <h5 class="name">John</h5>
                            <p class="date">27 DEC 2018, 8:0 PM</p>
                            <div class="review-rating">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star-o empty"></i>
                            </div>
                          </div>
                          <div class="review-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                          </div>
                        </li>
                        <li>
                          <div class="review-heading">
                            <h5 class="name">John</h5>
                            <p class="date">27 DEC 2018, 8:0 PM</p>
                            <div class="review-rating">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star-o empty"></i>
                            </div>
                          </div>
                          <div class="review-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                          </div>
                        </li>
                        <li>
                          <div class="review-heading">
                            <h5 class="name">John</h5>
                            <p class="date">27 DEC 2018, 8:0 PM</p>
                            <div class="review-rating">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star-o empty"></i>
                            </div>
                          </div>
                          <div class="review-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                          </div>
                        </li>
                      </ul>
                      <ul class="reviews-pagination">
                        <li class="active">1</li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                      </ul>
                    </div>
                  </div>
                  <!-- /Reviews -->

                  <!-- Review Form -->
                  <div class="col-md-3">
                    <div id="review-form">
                      <form class="review-form">
                        <input class="input" type="text" placeholder="Your Name">
                        <input class="input" type="email" placeholder="Your Email">
                        <textarea class="input" placeholder="Your Review"></textarea>
                        <div class="input-rating">
                          <span>Your Rating: </span>
                          <div class="stars">
                            <input id="star5" name="rating" value="5" type="radio"><label for="star5"></label>
                            <input id="star4" name="rating" value="4" type="radio"><label for="star4"></label>
                            <input id="star3" name="rating" value="3" type="radio"><label for="star3"></label>
                            <input id="star2" name="rating" value="2" type="radio"><label for="star2"></label>
                            <input id="star1" name="rating" value="1" type="radio"><label for="star1"></label>
                          </div>
                        </div>
                        <button class="primary-btn">Submit</button>
                      </form>
                    </div>
                  </div>
                  <!-- /Review Form -->
                </div>
              </div>
              <!-- /tab3  -->
            </div>
            <!-- /product tab content  -->
          </div>
        </div>
        <!-- /product tab -->
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
<?php } ?>

<!-- Section -->
<div class="section">
  <!-- container -->
  <div class="container">
    <!-- row -->
    <div class="row">

      <div class="col-md-12">
        <div class="section-title text-center">
          <h3 class="title">Related Products</h3>
        </div>
      </div>

      <?php
      foreach ($cross as $row) {
      ?>
        <!-- product -->
        <div class="col-md-3 col-xs-6">
          <div class="product">
            <div class="product-img">
              <img src="<?php echo base_url(); ?>assets/images/barang/<?= $row->foto_barang ?>" alt="">
              <!-- <div class="product-label">
                <span class="sale">-30%</span>
              </div> -->
            </div>
            <div class="product-body">
              <!-- <p class="product-category">Category</p> -->
              <h3 class="product-name"><a href="<?php echo base_url('dtlProduct/' . $row->id_barang); ?>"><?= $row->nm_barang ?></a></h3>
              <h4 class="product-price">Rp. <?= number_format($row->harga, 0, ',', '.') ?></h4>
              <div class="product-rating">
              </div>
            </div>
            <div class="add-to-cart">
              <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
            </div>
          </div>
        </div>
        <!-- /product -->
      <?php } ?>


    </div>
    <!-- /row -->
  </div>
  <!-- /container -->
</div>
<!-- /Section -->

<!-- Section -->
<div class="section">
  <!-- container -->
  <div class="container">
    <!-- row -->
    <div class="row">

      <div class="col-md-12">
        <div class="section-title text-center">
          <h3 class="title">Similar Products</h3>
        </div>
      </div>

      <?php
      foreach ($up as $row) {
      ?>
        <!-- product -->
        <div class="col-md-3 col-xs-6">
          <div class="product">
            <div class="product-img">
              <img src="<?php echo base_url(); ?>assets/images/barang/<?= $row->foto_barang ?>" alt="">
              <!-- <div class="product-label">
                <span class="sale">-30%</span>
              </div> -->
            </div>
            <div class="product-body">
              <!-- <p class="product-category">Category</p> -->
              <h3 class="product-name"><a href="<?php echo base_url('dtlProduct/' . $row->id_barang); ?>"><?= $row->nm_barang ?></a></h3>
              <h4 class="product-price">Rp. <?= number_format($row->harga, 0, ',', '.') ?></h4>
              <div class="product-rating">
              </div>
            </div>
            <div class="add-to-cart">
              <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
            </div>
          </div>
        </div>
        <!-- /product -->
      <?php } ?>


    </div>
    <!-- /row -->
  </div>
  <!-- /container -->
</div>
<!-- /Section -->

<script src="<?php echo base_url(); ?>assets/template/front/js/jquery.min.js"></script>
<script>
  let harga_barang = '<?= $data[0]->harga; ?>'

  function btnAddChart(id_barang) {
    event.preventDefault();

    <?php
    if (!$this->session->userdata('id_user')) {
      echo "alert('Login Dulu');return;";
    }
    ?>

    if ($("[name='qty']").val() < 1) {
      alert('Qty harus lebih dari 1')
      return
    }

    // let min_beli = '<?= (count($potongan) > 0) ? $potongan[0]->min_beli : 0; ?>'

    // let harga = '<?= $data[0]->harga; ?>'

    // if (min_beli > 0) {
    //   if ($("[name='qty']").val() >= min_beli) {
    //     harga = '<?= (count($potongan) > 0) ? $potongan[0]->biaya : 0; ?>'
    //   }
    // }

    $.ajax({
      url: "<?php echo base_url('front/addToChartQty') ?>",
      type: "POST",
      dataType: "JSON",
      data: {
        id_barang,
        harga: harga_barang,
        qty: $("[name='qty']").val()
      },
      success: function(data) {
        if (data.status == "success") {
          toastr.info(data.message)
          count_chart()
        } else {
          toastr.error(data.message)
        }
      }
    })
  }

  function count_chart() {
    $.ajax({
      url: "<?php echo base_url('front/count_chart') ?>",
      type: "GET",
      dataType: "HTML",
      success: function(data) {
        $("#jml_chart").text(data)
      }
    })
  }

  function qtyChange() {
    let min_beli = '<?= (count($potongan) > 0) ? $potongan[0]->min_beli : 0; ?>'

    var harga_awal = '<?= $data[0]->harga; ?>'
    var harga = harga_awal
    let qty = $("[name='qty']").val()

    let div = ''

    if (min_beli > 0) {
      if (qty >= min_beli) {
        harga = '<?= (count($potongan) > 0) ? $potongan[0]->biaya : 0; ?>'
        div = '<h3 class="product-price">Rp. ' + formatRupiah(harga, '') + ' <del class="product-old-price">Rp. ' + harga_awal + '</del></h3>'
      } else {
        harga = harga_awal
        div = '<h3 class="product-price">Rp. ' + formatRupiah(harga, '') + '</h3>'
      }

      $("#divHarga").html(div)
    }

    harga_barang = harga
  }

  function formatRupiah(angka, prefix) {
    var number_string = angka.replace(/[^,\d]/g, '').toString(),
      split = number_string.split(','),
      sisa = split[0].length % 3,
      rupiah = split[0].substr(0, sisa),
      ribuan = split[0].substr(sisa).match(/\d{3}/gi);

    // tambahkan titik jika yang di input sudah menjadi angka ribuan
    if (ribuan) {
      separator = sisa ? '.' : '';
      rupiah += separator + ribuan.join('.');
    }

    rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
    return prefix == undefined ? rupiah : (rupiah ? prefix + rupiah : '');
  }
</script>