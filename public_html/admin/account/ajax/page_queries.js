

function savePageSettings(form) {
    var elements = form.elements;
    var page_id = elements.page_id.value;
    var span_header = document.createElement('span');
    span_header.style.fontSize = elements.header_size.value;
    switch (elements.header_style.value) {
        case 'cursive':span_header.style.fontStyle = 'italic';break;
        case 'bold':span_header.style.fontWeight = 'bold';break;
        case 'underline':span_header.style.textDecoration = 'underline';break;
    }
    span_header.innerHTML = elements.header.value;
    $.ajax({
        type: "POST",
        url: "/account/handlers/page_handler.php",
        data: {
            change_settings: true,
            header: span_header.outerHTML,
            page_text:elements.page_text.value,
            description:elements.description.value,
            keywords:elements.keywords.value,
            page_id:page_id
        },
        success: function (result) {
            showMassage(result);
            initializePageData(form);
        }
    });
}

function initializePageData(form) {
    form = document.getElementById('settings_form');
    var elements = form.elements;
    var header = elements.header;
    var page_text = elements.page_text;
    var description = elements.description;
    var keywords = elements.keywords;
    var page_id = elements.page_id.value;
    $.ajax({
        type: "POST",
        url: "/account/handlers/page_handler.php",
        data: {
            get_settings: true,
            page_id:page_id
        },
        success: function (result) {
            var json = JSON.parse(result);

            var span_header = document.createElement('span');
            span_header.innerHTML = json.header;
            header.value = span_header.innerText;
            document.getElementsByClassName('jodit_wysiwyg')[0].innerHTML = json.page_text;
            description.value = json.description;
            keywords.value = json.keywords;

        }
    });

}

