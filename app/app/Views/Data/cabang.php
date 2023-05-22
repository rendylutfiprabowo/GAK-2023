<?= $this->extend('template') ?>
<?= $this->section('content') ?>

<div class="section-title mt-5">
  <h2>Cabang</h2>
  <p>Datangi Cabang Terdekat Kami</p>
</div>


<div class="row">
  <?php foreach ($daerah as $key => $value) : ?>
    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-3" data-aos="zoom-in" data-aos-delay="100">
      <div class="icon-box">
        <td><img style="height:300px; width:300px;" class="img-thumbnail" src="<?= base_url() . "/gambarDaerah/" . $value->gambar; ?>"></td>
        <h4 style="padding-top:7px ;"><a href="/tampilSetiapCabang/<?= $value->id_daerah ?>"><?= $value->nama_daerah ?></a></h4>
      </div>
    </div>
  <?php endforeach; ?>
</div>


<?= $this->endSection() ?>