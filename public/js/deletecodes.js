$( document ).ready(function() {
$('.delete').click(function() {
    let deleteCodes = $('#delete').val();
    if(!deleteCodes) {
      Swal.fire({
        position: 'center',
        icon: 'error',
        title: 'Empty field!',
        showConfirmButton: true,
    });
    }
    else {
    var formData = new FormData();
        formData.append("deleteCodes", deleteCodes);
        $.ajax
        ({
          type: "POST",
          url: "/codes/delete",
          enctype: 'multipart/form-data',
          data: formData,
          processData: false,
          contentType: false,
          cache: false,
          success: function (data) {
            myIcon = data.substring(0,5);
            myIcon == "Error" ? type = "error" : type = "success";
            Swal.fire({
                position: 'center',
                icon: type,
                title: data,
                showConfirmButton: true,
            });
            $('#delete').val('');
          },
          error: function (data) {
            Swal.fire({
              position: 'center',
              icon: 'error',
              title: data,
              showConfirmButton: true,
          });
          },
        });
      }
  });
});