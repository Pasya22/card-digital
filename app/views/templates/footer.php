<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="<?= BASEURL; ?>js/script.js"></script>
<script src="https://kit.fontawesome.com/09e00d7278.js" crossorigin="anonymous"></script>
<script>
    $('input').focus(function() {
        $(this).parents('.form-group').addClass('focused');
    });

    $('input').blur(function() {
        var inputValue = $(this).val();
        if (inputValue == "") {
            $(this).removeClass('filled');
            $(this).parents('.form-group').removeClass('focused');
        } else {
            $(this).addClass('filled');
        }
    })
</script>
</body>

</html>