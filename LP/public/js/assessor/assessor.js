
/*Preview image before upload*/
function readURL_verify(input) {
    if (input.files && input.files[0]) {
        imgId = '.preview-'+$(input).attr('data_name');
        // $(input).removeAttr('id');
        var load_avatar = $(imgId);
        var reader = new FileReader();
        if (typeof (FileReader) != "undefined") {
            load_avatar.empty();
            var reader = new FileReader();
            reader.onload = function (e) {
                $("<img />", {
                    "src": e.target.result,
                    "width": "250px",
                    "height":"190px",
                }).appendTo(load_avatar);
            }
            load_avatar.show();
            reader.readAsDataURL(input.files[0]);
            $(input).attr('id', 'camera');
        }
    }
}
function readURL(input) {
    if (input.files && input.files[0]) {
        imgId = '.preview-'+$(input).attr('data_name');
        // $(input).removeAttr('id');
        var load_avatar = $(imgId);
        var reader = new FileReader();
        if (typeof (FileReader) != "undefined") {
            load_avatar.empty();
            var reader = new FileReader();
            reader.onload = function (e) {
                $("<img />", {
                    "src": e.target.result,
                    "width": "60px",
                    "height":"35px",
                }).appendTo(load_avatar);
            }
            load_avatar.show();
            reader.readAsDataURL(input.files[0]);
            // $(input).attr('id', 'camera');
            $('#preview_hidden1').val('1');
        }
    }
}

function readURL_evaluation(input) {
    if (input.files && input.files[0]) {
        imgId = '.preview-'+$(input).attr('data_name');
        // $(input).removeAttr('id');
        var load_avatar = $(imgId);
        var reader = new FileReader();
        if (typeof (FileReader) != "undefined") {
            load_avatar.empty();
            var reader = new FileReader();
            reader.onload = function (e) {
                $("<img />", {
                    "src": e.target.result,
                    "width": "400px",
                    "height":"300px",
                }).appendTo(load_avatar);
            }
            load_avatar.show();
            reader.readAsDataURL(input.files[0]);
            // $(input).attr('id', 'camera');
        }
    }
}
$(".camera").change(function(){
    readURL(this);
});
$(".verify_image").change(function(){
    readURL_verify(this);
});
$(".evaluation_image").change(function(){
    readURL_evaluation(this);
});

/*end function Preview image before upload*/

/*Validate form assessor*/
$(document).ready(function() {
    $.validator.addMethod("regex_phone", function (value, element) {
        return this.optional(element) || value.match(/\(?([0-9]{2})\)?([ .-]?)([0-9]{4})\2([0-9]{4})/);
    }, "Phone number incorrect format.");
    $.validator.addMethod("checkYear", function(value, element) {
        var year = $("#dateBirthYYYY").val(); //why not $(element) ?!?
        return (new Date()).getFullYear() >= parseInt(year, 10);
    }, "Invalid year");
    jQuery.validator.addMethod("zip_code", function(value, element) {
        value = value.replace(/\s+/g, "");
        return this.optional(element) || value.match(/^([0-9]{3})(-[0-9]{4})?$/i);
    }, "Please specify a valid zip code");
    $("#AssessorId").validate({
        rules: {
            // 'name': {required: true,maxlength: 50},
            // 'zip_code': {required: true,zip_code:true},
            // 'phone': {required: true, regex_phone: true},
            // 'email': {required: true, email: true},
            // 'address':{required:true},
            // 'model_year':{required:true},
            // 'grade':{required: true},
            // 'mileage':{required:true,number:true},
            // 'displacement':{required:true,number:true},
            // 'engine_model':{required:true,maxlength:10},
            // 'infor_model_number':{required:true,number:true},
            // 'classification_number':{required:true,number:true},
            // 'infor_number_passenger':{required:true,number:true},
            // 'chassis_number':{required:true,number:true},
            // 'infor_vehicle_number':{required:true,maxlength:20},
            // 'recycling_fee':{required:true,maxlength:20},
            // 'reception_minimum_recommend_price':{required:true,number:true},
            // 'infor_condition_exterior':{required:true},
            // 'infor_state_interior':{required:true},
            // 'equipment_infor_remark':{required:true},
            // 'assessment_comment':{required:true},
            // 'year_end':{required:true},
            // 'month_end':{required:true},
            // 'day_end':{required:true},
            // 'infor_car_year':{required:true,number:true},
            // 'infor_car_month':{required:true,number:true},
            // 'assessment_synthetic':{required:true,number:true},
            // 'assessment_exterior':{required:true,number:true},
            // 'assessment_interior':{required:true,number:true},
            // 'image_car':{required:true,accept: "image/*"},
            // 'image_car1':{required:true,accept: "image/*"},
            // 'image_car2':{required:true,accept: "image/*"},
            // 'image_car3':{required:true,accept: "image/*"},
            // 'image_car4':{required:true,accept: "image/*"},
            // 'image_car5':{required:true,accept: "image/*"},
            // 'image_car6':{required:true,accept: "image/*"},
            // 'image_car7':{required:true,accept: "image/*"},
            // 'verify_image':{required:true,accept: "image/*"},
            // 'evaluation_image':{required:true,accept: "image/*"},
            // 'smoking':{required:true},
            // 'infor_accident_repair':{required:true},
            // 'infor_record_book':{required:true},
            // 'infor_history':{required:true},
            // 'equipment_infor':{required:true},
            // 'infor_air_condition':{required:true},
        }, tooltip_options: {}
    });
});

//onchange select start
$(document).ready(function(){
    $("#month_end").change(function () {
        var month_end=$('#month_end').val();
        var year_end=$('#year_end').val();
        if(month_end==4 ||month_end==6 || month_end==9 ||month_end==11)
        {
            if (($('#day_end option').size()) == 31) {
                $("#day_end option[value=31]").remove();
            }
            if (($('#day_end option').size()) == 29) {
                $("#day_end").append("<option value='30'>30日</option>");
            }
            if (($('#day_end option').size()) == 28) {
                $("#day_end").append("<option value='29'>29日</option>");
                $("#day_end").append("<option value='30'>30日</option>");
            }
        }
        if (month_end==2)
        {
            if (year_end%4==0) {
                $("#day_end option[value=31]").remove();
                $("#day_end option[value=30]").remove();
            }
            else {
                $("#day_end option[value=31]").remove();
                $("#day_end option[value=30]").remove();
                $("#day_end option[value=29]").remove();
            }
        }
        if(month_end==1 ||month_end==3 || month_end==5 ||month_end==7||month_end==8 ||month_end==10 || month_end==12) {
            if (($('#day_end option').size()) == 30) {
                $("#day_end").append("<option value='31'>31</option>");
            }
            if (($('#day_end option').size()) == 28) {
                $("#day_end").append("<option value='29'>29</option>");
                $("#day_end").append("<option value='30'>30</option>");
                $("#day_end").append("<option value='31'>31</option>");
            }
            if (($('#day_end option').size()) == 29) {
                $("#day_end").append("<option value='30'>30</option>");
                $("#day_end").append("<option value='31'>31</option>");
            }
        }
    })
});

//onechange year
$(document).ready(function(){
    $("#year_end").change(function () {
        var year_end=$('#year_end').val();
        var month_end=$('#month_end').val();
        if (month_end==2)
        {
            if (year_end%4==0) {
                $("#day_end option[value=31]").remove();
                $("#day_end option[value=30]").remove();
                $("#day_end").append("<option value='29'>29</option>");
            }
            else {
                $("#day_end option[value=31]").remove();
                $("#day_end option[value=30]").remove();
                $("#day_end option[value=29]").remove();
            }
        }
    });
});

//onchange maker
$("#infor_maker_id").change(function(){
    var maker_id = $(this).val();
    $.ajax({
        url:'/assessor/get-make-car',
        data:{maker_id:maker_id},
        method:'GET',
        dataType:'json',
        success:function(data){
            var html;
            if(data != null && data.length > 0){
                for(var i=0;i<data.length;i++){
                    html += '<option value="'+data[i]['id']+'">'+data[i]['name']+'</option>';
                }
            }
            // console.log(html);
            $("#infor_car_id").html(html);
            var car_name = $("#infor_maker_id").find(":selected").text();
            if($("#infor_maker_id").val() == "")
                car_name = "";
            $("#infor_car_name").val(car_name);
        }
    })
});

$("#infor_car_id").change(function(){
    var car_name = $("#infor_maker_id").find(":selected").text();
    if($("#infor_maker_id").val() == "")
        car_name = "";
    car_name += $(this).val() == ""?"":" "+$(this).find(":selected").text();
    $("#infor_car_name").val(car_name);
});

$("#infor_car_id").trigger("change");

//
$('#AssessorId').on('click','.submit',function (e) {
    if ($('#AssessorId').valid()) {
      e.preventDefault();
      $.ajaxSetup({
          headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
        $.ajax({
            url: '/assessor/insert',
            method:"POST",
            // dataType: 'json',
            data:getAssessorData() ,
            contentType: false,
            processData: false,
            cache : false,
            enctype: 'multipart/form-data',
            success: function( data, textStatus, jQxhr ){
                console.log(data);
                if(data.status==true)
                {
                    $.notify({
                        icon: "images/company/check-circle-green-512.png",
                        message: 'You have successfully registered! '
                    }, {
                        type: 'minimalist',
                        delay: 3000,
                        icon_type: 'image',
                        template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' +
                        '<img data-notify="icon" class="img-circle pull-left">' +
                        '<span data-notify="message">{2}</span>' +
                        '</div>'
                    });
                    $.get("/assessor/destroy",function (r) {
                        window.location='user';
                    });
                }
                else if(data.status==false)
                {
                    $.notify({
                        icon: "images/company/close-window.png",
                        message: 'Registration failed. Please re-register!'
                    }, {
                        type: 'minimalist',
                        delay: 3000,
                        icon_type: 'image',
                        template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' +
                        '<img data-notify="icon" class="img-circle pull-left">' +
                        '<span data-notify="message">{2}</span>' +
                        '</div>'
                    });
                }
                else
                {
                        $.notify({
                            icon: "images/company/close-window.png",
                            message: 'Registration failed. You must enter the required information. Please re-register!'
                        }, {
                            type: 'minimalist',
                            delay: 5000,
                            icon_type: 'image',
                            template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' +
                            '<img data-notify="icon" class="img-circle pull-left">' +
                            '<span data-notify="message">{2}</span>' +
                            '</div>'
                        });
                }

            },
            error: function( jqXhr, textStatus, errorThrown ){
                console.log( errorThrown );
            }
        });

    }
});
$("#submit2").click(function(e){
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: '/assessor/test',
            method:"POST",
            // dataType: 'json',
            data:getAssessorData() ,
            contentType: false,
            processData: false,
            cache : false,
            enctype: 'multipart/form-data',
            success: function( data, textStatus, jQxhr ){
                console.log(data);

            },
            error: function( jqXhr, textStatus, errorThrown ){
                console.log( errorThrown );
            }
        });
});
//get formData
function getAssessorData() {
    var data = {};
    data.seller_name               = $("#assessor_name").val();
    data.seller_zip_code           = $('#zip_code_id').val();
    data.seller_erea_id            = $('#area_id').val();
    data.seller_address            = $('#address').val();
    data.seller_municipality       = $('#address_1').val();
    data.seller_phone1             = $('#phone').val();
    data.seller_email1             = $('#email').val();
    data.car_id                    = $('#infor_car_id').val();
    data.info_car_name             = $('#infor_car_name').val();
    data.infor_car_year            = $("#infor_car_year_type").val()+','+$("#infor_car_year").val()+','+$("#infor_car_month").val();
    data.infor_about_check         = $("#infor_about_check").is(":checked")?1:0;
    data.infor_grade               = $("#grade").val();
    data.infor_mileage             = $("#mileage").val();
    data.infor_displacement        = $("#displacement").val();
    data.infor_chassis_number      = $("#chassis_number").val();
    data.driving_remark            = $("#driving_remark").val();
    if($("#info_smoking_status1").is(":checked") == true){
        data.infor_smoking_status  = 1;
    }else if($("#info_smoking_status2").is(":checked") == true){
        data.infor_smoking_status  = 2;
    }else if($("#info_smoking_status3").is(":checked") == true){
        data.infor_smoking_status  = 3;
    }
    data.infor_drive_system        = $("#drive_system").val();
    data.infor_engine_model        = $("#engine_model").val();
    data.infor_model_number        = $("#infor_model_number").val();
    data.infor_classification      = $("#classification_number").val();
    data.infor_transmission        = $("#transmission").val();
    data.infor_hand                = $("#handle").val();
    data.infor_number_passenger    = $("#infor_number_passenger").val();
    data.infor_fuel                = $("#fuel").val();
    if($("#infor_accident_repair1").is(":checked") == true){
        data.infor_accident_repair = 1;
    }else if($("#infor_accident_repair2").is(":checked") == true){
        data.infor_accident_repair = 2;
    }else if($("#infor_accident_repair3").is(":checked") == true){
        data.infor_accident_repair = 3;
    }

    data.infor_vehicle_number        = $("#infor_vehicle_number").val();
    data.recycling_fee               = $("#recycling_fee").val();
    if($("#infor_written_guarantee1").is(":checked") == true){
        data.infor_written_guarantee = '有';
    }else if($("#infor_written_guarantee2").is(":checked") == true){
        data.infor_written_guarantee = '無';
    }else if($("#infor_written_guarantee3").is(":checked") == true){
        data.infor_written_guarantee = '未確認';
    }
    if($("#infor_record_book1").is(":checked") == true){
        data.infor_record_book       = '有';
    }else if($("#infor_record_book2").is(":checked") == true){
        data.infor_record_book       = '無';
    }else if($("#infor_record_book3").is(":checked") == true){
        data.infor_record_book       = '未確認';
    }

    if($("#infor_history1").is(":checked") == true){
        data.infor_history = 1;
    }else if($("#infor_history2").is(":checked") == true){
        data.infor_history = 2;
    }else if($("#infor_history3").is(":checked") == true){
        data.infor_history = 3;
    }else if($("#infor_history4").is(":checked") == true){
        data.infor_history = 4;
    }
    if($("#infor_air_condition1").is(":checked") == true){
        data.infor_air_condition = 1;
    }else if($("#infor_air_condition2").is(":checked") == true){
        data.infor_air_condition = 2;
    }else if($("#infor_air_condition3").is(":checked") == true){
        data.infor_air_condition = 3;
    }else if($("#infor_air_condition4").is(":checked") == true){
        data.infor_air_condition = 4;
    }else if($("#infor_air_condition5").is(":checked") == true){
        data.infor_air_condition = 5;
    }

    data.equipment  =  $('.equipment_infor:checked').attr('data-id');

    data.exterior_condition         = $('#infor_condition_exterior').val();
    data.equipment_remark           = $('#equipment_infor_remark').val();
    data.infor_state_interior       = $('#infor_state_interior').val();

    data.assessment_synthetic     = $('#assessment_synthetic').val();
    data.assessment_exterior      = $('#assessment_exterior').val();
    data.assessment_interior      = $('#assessment_interior').val();
    data.assessment_comment       = $('#assessment_comment').val();
    data.minimum_recommend_price  = $('#reception_minimum_recommend_price').val();
    data.end_desired_date         = $('#year_end').val()+'-'+$('#month_end').val()+'-'+$('#day_end').val();
    // if($("#camera")[0].files[0] != null)
    // {data.camera = $("#camera")[0].files[0]['name'];}
    // console.log(data.camera);
    console.log($("#camera")[0].files[0]);
    data._token = token;

    var formData = new FormData();
    formData.append('seller_name', data.seller_name);
    formData.append('seller_zip_code', data.seller_zip_code);
    formData.append('seller_erea_id', data.seller_erea_id);
    formData.append('seller_address', data.seller_address);
    formData.append('seller_municipality', data.seller_municipality);
    formData.append('seller_phone1', data.seller_phone1);
    formData.append('seller_email1', data.seller_email1);
    formData.append('car_id', data.car_id);
    formData.append('info_car_name', data.info_car_name);
    formData.append('infor_car_year', data.infor_car_year);
    formData.append('infor_about_check', data.infor_about_check);
    formData.append('infor_grade', data.infor_grade);
    formData.append('infor_mileage', data.infor_mileage);
    formData.append('infor_displacement', data.infor_displacement);
    formData.append('infor_chassis_number', data.infor_chassis_number);
    formData.append('driving_remark', data.driving_remark);
    formData.append('infor_smoking_status', data.infor_smoking_status);
    formData.append('infor_drive_system', data.infor_drive_system);
    formData.append('infor_engine_model', data.infor_engine_model);
    formData.append('infor_model_number', data.infor_model_number);
    formData.append('infor_classification', data.infor_classification);
    formData.append('infor_transmission', data.infor_transmission);
    formData.append('infor_hand', data.infor_hand);
    formData.append('infor_number_passenger', data.infor_number_passenger);

    formData.append('infor_fuel', data.infor_fuel);
    formData.append('infor_accident_repair', data.infor_accident_repair);
    formData.append('infor_vehicle_number', data.infor_vehicle_number);
    formData.append('recycling_fee', data.recycling_fee);
    formData.append('infor_written_guarantee', data.infor_written_guarantee);
    formData.append('infor_record_book', data.infor_record_book);
    formData.append('infor_history', data.infor_history);
    formData.append('infor_air_condition', data.infor_air_condition);
    formData.append('exterior_condition', data.exterior_condition);
    formData.append('equipment_remark', data.equipment_remark);
    formData.append('infor_state_interior', data.infor_state_interior);
    formData.append('infor_equipment_id', data.equipment);
    formData.append('assessment_synthetic', data.assessment_synthetic);
    formData.append('assessment_exterior', data.assessment_exterior);
    formData.append('assessment_interior', data.assessment_interior);
    formData.append('assessment_comment', data.assessment_comment);
    formData.append('minimum_recommend_price', data.minimum_recommend_price);
    formData.append('end_desired_date', data.end_desired_date);

    formData.append('images1',  $("#camera")[0].files[0]);
    formData.append('images2',  $("#camera2")[0].files[0]);
    formData.append('images3',  $("#camera3")[0].files[0]);
    formData.append('images4',  $("#camera4")[0].files[0]);
    formData.append('images6',  $("#camera5")[0].files[0]);
    formData.append('images6',  $("#camera6")[0].files[0]);
    formData.append('images7',  $("#camera7")[0].files[0]);
    formData.append('images8',  $("#camera8")[0].files[0]);
    formData.append('images9',  $("#camera9")[0].files[0]);
    formData.append('images10',  $("#camera10")[0].files[0]);
    formData.append('images11',  $("#camera11")[0].files[0]);
    formData.append('images12',  $("#camera12")[0].files[0]);
    formData.append('images13',  $("#camera13")[0].files[0]);
    formData.append('images14',  $("#camera14")[0].files[0]);
    formData.append('images15',  $("#camera15")[0].files[0]);
    formData.append('images16',  $("#camera1")[0].files[0]);
    formData.append('_token', data._token);
    return formData;
}

