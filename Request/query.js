$(".lessContainer").hide();
$(".fulltruck").hide();
$(".fullContain").hide();
$(".bulkcontainer").hide();
$(".fullwagon").hide();
$(".uldContainer").hide();
$(document).ready(function(){
   
$(".trans").change(function() {
    let val = $(this).val();
if(val == "Full container load  FCL") {
    $(".fullContain").show();
    $(".lessContainer").hide();
    $(".bulkcontainer").hide();
    $(".fulltruck").hide();
    $(".fullwagon").hide();
    $(".uldContainer").hide();
}
else if(val == "Less container load  LCL") {
    $(".lessContainer").show();
    $(".fullContain").hide();
    $(".bulkcontainer").hide();
    $(".fulltruck").hide();
    $(".fullwagon").hide();
    $(".uldContainer").hide();
}
else if(val == "Bulk") {
    $(".bulkcontainer").show();
    $(".fullContain").hide();
    $(".lessContainer").hide();
    $(".fulltruck").hide();
    $(".fullwagon").hide();
    $(".uldContainer").hide();
}

});

$(".roadraltrans").change(function() {
    let val = $(this).val();
if(val == "Full container load FCL") {
    $(".fullContain").show();
    $(".lessContainer").hide();
    $(".bulkcontainer").hide();
    $(".fulltruck").hide();
    $(".fullwagon").hide();
    $(".uldContainer").hide();
}
else if(val == "Full truck load FTL") {
    $(".fulltruck").show();
    $(".fullContain").hide();
    $(".lessContainer").hide();
    $(".bulkcontainer").hide();
    $(".fullwagon").hide();
    $(".uldContainer").hide();
}
else if(val == "less truck load LTL") {
    $(".lessContainer").show();
    $(".fulltruck").hide();
    $(".fullContain").hide();
    $(".bulkcontainer").hide();
    $(".fullwagon").hide();
    $(".uldContainer").hide();
}
else if(val == "Full wagon load FWL") {
    $(".fullwagon").show();
    $(".fulltruck").hide();
    $(".fullContain").hide();
    $(".lessContainer").hide();
    $(".bulkcontainer").hide();
    $(".uldContainer").hide();
}
});

$(".airtrans").change(function() {
    let val = $(this).val();
if(val == "Standard cargo") {
    $(".lessContainer").show();
    $(".fulltruck").hide();
    $(".fullContain").hide();
    $(".bulkcontainer").hide();
    $(".fullwagon").hide();
    $(".uldContainer").hide();
}
else if(val == "ULD container") {
    $(".uldContainer").show();
    $(".lessContainer").hide();
    $(".fulltruck").hide();
    $(".fullContain").hide();
    $(".bulkcontainer").hide();
    $(".fullwagon").hide();
}
});

$('.checkboxconta').hide();
    $(".checkseainput").change(function(){
        
        if($('.checkseainput').is(':checked')){
            $('.weightch').hide();
            $('.checkboxconta').show();
                }else{
                    $('.weightch').show();
                    $('.checkboxconta').hide();
                }
    });
    


    $('.invoiceAmt').hide();
    $(".checkservices").change(function(){
        if($('.checkservices').is(':checked')){
            $('.invoiceAmt').show();
                }else{
                    $('.invoiceAmt').hide();
                }
    });

    $('.perishableout').hide();
    $('.haraout').hide();
    $('.odcout').hide();
    $('.Generalcargo').click(function(){
        $('.perishableout').hide();
        $('.haraout').hide();
        $('.odcout').hide();
    });

    $('.Perishablecargo').click(function(){
        $('.perishableout').toggle();
        $('.haraout').hide();
        $('.odcout').hide();
    });

    $('.Harardouscargo').click(function(){
        $('.haraout').toggle();
        $('.perishableout').hide();
        $('.odcout').hide();
    });

    $('.ODCcargo').click(function(){
        $('.odcout').toggle();
        $('.perishableout').hide();
        $('.haraout').hide();
    });

    $('.remove').hide();
    $(".add").click(function(){   
        var html = $(".copy").html();  
        $('.remove').show();
        $(".after-add-more").after(html);  
    });  



    $(document).on('click', '.removeRow', function () {
        $(this).closest('.inputFormRow').remove();
    });

    
    $(document).on("keyup", ".boxweight", function() {
        var sum = 0;
        $(".boxweight").each(function(){
            sum += +$(this).val();
        });
        $(".totalweig").text(sum);
    });

    $('#weightkg').change(function(){
        let ff=$(this).val();
        $(".kgclass").text(ff);
    })

});


// length
// width
// height
// qty
// $(document).on("keyup", ".lwhq", function() {
//     var multi=1;
//    $('.lwhq').each(function(index,item) {
//      var val = parseFloat($(item).val());
//      if(!isNaN(val))
//         {
//            multi = multi * val;
//         }
//    });
//    $(".totalwh").text(multi);
  
//   });

//   $(".length, .width, .height, .qty").keyup(function(){
//     $('.length').each(function(index,item) {
//         let length = parseFloat($(item).val());
//              if(!isNaN(val))
//                 {
//                    multi = multi * val;
//                 }
//            });
//         });
           $('.length, .width, .height, .qty').keyup(function(){
            let mul=0;
            let length = parseFloat($(this).closest(".calculate").find(".length").val()) || 0;
            let width = parseFloat($(this).closest(".calculate").find(".width").val()) || 0;
            let height = parseFloat($(this).closest(".calculate").find(".height").val()) || 0;
            let qty = parseFloat($(this).closest(".calculate").find(".qty").val()) || 0;
            $(this).closest(".calculate").find(".bal").val(length * width * height * qty);  
            $(".bal").each(function(){
                mul += +$(this).val();
            });
            $(".totalwh").text(mul);  
        });


$(function () {
    $("#datepicker").datepicker({ 
          autoclose: true, 
          todayHighlight: true
    }).datepicker('update', new Date());
  });
  