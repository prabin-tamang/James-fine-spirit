$(document).ready(function(){
     $('.twoCol__listing>li').click(function(){
         var sel_item = $(this).html();
         $('.productList__item').hide();
         $('.productList__item').each(function(){
             if($(this).hasClass(sel_item)){
                 $(this).animate({"toggle":"toggle"});       
             }
            });
         });
     });