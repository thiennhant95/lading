/*Preview image before upload*/
function readURL_verify(input) {
    if (input.files && input.files[0]) {
        imgId = '.preview-'+$(input).attr('data_name');
        $(input).removeAttr('id');
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
        $(input).removeAttr('id');
        var load_avatar = $(imgId);
        var reader = new FileReader();
        if (typeof (FileReader) != "undefined") {
            load_avatar.empty();
            var reader = new FileReader();
            reader.onload = function (e) {
                $("<img />", {
                    "src": e.target.result,
                    "width": "80px",
                    "height":"50px",
                }).appendTo(load_avatar);
            }
            load_avatar.show();
            reader.readAsDataURL(input.files[0]);
            $(input).attr('id', 'camera');
            $('#preview_hidden1').val('1');
        }
    }
}

function readURL_evaluation(input) {
    if (input.files && input.files[0]) {
        imgId = '.preview-'+$(input).attr('data_name');
        $(input).removeAttr('id');
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
            $(input).attr('id', 'camera');
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
    jQuery.validator.addMethod("images", function(value, element) {
        // var r = $(".preview-pre1").children('img');
        // if(r.length)
        // {
        //     return true;
        // }
        // else
        //     return false
        if ($('#preview_hidden1').val()==1)
        {
            return true;
        }
        else
        {
            return false;
        }
    }, "You must have images here");
    $("#AssessorId").validate({
        rules: {
            'name': {required: true},
            'zip_code': {required: true,zip_code:true},
            'phone': {required: true, regex_phone: true},
            'email': {required: true, email: true},
            'address':{required:true},
            'model_year':{required:true},
            'grade':{required: true},
            'mileage':{required:true,number:true},
            'displacement':{required:true,number:true},
            'engine_model':{required:true,maxlength:10},
            'infor_model_number':{required:true,number:true},
            'classification_number':{required:true,number:true},
            'infor_number_passenger':{required:true,number:true},
            'chassis_number':{required:true,number:true},
            'infor_vehicle_number':{required:true,maxlength:20},
            'recycling_fee':{required:true,maxlength:20},
            'reception_minimum_recommend_price':{required:true,number:true},
            'infor_condition_exterior':{required:true},
            'infor_state_interior':{required:true},
            'equipment_infor_remark':{required:true},
            'assessment_comment':{required:true},
            'year_end':{required:true},
            'month_end':{required:true},
            'day_end':{required:true},
            'infor_car_year':{required:true,number:true},
            'infor_car_month':{required:true,number:true},
            'assessment_synthetic':{required:true,number:true},
            'assessment_exterior':{required:true,number:true},
            'assessment_interior':{required:true,number:true},
            'image_car1':{images:true}
        }, tooltip_options: {}
    });
});

$(function(){
    var year=new Date().getFullYear();
    $('.model_year').datepicker({
            changeMonth: false,
            changeYear: true,
            showButtonPanel: true,
            yearRange: '1950:'+year, // Optional Year Range
            dateFormat: 'yy',
            onClose: function(dateText, inst) {
                var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
                $(this).datepicker('setDate', new Date(year, 0, 1));
            }});
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
        }
    })
});

//
$('#AssessorId').on('click','.submit',function () {

});
