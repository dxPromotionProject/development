const tocTitleContainer = document.getElementsByClassName('ez-toc-title-container');
const tocTitle = document.getElementsByClassName('toc_title');
const tocToggle = document.getElementsByClassName('toc_toggle');

// 青線の追加
const newToc = document.createElement('div');
newToc.classList.add('blueLine');
tocTitleContainer[0].before( newToc );

let imageTag = document.getElementsByClassName('detailContent')[0].getElementsByTagName("img");
console.log(imageTag);
Array.prototype.forEach.call(imageTag, function(element){
    element.parentNode.classList.add("imageParent");
})
