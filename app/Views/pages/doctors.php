<div class="container-fluid">
    <div id="doctors_cards" class="mx-auto my-manual">

    </div>
</div>

<script>
    let base_url = "<?php echo base_url();?>";
    function get_doctors() {
        $.ajax({
            url:  base_url + "/Doctors/get_doctors",
            method: 'POST',
            data: {

            },
            dataType:"text",
            success: function(data) {

                document.getElementById('doctors_cards').innerHTML = data;
            }
        });
    }
    $(document).ready(function() {
         get_doctors();
    });
</script>
