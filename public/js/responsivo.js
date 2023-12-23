
    var pageTitle = document.getElementById('pageTitle');
    var underline = document.getElementById('underline');
    

    var textWidth = pageTitle.offsetWidth;

    underline.style.width = (textWidth + 20) + 'px';

    var marginLeft = (textWidth - underline.offsetWidth) / 2;
    underline.style.marginLeft = marginLeft + 'px';
