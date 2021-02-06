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

        <?php if (isset($penggunaanair)) : ?>
            noSumurDropdown();
        <?php endif ?>
    });

    var table = $('#tabelPenggunaanAir').dataTable({
        "processing": true,
        "serverSide": true,
        "order": [],
        "ajax": {
            "url": "<?php echo site_url('penggunaanair/ajax_list') ?>",
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
            {
                className: "text-center",
                "targets": [7],
                "orderable": false,
            },
            {
                className: "text-center",
                "targets": [8],
                "orderable": false,
            },
            {
                className: "text-center",
                "targets": [9],
                "orderable": false,
            },
            {
                className: "text-center",
                "targets": [10],
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

    $('#bulan').datepicker({
        format: "mm",
        minViewMode: 1,
        language: "id"
    });

    $('#tahun').datepicker({
        format: "yyyy",
        minViewMode: 2,
        language: "id"
    });

    function noSumurDropdown() {
        let id_perusahaan = document.getElementById('id_perusahaan');
        let dropdownSumur = document.getElementById('id_sumur');
        let option = '<option>Pilih</option>';
        let penggunaanair = '<?= isset($penggunaanair) ? json_encode($penggunaanair) : '' ?>';
        let dataConv = (penggunaanair != '') ?
            JSON.parse(penggunaanair) : '';

        $.post('<?= base_url('penggunaanair/dorpdownSumur') ?>', {
            id_perusahaan: id_perusahaan.value
        }, (res) => {
            var aa = JSON.parse(res);

            aa.forEach((el, index) => {
                if (dataConv == '') {
                    option += `<option value="${ el.id_sumur }">${ el.no_sumur }</option>`;
                } else {
                    option += `<option ${(dataConv.id_sumur == el.id_sumur) ? 'selected' : ''} value="${ el.id_sumur }">${ el.no_sumur }</option>`;
                }
            });

            dropdownSumur.innerHTML = option;
        })
    }

    function deleteDialog(a) {

    }
</script>