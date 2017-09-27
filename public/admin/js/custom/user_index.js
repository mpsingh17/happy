$(document).ready(function () {
    $("#btn_add_user").click(function(event) {
        event.preventDefault();
        
        $("#add_form")
            .html("<i class='fa-li fa fa-spinner fa-spin'></i>");

        let $anchor_this = $(this);
        let $url = $anchor_this.attr("href");

        $("#add_form").load($url, function(status) {
            if(status == "error") {
                $(this).html("<h3 class='alert alert-danger'>Something went wrong</h3>");
            }
        });
    });

    //handling view user.
    $(".btn_view_user").click(function(event) {
        event.preventDefault();

        $("#view_user").html("<i class='fa-li fa fa-spinner fa-spin'></i>");

        let $anchor_this = $(this);
        let $url = $anchor_this.attr("href");

        $("#view_user").load($url, function (status) {
            if (status == "error") {
                $(this).html("<h3 class='alert alert-danger'>Something went wrong</h3>");
            }
        });
    });

    //handling view edit user form.
    $(".btn_edit_user").click(function() {
        event.preventDefault();

        $("#edit_form").html("<i class='fa-li fa fa-spinner fa-spin'></i>");

        let $anchor_this = $(this);
        let $url = $anchor_this.attr("href");

        $("#edit_form").load($url, function (status) {
            if (status == "error") {
                $(this).html("<h3 class='alert alert-danger'>Something went wrong</h3>");
            }

            $("#btn_delete_user").click(function (event) {
                event.preventDefault();
                handleUserDelete();
            });
        });
    });

    function handleUserDelete() {
        $("#delete_user_form").submit();
    }
});
