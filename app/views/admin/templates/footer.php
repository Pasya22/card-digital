<footer>

</footer>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
<script src="https://kit.fontawesome.com/09e00d7278.js" crossorigin="anonymous"></script>
<script src="<?= BASEURL; ?>js/script.js"></script>
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
    var btnMenu = document.getElementById('btn-menu-admin');
    var sidebar = document.getElementById('sidebarAdmin');
    var ctnAdmin = document.getElementById('contentAdmin');
    btnMenu.addEventListener('click', function () {
        if (sidebar.style.display === "none") {
            sidebar.style.display = "block";
        } else {
            sidebar.style.display = "none";
            ctnAdmin.style.width = "100%";
        }
    })
</script>
</body>

</html>

<script>
    // function previewImage(event) {
    //     var input = event.target;
    //     var preview = document.getElementById('preview');

    //     var reader = new FileReader();
    //     reader.onload = function () {
    //         preview.src = reader.result;
    //     };
    //     reader.readAsDataURL(input.files[0]);
    // }
</script>

