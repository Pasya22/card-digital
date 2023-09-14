function menuFunction() {
    var x = document.getElementById("menu-tani");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

$(".toggle-password").click(function() {
    $(this).toggleClass("fa-eye fa-eye-slash");
    var input = $('#password');
    if (input.attr("type") == "password") {
        input.attr("type", "text");
    } else {
        input.attr("type", "password");
    }
});

$(".toggle-konfirmasi-password").click(function() {
    $(this).toggleClass("fa-eye fa-eye-slash");
    var input = $('#password1');
    if (input.attr("type") == "password") {
        input.attr("type", "text");
    } else {
        input.attr("type", "password");
    }
});

function menuButton() {
    document.getElementById("menu-button-box").classList.toggle("show");
}

window.onclick = function(event) {
    if (!event.target.matches(".menu-button span")) {
        var dropdowns = document.getElementsByClassName("menu-button-box");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
        }
        }
    }
}

function menuProfile() {
    document.getElementById("menu-profile-box").classList.toggle("show");
}

window.onclick = function(event) {
    if (!event.target.matches(".menu-profile span")) {
        var dropdowns = document.getElementsByClassName("menu-profile-box");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
        }
        }
    }
}

function menuPenyuluh() {
    var x = document.getElementById("menu-penyuluh");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

function menuInfo() {
    var x = document.getElementById("menu-info");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

function hapus() {
    alert('yakin')
};

const previewImage = (event) => {
    /**
     * Get the selected files.
     */
    const imageFiles = event.target.files
    /**
     * Count the number of files selected.
     */
    const imageFilesLength = imageFiles.length
    /**
     * If at least one image is selected, then proceed to display the preview.
     */
    if (imageFilesLength > 0) {
        /**
         * Get the image path.
         */
        const imageSrc = URL.createObjectURL(imageFiles[0])
        /**
         * Select the image preview element.
         */
        const imagePreviewElement = document.querySelector("#preview-selected-image")
        const imageBefore = document.querySelector("#gambarLama")
        /**
         * Assign the path to the image preview element.
         */
        imagePreviewElement.src = imageSrc
        /**
         * Show the element by changing the display value to "block".
         */
        imagePreviewElement.style.display = "block"
        imageBefore.style.display = "none"
    }
}

const previewImage1 = (event) => {
    /**
     * Get the selected files.
     */
    const imageFiles = event.target.files
    /**
     * Count the number of files selected.
     */
    const imageFilesLength = imageFiles.length
    /**
     * If at least one image is selected, then proceed to display the preview.
     */
    if (imageFilesLength > 0) {
        /**
         * Get the image path.
         */
        const imageSrc = URL.createObjectURL(imageFiles[0])
        /**
         * Select the image preview element.
         */
        const imagePreviewElement = document.querySelector("#gambar1")
        const imageBefore = document.querySelector("#gambarLama1")
        /**
         * Assign the path to the image preview element.
         */
        imagePreviewElement.src = imageSrc
        /**
         * Show the element by changing the display value to "block".
         */
        imagePreviewElement.style.display = "block"
        imageBefore.style.display = "none"
    }
}

const previewImage2 = (event) => {
    /**
     * Get the selected files.
     */
    const imageFiles = event.target.files
    /**
     * Count the number of files selected.
     */
    const imageFilesLength = imageFiles.length
    /**
     * If at least one image is selected, then proceed to display the preview.
     */
    if (imageFilesLength > 0) {
        /**
         * Get the image path.
         */
        const imageSrc = URL.createObjectURL(imageFiles[0])
        /**
         * Select the image preview element.
         */
        const imagePreviewElement = document.querySelector("#gambar2")
        const imageBefore = document.querySelector("#gambarLama2")
        /**
         * Assign the path to the image preview element.
         */
        imagePreviewElement.src = imageSrc
        /**
         * Show the element by changing the display value to "block".
         */
        imagePreviewElement.style.display = "block"
        imageBefore.style.display = "none"
    }
}

const previewImage3 = (event) => {
    /**
     * Get the selected files.
     */
    const imageFiles = event.target.files
    /**
     * Count the number of files selected.
     */
    const imageFilesLength = imageFiles.length
    /**
     * If at least one image is selected, then proceed to display the preview.
     */
    if (imageFilesLength > 0) {
        /**
         * Get the image path.
         */
        const imageSrc = URL.createObjectURL(imageFiles[0])
        /**
         * Select the image preview element.
         */
        const imagePreviewElement = document.querySelector("#gambar3")
        const imageBefore = document.querySelector("#gambarLama3")
        /**
         * Assign the path to the image preview element.
         */
        imagePreviewElement.src = imageSrc
        /**
         * Show the element by changing the display value to "block".
         */
        imagePreviewElement.style.display = "block"
        imageBefore.style.display = "none"
    }
}

const previewImage4 = (event) => {
    /**
     * Get the selected files.
     */
    const imageFiles = event.target.files
    /**
     * Count the number of files selected.
     */
    const imageFilesLength = imageFiles.length
    /**
     * If at least one image is selected, then proceed to display the preview.
     */
    if (imageFilesLength > 0) {
        /**
         * Get the image path.
         */
        const imageSrc = URL.createObjectURL(imageFiles[0])
        /**
         * Select the image preview element.
         */
        const imagePreviewElement = document.querySelector("#gambar4")
        const imageBefore = document.querySelector("#gambarLama4")
        /**
         * Assign the path to the image preview element.
         */
        imagePreviewElement.src = imageSrc
        /**
         * Show the element by changing the display value to "block".
         */
        imagePreviewElement.style.display = "block"
        imageBefore.style.display = "none"
    }
}

const previewImage5 = (event) => {
    /**
     * Get the selected files.
     */
    const imageFiles = event.target.files
    /**
     * Count the number of files selected.
     */
    const imageFilesLength = imageFiles.length
    /**
     * If at least one image is selected, then proceed to display the preview.
     */
    if (imageFilesLength > 0) {
        /**
         * Get the image path.
         */
        const imageSrc = URL.createObjectURL(imageFiles[0])
        /**
         * Select the image preview element.
         */
        const imagePreviewElement = document.querySelector("#gambar5")
        const imageBefore = document.querySelector("#gambarLama5")
        /**
         * Assign the path to the image preview element.
         */
        imagePreviewElement.src = imageSrc
        /**
         * Show the element by changing the display value to "block".
         */
        imagePreviewElement.style.display = "block"
        imageBefore.style.display = "none"
    }
}


function getDesa(){
    let kecamatan_id = $('#kecamatan').val();
  
    $.ajax({
        type:'POST',
        url: 'http://localhost/siketan/public/Menu/setProfile',
        data: {
            kecamatan_id : kecamatan_id,
            function_name : 'getDesa'
        },
        beforeSend: function(){
            $('#desa').empty()
            $('#desa').append(
                '<option value="">-- Pilih Desa --</option>'
            )
        },
        success: function(response){
            let data = JSON.parse(response)
            

            for (let i = 0; i < data.length; i++) {
                $('#desa').append(
                    '<option value="'+data[i].desa_id+'">'+data[i].nama+'</option>'
                )
            }
        }
    })
}

function getDesaUser(){
    let desa_id = $('#desa').val();

    $.ajax({
        type:'POST',
        url: 'http://localhost/siketan/public/Menu/setUser',
        data: {
            desa_id : desa_id,
            function_name : 'getDesaUser'
        },
        beforeSend: function(){
            $('#tableUser').empty()
            $('#tableUser').append(
                '<tr><th class="no">NO.</th><th class="tanggal">Tanggal</th><th class="name">Nama</th><th class="role">Role</th><th class="aksi">Aksi</th></tr>'
            )
        },
        success: function(response){ 
            let data = JSON.parse(response)
            
                for (let i = 0 , y = 1; i < data.length; i++, y++) {
                    $('#tableUser').append(
                        '<tr><td class="no">'+[y]+'</td><td class="tanggal">'+data[i].dibuat+'</td><td class="name">'+data[i].username+'</td><td class="role">'+data[i].role+'</td><td class="aksi"> <div class="button-box"><a href="http://localhost/siketan/public/Admin/ubah/'+data[i].user_id+'" class="edit"><span class="material-symbols-outlined">edit_square</span></a><a href="http://localhost/siketan/public/Admin/hapusUser/'+data[i].user_id+'" class="hapus"><span class="material-symbols-outlined">delete</span></a></div></td></tr>'
                    )
                }
        }
    })
}

function getDesaPenyuluh(){
    let desa_id = $('#desa').val();

    $.ajax({
        type:'POST',
        url: 'http://localhost/siketan/public/Menu/setPenyuluh',
        data: {
            desa_id : desa_id,
            function_name : 'getDesaPenyuluh'
        },
        beforeSend: function(){
            $('#tableUser').empty()
            $('#tableUser').append(
                '<tr><th class="no">NO.</th><th class="tanggal">Nama</th><th class="name">Nip</th><th class="role">Laporan</th><th class="aksi">Aksi</th></tr>'
            )
        },
        success: function(response){ 
            let data = JSON.parse(response)
            
                for (let i = 0 , y = 1; i < data.length; i++, y++) {
                    $('#tableUser').append(
                        '<tr><td class="no">'+[y]+'</td><td class="tanggal">'+data[i].username+'</td><td class="name">'+data[i].nip+'</td> <td class="pulang"><div class="button-box"><a href="http://localhost/siketan/public/Admin/kehadiran/'+data[i].penyuluh_id+'" class="btn-green">Lihat</a></div></td><td class="aksi"> <div class="button-box"><a href="http://localhost/siketan/public/Admin/ubahPenyuluh/'+data[i].penyuluh_id+'" class="edit"><span class="material-symbols-outlined">edit_square</span></a><a href="http://localhost/siketan/public/Admin/hapusPenyuluh/'+data[i].penyuluh_id+'" class="hapus"><span class="material-symbols-outlined">delete</span></a></div></td></tr>'
                    )
                }
        }
    })
}

function getRoleUser(){
    let role = $('#role').val();

    $.ajax({
        type:'POST',
        url: 'http://localhost/siketan/public/Menu/setRole',
        data: {
            role : role,
            function_name : 'getRoleUser'
        },
        beforeSend: function(){
            $('#tableUser').empty()
            $('#tableUser').append(
                '<tr><th class="no">NO.</th><th class="tanggal">Tanggal</th><th class="name">Nama</th><th class="role">Role</th><th class="aksi">Aksi</th></tr>'
            )
        },
        success: function(response){
            let data = JSON.parse(response)
            
                for (let i = 0 , y = 1; i < data.length; i++, y++) {
                    $('#tableUser').append(
                        '<tr><td class="no">'+[y]+'</td><td class="tanggal">'+data[i].dibuat+'</td><td class="name">'+data[i].username+'</td><td class="role">'+data[i].role+'</td><td class="aksi"> <div class="button-box"><a href="http://localhost/siketan/public/Admin/ubah/'+data[i].user_id+'" class="edit"><span class="material-symbols-outlined">edit_square</span></a><a href="http://localhost/siketan/public/Admin/hapusUser/'+data[i].user_id+'" class="hapus"><span class="material-symbols-outlined">delete</span></a></div></td></tr>'
                    )
                }
        }
    })
}

function alert() {
    Swal.fire({
        position: 'top-end',
        icon: '<php?>',
        title: 'Your work has been saved',
        showConfirmButton: false,
        timer: 1500
    })
};

$(document).ready(function(){
    $(".alert-dismissible").fadeIn().delay(2000).fadeOut();
});

// setTimeout(() => {
//     let get = document.getElementById('myAlert');
//     get.style.display = 'none';
//     }, 5000);



    // $(document).ready(function() {
    //     $("#kecamatan").change(function() {
    //         $("#desa").load(window.location.href + " #desa" );
    //     });
    //   });


    // $("#kecamatan").change(function(){
    //     // variabel dari nilai combo box kendaraan
    //     var id_kecamatan = $("#kecamatan").val();

    //     // Menggunakan ajax untuk mengirim dan dan menerima data dari server
    //     $.ajax({
    //         type: "POST",
    //         dataType: "html",
    //         url: "http://localhost/siketan/user/public/menu/profile",
    //         data: "kendaraan="+id_kecamatan,
    //         success: function(data){
    //             $("#desa").html(data);
    //         }
    //     });
    // });
    