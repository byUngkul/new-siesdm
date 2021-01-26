<script type="text/javascript">
    $(document).ready(() => {
        menu_list();
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
                className: "",
                "targets": [3],
                "orderable": true,
            },
            {
                className: "",
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
        let akses = '<?= isset($permissions) ? $permissions : null ?>';
        let menu = '<?= isset($menus) ? $menus : null ?>';
        var menu_array = JSON.parse(menu);
        var akses_array = JSON.parse(akses);
        var judul_menu = '<div class="list-group list-group-flush">';

        menu_array.forEach(el => {
            console.log(el)
            console.log(akses_array)
            judul_menu += `<li class="list-group-item">${ el.display_name }</li>`;
            judul_menu += `<div class="col-sm-12 mt-1 mb-3 ml-3">`;
            akses_array.forEach(a => {
                if (a.id_menu === el.id_menu) {
                    judul_menu += `<div class="col-sm-6"><input name="permission[]" class="form-check-input" value="${ a.id_permission }" type="checkbox"> ${ a.display_name }</div>`;
                }
            });
            judul_menu += `</div>`;
        });
        judul_menu += '</div>'

        $('#permission_list').html(judul_menu);
    }
</script>

<input type="checkbox" value="">