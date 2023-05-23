// BOOTSTRAP DATATABLE
$(document).ready(function () {
    $("#bootstrap_datatable").DataTable({
        scrollX: true,
    });
});

$(document).ready(function () {
    $(".bootstrap_datatable").DataTable({
        scrollX: true,
    });
});
// $(document).ready(function() {
//     $('#product-datatable').DataTable({
//         scrollX: true,
//     });
// });
// CHANGE STATUS ACTIVE OR INACTIVE WITH SWEET ALERT
$(document).on("click", ".change_status", function () {
    // SWEET ALERT START
    Swal.fire({
        title: "Are you sure?",
        text: "You want to change status!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, change this!",
    }).then((result) => {
        if (result.isConfirmed) {
            // CHANGE STATUS CODE START
            var status = $(this).children("i").attr("status");
            var status_id = $(this).attr("status_id");
            var path = $(this).attr("status_path");
            $.ajax({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                },
                url: path + "-status",
                type: "post",
                data: {
                    status: status,
                    status_id: status_id,
                },
                success: function (data) {
                    // alert(data['status'])
                    // $('.loader').fadeOut();
                    if (data["status"] == 0) {
                        $("#" + path + "-" + status_id).html(
                            '<i class="fa-regular fa-circle" status="Inactive" title="Change into active"></i>'
                        );
                    } else if (data["status"] == 1) {
                        $("#" + path + "-" + status_id).html(
                            '<i class="fa-sharp fa-solid fa-circle-check" status="Active"></i>'
                        );
                    }
                },
                error: function () {
                    alert("Error");
                },
            });
        }
    });
});
// LOADER IMAGE HIDE
$(".loader").hide();
// DELETE WITH SWEET ALERT
$(document).on("click", ".delete_row", function () {
    // DELETE CODE START
    var delete_id = $(this).attr("delete_id");
    var delete_path = $(this).attr("delete_path");

    // SWEET ALERT START
    Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!",
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire(
                "Deleted!",
                "Your " + delete_path + " has been deleted.",
                "success"
            );

            // DELETE ROUTE
            window.location = "delete-" + delete_path + "/" + delete_id;
        }
    });
});

// $('#myform').on('submit',function(e){
//     e.preventDefault();
//     alert('');
//     var form = $('#myform')[0];
//     var formData = new FormData(form);
//     // $.ajax({
//     //     headers: {
//     //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//     //     },
//     //     url: 'upload-image',
//     //     data: formData,
//     //     type:'POST',
//     //     success:function(data){
//     //         alert(data)
//     //     },error:function(){
//     //         alert('Error');
//     //     }
//     // });
// })

$("#add_gallery_btn").click(function (e) {
    e.preventDefault();
    // alert();
    $("#gallery_image").append(
        '<div class="d-flex mt-2"><input type="file" class="form-control" name="gallery_image[]"> <button type="submit" class="btn btn-danger ml-3" id="remove_gallery_btn"> <i class="fa-solid fa-trash mr-1"></i></button></div>'
    );
});

// REMOVE INVOICE ROW
$(document).on("click", "#remove_gallery_btn", function (e) {
    e.preventDefault();
    $(this).closest("div").remove();
});

$(document).on("click", "#update_banner", function (e) {
    e.preventDefault();
    // let path = $(this).attr('path');
    $.ajax({
        url: "Update-Banner/" + $(this).val(),
        type: "get",
        success: function (res) {
            if (res.status == 200) {
                $("#edit_title").val(res.banner.title);
                $("#update_banner_form").attr("update_id", res.banner.id);
            }
        },
    });
});

$(document).on("click", "#update_banner_btn", function (e) {
    e.preventDefault();
    var id = $("#update_banner_form").attr("update_id");
    // Submit the form
    $("#update_banner_form")
        .attr("action", "Update-Banner/" + id)
        .submit();
});

// CANCEL ORDER WITH SWEET ALERT
$(document).on("click", ".cancel_order", function () {
    // DELETE CODE START
    var cancel_id = $(this).attr("cancel_id");
    // var delete_path = $(this).attr("delete_path");

    // SWEET ALERT START
    Swal.fire({
        title: "Are you sure?",
        text: "You want to cancel this order!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, cancel order!",
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire(
                "Canceled!",
                "Order cancel successfully.",
                "success"
            );
            // DELETE ROUTE
            // window.location = "delete-" + delete_path + "/" + delete_id;
            window.location = "Cancel-Order/" + cancel_id;
        }
    });
});

// UPDATE STATE
$(document).on("click", "#update_state", function (e) {
    e.preventDefault();
    // let path = $(this).attr('path');
    $.ajax({
        url: "Update-State/" + $(this).val(),
        type: "get",
        success: function (res) {
            if (res.status == 200) {
                $("#edit_name").val(res.state.name);
                $("#edit_delivery_time").html('<option value="24" ' + (res.state.delivery_time == 24 ? "selected" : "") + '>24 Hours</option><option value="48" ' + (res.state.delivery_time == 48 ? "selected" : "") + '>48 Hours</option><option value="72" ' + (res.state.delivery_time == 72 ? "selected" : "") + '>72 Hours</option>');
                $("#update_state_form").attr("update_id", res.state.id);
            }
        },

    });
});

$(document).on("click", "#update_state_btn", function (e) {
    e.preventDefault();
    var id = $("#update_state_form").attr("update_id");
    // Submit the form
    $("#update_state_form")
        .attr("action", "Update-State/" + id)
        .submit();
});

$(document).on('change', '#delivery_status', function(){
    var order_id = $(this).attr('order_id');
    var value = $(this).val();
    Swal.fire({
        title: "Are you sure?",
        text: "You want to change this status!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes",
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire(
                "Changed!",
                "Order status change successfully.",
                "success"
            );
            // DELETE ROUTE
            window.location = "Change-Order-Status/" + order_id + "/" + value;
        }
    });
    // window.location = "Change-Order-Status/" + order_id + "/" + value;
})
