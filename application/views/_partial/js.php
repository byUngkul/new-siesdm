<!-- jQuery 3 -->
<script src="<?=base_url();?>assets/bower_components/jquery/dist/jquery.min.js"></script> 
<!-- Bootstrap 3.3.7 -->
<script src="<?=base_url();?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- InputMask -->
<script src="<?=base_url();?>assets/plugins/input-mask/jquery.inputmask.js"></script>
<script src="<?=base_url();?>assets/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="<?=base_url();?>assets/plugins/input-mask/jquery.inputmask.extensions.js"></script>

<!-- Jquery-ui -->
<script src="<?=base_url();?>assets/bower_components/jquery-ui/jquery-ui.min.js"></script>

<!-- Select2 -->
<script src="<?=base_url();?>assets/bower_components/select2/dist/js/select2.full.min.js"></script>

<!-- bootstrap datepicker -->
<script src="<?=base_url();?>assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

<!-- DataTables -->
<script src="<?=base_url();?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?=base_url();?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?=base_url();?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?=base_url();?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url();?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url();?>assets/dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(document).ready(function () {
    $('#example1').DataTable({
      'scrollX'     : true,
      'lengthChange': false,
      'searching'   : false
    });
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'scrollX'     : true  
    });

    // input mask
    $('[data-mask]').inputmask();

    // notifikasi
    $('.callout').slideDown('slow').delay(3000).slideUp('slow');

    //Initialize Select2 Elements
    $('.select2').select2();
    $('.select1').select2({
      'minimumResultsForSearch': Infinity
    });

    <!-- Date picker -->
    $('.datepicker').datepicker({
      format: 'dd-mm-yyyy',
      autoclose: true
    });

  $("#perusahaan").change(function(){
            var id=$(this).val();
            $.ajax({
                url : "<?php echo base_url();?>pengambilan_air/ambilSumur",
                method : "POST",
                data : {id: id},
                async : false,
                dataType : 'json',
                success: function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<option value='+data[i].id_sumur+'>'+data[i].no_sumur+'</option>';
                    }
                    $('#sumur').html(html);
                     
                }
            });
   });

   $('#form-tanggal, #form-bulan, #form-tahun, #form-zona, #form-perusahaan1, #form-izin, #form-wilayah, #form-izin, #form-jenis').hide(); // Sebagai default kita sembunyikan form filter tanggal, bulan & tahunnya

   $('#filter').change(function(){ // Ketika user memilih filter
            if($(this).val() == '1'){ // Jika filter nya 2 (per bulan)
                $('#form-tanggal, #form-perusahaan1, #form-izin').hide(); // Sembunyikan form tanggal
                $('#form-bulan, #form-tahun').show(); // Tampilkan form bulan dan tahun
            }else if($(this).val() == '2'){ // Jika filternya 3 (per tahun)
                $('#form-tanggal, #form-bulan, #form-izin,#form-perusahaan1').hide(); // Sembunyikan form tanggal dan bulan
                $('#form-tahun').show(); // Tampilkan form tahun
            }else if($(this).val() == '3'){
                $('#form-tanggal, #form-bulan, #form-tahun, #form-izin').hide();
                $('#form-perusahaan1').show();
            }else if($(this).val() == '4'){
                $('#form-perusahaan1, #form-bulan, #form-tahun, #form-izin').hide();
                $('#form-tanggal').show();
            }else {
                $('#form-perusahaan1, #form-bulan, #form-tahun, #form-tanggal').hide();
                $('#form-izin').show();
            }

            $('#form-tanggal input, #form-bulan select, #form-tahun select, #form-perusahaan1 select, #form-izin select').val(''); // Clear data pada textbox tanggal, combobox bulan & tahun
      });

   $('#filter1').change(function(){
          if($(this).val() == '1'){
                $('#form-perusahaan1, #form-izin, #form-jenis, #form-zona').hide();
                $('#form-wilayah').show();
          }else if($(this).val() == '2'){
                $('#form-izin, #form-jenis, #form-zona').hide();
                $('#form-perusahaan1, #form-wilayah').show();
          }else if($(this).val() == '3'){
                $('#form-perusahaan1, #form-jenis, #form-zona').hide();
                $('#form-wilayah, #form-izin').show();
          }else if($(this).val() == '4'){
                $('#form-perusahaan1, #form-izin, #form-zona').hide();
                $('#form-jenis, #form-wilayah').show();
          }else {
                $('#form-perusahaan1, #form-izin, #form-jenis').hide();
                $('#form-wilayah, #form-zona').show()
          }

          $('#form-tanggal input, #form-bulan select, #form-tahun select, #form-zona select, #form-perusahaan1 select, #form-izin select, #form-wilayah select, #form-izin select, #form-jenis select').val('');          
      });

});
</script>


