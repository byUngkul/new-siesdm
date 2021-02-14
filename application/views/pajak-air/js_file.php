<script type="text/javascript">
    $(document).ready(() => {
        // table;

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

        <?php if (isset($pajakabt)) : ?>
            noSumurDropdown();
        <?php endif ?>
    });

	var id_perusahaan = document.getElementById('id_perusahaan');
    var table = $('#tabelPajakAir').DataTable({
        "processing": true,
        "serverSide": true,
        "order": [],
        "ajax": {
            "url": "<?php echo site_url('pajakabt/ajax_list') ?>",
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
                className: "text-center",
                "targets": [2],
                "orderable": true,
            },
            {
                className: "text-center",
                "targets": [3],
                "orderable": true,
            },
            {
                className: "text-right",
                "targets": [4],
                "orderable": true,
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
        }
    });

    $('#tgl_bayar').datepicker({
        format: "dd-mm-yyyy",
		language: "id",
		orientation: "bottom auto",
		autoclose: true
    });

    function noSumurDropdown() {
        let id_perusahaan = document.getElementById('id_perusahaan');
        let dropdownSumur = document.getElementById('id_sumur');
        let option = '<option>Pilih</option>';
        let pajakabt = '<?= isset($pajakabt) ? json_encode($pajakabt) : '' ?>';
        let dataConv = (pajakabt != '') ?
            JSON.parse(pajakabt) : '';

        $.post('<?= base_url('penggunaanair/dorpdownSumur') ?>', {
            id_perusahaan: id_perusahaan.value
        }, (res) => {
            var aa = JSON.parse(res);

            aa.forEach((el, index) => {
                if (dataConv == '') {
                    option += `<option value="${ el.id_sumur }">${ el.no_sumur }</option>`;
                } else {
                    option += `<option ${(dataConv.id_smr == el.id_sumur) ? 'selected' : ''} value="${ el.id_sumur }">${ el.no_sumur }</option>`;
                }
            });

            dropdownSumur.innerHTML = option;
        })
    }

    function deleteDialog(a) {
		$('#idDialogHapus').val(a);
		$('#deleteDialog').modal('show');
    }

	$('#btnHapus').on('click', () => {
		$.post('<?= base_url('pajakabt/delete') ?>', {
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

	if(typeof(id_perusahaan) != 'undefined' && id_perusahaan != null){

		var perusahaan_dropdown = new BVSelect({
			selector: "#id_perusahaan",
			searchbox: true,
			offset: true,
			search_autofocus: true,
			width: "84%",
			placeholder: "Pilih",
			search_placeholder: "Cari...",
			breakpoint: 450
		});
	}
</script>
