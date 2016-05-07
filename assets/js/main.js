//function select2_contact_information(argument) {
//	$('.js-select2-title-contactinformation').select2({
//		placeholder: "Title",
//	//  allowClear: true,
//	  minimumResultsForSearch: Infinity
//	});
//}

$(function() {
	console.log("hello");

	$(".cntact_information .add-contact button").click(function(event) {
		var li_clone = $(".cntact_information ol li:last-child").clone();
		$(".cntact_information ol").append(li_clone);
		$(".cntact_information ol li:last-child input").val("");
		select2_contact_information();
	});
});
