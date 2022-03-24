$( document ).ready(function() {
    $('.codes').click(function() {
      
        const regCodes = /^([1-9]|10)$/;
        let userId = $('#codes').attr('name');
        let myCodes = $('#codes').val();
        
        if (!regCodes.test(myCodes)) {
            Swal.fire({
                position: 'center',
                icon: 'error',
                title: 'Choose only number between 1 and 10',
                showConfirmButton: true,
            })
        }
        else {
            var formData = new FormData();
            formData.append("userId", userId);
            formData.append("myCodes", myCodes);
            $.ajax
            ({
              type: "POST",
              url: "/codes/create",
              enctype: 'multipart/form-data',
              data: formData,
              processData: false,
              contentType: false,
              cache: false,
              success: function (data) {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: data,
                    showConfirmButton: true,
                });
                $('#codes').val('');
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