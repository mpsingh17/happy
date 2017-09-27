$(document).ready(function() {
    $(".role_edit").click(function(event) {
        event.preventDefault();

        $("#edit_form")
            .html("<i class='fa-li fa fa-spinner fa-spin'></i>");

        let $anchorThis = $(this);
        let $url = $anchorThis.attr('href');
        // console.log($href);

        $("#edit_form").load($url, function(resTxt, statusTxt) {
            if(resTxt == "error") {
                $(this).text("Something went wrong");
            }

            $("#delete_role").click(function(event) {
                event.preventDefault();
                handleDeleteRole();   
            });
        });
    });

    function handleDeleteRole() {
        $("#delete_role_form").submit();
    }
});

// let $this = $(this);
// let $id = $this.attr('id');
// let $col2 = $("tr#" + $id + " td:eq(1)");
// let $role_name = $col2.text();

// $("#edit_role_name").val($role_name);

// let $col1 = $("tr#" + $id + " td:eq(0)");
// let $role_id = $col1.text(); 
// console.log($col1.text());
// $("#role_hidden").val($role_id);

// console.log($td.text());
