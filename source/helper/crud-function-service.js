function postFormWithResponse(url, form, postResponse){
    $.post(url, form, function (respose) {
        postResponse(respose);
    });
}

function putFormWithResponse(url, form, putResponse){
    $.post(url, form, function (respose) {
        putResponse(respose);
    });
}

function retrive(url, getResponse){
    $.ajax({
        url: url,
        type: 'GET',
        success: function (response) {
            getResponse(response);
        }
    });
}

function retriveWithParams(url, form, retriveResponse){
    $.post(url, form, function (respose) {
        retriveResponse(respose);
    });
}