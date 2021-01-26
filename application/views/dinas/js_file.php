<script type="text/javascript">
    var preview = $('#logoPreview');
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#logoPreview').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
            preview.slideDown(100)
        }
    }

    $("#logo").change(function() {
        preview.hide();
        readURL(this);
    });

    $('#btnEdit').click((e) => {
        e.preventDefault();

        $('#btnSimpan').css("display", "block");
        $('#btnEdit').css("display", "none");
        $('.form-control').removeAttr('readonly');
    })

    
</script>