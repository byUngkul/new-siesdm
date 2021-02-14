<script type="text/javascript">
	$(document).ready(() => {
		table.draw();

		$('#searchInput,#sortBy').bind("keyup change", function() {
			table.draw();
		});

		<?php if ($this->session->flashdata('error')) : ?>
			Swal.fire({
				title: 'Error!',
				text: '<?= $this->session->flashdata('error')  ?>',
				icon: 'error',
				type: 'success',
				timer: 3000
			})
		<?php endif; ?>

		<?php if ($this->session->flashdata('success')) : ?>
			Swal.fire({
				title: 'Skses!',
				text: '<?= $this->session->flashdata('success')  ?>',
				icon: 'success',
				type: 'success',
				timer: 3000
			})
		<?php endif; ?>


	});

	$('#tgl_terbit_sipa').datepicker({
		format: "dd-mm-yyyy",
		language: "id",
		orientation: "bottom auto",
		autoclose: true
	});

	$('#tgl_ahir_sipa').datepicker({
		format: "dd-mm-yyyy",
		language: "id",
		orientation: "bottom auto",
		autoclose: true
	});

	$('#tgl_tera').datepicker({
		format: "dd-mm-yyyy",
		language: "id",
		orientation: "bottom auto",
		autoclose: true
	});

	$('#tgl_ahir_tera').datepicker({
		format: "dd-mm-yyyy",
		language: "id",
		orientation: "bottom auto",
		autoclose: true
	});

	$('#tgl_pendataan_cetak').datepicker({
		format: "dd-mm-yyyy",
		language: "id",
		orientation: "bottom auto",
		autoclose: true
	});

	var table = $('#table_sumur').DataTable({
		"processing": true,
		"serverSide": true,
		"order": [],
		"ajax": {
			"url": "<?php echo site_url('sumur/ajax_list') ?>",
			"type": "POST"
		},
		"columnDefs": [{
				className: "text-center",
				"targets": [0],
				"orderable": true,
			},
			{
				className: "",
				"targets": [1],
				"orderable": true,
			},
			{
				className: "",
				"targets": [2],
				"orderable": true,
			},
			{
				className: "",
				"targets": [3],
				"orderable": true,
			},
			{
				className: "text-center",
				"targets": [4],
				"orderable": false,
			},
			{
				className: "text-center",
				"targets": [5],
				"orderable": false,
			},
			{
				className: "text-center",
				"targets": [6],
				"orderable": true,
			},
			{
				className: "text-center",
				"targets": [7],
				"orderable": true,
			},
			{
				className: "text-center",
				"targets": [8],
				"orderable": false,
			},
		],
		"language": {
			"info": "Tampil _END_ dari _TOTAL_ data",
			"infoEmpty": "Tidak menemukan data",
			"infoFiltered": " - dari _MAX_ data",
			"emptyTable": "Tidak ada Data",
			"loadingRecords": "Loading...",
			"processing": "Processing...",
			"lengthMenu": "Tampil _MENU_ data",
			"zeroRecords": "data tidak ditemukan",
			"paginate": {
				"previous": '<i class="fas fa-caret-left"></i>',
				"next": '<i class="fas fa-caret-right"></i>',
			},
		},
		"dom": "<'row'<'col-sm-12'f>>" +
			"<'row'<'col-sm-12'tr>>" +
			"<'row'<'col-sm-4 col-md-4'i><'col-sm-4 col-md-4 pl-5'l><'col-sm-4 col-md-4'p>>"

	});

	var id_perusahaan = document.getElementById('id_perusahaan');
	if (typeof(id_perusahaan) != 'undefined' && id_perusahaan != null) {
		console.log(id_perusahaan.id);
		var perusahaan_dropdown = new BVSelect({
			selector: "#id_perusahaan",
			searchbox: true,
			search_autofocus: true,
			offset: true,
			width: "84%",
			placeholder: "Pilih",
			search_placeholder: "Search...",
			breakpoint: 750
		});
	}

	var id_zona = document.getElementById('id_zona');
	if (typeof(id_zona) != 'undefined' && id_zona != null) {
		var zona_dropdown = new BVSelect({
			selector: "#id_zona",
			searchbox: true,
			search_autofocus: true,
			offset: true,
			width: "84%",
			placeholder: "Pilih",
			search_placeholder: "Search...",
			breakpoint: 750
		});
	}

	var status_izin = document.getElementById('status_izin');
	if (typeof(status_izin) != 'undefined' && status_izin != null) {
		var status_dropdown = new BVSelect({
			selector: "#status_izin",
			searchbox: false,
			search_autofocus: true,
			offset: true,
			width: "84%",
			placeholder: "Pilih",
			search_placeholder: "Search...",
			breakpoint: 750
		});
	}

	var id_jenis_sumur = document.getElementById('id_jenis_sumur');
	if (typeof(id_jenis_sumur) != 'undefined' && id_jenis_sumur != null) {
		var jenis_sumur_dropdown = new BVSelect({
			selector: "#id_jenis_sumur",
			searchbox: false,
			search_autofocus: true,
			offset: true,
			width: "84%",
			placeholder: "Pilih",
			search_placeholder: "Search...",
			breakpoint: 750
		});
	}


	var jml_input_poto = 0;
	var maxField = 10;
	var addButton = $('#addPoto');
	var wraper = $('#poto_sumur');
	var fieldHTML = `<div class="form-row">
                        <button href="javascript:void(0);" class="remove_button btn btn-circle btn-sm btn-danger col-sm-1">
                        <span class="fas fa-trash"></span>
                        </button>
                        <input type="file" class="ml-2 pl-0 col-sm-10 form-control-file form-control-sm" name="photo[]" value=""/>
                    </div>`;

	$(addButton).click((e) => {
		e.preventDefault();
		if (jml_input_poto < maxField) {
			jml_input_poto++;
			$(wraper).append(fieldHTML);
		}
	})

	$(wraper).on('click', '.remove_button', function(e) {
		e.preventDefault();
		$(this).parent('div').remove();
		jml_input_poto--;
	});

	function deleteDialog(a) {
		$('#idDialogHapus').val(a);
		$('#deleteDialog').modal('show');
	}

	$('#btnHapus').on('click', () => {
		$.post('<?= base_url('sumur/delete') ?>', {
			id: $('#idDialogHapus').val()
		}, (res) => {
			var aa = JSON.parse(res);
			$('#deleteDialog').modal('hide');

			if (aa.data == 'success') {
				Swal.fire({
					title: 'Skses!',
					text: 'data berhasil di hapus!',
					icon: 'success',
					timer: 3000
				});

				table.ajax.reload();
			}
		});
	});

	$('#btnPdf').on('click', () => {
		var wilayah_cetak = document.getElementById('wilayah_cetak');
		var jenis_sumur_cetak = document.getElementById('jenis_sumur_cetak');
		var tgl_pendataan_cetak = document.getElementById('tgl_pendataan_cetak');
		
		window.open(`<?= base_url('sumur/cetak_pdf?wilayah=${ wilayah_cetak.value }&jenis_sumur=${ jenis_sumur_cetak.value }&tgl_pendataan=${ tgl_pendataan_cetak.value}')?>`, '_blank');
	});
	
	$('#btnExcel').on('click', () => {
		var wilayah_cetak = document.getElementById('wilayah_cetak');
		var jenis_sumur_cetak = document.getElementById('jenis_sumur_cetak');
		var tgl_pendataan_cetak = document.getElementById('tgl_pendataan_cetak');

		window.open(`<?= base_url('sumur/cetak_excel?wilayah=${ wilayah_cetak.value }&jenis_sumur=${ jenis_sumur_cetak.value }&tgl_pendataan=${ tgl_pendataan_cetak.value}')?>`, '_blank');
	});
</script>
