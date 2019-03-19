function showSliderPhoto(elem,id) {
    document.getElementById('hidden_'+id).value = '';
    var file = elem.files[0];
    if (file.type.match('image.*')) {
        var fr = new FileReader();
        fr.onload = (function (theFile) {
            return function (e) {
                document.getElementById('img_'+id).src = e.target.result;
            };
        })(file);
        fr.readAsDataURL(file);
    }
    else{
        var messageImage = document.createElement('span');
        messageImage.className = 'errorFile';
        messageImage.innerHTML = 'Не корректный формат файла!';
        elem.parentNode.appendChild(messageImage);
    }
}

function addSlide(page_id,input) {
    var file = input.files[0];
    var fd = new FormData;
    fd.append('img', file);
console.log(file);
    if (file.type.match('image.*')) {
        $.ajax({
            type: "POST",
            processData: false,
            contentType: false,
            dataType: 'text',
            cache: false,
            url: "/account/handlers/slider_handler.php",
            data: fd,
            success: function (result) {
                console.log(result);
            }
        });
    }
    else{
        showMassage(false);
    }
}

function getAllSlides(page_id) {
    $.ajax({
        type: "POST",
        url: "/account/handlers/slider_handler.php",
        data: {
            get_all_slides: true,
            page_id:page_id
        },
        success: function (result) {
            var json = JSON.parse(result);
            var slides = document.getElementById('slides');
            for(var i=0;i<json.length;i++) {
                var image = document.createElement('div');
                image.setAttribute('class','single_slide');
                image.style.background = 'url('+json[i].slide_photo+')';
                slides.appendChild(image);
            };
        }
    });
}