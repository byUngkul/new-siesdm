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
    });

    var table = $('#tabelPegawai').DataTable({
        "processing": true,
        "serverSide": true,
        "order": [],
        "ajax": {
            "url": "<?php echo site_url('pegawai/ajax_list') ?>",
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
                className: "text-center",
                "targets": [4],
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

    function deleteDialog(a) {
		$('#idDialogHapus').val(a);
		$('#deleteDialog').modal('show');
    }

	$('#btnHapus').on('click', () => {
		$.post('<?= base_url('pegawai/delete') ?>', {
            id: $('#idDialogHapus').val()
        }, (res) => {
			var aa = JSON.parse(res);
			$('#deleteDialog').modal('hide');
			
			if (aa.data == 'success') {
				Swal.fire({
					title: 'Skses!',
					text: 'data berhasil di hapus!',
					icon: 'success',
					type: 'success',
					timer: 3000
				});

				table.ajax.reload();
			}
		});
	});
</script>