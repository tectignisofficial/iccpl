$(".lessContainer").hide();
$(".fulltruck").hide();
$(".fullContain").hide();
$(".bulkcontainer").hide();
$(".fullwagon").hide();
$(".uldContainer").hide();
$('.railfrom').hide();
$(".roadfrom").hide();

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
    $('.warHous').show();
    $(".insSer").css('display','none');
}
else if(val == "Less container load  LCL") {
    $(".lessContainer").show();
    $(".fullContain").hide();
    $(".bulkcontainer").hide();
    $(".fulltruck").hide();
    $(".fullwagon").hide();
    $(".uldContainer").hide();
    $('.warHous').show();
    $(".insSer").css('display','none');
}
else if(val == "Bulk") {
    $(".bulkcontainer").show();
    $(".fullContain").hide();
    $(".lessContainer").hide();
    $(".fulltruck").hide();
    $(".fullwagon").hide();
    $(".uldContainer").hide();
    $(".insSer").css('display','block');
    $('.warHous').hide();
}

});

$(".roadraltrans").change(function() {
    let val = $(this).val();
if(val == "Full truck load FTL") {
    $(".fulltruck").show();
    $(".fullContain").hide();
    $(".lessContainer").hide();
    $(".bulkcontainer").hide();
    $(".fullwagon").hide();
    $(".uldContainer").hide();
    $(".roadfrom").show();
    $('.railfrom').hide();
    $('.seafrom').hide();
    $(".associatedNone").hide();
}

else if(val == "Full wagon load FWL") {
    $(".fullwagon").show();
    $(".fulltruck").hide();
    $(".fullContain").hide();
    $(".lessContainer").hide();
    $(".bulkcontainer").hide();
    $(".uldContainer").hide();
    $('.railfrom').show();
    $('.seafrom').hide();
    $(".roadfrom").hide();
    $(".associatedNone").hide();
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
    $(".weightChangeName").text('Gross Weight');
    $(".volumeChangeName").text('Total Volume');
    $(".roadTransportation").css('display','block');
    $(".certificate").css('display','none');
}
else if(val == "ULD container") {
    $(".uldContainer").show();
    $(".lessContainer").hide();
    $(".fulltruck").hide();
    $(".fullContain").hide();
    $(".bulkcontainer").hide();
    $(".fullwagon").hide();
    $(".weightChangeName").text('Gross Weight');
    $(".volumeChangeName").text('Total Volume');
    $(".roadTransportation").css('display','block');
    $(".certificate").css('display','none');
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
        $('#air').show();
        $('#land').show();
        $('#sea').show();
    });

    $('.Perishablecargo').click(function(){
        $('.perishableout').toggle();
        $('.haraout').hide();
        $('.odcout').hide();
        $('#air').show();
        $('#land').show();
        $('#sea').show();
    });

    $('.Harardouscargo').click(function(){
        $('.haraout').toggle();
        $('.perishableout').hide();
        $('.odcout').hide();
        $('#air').hide();
        $('#land').show();
    });

    $('.ODCcargo').click(function(){
        $('.odcout').toggle();
        $('.perishableout').hide();
        $('.haraout').hide();
        $('#land').hide();
        $('#air').hide();
    });

    $('.remove').hide();
    $(".add").click(function(){   
        var html = $(".copy").html();  
        $('.remove').show();
        $(".after-add-more").after(html);  
    });  

    $('#weightkg').change(function(){
        let ff=$(this).val();
        $(".kgclass").text(ff);
        $(".weightKG").text(ff);
    });

    $("#lengthMCM").change(function(){
        let lengthMCM = $('#lengthMCM').val();
        $('.lbhMT').text(lengthMCM);
        $('.Symbol').text(lengthMCM);
    });

    $(document).on('keyup', '.qty', function () {
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

//     $(".add").click(function () {
//         let html =' <div class="row calculate"> <div class="col-md-6"><div class="form-group mt-4"> <label class="dimlabel"><span class="dimspan">Dimensions of Box</span> <div class="dimdiv">  <div class="weightdiv1"><span   class="weightdiv1" style="max-width: initial;">   <input class="diminput length"   type="number" name="dimensions.length" placeholder="length"  value="">  <span class="divcross">x</span></span><span  class="weightdiv1"> <input class="diminput width"  type="number"  name="dimensions.width"   placeholder="width"  value=""><span   class="divcross">X</span></span><span class="weightdiv1"> <input class="diminput height"  type="number"  name="dimensions.height"  placeholder="height"  value=""></span></div> <span class="mt"> <select name="" id="lengthMCM" class="dropmt">  <option value="m">m</option> <option value="cm">cm   </option>  </select> </span> </div> </label> </div></div> <div class="col-md-3"> <div class="form-group mt-4"> <label class="label" for="email_id">Number of   Box<span  style="color:red">*</span></label></label> <div class="weightdiv">  <div class="weightdiv1"><input class="divformcontrolInput qty" type="text" name="cargoWeight"  placeholder="no of boxes"> </div> </div> </div> </div> <div class="col-md-3"> <div class="form-group mt-4"> <label class="label" for="email_id">Weight   of  Box<span  style="color:red">*</span></label></label> <div class="weightdiv">  <div class="weightdiv1"><input class="divformcontrolInput boxweight"   type="text" name="cargoWeight"  placeholder="no of boxes"></div>   <span class="mt"> <select name="" id="weightkg"   class="dropmt">   <option value="kg">kg</option>  <option value="mt">mt</option>  </select> </span> </div> </div> <input type="hidden" class="bal"> </div> </div>';
//         $('#newRow').append(html);
// });

    $(".add").click(function () {
        var html = '';
        html += '<div class="row calculate" id="">';
        html += '<div class="col-md-6">';
        html += '<div class="form-group mt-4">';
        html += '<label class="dimlabel"><span class="dimspan">Dimensions of Box</span>';
        html += '<div class="dimdiv">';
        html += '<div class="weightdiv1"><span class="weightdiv1" style="max-width: initial;">';
        html += '<input class="diminput length" type="number" name="dimensions.length" placeholder="length" value="">';
        html += '<span class="divcross"><svg width="10" height="10" fill="none" xmlns="http://www.w3.org/2000/svg">';
        html += '<path fill-rule="evenodd" clip-rule="evenodd" d="M.529 8.529a.667.667 0 00.943.943L5 5.943l3.53 3.529a.667.667 0 10.943-.943L5.942 5l3.53-3.528a.667.667 0 00-.943-.943L5 4.057 1.472.53a.667.667 0 00-.943.943L4.057 5 .53 8.53z" fill="#6E7E92"> </path>';
        html += '</svg></span></span><span class="weightdiv1">';
        html += '<input class="diminput width" type="number" name="dimensions.width" placeholder="width" value="">';
        html += '<span class="divcross"><svg width="10" height="10" fill="none" xmlns="http://www.w3.org/2000/svg">';
        html += '<path fill-rule="evenodd" clip-rule="evenodd" d="M.529 8.529a.667.667 0 00.943.943L5 5.943l3.53 3.529a.667.667 0 10.943-.943L5.942 5l3.53-3.528a.667.667 0 00-.943-.943L5 4.057 1.472.53a.667.667 0 00-.943.943L4.057 5 .53 8.53z" fill="#6E7E92"> </path>';
        html += '</svg></span></span><span class="weightdiv1">';
        html += '<input class="diminput height" type="number" name="dimensions.height" placeholder="height" value=""></span></div>';
        html += '<span class="mt lbhMT">';
        html += 'm';
        html += '</span>';
        html += '</div>';
        html += '</label>';
        html += '</div>';
        html += '</div>';
        html += '<div class="col-md-2">';
        html += '<div class="form-group mt-4">';
        html += '<label class="label" for="email_id">Number of Box<span style="color:red">*</span></label>';
        html += '<div class="weightdiv">';
        html += '<div class="weightdiv1"><input class="divformcontrolInput qty" type="text" name="cargoWeight" placeholder="no of boxes"> </div>';
        html += '</div>';
        html += '</div>';
        html += '</div>';
        html += '<div class="col-md-3">';
        html += '<div class="form-group mt-4">';
        html += '<label class="label" for="email_id">Weight of Box<span style="color:red">*</span></label>';
        html += '<div class="weightdiv">';
        html += '<div class="weightdiv1"><input class="divformcontrolInput boxweight" type="text" name="cargoWeight" placeholder="no of boxes"> </div>';
        html += '<span class="mt weightKG">';
        html += 'kg';
        html += ' </span>';
        html += '</div>';
        html += '</div>';
        html += '<input type="hidden" class="bal">';
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
    
    $(document).on("keyup", ".boxweight", function() {
        var sum = 0;
        $(".boxweight").each(function(){
            sum += +$(this).val();
        });
        $(".totalweig").text(sum);
    });

    $('.odcLength, .odcwidth, .odcheight').keyup(function(){
        let odcLength=$(".odcLength").val();
        let odcwidth=$(".odcwidth").val();
        let odcheight=$(".odcheight").val();
        $(".totalLBH").html(odcLength*odcwidth*odcheight);
    })
    $(".grossweight").keyup(function(){
        let grossweight=$(".grossweight").val(); 
        $(".totalgross").text(grossweight);
    });
});

$(function () {
    $("#datepicker").datepicker({ 
          autoclose: true, 
          todayHighlight: true
    }).datepicker('update', new Date());
  });
  