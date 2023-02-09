    $(document).ready(function() {
        $('.admin-delete-petugas-btn').on('click', function() {
            const id = $(this).parents('.petugas-row').data('petugasid')
            console.log('id', id)

            modal = $('#adminDeletePetugasModal')

            modal.find('input[type=hidden]').val(id)
            console.log('clicked')
        })

    $('.admin-edit-petugas-btn').on('click', function() {
        const id = $(this).data('petugasid')
        console.log('id', id)

        $.ajax({
            url: "/transportation-ticketing/public/admin/getPetugasData",
            data: {id_petugas: id},
            dataType: "json",
            method: "post",
            success: function(data) {
                setAdminPetugasModalVal(id, data)
            },
        })
    })

    $('#admin-tambah-petugas-btn').on('click', function() {
        resetAdminPetugasModalVal()
    })

    function setAdminPetugasModalVal(id, data) {
        modal = $('#adminPetugasModal')

        // modal action route
        modal.find('form').attr('action', '/transportation-ticketing/public/admin/updatePetugas/' + id)

        // modal input values
        modal.find('#namaInput').val(data.nama_petugas)
        modal.find('#usernameInput').val(data.username)
        modal.find('#levelInput').val(data.id_level)

        // modal looks
        modal.find('.modal-title').html('Ubah Data Petugas')
        modal.find('button[type=submit]').html('Ubah')
    }

    function resetAdminPetugasModalVal() {
        modal = $('#adminPetugasModal')

        // modal action route
        modal.find('form').attr('action', '/transportation-ticketing/public/admin/storePetugas')

        // modal input values
        modal.find('#namaInput').val('')
        modal.find('#usernameInput').val('')
        modal.find('#levelInput').val('')

        // modal looks
        modal.find('.modal-title').html('Tambah Data Petugas')
        modal.find('button[type=submit]').html('Tambah')
    }
    })