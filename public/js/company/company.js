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