$(function() {
    jQuery.validator.addMethod("zip_code", function(value, element) {
    value = value.replace(/\s+/g, ""); 
    return this.optional(element) || value.match(/^([0-9]{3})(-[0-9]{4})?$/i);
}, "Please specify a valid zip code");
    jQuery.validator.addMethod("exist_image", function(value, element) {
    var img = '';
    img = $(".a").parent().find('img');
    console.log(img);
    if(img !== undefined)
    {
      return true;
    }
    else
    {
      return false;
    }
}, "Please upload image file");
    $("#RegisterEstimate").validate({
    rules:
    {
      "zip_code1":{
        required: true,
        zip_code : true
      },
      "zone1":{
        required: true
      },
      "erea1":{
        required: true
      },
      "step2":{
        required: true
      },
      "year1":{
        required: true
      },
      "month1":{
        required: true
      },
      "date1":{
        required: true
      },
      "year2":{
        required: true
      },
      "month2":{
        required: true
      },
      "date2":{
        required: true
      },
      "year3":{
        required: true
      },
      "month3":{
        required: true
      },
      "date3":{
        required: true
      },
      "time1":{
        required: true
      },
      "time2":{
        required: true
      },
      "time3":{
        required: true
      },
      "zip_code2":{
        required: true,
        zip_code : true
      },
      "zone2":{
        required: true
      },
      "erea2":{
        required: true
      },
      "license_drive":{
            required: true,
            accept: "image/jpeg, image/pjpeg",
            exist_image : true
        },
      "issue":{
            required: true
        },
      "issue1":{
            required: true
        },
      "issue2":{
            required: true
        },
      "mileage":{
            required: true,
            number: true
        },
      "condition":{
            required: true
        },
      "status":{
            required: true
        },
      "minimum_price":{
            required: true,
            number: true
        },
      "accept":{
            required: true
        }
    }
 })
})
function readURL(input) {
    if (input.files && input.files[0]) {
        imgId = '.preview-'+$(input).attr('data_name');
        var load_avatar = $(imgId);
        var reader = new FileReader();
        if (typeof (FileReader) != "undefined") {
            load_avatar.empty();
            var reader = new FileReader();
            reader.onload = function (e) {
                $("<img />", {
                    "src": e.target.result,
                    "width": "50px"
                }).appendTo(load_avatar);
            }
            load_avatar.show();
            reader.readAsDataURL(input.files[0]);
        }
    }
  }

$(".a").change(function(){
    readURL(this);
});
$("#RegisterEstimate").on("click", "#submit", function(e) {
    if($("#RegisterEstimate").valid())
    {
        e.preventDefault();
        var accept = $("#accept").val();
        var datetime = $("#datetime").val();
        var monthtime = $("#monthtime").val();
        var yeartime = $("#yeartime").val();
        var minimum_price = $("#minimum_price").val();
        var info_diff = $("#info_diff").val();
        var condition = $("#condition").val();
        var status = $("#status").val();
        var mileage = $("#mileage").val();
        var erea2 = $("#erea2").val();
        var zone2 = $("#zone2").val();
        var zip_code2 = $("#zip_code2").val();
        var erea1 = $("#erea1").val();
        var zone1 = $("#zone1").val();
        var zip_code1 = $("#zip_code1").val();
        var date1 = $("#date1").val();
        var month1 = $("#month1").val();
        var year1 = $("#year1").val();
        var date2 = $("#date2").val();
        var year2 = $("#year2").val();
        var month2 = $("#month2").val();
        var date3 = $("#date3").val();
        var month3 = $("#month3").val();
        var year3 = $("#year3").val();
         $.ajax({
          url: '',
          dataType: 'json',
          type: 'post',
          contentType: 'application/x-www-form-urlencoded',
          data: {accept: accept, datetime: datetime, monthtime: monthtime, yeartime: yeartime, minimum_price: minimum_price, info_diff: info_diff, condition: condition, status: status, mileage: mileage, erea2: erea2, zone2: zone2, zip_code2: zip_code2, erea1: erea1, zone1: zone1, zip_code1: zip_code1, date1: date1, month1: month1, year1: year1, date2: date2, year2: year2, month2: month2, date3: date3, month3: month3, year3: year3,fuel_csrf_token: current_token},
          success: function( data, textStatus, jQxhr ){
              var result = JSON.parse(data);
              console.log(result);
              //$(".message").html(result['messages']);
          },
          error: function( jqXhr, textStatus, errorThrown ){
              console.log( errorThrown );
          }
      });
    }
}