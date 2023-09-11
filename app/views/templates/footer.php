<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="<?= BASEURL; ?>js/script.js"></script>
<script src="<?= BASEURL; ?>assets/sweet/sweetalert2.min.js"></script>
<script src="https://kit.fontawesome.com/09e00d7278.js" crossorigin="anonymous"></script>
<script>
    $('input').focus(function () {
        $(this).parents('.form-group').addClass('focused');
    });

    $('input').blur(function () {
        var inputValue = $(this).val();
        if (inputValue == "") {
            $(this).removeClass('filled');
            $(this).parents('.form-group').removeClass('focused');
        } else {
            $(this).addClass('filled');
        }
    })
</script>

<script>
    $(document).ready(function () {

        $(".btn-login").click(function () {

            var username = $("#username").val();
            var password = $("#password").val();

            if (username.length == "") {

                Swal.fire({
                    type: 'warning',
                    title: 'Oops...',
                    text: 'Username Wajib Diisi !'
                });

            } else if (password.length == "") {

                Swal.fire({
                    type: 'warning',
                    title: 'Oops...',
                    text: 'Password Wajib Diisi !'
                });

            } else {

                $.ajax({

                    url: "<?= BASEURL ?>auth/loginUser",
                    type: "POST",
                    data: {
                        "username": username,
                        "password": password
                    },

                    success: function (response) {

                        if (response == "success") {

                            Swal.fire({
                                type: 'success',
                                title: 'Login Berhasil!',
                                text: 'Anda akan di arahkan dalam 3 Detik',
                                timer: 3000,
                                showCancelButton: false,
                                showConfirmButton: false
                            })
                                .then(function () {
                                    window.location.href = "dashboard.php";
                                });

                        } else {

                            Swal.fire({
                                type: 'error',
                                title: ' ',
                                text: 'silahkan coba lagi!'
                            });

                        }

                        console.log(response);

                    },

                    error: function (response) {

                        Swal.fire({
                            type: 'error',
                            title: 'Opps!',
                            text: 'server error!'
                        });

                        console.log(response);

                    }

                });

            }

        });

    });

    //     Swal.fire({
    //   position: 'top-end',
    //   icon: 'success',
    //   title: 'Your work has been saved',
    //   showConfirmButton: false,
    //   timer: 1500
    // })
</script>

</body>

</html>