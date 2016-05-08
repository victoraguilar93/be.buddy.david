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
function upload_clientresourses(btn) {
	// $this.parent().find("input.subir-archivo").click();
	btn.parentElement.getElementsByClassName("subir-archivo")[0].click()

}
function change_inptut_clientresourses(el) {
	var file_name = assingname_clientresourses(el.value)
	var status = document.createElement("span");
	status.className = "status check";
	var name = el.parentElement.parentElement.getElementsByClassName("name");
	var Jname =  $(name);
	var Hname = Jname[0];
	Jname.find('p').text(file_name);
	Jname.find('p').append(status)
	//el.parentElement.parentElement.getElementsByClassName("name").getElementsByTagName("p").text = file_name;
}
function assingname_clientresourses(url_name, p) {
	var file_name = url_name.replace(/C:\\fakepath\\/i, '');
	return file_name;


	// $el.parents(".summary").find('.name p').text(file_name)
	// $el.parents(".summary").find('.name p').append('')
}

$(function() {
	console.log("hello");

	$(".cntact_information .add-contact button").click(function(event) {
		var li_clone = $(".cntact_information ol li:last-child").clone();
		$(".cntact_information ol").append(li_clone);
		$(".cntact_information ol li:last-child input").val("");
		select2_contact_information();
	});

	$(".client-resourses .button-add").click(function(event) {
		var $html = $(".summary").last().clone();
		$html.find(".name p").text("");
		$(".summary").last().after($html);
	});

	$(".client-resourses .summary .button-upload input.subir-archivo").change(function(event) {
		var file_name = $(this).val().replace(/C:\\fakepath\\/i, '');
		$(this).parents(".summary").find('.name p').text(file_name)
		$(this).parents(".summary").find('.name p').append('<span class="status check"></span>')
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
