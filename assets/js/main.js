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
function change_inptut_clientresourses(el, icon) {
	var file_name = assingname_clientresourses(el.value)
	var status = document.createElement("span");
	if (icon == 0) {
		status.className = "status check";
	}else if (icon == 1){
		status.className = "pdf-icon fa fa-file-pdf-o";
	}
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

	$(".start-upload-img button, .new-client .datos .form-input .img-input .acc-info button").click(function(event) {
		$(".new-client #company-logo").click();
	});
	$(".new-client #company-logo").change(function(){
 		$(".start-upload-img button").hide();
    readURL(this);
    $(".new-client .datos .form-input .img-input").show();
  });
});
