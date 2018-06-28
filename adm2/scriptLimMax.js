function countPublishCharactersAbout(element) {
    var text = element.innerText || element.textContent;
    var len = text.length;
    var count = 150 - len;
    if (count < 0) {
        $('#about-textarea-counter').html('<class="text-danger">'); //('<span class="text-danger">' + count + '</span>')
        var ok = text.slice(0, 150);
        var resto = text.slice(151);
        element.innerHTML = ok + '<span>' + resto + '</span>';
        placeCaretAtEnd(element);
    } else {
        $('#about-textarea-counter').html('<span>' + count + '</span>');
    }
}