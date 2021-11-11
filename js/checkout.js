$('#getProvince').load('data/checkout-get/province.php');
    $('#getProvince').change(function(){
        $('#getCity').removeClass('disabled');
        if (this.value == '') {
            $('#getCity').addClass('disabled');
            $('#getCity').html('<option value="">Pilih Kota</option>');
        } else {
            $('#getCity').load('data/checkout-get/city.php?id='+this.value);
        }
        $('#getCourier').addClass('disabled');
        $('#getCourier').html('<option value="">Pilih Kurir Pengiriman</option><option value="jne">JNE</option>');
        $('#getService').addClass('disabled');
        $('#getService').html('<option value="">Pilih Jenis Layanan</option>');
        $('#getCourierDetail').text('');
    });
    $('#getCity').change(function(){
        $('#getCourier').removeClass('disabled');
        $('#getCourier').html('<option value="">Pilih Kurir Pengiriman</option><option value="jne">JNE</option>');
        $('#getService').addClass('disabled');
        $('#getService').html('<option value="">Pilih Jenis Layanan</option>');
        $('#getCourierDetail').text('');
    });
    $('#getCourier').change(function(){
        var destination = $('#getCity').val();
        $('#getService').removeClass('disabled');
        if (this.value == '') {
            $('#getService').addClass('disabled');
        }
        $('#getService').load('data/checkout-get/service.php?c='+this.value+'&id='+destination);
        $('#getCourierDetail').text('');
    });
    $('#getService').change(function(){
        if (this.value == '') {
            $('#getCourierDetail').text('');
        } else {
            var destination = $('#getCity').val();
            var courier = $('#getCourier').val();
            $('#getCourierDetail').load('data/checkout-get/price.php?detailp=1&id='+destination+'&c='+courier+'&s='+this.value)
        }
    });