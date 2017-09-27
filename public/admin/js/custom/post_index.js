$(document).ready(function() {
    $(".post_view").click(function(event) {
        event.preventDefault();

        $("#view_post").html("<i class='fa-li fa fa-spinner fa-spin'></i>");

        $anchorRef = $(this);
        $url = $anchorRef.attr("href");

        $("#view_post").load($url, function (status) {
            if (status == "error") {
                $(this).html("<p>Something went wrong.</p>");
            }
        });
    });

    $(".post_edit").click(function (event) {
        event.preventDefault();

        $("#edit_post").html("<i class='fa-li fa fa-spinner fa-spin'></i>");

        $anchorRef = $(this);
        $url = $anchorRef.attr("href");

        $("#edit_post").load($url, function (status) {
            if (status == "error") {
                $(this).html("<p>Something went wrong.</p>");
            }

            //submit delte form.
            $("#btn_delete_post").click(function (event) {
                event.preventDefault();

                $("#form_delete_post").submit();
            });
        });
    });
});