<script type="text/javascript">
    $(document).ready(() => {
		if (menu != '') {
			menu_list();
			
		}
        <?php
        if ($this->session->flashdata('error')) :
        ?>
            Swal.fire({
                title: 'Error!',
                text: '<?= $this->session->flashdata('
				error ')  ?>',
                icon: 'error',
                type: 'success',
                timer: 3000
            })
        <?php endif; ?>

        <?php
        if ($this->session->flashdata('success')) :
        ?>
            Swal.fire({
                title: 'Skses!',
                text: '<?= $this->session->flashdata('
				success ')  ?>',
                icon: 'success',
                type: 'success',
                timer: 3000
            })
        <?php endif; ?>

        table;
    });


	var akses = '<?= isset($permissions) ? $permissions : null ?>';
	var menu = '<?= isset($menus) ? $menus : null ?>';
	var user_have_permission = '<?= isset($user_permission) ? $user_permission : null ?>';

    var table = $('#table_user').dataTable({
        "processing": true,
        "serverSide": true,
        "order": [],
        "ajax": {
            "url": "<?php echo site_url('user/ajax_list') ?>",
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

    function menu_list() {
        var menu_array = JSON.parse(menu);
        var akses_array = JSON.parse(akses);
        var judul_menu = '<div class="list-group list-group-flush">';
		var user_permission = JSON.parse(user_have_permission);

        menu_array.forEach(el => {
            judul_menu += `<li class="list-group-item">${ el.display_name }</li>`;
            judul_menu += `<div class="col-sm-12 mt-1 mb-3 ml-3">`;
            akses_array.forEach(a => {
                if (a.id_menu === el.id_menu) {
                    judul_menu += `<div class="col-sm-6">
						<input name="permission[]" ${ user_permission.includes(a.id_permission) ? 'checked' : '' } class="form-check-input" value="${ a.id_permission }" style="cursor: pointer;" type="checkbox"> ${ a.display_name }
					</div>`;
                }
            });
            judul_menu += `</div>`;
        });
        judul_menu += '</div>'

        $('#permission_list').html(judul_menu);
    }
</script>
