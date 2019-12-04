<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>jsGrid</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">jsGrid</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">jsGrid</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <div id="jsGrid1"></div>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</section>
<!-- /.content -->

<!-- jsGrid -->
<?php echo $this->Html->css([
  'AdminLTE./plugins/jsgrid/jsgrid.min',
  'AdminLTE./plugins/jsgrid/jsgrid-theme.min'
], ['block' => true]); ?>

<!-- jsGrid -->
<?php echo $this->Html->script([
  'AdminLTE./plugins/jsgrid/demos/db',
  'AdminLTE./plugins/jsgrid/jsgrid.min'
], ['block' => true]); ?>

<?php $this->start('scriptBottom'); ?>
<script>
  $(function () {
    $("#jsGrid1").jsGrid({
      height: "100%",
      width: "100%",

      sorting: true,
      paging: true,

      data: db.clients,

      fields: [
        { name: "Name", type: "text", width: 150 },
        { name: "Age", type: "number", width: 50 },
        { name: "Address", type: "text", width: 200 },
        { name: "Country", type: "select", items: db.countries, valueField: "Id", textField: "Name" },
        { name: "Married", type: "checkbox", title: "Is Married" }
      ]
    });
  });
</script>
<?php $this->end(); ?>