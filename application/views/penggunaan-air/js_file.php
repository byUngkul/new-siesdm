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
        
    }
</script>