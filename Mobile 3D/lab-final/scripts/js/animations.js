// Camera
function switchCamera(name) {
    var elements = getElementsById(name, "Viewpoint");
    for (var i = elements.length - 1; i >= 0; i--) 
        elements[i].setAttribute('bind', 'true');
}

function getElementsById(id, tag) {
    var res = [];
    var eles = document.getElementsByTagName(tag)

    for (var i=0;i<eles.length;i++)
        if (eles[i].getAttribute('id') == id)
            res.push(eles[i]);

    return res;
}

function cameraFront() {
    switchCamera('model__CameraFront')
}

function cameraBack() {
    switchCamera('model__CameraBack')
}

function cameraLeft() {
    switchCamera('model__CameraLeft')
}

function cameraRight() {
    switchCamera('model__CameraRight')
}

function cameraTop() {
    switchCamera('model__CameraTop')
}

function cameraBottom() {
    switchCamera('model__CameraBottom')
}

// Rotate
var rotating = false;

function rotateCamera(name) {
    var elements = getElementsById(name, "timeSensor");
    elements = elements.concat(getElementsById('model__RotationTimer', "TimeSensor"));
    for (var i = elements.length - 1; i >= 0; i--) 
        elements[i].setAttribute('enabled', rotating.toString());
}

function rotate(dir) {
    rotating = !rotating;
    if (rotating == false) stopRotation()
    if (dir == 'Y') dir = "";
    rotateCamera('model__'+dir+'RotationTimer');
}

function stopRotation() {
    rotating = false;
    rotateCamera('model__XRotationTimer');
    rotateCamera('model__RotationTimer');
    rotateCamera('model__ZRotationTimer');
}

function animateModel() {
    var elements = getElementsById('model__RotationTimer', "timeSensor");
    elements = elements.concat(getElementsById('model__RotationTimer', "TimeSensor"));
    console.info(elements);

    for (var i = elements.length - 1; i >= 0; i--) {
        var element = elements[i];
        if (element.getAttribute('enabled') != 'true')
            element.setAttribute('enabled', 'true');
        else
            element.setAttribute('enabled', 'false');
    }
}

// Render&Light
function wireframe() {
    var elements = getElementsById('model', 'x3d');
    for (var i = elements.length - 1; i >= 0; i--) {
        var element = elements[i];
        element.runtime.togglePoints(true);
        element.runtime.togglePoints(true);
    }
}

var lightOn = true;

function headlight() {
    lightOn = !lightOn;
    var elements = getElementsById('model__headlight', 'NavigationInfo');

    for (var i = elements.length - 1; i >= 0; i--) {
        var element = elements[i];
        element.setAttribute('headlight', lightOn.toString());
    }
}