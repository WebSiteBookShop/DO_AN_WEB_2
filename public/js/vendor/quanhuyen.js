$(document).ready(function() {
    $("#tinhthanh").change(function() {
        var tinhthanh_id = $("#tinhthanh").val();
        $.ajax({
            url: "../quanhuyen/index",
            method: "POST",
            data: { tinhthanh_id: tinhthanh_id },

            success: function(data) {
                $("#quanhuyen").html(data);
            }
        })
    })
})