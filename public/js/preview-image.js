var loadPreview = function(event) {
    var preview = document.getElementById('loadPreviewImage');
    preview.src = URL.createObjectURL(event.target.files[0]);
};

var loadPreview2 = function(event) {
    var preview2 = document.getElementById('loadPreviewImage2');
    preview2.src = URL.createObjectURL(event.target.files[0]);
};
