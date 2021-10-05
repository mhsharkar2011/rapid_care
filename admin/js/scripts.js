/*!
 * Start Bootstrap - SB Admin v6.0.1 (https://startbootstrap.com/templates/sb-admin)
 * Copyright 2013-2020 Start Bootstrap
 * Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-sb-admin/blob/master/LICENSE)
 */
(function ($) {
    "use strict";
    // Add active state to sidbar nav links
    var path = window.location.href; // because the 'href' property of the DOM element is the absolute path
    $("#layoutSidenav_nav .sb-sidenav a.nav-link").each(function () {
        if (this.href === path) {
            $(this).addClass("active");
        }
    });

    // Toggle the side navigation
    $("#sidebarToggle").on("click", function (e) {
        e.preventDefault();
        $("body").toggleClass("sb-sidenav-toggled");
    });
})(jQuery);

/**
 * User Add/Edit ------------------------------------
 * 
 */

 / function readRecords(){
    //     var readrecord = "readrecord";
    //     $.ajax({
    //         url:"insert_employee_data.php",
    //         type:"POST",
    //         data:{readrecord : readrecord},
    //         success:function(data,status){
    //             $('#').html(data);
    //         }
    //     });
    // }
    
    function addRecord(){
        var emp_name = $('#emp_name').val();
        var emp_position = $('#emp_position').val();
        var emp_email = $('#emp_email').val();
        var male = $('#male').val();
        var female = $('#female').val();
        var emp_age = $('#emp_age').val();
        var doj = $('#doj').val();
        var emp_salary = $('#emp_salary').val();
        var emp_phone = $('#emp_phone').val();
        // var emp_img = $('#emp_img').val();
    
        $.ajax({
            url:".php",
            type:"POST",
            dataType:"JSON",
            data:{
                    emp_name : emp_name,
                    emp_position : emp_position,
                    emp_email : emp_email,
                    male : male,
                    female : female,
                    emp_age : emp_age,
                    doj : doj,
                    emp_salary : emp_salary,
                    emp_phone : emp_phone,
                    // emp_img : emp_img
            },
            processData:false,
            contentType:false,
            beforeSend:function(){
                console.log("Wait....");
            },
            success:function(response){
                console.log(response);
            },
            error:function(){
                console.log("Oops");
            },
        });
    }
