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
else if(val == "Full truck load FCL") {
    $(".fulltruck").show();
    $(".fullContain").hide();
    $(".lessContainer").hide();
    $(".bulkcontainer").hide();
    $(".fullwagon").hide();
    $(".uldContainer").hide();
}
else if(val == "less truck load FCL") {
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

    $(".add").click(function () {
        var html = '';
        html += '<div class="row inputFormRow" id="">';
        html += '<div class="col-md-6">';
        html += '<div class="form-group mt-4">';
        html += '<label class="dimlabel"><span class="dimspan">Dimensions of Box</span>';
        html += '<div class="dimdiv">';
        html += '<div class="weightdiv1"><span class="weightdiv1" style="max-width: initial;">';
        html += '<input class="diminput lwhq" type="number" name="dimensions.length" placeholder="length" value="">';
        html += '<span class="divcross"><svg width="10" height="10" fill="none" xmlns="http://www.w3.org/2000/svg">';
        html += '<path fill-rule="evenodd" clip-rule="evenodd" d="M.529 8.529a.667.667 0 00.943.943L5 5.943l3.53 3.529a.667.667 0 10.943-.943L5.942 5l3.53-3.528a.667.667 0 00-.943-.943L5 4.057 1.472.53a.667.667 0 00-.943.943L4.057 5 .53 8.53z" fill="#6E7E92"> </path>';
        html += '</svg></span></span><span class="weightdiv1">';
        html += '<input class="diminput lwhq" type="number" name="dimensions.width" placeholder="width" value="">';
        html += '<span class="divcross"><svg width="10" height="10" fill="none" xmlns="http://www.w3.org/2000/svg">';
        html += '<path fill-rule="evenodd" clip-rule="evenodd" d="M.529 8.529a.667.667 0 00.943.943L5 5.943l3.53 3.529a.667.667 0 10.943-.943L5.942 5l3.53-3.528a.667.667 0 00-.943-.943L5 4.057 1.472.53a.667.667 0 00-.943.943L4.057 5 .53 8.53z" fill="#6E7E92"> </path>';
        html += '</svg></span></span><span class="weightdiv1">';
        html += '<input class="diminput lwhq" type="number" name="dimensions.height" placeholder="height" value=""></span></div>';
        html += '<span class="mt">';
        html += '<select name="" id="" class="dropmt"> <option value="m">m</option> <option value="cm">cm </option> </select>';
        html += '</span>';
        html += '</div>';
        html += '</label>';
        html += '</div>';
        html += '</div>';
        html += '<div class="col-md-2">';
        html += '<div class="form-group mt-4">';
        html += '<label class="label" for="email_id">Number of Box<span style="color:red">*</span></label>';
        html += '<div class="weightdiv">';
        html += '<div class="weightdiv1"><input class="OfQTtD lwhq" type="text" name="cargoWeight" placeholder="no of boxes"> </div>';
        html += '</div>';
        html += '</div>';
        html += '</div>';
        html += '<div class="col-md-3">';
        html += '<div class="form-group mt-4">';
        html += '<label class="label" for="email_id">Weight of Box<span style="color:red">*</span></label>';
        html += '<div class="weightdiv">';
        html += '<div class="weightdiv1"><input class="OfQTtD boxweight" type="text" name="cargoWeight" placeholder="no of boxes"> </div>';
        html += '<span class="mt">';
        html += ' <select name="" id="" class="dropmt"> <option value="kg">kg</option> <option value="mt">mt</option></select>';
        html += ' </span>';
        html += '</div>';
        html += '</div>';
        html += '</div>';
        html += '<div class="col-md-1 ">'
        html += '<div class="removeRow mt-5">';
        html += '<i class="fa fa-trash"></i>';
        html += '</div>';
        html += '</div>';
        html += '</div>';
        
        $('#newRow').append(html);
    });

    $(document).on('click', '.removeRow', function () {
        $(this).closest('.inputFormRow').remove();
    });

    // $('.lwhq').keyup(function() {

    //     let length=$('.length1').val();
    //     let width1=$('.width1').val();
    //     let height=$('.height').val();
    //     let quantityunit=$('.quantityunit').val();
    //    $('.totalwh').text(length*width1*height*quantityunit);

    // });

    // $(document).on("keyup", ".lwhq", function() {
    //     var mul = 0;
    //     $(".lwhq").each(function(){
    //         // mul += $(this).val();
    //         mul = $(this).html(parseFloat($(this).val()) * factor);
    //     });
    //     $(".totalwh").text(mul);
    // });

    
    $(document).on("keyup", ".boxweight", function() {
        var sum = 0;
        $(".boxweight").each(function(){
            sum += +$(this).val();
        });
        $(".totalweig").text(sum);
    });

});

$(function () {
    $("#datepicker").datepicker({ 
          autoclose: true, 
          todayHighlight: true
    }).datepicker('update', new Date());
  });
  