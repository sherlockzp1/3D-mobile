
$(document).ready(
    getTextsJson('./model/texts.json')
);

function getTextsJson(path){

    // getJSON => HTML
    $.getJSON(path, function(jsonObj){

        // lines
        $('#title_home').html('<h2>' + jsonObj.pageTextData[0].title + '<h2>');
        $('#subTitle_home').html('<h3>' + jsonObj.pageTextData[0].subTitle + '</h3>');
        $('#description_home').html('<p>' + jsonObj.pageTextData[0].description + '</p>');

        // models
        setupModel('coke', jsonObj.pageTextData[7]);
        setupModel('dietcoke', jsonObj.pageTextData[8]);
        setupModel('fanta', jsonObj.pageTextData[10]);

        // gallery
        $('.title_gallery').html('<h2>' + jsonObj.pageTextData[11].galleryTitle + '<h2>');
        $('.description_gallery').html('<p>' + jsonObj.pageTextData[11].galleryDescription + '</p>');

        // camera
        $('.x3dCameraTitle').html('<h2>' + jsonObj.pageTextData[12].CameraTitle + '<h2>');
        $('.x3dCameraSubtitle').html('<p>' + jsonObj.pageTextData[12].CameraSubtitle + '<p');
    });

    function setupModel(model, json) {
        $('#x3dModelTitle_' + model).html('<h2>' + json.x3dModelTitle + '<h2>');
        $('#x3dCreationMethod_' + model).html('<p>' + json.x3dCreationMethod + '<p>');
        $('#title_' + model).html('<h2>' + json.title + '<h2>');
        $('#subTitle_' + model).html('<h3>' + json.subTitle + '</h3>');
        $('#description_' + model).html('<p>' + json.description + '</p>');
    }
}
