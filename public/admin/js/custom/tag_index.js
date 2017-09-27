$(document).ready(function() {
    $(".tag_edit").click(function(event) {
        event.preventDefault();

        $("#div_edit_tag").html("<i class='fa-li fa fa-spinner fa-spin'></i>");

        $anchorRef = $(this);
        $url = $anchorRef.attr("href");

        $("#div_edit_tag").load($url, function(status) {
            if (status == "error") {
                $(this).html("<p>Something went wrong.</p>")
            }

            $("#delete_tag").click(function(event) {
                event.preventDefault();
                $("#form_delete_tag").submit();
            });
        });
    });
});