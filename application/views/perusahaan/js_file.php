<script type="text/javascript">
    $(document).ready(() => {
        table;

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

	$('#tgl_pendataan_cetak').datepicker({
        format: "dd-mm-yyyy",
        autoclose: true,
        language: "id"
    });

    var table = $('#tabelPerusahaan').dataTable({
        "processing": true,
        "serverSide": true,
        "order": [],
        "ajax": {
            "url": "<?php echo site_url('perusahaan/ajax_list') ?>",
            "type": "POST"
        },
        "columnDefs": [{
                className: "text-center",
                "targets": [0],
                "orderable": false,
            },
            {
                className: "",
                "targets": [1],
                "orderable": true,
            },
            {
                className: "",
                "targets": [2],
                "orderable": false,
            },
            {
                className: "",
                "targets": [3],
                "orderable": true,
            },
            {
                className: "",
                "targets": [4],
                "orderable": false,
            },
            {
                className: "text-center",
                "targets": [5],
                "orderable": true,
            },
            {
                className: "text-center",
                "targets": [6],
                "orderable": false,
            }
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
        }
    });

    var jml_input_poto = 0;
    var maxField = 10;
    var addButton = $('#addPoto');
    var wraper = $('#poto_perusahaan');
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
		$.post('<?= base_url('perusahaan/delete') ?>', {
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

				$('#tabelPerusahaan').DataTable().ajax.reload();
			}
		});
	});

	$('#btnPdf').on('click', () => {
		var wilayah_cetak = document.getElementById('wilayah_cetak');
		var status_modal_cetak = document.getElementById('status_modal_cetak');
		var tgl_pendataan_cetak = document.getElementById('tgl_pendataan_cetak');

		window.open(`<?= base_url('perusahaan/cetak_pdf?wilayah=${ wilayah_cetak.value }&status_modal=${ status_modal_cetak.value }&tgl_pendataan=${ tgl_pendataan_cetak.value}')?>`, '_blank');
	});

	$('#btnExcel').on('click', () => {
		var wilayah_cetak = document.getElementById('wilayah_cetak');
		var status_modal_cetak = document.getElementById('status_modal_cetak');
		var tgl_pendataan_cetak = document.getElementById('tgl_pendataan_cetak');

		window.open(`<?= base_url('perusahaan/cetak_excel?wilayah=${ wilayah_cetak.value }&status_modal=${ status_modal_cetak.value }&tgl_pendataan=${ tgl_pendataan_cetak.value}')?>`, '_blank');
	});
</script>
