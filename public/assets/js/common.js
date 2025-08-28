var base_url = $("#base_url").val();
var login_user_role = $("#login_user_role").val();

$(document).on("click", ".change-status, .btn-table-delete", function () {
    var action = $(this).data("action");
    var id = $(this).data("id");
    var model = $(this).data("model");
    var flash = $(this).data("flash");
    var actionDiv = $(this);
    var confirm_message = (action == "active_inactive" ? "Do you really want to change status ?" : "Do you really want to delete ?");
    swal({
        title: "Are you sure?",
        text: confirm_message,
        icon: "warning",
        buttons: true,
        dangerMode: true,
    }).then((willDelete) => {
        if (willDelete) {
            console.log(id, model, action, flash)
            $.ajax({
                type: "post",
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                },
                data: { 
                    id: id, 
                    model: model, 
                    action: action, 
                    flash: flash  
                },
                url: base_url + "/admin/change-status",
                beforeSend: function () {
                    $(this).hide();
                    actionDiv.html("<i class='fa fa-spin fa-spinner' style='color: #0c0c0c !important;'></i>").show();
                },
                success: function (data) {
                    console.log(data)
                    if (data.status) {
                        var table = $("#casino_data_table").DataTable();
                        if (data.user_status == "active") {
                            actionDiv.html('<i class="fa fa-toggle-on tgle-on status_button" aria-hidden="true" title="Change status"></i>');
                        } else if(data.user_status == "inactive") {
                            actionDiv.html('<i class="fa fa-toggle-off tgle-off status_button" aria-hidden="true" title="Change status"></i>');
                        } else {
                            actionDiv.closest('tr').remove();
                        }
                        success_toast("success", data.message);
                        table.ajax.reload(null, false);
                    } else {
                        if (data.user_status == "active") {
                            actionDiv.html('<i class="fa fa-toggle-on tgle-on status_button" aria-hidden="true" title="Change status"></i>');
                        } 
                        if(data.user_status == "inactive") {
                            actionDiv.html('<i class="fa fa-toggle-off tgle-off status_button" aria-hidden="true" title="Change status"></i>');
                        }
                        error_toast("error", data.message);
                    }
                },
            });
        }
    });
});

$(".pass-show").on('click', function() {
    var passwordId = $(this).siblings();
    if (passwordId.attr("type") === "password") {
        passwordId.attr("type", "text");
        $(this).find("svg").removeClass("fa-eye")
        $(this).find("svg").addClass("fa-eye-slash")
    } else {
        passwordId.attr("type", "password");
        $(this).find("svg").addClass("fa-eye")
        $(this).find("svg").removeClass("fa-eye-slash")
    }
});

$(document).ready(function() {
    setTimeout(function() {
        $('.backend-error').fadeOut('slow');
    }, 10000);
});

$(document).ready(function(){
    const SESSION_TIMEOUT = 2 * 60 * 60 * 1000; // 2 hours
    let timeout;

    function refreshPage() {
        location.reload();
    }

    function resetTimer() {
        clearTimeout(timeout);
        timeout = setTimeout(refreshPage, SESSION_TIMEOUT);
    }

    window.onload = resetTimer;
    document.onmousemove = resetTimer;
    document.onkeydown = resetTimer;

    setTimeout(() => {
        refreshPage();
    }, SESSION_TIMEOUT);
})



