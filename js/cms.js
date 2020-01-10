hljs.initHighlightingOnLoad();

function reload() {
    src = "/captcha";
    document.captcha.src = src + '?rand=' + Math.random();
}

$(document).ready(function() {
  $('#summernote').summernote();
});
