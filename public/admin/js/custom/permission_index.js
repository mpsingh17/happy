$(document).ready(function () {
    $(".permission_edit").click(function (event) {
        event.preventDefault();

        $("#edit_form")
            .html("<i class='fa-li fa fa-spinner fa-spin'></i>");

        let $anchorThis = $(this);
        let $url = $anchorThis.attr('href');
        // console.log($href);

        $("#edit_form").load($url, function (status) {
            if (status == "error") {
                $(this).text("Something went wrong");
            }

            $("#delete_permission").click(function (event) {
                event.preventDefault();
                handleDeletePermission();
            });
        });
    });

    function handleDeletePermission() {
        $("#delete_permission_form").submit();
    }
});
