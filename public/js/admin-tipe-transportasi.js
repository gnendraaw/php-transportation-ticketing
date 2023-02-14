$(document).ready(function() {
    $('.admin-edit-tipe-btn').on('click', function() {
        const id = $(this).parents('.tipe-transportasi-row').data('tipetransportasiid')
        console.log('id', id)
        console.log('clicked')

        $.ajax({
            url: "/transportation-ticketing/public/admin/getTipeTransportationData",
            data: {id_tipe_transportasi: id},
            dataType: "json",
            method: "post",
            success: function(data) {
                console.log('ajax completed')
            },
        })
    })

    function setTipeTransportasiModal(data)
    {
        modal = $('#adminTipeTransportasiModal')

        // modal input values
        modal.find('form').attr('action', data.actionRoute)
        modal.find('#namaTipeInput').val(data.nama)
        modal.find('#keteranganTipeInput').val(data.keterangan)

        // modal looks
        modal.find('button[type=submit]').html(data.btnText)
    }
})