@extends('master')

@section('konten')
<style type="text/css">
  div.hello {
    text-align: center;
  }

  div.card-body {
    background-color: white;
  }

  form.example input[type=text] {
    padding: 8px;
    font-size: 17px;
    border: 1px;
    float: left;
    width: 80%;
    background: #ffffff;
  }

  form.example button {
    float: left;
    width: 20%;
    padding: 7px;
    background: #2196F3;
    color: white;
    font-size: 17px;
    border: 1px solid grey;
    border-left: none;
    cursor: pointer;
  }
</style>



<div class="container">
  <br><br>
  <div class="row">
    <div class="col-md-12">
      <div class="hello">
        <h2>Tugas Selesai</h2>
        <p>Tugas yang telah dikerjakan</p>
      </div>
      <br>
      <form class="example" action="/action_page.php" style="margin:auto;max-width:700px">
        <input type="text" placeholder="Search.." name="search2">
        <button type="submit"><i class="fa fa-search"></i></button>
      </form>


      <br><br><br><br>

      <div class="card-body">
        <table class="table table-bordered table-hover table-striped">
          <thead>
            <tr>
              <th>File Tugas</th>
              <th>Nama Tugas</th>
              <th>Nilai</th>
              <th>Komentar</th>

            </tr>
          </thead>
          <tbody>
            @foreach ($tgs as $t)

            <tr>
              <td> {{ $t->status }} </td>
              <td> {{ $t->nama_tugas }} </td>
              <td> {{ $t->nilai }} </td>
              <td> {{ $t->komentar }} </td>

            </tr>

            @endforeach
          </tbody>
        </table>
      </div>
    </div>
    <div class="col-md-9"></div> <br>
    <div class="col-md-3">
    <a href="/cetak_pdf" class="btn btn-success" target="_blank">CETAK PDF</a>
    </div>
  </div>
</div>

@endsection