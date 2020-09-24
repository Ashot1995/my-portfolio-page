 jQuery(document).ready(function ($) {

     $("#contact").on("click", function () {
         $("#send").css("display", "flex");

         $("#close").css('cursor', 'pointer');
         $("#close").click(function () {
             $("#send").css("display", "none");
         })
     })

     $("#submit").on("click", function () {

         let name = $("#name").val();
         let mail = $("#mail").val();
         let description = $("#content").val();

         let pattern1 = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);

         if (pattern1.test(mail) === true) {
               //alert("ok")
             $.ajax({
                 url: "assets/plugins/contact.php",
                 type: "GET",
                 data: {
                     'description': description,
                     'mail': mail,
                     'name': name

                 },
                 success: function () {
                     alert("Your message sent");
                 }

             });
         $("#send").css("display", "none");
         } else {
             $("#send").css("display", "flex");
             $("#name").css("border", "1px solid red");
             $("#mail").css("border", "1px solid red");
             $("#content").css("border", "1px solid red");
         }


     });
 })