$( document ).ready(function() {
$('#deleteAccount').click(function() {
    let user = $('#deleteAccount').attr('name');
    Swal.fire({
      title: 'Are you sure to delete your account?',
      text: "Yours codes will detele also",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
      if (result.isConfirmed) {
        var formData = new FormData();
        formData.append("user", user);
        $.ajax
        ({
          type: "POST",
          url: "/deleteaccount",
          enctype: 'multipart/form-data',
          data: formData,
          processData: false,
          contentType: false,
          cache: false,
          success: function () {
            Swal.fire(
              'Deleted!',
              'Your account has been deleted.',
              'success'
            ),
            setTimeout(function() {
              window.location.href = "/"
             }, 3000);
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
      };
    });
  });
});