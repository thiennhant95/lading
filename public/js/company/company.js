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
$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
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
            var name =$('#company_name').val();
            var person_in_charge =$('#contact_name').val();
            var phone =$('#phone').val();
            var email =$('#email').val();
            $.ajax({
                url: '/company/insert',
                dataType: 'json',
                type: 'post',
                contentType: 'application/x-www-form-urlencoded',
                data: {name: name, person_in_charge: person_in_charge, phone: phone, email: email},
                success: function( data, textStatus, jQxhr ){
                    $.notify({
                        icon: "images/company/check-circle-green-512.png",
                        message: 'You have successfully registered! '
                    }, {
                        type: 'minimalist',
                        delay: 5000,
                        icon_type: 'image',
                        template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' +
                        '<img data-notify="icon" class="img-circle pull-left">' +
                        '<span data-notify="message">{2}</span>' +
                        '</div>'
                    });
                    $('#company_name').val('');
                    $('#contact_name').val('');
                    $('#phone').val('');
                    $('#email').val('');
                },
                error: function( jqXhr, textStatus, errorThrown ){
                    console.log( errorThrown );
                }
            });
        }
    });
});

//insert form 2


//insert form 3
$(document).ready(function() {
    $('#IdCompany_3').on('click','.submit3',function (e) {
        if ($('#IdCompany_3').valid()) {
            var current_token = '{{csrf_token()}}';
            e.preventDefault();
            var name =$('#company_name3').val();
            var person_in_charge =$('#contact_name3').val();
            var phone =$('#phone3').val();
            var email =$('#email3').val();
            $.ajax({
                url: '/company/insert',
                dataType: 'json',
                type: 'post',
                contentType: 'application/x-www-form-urlencoded',
                data: {name: name, person_in_charge: person_in_charge, phone: phone, email: email},
                success: function( data, textStatus, jQxhr ){
                    $.notify({
                        icon: "images/company/check-circle-green-512.png",
                        message: 'You have successfully registered! '
                }, {
                        type: 'minimalist',
                            delay: 5000,
                            icon_type: 'image',
                            template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' +
                        '<img data-notify="icon" class="img-circle pull-left">' +
                        '<span data-notify="message">{2}</span>' +
                        '</div>'
                    });
                    $('#company_name3').val('');
                    $('#contact_name3').val('');
                    $('#phone3').val('');
                    $('#email3').val('');
                    // location.reload();
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
            var name =$('#company_name2').val();
            var person_in_charge =$('#contact_name2').val();
            var phone =$('#phone2').val();
            var email =$('#email2').val();
            $.ajax({
                url: '/company/insert',
                dataType: 'json',
                type: 'post',
                contentType: 'application/x-www-form-urlencoded',
                data: {name: name, person_in_charge: person_in_charge, phone: phone, email: email},
                success: function( data, textStatus, jQxhr ){
                    $.notify({
                        icon: "images/company/check-circle-green-512.png",
                        message: 'You have successfully registered! '
                    }, {
                        type: 'minimalist',
                        delay: 5000,
                        icon_type: 'image',
                        template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' +
                        '<img data-notify="icon" class="img-circle pull-left">' +
                        '<span data-notify="message">{2}</span>' +
                        '</div>'
                    });
                    $('#company_name2').val('');
                    $('#contact_name2').val('');
                    $('#phone2').val('');
                    $('#email2').val('');
                },
                error: function( jqXhr, textStatus, errorThrown ){
                    console.log( errorThrown );
                }
            });
        }
    });
});