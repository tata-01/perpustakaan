<!DOCTYPE html>
<html>

<head>
    <title>Buku</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="asset/css/style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
</head>
<form action="action/ac_buku.php" method="POST" enctype="multipart/form-data">
<body>
    <input type="checkbox" id="checkbox" />
    <div id="top"></div>
    <div class="body">
        <div class="nav_kiri" id="kiri"></div>
        <div class="text-dark p-4 col-4">
            <ins>
                      <h3><strong>Buku</strong></h3>
                  </ins>
            <div class="conten">
                <div class="text-dark p-6 ">
                    <strong>
                              <p>Buku Baru</p>
                          </strong>
                    <div class="rounded-pill alert alert-secondary ">
                        <div class="form-group text-dark   ">
                            <label for="" class="control-label">Id Buku</label>
                            <input type="text" class="form-control form-control-sm" name="id_buku">
                        </div>
                        <div class="form-group  text-dark">
                            <label for="" class="control-label">Judul Buku</label>
                            <input type="text" class="form-control form-control-sm" name="judul_buku">
                        </div>
                        <div class="form-group  text-dark">
                            <label for="" class="control-label">Penerbit</label>
                            <select class="custom-select custom-select-sm" name="penerbit">
                                <option selected>Select</option>
                                <option value="1">A</option>
                                <option value="2">B</option>
                                <option value="3">C</option>
                              </select>
                        </div>
                        <div class="form-group  text-dark">
                            <label for="" class="control-label">Pengarang</label>
                            <input type="text" class="form-control form-control-sm" name="pengarang">
                        </div>
                        <div class="form-group  text-dark">
                            <label for="" class="control-label">Kategori</label>
                            <select class="custom-select custom-select-sm" name="kategori">
                                  <option selected>Select</option>
                                  <option value="1">A</option>
                                  <option value="2">B</option>
                                  <option value="3">C</option>
                                </select>
                        </div>
                        <div class="form-group  text-dark">
                            <label for="" class="control-label">Tahun Terbit</label>
                            <select class="custom-select custom-select-sm" name="tahun_terbit">
                                  <option selected>Select</option>
                                  <option value="1">A</option>
                                  <option value="2">B</option>
                                  <option value="3">C</option>
                                </select>
                        </div>
                        <div class="form-group  text-dark">
                            <label for="" class="control-label">Stok</label>
                            <select class="custom-select custom-select-sm" stok="stok">
                                  <option selected>Select</option>
                                  <option value="1">A</option>
                                  <option value="2">B</option>
                                  <option value="3">C</option>
                                </select>
                        </div>
                        <button type="submit" class="btn btn-primary btn" name="submit">Simpan</button>
                    </div>
                </div>
</form>
            </div>
        </div>
        
        
        <div class="table-responsive">
        
            <div class="text-dark col p-6">
                <br><br>
                <div class="text-dark p-4 ">
                    <br>
                    <a class="btn btn-primary" href="editbuku.php" role="button">HALAMAN EDIT</a>
                    <br>
                    <strong>
                        <p>Data Buku</p>
                    </strong>
                    
                    <table class="table table-bordered text-dark h-10"  >
                        <thead class="thead-dark">
                            <tr>
                        <th scope="col">No</th>
                        <th scope="col">Id Buku</th>
                        <th scope="col">Judul Buku</th>
                        <th scope="col">Penerbit</th>
                        <th scope="col">Pengarang</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Tahun Terbit</th>
                        <th scope="col">Stok</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                  $no = 1;  
                  include "action/koneksi.php";
                  $data = mysqli_query($koneksi, "SELECT * FROM buku");

                  while ($row = mysqli_fetch_array($data)) {    
                  ?>
                  <tbody>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $row['id_buku'] ?></td>
                        <td><?php echo $row['judul_buku'] ?></td>
                        <td><?php echo $row['penerbit'] ?></td>
                        <td><?php echo $row['pengarang'] ?></td>
                        <td><?php echo $row['kategori'] ?></td>
                        <td><?php echo $row['tahun_terbit'] ?></td>
                        <td><?php echo $row['stok'] ?></td>
                        <td>
                            <a href="editbuku.php?id_buku=<?php echo $row['id_buku'] ?>" class="" name="edit">
                                <span id="boot-icon" class="bi bi-pencil-fill" style="font-size: 1rem; color: rgb(0, 0, 0);" ></span>
                            </a>
                            <a href="hapusbuku.php?id_buku=<?php echo $row['id_buku'] ?>" type="button" class="bi bi-trash-fill" data-toggle="modal" data-target="#exampleModalCenter" style="font-size: 1rem; color: rgb(255, 0, 0);" name="hapus">
                            </a>
                        </td> 
                  </tr>
                  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                    <div class="modal-header text-dark">
                        <em>
                            <h5 class="modal-title" id="exampleModalLongTitle">Buku</h5>
                        </em>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body text-dark">
                        <strong>Apakah anda ingin menghapus data buku ini ?<strong>
                    </div>
                    <div class="modal-footer">
                        <a href="buku.php" class="btn btn-secondary">Tidak</a>
                        <a href="hapusbuku.php?id_buku=<?php echo $row['id_buku'] ?>"  class="btn btn-primary">Ya</a>
                    </div>
                </div>
            </div>
        </div>
                        <?php
                        }
                        ?> 
                            
                    </tbody>
                </table>
            </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" 
integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" 
crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
<script src="asset/js/lock_header.js"></script>
<script src="asset/js/lock_navbar.js"></script>

</body>

</html>