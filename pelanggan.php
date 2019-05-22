<script type="text/javascript">
  function Tambah(){
      document.getElementaryById("action").value="insert";

      document.getEelemtaryById("id_pelanggan").value=" ";
      document.getEelemtaryById("nama_pelanggan").value=" ";
      document.getEelemtaryById("alamat_pelanggan").value=" ";
      document.getEelemtaryById("kontak").value=" ";
  }
  function Edit(index){
      document.getElementaryById("action").value="update";

    var table = document.getElementById("table_pelanggan");
    var id_pelanggan = table.rows[index].cells[0].innerHTML;
    var nama_pelanggan = table.rows[index].cells[1].innerHTML;
    var alamat_pelanggan = table.rows[index].cells[2].innerHTML;
    var kontak = table.rows[index].cells[3].innerHTML;

    document.getEelemtaryById("id_pelanggan").value= id_pelanggan;
    document.getEelemtaryById("nama_pelanggan").value= nama_pelanggan;
    document.getEelemtaryById("alamat_pelanggan").value= alamat_pelanggan;
    document.getEelemtaryById("kontak").value= kontak;
  }
</script>
<div class="card-col-sm-12">
  <div class="card-header bg-dark text-white">
    <h4>Daftar Pelanggan</h4>
  </div>
  <div class="card-body">
    <?php if (isset($_SESSION["message"])) : ?>
      <div class="alert alert-<?=($_SESSION["message"]["type"])?>">
        <?php echo $_SESSION["message"]["message"]; ?>
        <?php unset($_SESSION["message"]); ?>
      </div>
    <?php endif; ?>
    <?php
    $koneksi = mysqli_connect("localhost", "root","", "sewa_mobil");
    if (mysqli_connect_errno()) {
      echo mysqli_connect_error();
    }

    $sql ="select * from pelanggan";
    $result = mysqli_query($koneksi, $sql);
    $count =mysqli_num_rows($result);
    ?>
    <?php if ($count == 0):?>
       <div class="alert alert-success">
          Data is Empty
       </div>
   <?php else: ?>
       <table class="table" id="table_pelanggan">
         <thead>
           <tr>
             <td>ID Pelanggan</td>
             <td>Nama</td>
             <td>Alamat</td>
             <td>Kontak</td>
             <td>Opsi</td>
           </tr>
         </thead>
         <tbody>
           <?php foreach ($result as $hasil): ?>
             <tr>
               <td><?php echo $hasil["id_pelanggan"];?></td>
               <td><?php echo $hasil["nama_pelanggan"];?></td>
               <td><?php echo $hasil["alamat_pelanggan"];?></td>
               <td><?php echo $hasil["kontak"];?></td>
               <td>
                 <img src="<?php echo "image_pelanggan/" .$hasil["image"];?>" id="<?php echo $hasil["id_pelanggan"];?>" class="img" width="100">
               </td>
                 <button type="button" class="btn btn-primary"
                 data-toggle="modal" data-target="#modal"
                 onclick="Edit(this.parentElement.parentElement.rowIndex)">
                     Edit
               </button>
               <a href="database_pelanggan.php?hapus=pelanggan&id_pelanggan=<?php echo $hasil["id_pembeli"];?>"
                  onclick="return confirm('Apakah anda yakin ingin menghapus dataini?')">
                  <button type="button" class="btn btn-danger">Hapus</button>
               </a>
               </td>
              </tr>
          </tbody>
        <?php endforeach;?>
        </table>
      <?php endif;?>
  </div>
  <div class="card-footer">
    <button type="button" class="btn btn-success"
    data-toggle="modal" data-target="#modal" onclick="Tambah()">
      Tambah Data
  </button>
  </div>
</div>
</div>

<div class="modal fade" id="modal">
<div class="modal-dialog modal-lg">
  <div class="modal-content">
    <form action="db_pelanggan.php" method="post" enctype="multipart/form-data">
      <div class="modal-header">
        <h4>Form Pelanggan</h4>
        <span class="close" data-dismiss="modal">&times;</span>
      </div>
      <div class="modal-body">
        <input type="hidden" name="action" id="action" />
        ID Pelanggan
        <input type="text" name="id_pelanggan" id="id_pelanggan" class="form-control">
        Nama
        <input type="text" name="nama_pelanggan" id="nama_pelanggan" class="form-control">
        Alamat
        <input type="text" name="alamat" id="alamat" class="form-control">
        Username
        <input type="text" name="username" id="username" class="form-control">
        Password
        <input type="password" name="password" id="password" class="form-control">
        Image
        <input type="file" name="image" id="image" class="form-control">
      </div>

      <div class="modal-footer">
        <button type="submit" class="btn btn-info">
          Simpan
        </button>
      </div>
    </form>
  </div>
</div>
</div>
        