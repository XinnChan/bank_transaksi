<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form-CIMB</title>
    <link rel="stylesheet" href="../../style/Responsive.css" />
    <link rel="stylesheet" href="../../style/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body class="bg-dark">
    <div class="container-hp border border-dark shadow-lg text-left">
      <div class="container-lg">
      <div class="logo-bank">
        <img src="../../image/cimb.png" class="w-100" alt="Logo-BankIslam">
      </div>
      <div class="text d-flex align-items-center">
<div  style="background-color: #1664BC; width:4em; height:0.2em; border-radius: 10px;"></div>&nbsp;&nbsp;&nbsp;<h5 style="color: #1664BC; font-family: 'Poppins',sans-serif ; font-weight: bold;" class="text-1xl">BANK CIMB </h5>
      </div>
    <!-- form input data ke json  -->
      <form action="hasil.php" method="post" class="container-lg " >
        <label for="inputNama" class="form-label text-left fw-bold text-3xl" style="font-family: 'Poppins',sans-serif">Nama Penerima</label>
        <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Penerima"/>
        <label for="inputNumber" class="form-label text-left fw-bold text-3xl" style="font-family: 'Poppins',sans-serif">Number Account</label>
        <input type="text" id="number" name="number_account" class="form-control" placeholder="Account Number"/>
        <label for="PilihBank" class="text-left text-3xl fw-bold" style="font-family:'Poppins',sans-serif">Pilih Bank</label>
        <!-- input pilihan bank -->
        <div class="button-dropdown mt-2 m-1">
        <select name="pilih" class="btn btn-primary w-100 active"  id="cars">
          <option >Pilih Bank</option>
          <option type="text"  value="AmbangGroup" >AmbangGroup</option>
          <option type="text"  value="BankRakyat">BankRakyat</option>
          <option type="text"  value="BankIslam">BankIslam</option>
          <option type="text"  value="CIMB">CIMB</option>
          <option type="text"  value="HongLeong">HongLeong</option>
          <option type="text"  value="MayBank">MayBank</option>
          <option type="text"  value="Brimo">Brimo</option>
        </select>
<!-- akhir input -->
        </div>
        <label for="references" class="text-3xl fw-bold " style="font-family:'Poppins',sans-serif">References</label>
        <input type="text" class="form-control" name="reference" placeholder="Reference Transaction" />
        <label for="description" class="text-3xl fw-bold " style="font-family: 'Poppins',sans-serif;" >Description</label>
  <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3" name="description" placeholder="Enter Description" ></textarea>
  <label for="jumlahrm" class="text-3xl fw-bold" style="font-family: 'Poppins',sans-serif;">Jumlah RM</label>
  <input type="text" class="form-control" name="jumlah" placeholder="Total Transfer Min 1000" />
  <button type="submit" name="submit" value="submit" class="btn btn-primary w-50 mt-2">Submit</button>
      </form>
    <div class="gif">
      <img src="../../image/data.gif" alt="data-gif" class="w-100" >
    </div>
    </div>
</div>
</body>
</html>