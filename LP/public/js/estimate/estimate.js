$(function() {
    jQuery.validator.addMethod("zip_code", function(value, element) {
    value = value.replace(/\s+/g, ""); 
    return this.optional(element) || value.match(/^([0-9]{3})(-[0-9]{4})?$/i);
}, "Please specify a valid zip code");
    $("#RegisterEstimate").validate({
    rules:
    {
      "zip_code2":{
        required: true,
        zip_code : true,
        maxlength: 8
      },
      "zone2":{
        required: true
      },
      "erea2":{
        required: true
      },
      "camera":{
            required: true
        },
      "camera1":{
            required: true
        },
      "camera2":{
            required: true
        },
      "camera3":{
            required: true
        },
      "camera4":{
            required: true
        },
      "camera5":{
            required: true
        },
      "camera6":{
            required: true
        },
      "camera7":{
            required: true
        },
      "license_drive":{
            required: true,
            accept: "image/*"
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
    $("#RegisterEstimateAssessor").validate({
    rules:
    {
        "zip_code1":{
        required: true,
        zip_code : true,
        maxlength: 8
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
      "accept1":{
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
         $.ajax({
          headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          url: 'estimate/seller-add',
          dataType: 'json',
          type: 'post',
          data: getEstimateData(),
          contentType: false,
          processData: false,
          cache : false,
          success: function( data, textStatus, jQxhr ){
            if(data.status == true)
            {
              $.notify('Success',{
                            newest_on_top: true,
                            type: 'success',
                            timer: '2000'
                        });
              // $.get("/estimate/destroy",function(e)
              // {
              //   setTimeout(function(){window.location = 'user'} , 2000);
              // })
            }
            else
            {
              var er_phone = '';
              var er_email = '';
              var er_zip = '';
              if(data['email1'] != undefined)
              {
                er_email = data['email1'][0];
              }
              if(data['zip_code'] != undefined)
              {
                er_zip = data['zip_code'][0];
              }
              if(data['phone1'] != undefined)
              {
                er_phone = data['phone1'][0];
              }
              $.notify('Failed !<br>'+er_phone+"<br>"+er_email+"<br>"+er_zip+"<br>",{
                            newest_on_top: true,
                            type: 'danger',
                            timer: '2000'
                        });
            }
          },
          error: function( jqXhr, textStatus, errorThrown ){
              console.log( errorThrown );
          }
      });
    }
});

function getEstimateData() {
    var data = {};
    var datetime = $("#datetime").val();
    var monthtime = $("#monthtime").val();
    var yeartime = $("#yeartime").val();
    data.minimum_price = $('#minimum_price').val();
    data.info_diff = $('#info_diff').val();
    data.condition = $('#condition').val();
    data.status = $('#status').val();
    data.mileage = $('#mileage').val();
    data.erea2 = $('#erea2').val();
    data.zip_code2 = $('#zip_code2').val();
    data.license_drive = $('#camera16')[0].files[0];
    data.image1 = $('#camera')[0].files[0];
    data.image2 = $('#camera1')[0].files[0];
    data.image3 = $('#camera2')[0].files[0];
    data.image4 = $('#camera3')[0].files[0];
    data.image5 = $('#camera4')[0].files[0];
    data.image6 = $('#camera5')[0].files[0];
    data.image7 = $('#camera6')[0].files[0];
    data.image8 = $('#camera7')[0].files[0];
    data.image9 = $('#camera8')[0].files[0];
    data.image10 = $('#camera9')[0].files[0];
    data.image11 = $('#camera10')[0].files[0];
    data.image12 = $('#camera11')[0].files[0];
    data.image13 = $('#camera12')[0].files[0];
    data.image14 = $('#camera13')[0].files[0];
    data.image15 = $('#camera14')[0].files[0];
    data.image16 = $('#camera15')[0].files[0];
    data.deadline = yeartime+"-"+monthtime+"-"+datetime;
    if ($('.issue2').is(":checked"))
    {
      data.issue2 = $('.issue2:checked').val();
    }
    if ($('.issue1').is(":checked"))
    {
      data.issue1 = $('.issue1:checked').val();
    }
    if ($('.issue').is(":checked"))
    {
      data.issue = $('.issue:checked').val();
    }
    data._token = token;
    var formData = new FormData();
    formData.append('minimum_price', data.minimum_price);
    formData.append('info_diff', data.info_diff);
    formData.append('status', data.status);
    formData.append('condition', data.condition);
    formData.append('history', data.issue1);
    formData.append('accident_repair', data.issue2);
    formData.append('mileage', data.mileage);
    formData.append('seller_zip_code', data.zip_code2);
    formData.append('seller_erea_id', data.erea2);
    formData.append('deadline', data.deadline);
    formData.append('license_drive',data.license_drive);
    formData.append('image1',data.image1);
    formData.append('image2',data.image2);
    formData.append('image3',data.image3);
    formData.append('image4',data.image4);
    formData.append('image5',data.image5);
    formData.append('image6',data.image6);
    formData.append('image7',data.image7);
    formData.append('image8',data.image8);
    formData.append('image9',data.image9);
    formData.append('image10',data.image10);
    formData.append('image11',data.image11);
    formData.append('image12',data.image12);
    formData.append('image13',data.image13);
    formData.append('image14',data.image14);
    formData.append('image15',data.image15);
    formData.append('image16',data.image16);
    formData.append('_token', data._token);
    return formData;
}

$("#RegisterEstimateAssessor").on("click", "#submit2", function(e) {
    if($("#RegisterEstimateAssessor").valid())
    {
        e.preventDefault();
        var current_token = '{{csrf_token()}}';
        var erea1 = $("#erea1").val();
        var zone1 = $("#zone1").val();
        var zip_code1 = $("#zip_code1").val();
        var date1 = $("#date1").val();
        var month1 = $("#month1").val();
        var year1 = $("#year1").val();
        if ($('.time1').is(":checked"))
        {
          var check1 = $('.time1:checked').val();
        }
        var date2 = $("#date2").val();
        var year2 = $("#year2").val();
        var month2 = $("#month2").val();
        if ($('.time2').is(":checked"))
        {
          var check2 = $('.time2:checked').val();
        }
        var date3 = $("#date3").val();
        var month3 = $("#month3").val();
        var year3 = $("#year3").val();
        if ($('.time3').is(":checked"))
        {
          var check3 = $('.time3:checked').val();
        }
        if ($('.step2').is(":checked"))
        {
          var step2 = $('.step2:checked').val();
        }
        $.ajax({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          url: 'estimate/transfer-info',
          dataType: 'text',
          type: 'post',
          contentType: 'application/x-www-form-urlencoded',
          data: {erea1: erea1, zone1: zone1, zip_code1: zip_code1, date1: date1, month1: month1, year1: year1, check1: check1,date2: date2, year2: year2, month2: month2, check2: check2, date3: date3, month3: month3, year3: year3, check3: check3, step2: step2,fuel_csrf_token: current_token},
          success: function( data, textStatus, jQxhr ){
              
          },
          error: function( jqXhr, textStatus, errorThrown ){
              console.log( errorThrown );
          }
      });
    }
})
  //onchange select start
$(document).ready(function(){
    $("#month1").change(function () {
        var month_end=$('#month1').val();
        var year_end=$('#year1').val();
        if(month_end==4 ||month_end==6 || month_end==9 ||month_end==11)
        {
            if (($('#date1 option').size()) == 31) {
                $("#date1 option[value=31]").remove();
            }
            if (($('#date1 option').size()) == 29) {
                $("#date1").append("<option value='30'>30日</option>");
            }
            if (($('#date1 option').size()) == 28) {
                $("#date1").append("<option value='29'>29日</option>");
                $("#date1").append("<option value='30'>30日</option>");
            }
        }
        if (month_end==2)
        {
            if (year_end%4==0) {
                $("#date1 option[value=31]").remove();
                $("#date1 option[value=30]").remove();
            }
            else {
                $("#date1 option[value=31]").remove();
                $("#date1 option[value=30]").remove();
                $("#date1 option[value=29]").remove();
            }
        }
        if(month_end==1 ||month_end==3 || month_end==5 ||month_end==7||month_end==8 ||month_end==10 || month_end==12) {
            if (($('#date1 option').size()) == 30) {
                $("#date1").append("<option value='31'>31</option>");
            }
            if (($('#date1 option').size()) == 28) {
                $("#date1").append("<option value='29'>29</option>");
                $("#date1").append("<option value='30'>30</option>");
                $("#date1").append("<option value='31'>31</option>");
            }
            if (($('#date1 option').size()) == 29) {
                $("#date1").append("<option value='30'>30</option>");
                $("#date1").append("<option value='31'>31</option>");
            }
        }
    })
});

//onechange year
$(document).ready(function(){
    $("#year1").change(function () {
        var year_end=$('#year1').val();
        var month_end=$('#month1').val();
        if (month_end==2)
        {
            if (year_end%4==0) {
                $("#date1 option[value=31]").remove();
                $("#date1 option[value=30]").remove();
                $("#date1").append("<option value='29'>29</option>");
            }
            else {
                $("#date1 option[value=31]").remove();
                $("#date1 option[value=30]").remove();
                $("#date1 option[value=29]").remove();
            }
        }
    });
});
  //onchange select start
$(document).ready(function(){
    $("#month2").change(function () {
        var month_end=$('#month2').val();
        var year_end=$('#year2').val();
        if(month_end==4 ||month_end==6 || month_end==9 ||month_end==11)
        {
            if (($('#date2 option').size()) == 31) {
                $("#date2 option[value=31]").remove();
            }
            if (($('#date2 option').size()) == 29) {
                $("#date2").append("<option value='30'>30日</option>");
            }
            if (($('#date2 option').size()) == 28) {
                $("#date2").append("<option value='29'>29日</option>");
                $("#date2").append("<option value='30'>30日</option>");
            }
        }
        if (month_end==2)
        {
            if (year_end%4==0) {
                $("#date2 option[value=31]").remove();
                $("#date2 option[value=30]").remove();
            }
            else {
                $("#date2 option[value=31]").remove();
                $("#date2 option[value=30]").remove();
                $("#date2 option[value=29]").remove();
            }
        }
        if(month_end==1 ||month_end==3 || month_end==5 ||month_end==7||month_end==8 ||month_end==10 || month_end==12) {
            if (($('#date2 option').size()) == 30) {
                $("#date2").append("<option value='31'>31</option>");
            }
            if (($('#date2 option').size()) == 28) {
                $("#date2").append("<option value='29'>29</option>");
                $("#date2").append("<option value='30'>30</option>");
                $("#date2").append("<option value='31'>31</option>");
            }
            if (($('#date2 option').size()) == 29) {
                $("#date2").append("<option value='30'>30</option>");
                $("#date2").append("<option value='31'>31</option>");
            }
        }
    })
});

//onechange year
$(document).ready(function(){
    $("#year2").change(function () {
        var year_end=$('#year2').val();
        var month_end=$('#month2').val();
        if (month_end==2)
        {
            if (year_end%4==0) {
                $("#date2 option[value=31]").remove();
                $("#date2 option[value=30]").remove();
                $("#date2").append("<option value='29'>29</option>");
            }
            else {
                $("#date2 option[value=31]").remove();
                $("#date2 option[value=30]").remove();
                $("#date2 option[value=29]").remove();
            }
        }
    });
});
  //onchange select start
$(document).ready(function(){
    $("#month3").change(function () {
        var month_end=$('#month3').val();
        var year_end=$('#year3').val();
        if(month_end==4 ||month_end==6 || month_end==9 ||month_end==11)
        {
            if (($('#date3 option').size()) == 31) {
                $("#date3 option[value=31]").remove();
            }
            if (($('#date3 option').size()) == 29) {
                $("#date3").append("<option value='30'>30日</option>");
            }
            if (($('#date3 option').size()) == 28) {
                $("#date3").append("<option value='29'>29日</option>");
                $("#date3").append("<option value='30'>30日</option>");
            }
        }
        if (month_end==2)
        {
            if (year_end%4==0) {
                $("#date3 option[value=31]").remove();
                $("#date3 option[value=30]").remove();
            }
            else {
                $("#date3 option[value=31]").remove();
                $("#date3 option[value=30]").remove();
                $("#date3 option[value=29]").remove();
            }
        }
        if(month_end==1 ||month_end==3 || month_end==5 ||month_end==7||month_end==8 ||month_end==10 || month_end==12) {
            if (($('#date3 option').size()) == 30) {
                $("#date3").append("<option value='31'>31</option>");
            }
            if (($('#date3 option').size()) == 28) {
                $("#date3").append("<option value='29'>29</option>");
                $("#date3").append("<option value='30'>30</option>");
                $("#date3").append("<option value='31'>31</option>");
            }
            if (($('#date3 option').size()) == 29) {
                $("#date3").append("<option value='30'>30</option>");
                $("#date3").append("<option value='31'>31</option>");
            }
        }
    })
});

//onechange year
$(document).ready(function(){
    $("#year3").change(function () {
        var year_end=$('#year1').val();
        var month_end=$('#month1').val();
        if (month_end==2)
        {
            if (year_end%4==0) {
                $("#date3 option[value=31]").remove();
                $("#date3 option[value=30]").remove();
                $("#date3").append("<option value='29'>29</option>");
            }
            else {
                $("#date3 option[value=31]").remove();
                $("#date3 option[value=30]").remove();
                $("#date3 option[value=29]").remove();
            }
        }
    });
});
  //onchange select start
$(document).ready(function(){
    $("#monthtime").change(function () {
        var month_end=$('#monthtime').val();
        var year_end=$('#yeartime').val();
        if(month_end==4 ||month_end==6 || month_end==9 ||month_end==11)
        {
            if (($('#datetime option').size()) == 31) {
                $("#datetime option[value=31]").remove();
            }
            if (($('#datetime option').size()) == 29) {
                $("#datetime").append("<option value='30'>30日</option>");
            }
            if (($('#datetime option').size()) == 28) {
                $("#datetime").append("<option value='29'>29日</option>");
                $("#datetime").append("<option value='30'>30日</option>");
            }
        }
        if (month_end==2)
        {
            if (year_end%4==0) {
                $("#datetime option[value=31]").remove();
                $("#datetime option[value=30]").remove();
            }
            else {
                $("#datetime option[value=31]").remove();
                $("#datetime option[value=30]").remove();
                $("#datetime option[value=29]").remove();
            }
        }
        if(month_end==1 ||month_end==3 || month_end==5 ||month_end==7||month_end==8 ||month_end==10 || month_end==12) {
            if (($('#datetime option').size()) == 30) {
                $("#datetime").append("<option value='31'>31</option>");
            }
            if (($('#datetime option').size()) == 28) {
                $("#datetime").append("<option value='29'>29</option>");
                $("#datetime").append("<option value='30'>30</option>");
                $("#datetime").append("<option value='31'>31</option>");
            }
            if (($('#datetime option').size()) == 29) {
                $("#datetime").append("<option value='30'>30</option>");
                $("#datetime").append("<option value='31'>31</option>");
            }
        }
    })
});

//onechange year
$(document).ready(function(){
    $("#yeartime").change(function () {
        var year_end=$('#yeartime').val();
        var month_end=$('#monthtime').val();
        if (month_end==2)
        {
            if (year_end%4==0) {
                $("#datetime option[value=31]").remove();
                $("#datetime option[value=30]").remove();
                $("#datetime").append("<option value='29'>29</option>");
            }
            else {
                $("#datetime option[value=31]").remove();
                $("#datetime option[value=30]").remove();
                $("#datetime option[value=29]").remove();
            }
        }
    });
});
