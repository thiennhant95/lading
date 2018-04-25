//validate form 2
$(document).ready(function() {
    $.validator.addMethod("regex_phone", function(value, element) {
        return this.optional(element) ||value.match(/\(?([0-9]{2})\)?([ .-]?)([0-9]{4})\2([0-9]{4})/);
    }, "Phone number incorrect format.");
    $("#IdCompany_2").validate({
        rules : {
            'company_name':{required:true},
            'contact_name':{required:true},
            'phone':{required:true,regex_phone:true},
            'email':{required:true,email:true}
        }, tooltip_options: {
        }
    });
});

//validate form 1
$(document).ready(function() {
    $.validator.addMethod("regex_phone", function(value, element) {
        return this.optional(element) ||value.match(/\(?([0-9]{2})\)?([ .-]?)([0-9]{4})\2([0-9]{4})/);
    }, "Phone number incorrect format.");
    $("#IdCompany_1").validate({
        rules : {
            'company_name':{required:true},
            'contact_name':{required:true},
            'phone':{required:true,regex_phone:true},
            'email':{required:true,email:true}
        }, tooltip_options: {
        }
    });
});

//validate form 3
$(document).ready(function() {
    $.validator.addMethod("regex_phone", function(value, element) {
        return this.optional(element) ||value.match(/\(?([0-9]{2})\)?([ .-]?)([0-9]{4})\2([0-9]{4})/);
    }, "Phone number incorrect format.");
    $("#IdCompany_3").validate({
        rules : {
            'company_name':{required:true},
            'contact_name':{required:true},
            'phone':{required:true,regex_phone:true},
            'email':{required:true,email:true}
        }, tooltip_options: {
        }
    });
});

//insert form 1
$(document).ready(function() {
    $('#IdCompany_1').on('click','.submit1',function (e) {
        if ($('#IdCompany_1').valid()) {
            var current_token = '{{csrf_token()}}';
            e.preventDefault();
            var company_name =$('#company_name').val();
            var contact_name =$('#contact_name').val();
            var phone =$('#phone').val();
            var email =$('#email').val();
            $.ajax({
                url: 'http://llc.jp/api/seller/add',
                dataType: 'text',
                type: 'post',
                contentType: 'application/x-www-form-urlencoded',
                data: {company_name: company_name, contact_name: contact_name, phone: phone, email: email, fuel_csrf_token: current_token},
                success: function( data, textStatus, jQxhr ){
                    var result = JSON.parse(data);
                    console.log(result);
                },
                error: function( jqXhr, textStatus, errorThrown ){
                    console.log( errorThrown );
                }
            });
        }
    });
});

//insert form 2
$(document).ready(function() {
    $('#IdCompany_2').on('click','.submit2',function (e) {
        if ($('#IdCompany_2').valid()) {
            var current_token = '{{csrf_token()}}';
            e.preventDefault();
            var company_name =$('#company_name2').val();
            var contact_name =$('#contact_name2').val();
            var phone =$('#phone2').val();
            var email =$('#email2').val();
            $.ajax({
                url: 'http://llc.jp/api/seller/add',
                dataType: 'text',
                type: 'post',
                contentType: 'application/x-www-form-urlencoded',
                data: {company_name: company_name, contact_name: contact_name, phone: phone, email: email, fuel_csrf_token: current_token},
                success: function( data, textStatus, jQxhr ){
                    var result = JSON.parse(data);
                    console.log(result);
                },
                error: function( jqXhr, textStatus, errorThrown ){
                    console.log( errorThrown );
                }
            });
        }
    });
});

//insert form 3
$(document).ready(function() {
    $('#IdCompany_3').on('click','.submit3',function (e) {
        if ($('#IdCompany_3').valid()) {
            var current_token = '{{csrf_token()}}';
            e.preventDefault();
            var company_name =$('#company_name3').val();
            var contact_name =$('#contact_name3').val();
            var phone =$('#phone3').val();
            var email =$('#email3').val();
            $.ajax({
                url: 'http://llc.jp/api/seller/add',
                dataType: 'text',
                type: 'post',
                contentType: 'application/x-www-form-urlencoded',
                data: {company_name: company_name, contact_name: contact_name, phone: phone, email: email, fuel_csrf_token: current_token},
                success: function( data, textStatus, jQxhr ){
                    var result = JSON.parse(data);
                    console.log(result);
                },
                error: function( jqXhr, textStatus, errorThrown ){
                    console.log( errorThrown );
                }
            });
        }
    });
});