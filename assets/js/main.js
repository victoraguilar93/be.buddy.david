//function select2_contact_information(argument) {
//	$('.js-select2-title-contactinformation').select2({
//		placeholder: "Title",
//	//  allowClear: true,
//	  minimumResultsForSearch: Infinity
//	});
//}

function readURL(input) {
  if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function (e) {
          $('.new-client .datos .form-input .img-input img').attr('src', e.target.result);
          $('.new-client .datos .form-input .img-input p').text($("#company-logo").val().replace(/C:\\fakepath\\/i, ''))
          console.log(e.target)
      }
       reader.readAsDataURL(input.files[0]);
  }
}

$(function() {
	console.log("hello");

	$(".cntact_information .add-contact button").click(function(event) {
		var li_clone = $(".cntact_information ol li:last-child").clone();
		$(".cntact_information ol").append(li_clone);
		$(".cntact_information ol li:last-child input").val("");
		select2_contact_information();
	});
	// $(".new-client #company-logo").fileinput({
	// 	showCaption: false,
	// 	showRemove: false,
	// 	showClose: false
	// });
	// 	$('.new-client #company-logo').on('fileselect', function(event, numFiles, label) {
	//     $(".new-client .datos .form-input .img-input p").text(label)
	// 	});

	$(".start-upload-img button, .new-client .datos .form-input .img-input .acc-info button").click(function(event) {
		$(".new-client #company-logo").click();
	});
	 $(".new-client #company-logo").change(function(){
	 		$(".start-upload-img button").hide();
      readURL(this);
      $(".new-client .datos .form-input .img-input").show();
    });
});
