// /*!
//  * Start Bootstrap - SB Admin v6.0.1 (https://startbootstrap.com/templates/sb-admin)
//  * Copyright 2013-2020 Start Bootstrap
//  * Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-sb-admin/blob/master/LICENSE)
//  */
// (function ($) {
//     "use strict";
//     // Add active state to sidbar nav links
//     var path = window.location.href; // because the 'href' property of the DOM element is the absolute path
//     $("#layoutSidenav_nav .sb-sidenav a.nav-link").each(function () {
//         if (this.href === path) {
//             $(this).addClass("active");
//         }
//     });

//     // Toggle the side navigation
//     $("#sidebarToggle").on("click", function (e) {
//         e.preventDefault();
//         $("body").toggleClass("sb-sidenav-toggled");
//     });
// })(jQuery);

/**
 * User Add/Edit ------------------------------------
 * 
 */
$(document).ready(function(){
    $(documnet).on("submit","#addform", function(event){
        event.preventDefault();
        $.ajax({
            url:"/programming_point/rapid_care/admin/ajax.php",
            type:"POST",
            datatype:"json",
            data: new FormData(this),
            processData:false,
            contentType:false,
            beforeSend:function(){},
            success:function(response){
                console.log(response);
            },
            error:function(){
                console.log("Oops! Something went wrong!");
            }
        });
    });
});

function readRecords(){
    var readrecord = "readrecord";
    $.ajax({
        url:"employee.php",
        type:"post",
        data:{readrecord:readrecord},
        success:function(data,status){
            $('#records_contant').html(data);
        }
    });
}
function Deleteuser(deleteid){
    var conf =confirm("Are you sure" );
    if(conf == true){
        $.ajax(
            {
                url:"employeestable.php",
                type:"post",
                data:{deleteid:deleteid},
                success:function(data,status){
                    readRecords();
                }
            });
    }
}