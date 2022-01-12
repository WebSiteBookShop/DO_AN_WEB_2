function ImagesFileAsURL1() {

    var fileSelected = document.getElementById('upload1').files;
    if (fileSelected.length > 0) {
        var fileToLoad = fileSelected[0];
        var fileReader = new FileReader();
        fileReader.onload = function(fileLoaderEvent) {
            var srcData = fileLoaderEvent.target.result;
            var newImage = document.createElement('img');
            newImage.src = srcData;
            document.getElementById('displayImg1').innerHTML = newImage.outerHTML;
        }
        fileReader.readAsDataURL(fileToLoad);
    }
}

function ImagesFileAsURL2() {

    var fileSelected = document.getElementById('upload2').files;
    if (fileSelected.length > 0) {
        var fileToLoad = fileSelected[0];
        var fileReader = new FileReader();
        fileReader.onload = function(fileLoaderEvent) {
            var srcData = fileLoaderEvent.target.result;
            var newImage = document.createElement('img');
            newImage.src = srcData;
            document.getElementById('displayImg2').innerHTML = newImage.outerHTML;
        }
        fileReader.readAsDataURL(fileToLoad);
    }
}

function ImagesFileAsURL3() {

    var fileSelected = document.getElementById('upload3').files;
    if (fileSelected.length > 0) {
        var fileToLoad = fileSelected[0];
        var fileReader = new FileReader();
        fileReader.onload = function(fileLoaderEvent) {
            var srcData = fileLoaderEvent.target.result;
            var newImage = document.createElement('img');
            newImage.src = srcData;
            document.getElementById('displayImg3').innerHTML = newImage.outerHTML;
        }
        fileReader.readAsDataURL(fileToLoad);
    }
}

function ImagesFileAsURL4() {

    var fileSelected = document.getElementById('upload4').files;
    if (fileSelected.length > 0) {
        var fileToLoad = fileSelected[0];
        var fileReader = new FileReader();
        fileReader.onload = function(fileLoaderEvent) {
            var srcData = fileLoaderEvent.target.result;
            var newImage = document.createElement('img');
            newImage.src = srcData;
            document.getElementById('displayImg4').innerHTML = newImage.outerHTML;
        }
        fileReader.readAsDataURL(fileToLoad);
    }
}

function ImagesFileAsURL7() {

    var fileSelected = document.getElementById('upload7').files;
    if (fileSelected.length > 0) {
        var fileToLoad = fileSelected[0];
        var fileReader = new FileReader();
        fileReader.onload = function(fileLoaderEvent) {
            var srcData = fileLoaderEvent.target.result;
            var newImage = document.createElement('img');
            newImage.src = srcData;
            document.getElementById('displayImg7').innerHTML = newImage.outerHTML;
        }
        fileReader.readAsDataURL(fileToLoad);
    }
}

function ImagesFileAsURL8() {

    var fileSelected = document.getElementById('upload8').files;
    if (fileSelected.length > 0) {
        var fileToLoad = fileSelected[0];
        var fileReader = new FileReader();
        fileReader.onload = function(fileLoaderEvent) {
            var srcData = fileLoaderEvent.target.result;
            var newImage = document.createElement('img');
            newImage.src = srcData;
            document.getElementById('displayImg8').innerHTML = newImage.outerHTML;
        }
        fileReader.readAsDataURL(fileToLoad);
    }
}

function ImagesFileAsURL9() {

    var fileSelected = document.getElementById('upload9').files;
    if (fileSelected.length > 0) {
        var fileToLoad = fileSelected[0];
        var fileReader = new FileReader();
        fileReader.onload = function(fileLoaderEvent) {
            var srcData = fileLoaderEvent.target.result;
            var newImage = document.createElement('img');
            newImage.src = srcData;
            document.getElementById('displayImg9').innerHTML = newImage.outerHTML;
        }
        fileReader.readAsDataURL(fileToLoad);
    }
}

function ImagesFileAsURL() {
    var i = 1;
    for (i = 1; i <= 20; i++) {
        var fileSelected = document.getElementById('upload' + i).files;
        if (fileSelected.length > 0) {
            var fileToLoad = fileSelected[0];
            var fileReader = new FileReader();
            fileReader.onload = function(fileLoaderEvent) {
                var srcData = fileLoaderEvent.target.result;
                var newImage = document.createElement('img');
                newImage.src = srcData;
                document.getElementById('displayImg' + i).innerHTML = newImage.outerHTML;
            }
            fileReader.readAsDataURL(fileToLoad);
        }
    }

}