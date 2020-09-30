 /*<!--Start of Tawk.to Script-->*/
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/5f1412a6a45e787d128bb6c7/default';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
        })();
   /* End of Tawk.to Script*/

   function submitCart() {
     
    // alertify
    // .alert("Order successfully", function(){
    //   alertify.success('OK');
    // });
    
    alertify.success('Order successfully !!!');
  }

  function AddCart(id) {
            //console.log(id);

            $.ajax({  
              url: '/Add-Cart/'+id,
              type: 'GET',
            }).done(function(response){
             //console.log(response);
             RenderCart(response);
             alertify.success('Add products success !!!');
           });
          }

          $("#change-item-cart").on("click", ".si-close i" ,function(){
            $.ajax({
              url: 'Delete-Item-Cart/' + $(this).data("id"),
              type: 'GET',
            }).done(function(response){
              RenderCart(response);
              alertify.success('Delete products success !!!');
            });
          });

          function RenderCart(response) {
            $("#change-item-cart").empty();
            $("#change-item-cart").html(response);
            //console.log($("#total-quanty-cart").val());
            $("#total-quanty-show").text($("#total-quanty-cart").val());
          }


          function DeleteItemListCart(id) {
            //console.log(id);

            $.ajax({
              url: 'Delete-Item-List-Cart/'+id,
              type: 'GET',
            }).done(function(response){
              RenderListCart(response);
              //alertify.success('Delete products success !!!');
            });
          }

          function RenderListCart(response) {
            $("#list-cart").empty();
            $("#list-cart").html(response);

        //     var proQty = $('.pro-qty');
        //     proQty.prepend('<span class="dec qtybtn">-</span>');
        //     proQty.append('<span class="inc qtybtn">+</span>');
        //     proQty.on('click', '.qtybtn', function () {
        //       var $button = $(this);
        //       var oldValue = $button.parent().find('input').val();
        //       if ($button.hasClass('inc')) {
        //         var newVal = parseFloat(oldValue) + 1;
        //       } else {
        //     // Don't allow decrementing below zero
        //     if (oldValue > 0) {
        //       var newVal = parseFloat(oldValue) - 1;
        //     } else {
        //       newVal = 0;
        //     }
        //   }
        //   $button.parent().find('input').val(newVal);
        // });

    }

    function SaveItemListCart(id) {
      //console.log(id);
        //console.log($("#quanty-item-"+id).val());
        $("#quanty-item-"+id).val();
         $.ajax({
                url: 'Save-Item-List-Cart/'+id+'/'+$("#quanty-item-"+id).val(),
                type: 'GET',
            }).done(function(response){
                RenderListCart(response);
                alertify.success('Saved successfully !!!');
            });
    }
  