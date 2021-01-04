<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>User Edit</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="<?phpe echo route('user'); ?>">User</a></li>
          <li class="breadcrumb-item active">User Edit</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

  <!-- Default box -->
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">User</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
          <i class="fas fa-minus"></i>
        </button>
        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
          <i class="fas fa-times"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-md-6 mb-3">
          <label>ชื่อ</label>
          <input type="text" name="" class="form-control">
        </div>
        <div class="col-md-6 mb-3">
          <label>นามสกุล</label>
          <input type="text" name="" class="form-control">
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 mb-3">
          <label>Username</label>
          <input type="text" name="" class="form-control">
        </div>
        <div class="col-md-6 mb-3">
          <label>Password</label>
          <input type="password" name="" class="form-control">
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 mb-3">
          <label>เบอร์โทรศัพท์</label>
          <input type="text" name="" class="form-control">
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <button type="submit" class="btn btn-primary">บันทึก</button>
        </div>
      </div>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->

</section>
<!-- /.content -->
<script>
  $(function () {
    // Summernote
    $('#summernote').summernote()

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });
  })
</script>