$(function() {
  $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
    jQuery.validator.addMethod("phone", function(value, element) {
    value = value.replace(/\s+/g, ""); 
    return this.optional(element) || value.length > 9 &&
        value.match(/\(?([0-9]{2})\)?([ .-]?)([0-9]{4})\2([0-9]{4})/);
}, "Please specify a valid phone number");
    $("#FormRegisterSeller1").validate({
    rules:
    {
      "seller_name":{
        required: true
      },
      "seller_tel":{
        required: true,
        phone: true
      },
      "seller_maker":{
        required: true
      },
      "seller_car_type":{
        required: true
      },
      "seller_date":{
        date: true
      },
      "seller_email":{
        email: true
      },
    },
    tooltip_options: {
    },
 })
    $("#FormRegisterSeller2").validate({
    rules:
    {
      "seller_name":{
        required: true
      },
      "seller_tel":{
        required: true,
        phone: true
      },
      "seller_maker":{
        required: true
      },
      "seller_car_type":{
        required: true
      },
      "seller_date":{
        date: true
      },
      "seller_email":{
        email: true
      },
    },
    tooltip_options: {
    },
 })
    $("#FormRegisterSeller3").validate({
    rules:
    {
      "seller_name":{
        required: true
      },
      "seller_tel":{
        required: true,
        phone: true
      },
      "seller_maker":{
        required: true
      },
      "seller_car_type":{
        required: true
      },
      "seller_date":{
        date: true
      },
      "seller_email":{
        email: true
      },
    },
    tooltip_options: {
    },
 })
    $("#FormRegisterSeller3").on("click", "#submit3", function(e) {
        if($("#FormRegisterSeller3").valid())
        {
            e.preventDefault();
        var current_token = '{{csrf_token()}}';
        var seller_maker = $("#seller_maker3").val();
        var seller_car_type = $("#seller_car_type3").val();
        var seller_date = $("#seller_date3").val();
        var seller_mileage = $("#seller_mileage3").val();
        var seller_tel = $("#seller_tel3").val();
        var seller_name = $("#seller_name3").val();
        var seller_zone = $("#seller_zone3").val();
        var seller_email = $("#seller_email3").val();
        if(seller_maker != '' && seller_car_type != '' && seller_tel != '' && seller_name !='')
        {
            $.ajax({
              url: 'user/set-info',
              dataType: 'text',
              type: 'post',
              headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
              contentType: 'application/x-www-form-urlencoded',
              data: {makers: seller_maker, cars: seller_car_type, year: seller_date, mileage: seller_mileage, phone: seller_tel, name: seller_name, zone: seller_zone, email: seller_email, fuel_csrf_token: current_token},
              success: function( data, textStatus, jQxhr ){
                  var result = JSON.parse(data);
                  console.log(result);
              },
              error: function( jqXhr, textStatus, errorThrown ){
                  console.log( errorThrown );
              }
          });
        }
        }
    })
    $("#FormRegisterSeller2").on("click", "#submit2", function(e) {
        if($("#FormRegisterSeller2").valid())
        {
            e.preventDefault();
            var current_token = '{{csrf_token()}}';
        var seller_maker = $("#seller_maker2").val();
        var seller_car_type = $("#seller_car_type2").val();
        var seller_date = $("#seller_date2").val();
        var seller_mileage = $("#seller_mileage2").val();
        var seller_tel = $("#seller_tel2").val();
        var seller_name = $("#seller_name2").val();
        var seller_zone = $("#seller_zone2").val();
        var seller_email = $("#seller_email2").val();
        if(seller_maker != '' && seller_car_type != '' && seller_tel != '' && seller_name !='')
        {
            $.ajax({
              url: 'user/set-info',
              dataType: 'text',
              type: 'post',
              headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
              contentType: 'application/x-www-form-urlencoded',
              data: {makers: seller_maker, cars: seller_car_type, year: seller_date, mileage: seller_mileage, phone: seller_tel, name: seller_name, zone: seller_zone, email: seller_email, fuel_csrf_token: current_token},
              success: function( data, textStatus, jQxhr ){
                  var result = JSON.parse(data);
                  console.log(result);
              },
              error: function( jqXhr, textStatus, errorThrown ){
                  console.log( errorThrown );
              }
          });
        }
        }
    })
    $("#FormRegisterSeller1").on("click", "#submit1", function(e) {
        if($("#FormRegisterSeller1").valid())
        {
            e.preventDefault();
            var current_token = '{{csrf_token()}}';
        var seller_maker = $("#seller_maker").val();
        var seller_car_type = $("#seller_car_type").val();
        var seller_date = $("#seller_date").val();
        var seller_mileage = $("#seller_mileage").val();
        var seller_tel = $("#seller_tel").val();
        var seller_name = $("#seller_name").val();
        var seller_zone = $("#seller_zone").val();
        var seller_email = $("#seller_email").val();
        if(seller_maker != '' && seller_car_type != '' && seller_tel != '' && seller_name !='')
        {
            $.ajax({
              url: 'user/set-info',
              dataType: 'text',
              type: 'post',
              headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
              contentType: 'application/x-www-form-urlencoded',
              data: {makers: seller_maker, cars: seller_car_type, year: seller_date, mileage: seller_mileage, phone: seller_tel, name: seller_name, zone: seller_zone, email: seller_email, fuel_csrf_token: current_token},
              success: function( data, textStatus, jQxhr ){
                  var result = JSON.parse(data);
                  console.log(result);
              },
              error: function( jqXhr, textStatus, errorThrown ){
                  console.log( errorThrown );
              }
          });
        }
        }
    })
})