<div class="container mt-3">

<div class="row">
  <div class="col-lg-6">
    <?php flasher::flash(); ?>
  </div>
</div>

    <div class="row">
        <div class="col-lg-6">
        <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
           Tambah Data Mahasiswa
        </button>
        <br></br>
            <h3>Daftar Mahasiswa</h3>
            <ul class="list-group">
            <?php foreach($data['mhs'] as $mhs):  ?>
              <li class="list-group-item">
                <?= $mhs['nama']; ?>
                <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class ="badge text-bg-danger float-end mx-1" onclick="return confirm('yakin?');">Hapus</a>
                <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id']; ?>" class ="badge text-bg-success float-end mx-1 tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $mhs['id']; ?>">Ubah</a>
                <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class ="badge text-bg-primary float-end mx-1 ">Detail</a>
            </li>
              <?php endforeach;  ?>
            </ul>
                    
        </div>
    </div>

</div>

<!-- Modal -->
<div class=" modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="formModalLabel">Tambah Data Siswa</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
      <div class="modal-body">
        
        <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
          <input type="hidden" name="id" id="id">
        <div class="form-group">
           <label for="nama">Nama</label>
           <input type="text" class="form-control" id="nama" name="nama">
        </div>

        <div class="form-group">
           <label for="nrp">NRP</label>
           <input type="number" class="form-control" id="nrp" name="nrp">
        </div>

        <div class="form-group">
           <label for="email">Email</label>
           <input type="email" class="form-control" id="email" name="email">
        </div>

        <div class="form-group">
          <label for="jurusan">Jurusan</label>
          <select class="form-control" id="jurusan" name="jurusan">
            <option value="Rekayasa Prangkat Lunak">Rekayasa Prangkat Lunak</option>
            <option value="Akutansi">Akutansi</option>
            <option value="Manajemen Perkantoran">Manajemen Perkantoran</option>
            <option value="Bisnis Ritel">Bisnis Ritel</option>
            <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
         </select>
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>