@extends('templates.template')

@section('title','Tambah Konsultan')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1><i class="fas fa-chalkboard-teacher"></i> Tambah Data konsultan</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            </ol>
        </div>
        </div>
    </div>
    </section>

    <section class="content">
    <div class="card card-primary card-outline">
        <div class="card-header">
        <h3 class="card-title">
            Form Tambah Data
        </h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
        </div>
        </div>
        <div class="card-body">
        <form action="{{route('konsultan_tambah')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="1" class="form-label">Nama Konsultan </label>
                    <input type="text" name="nama_konsultan" class="form-control" required>   
                </div>            
                
                <div class="mb-3">
                    <label for="1" class="form-label">Pendidikan </label>
                    <input type="text" name="pendidikan" class="form-control" required>   
                </div>            
                
                <div class="mb-3">
                    <label for="1" class="form-label">Bidang </label>
                    <input type="text" name="bidang" class="form-control" required>   
                </div>
                
                <div class="mb-3">
                    <label for="1" class="form-label">Pilih Photo</label><p>
                    <input type="file" name="photo" id="imgInp" onchange="previewImage();">
                  </div> <P>
                  <img id="img-upload" style="width: 150px; height: 150px;" alt="image Upload" /><p>
                
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{url('sejarah')}}" class="btn btn-warning">back</a>
            </form>
        </div>

        <!-- /.card-body -->
        <div class="card-footer">
        Footer
        </div>
        <!-- /.card-footer-->
    </div>
    <!-- /.card -->

    </section>
    <!-- /.content -->

    <script>
        function previewImage() {
            document.getElementById("img-upload").style.display = "block";
            var oFReader = new FileReader();
            oFReader.readAsDataURL(document.getElementById("imgInp").files[0]);
        
            oFReader.onload = function(oFREvent) {
              document.getElementById("img-upload").src = oFREvent.target.result;
            };
          };
        </script>

@endsection 


