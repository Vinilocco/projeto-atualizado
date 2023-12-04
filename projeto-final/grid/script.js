function showContent(sectionId) {
    var content = document.getElementById('content_' + sectionId);
    if (content.style.display === 'none') {
        content.style.display = 'block';
    } else {
        content.style.display = 'none';
    }
}