
// add has-children class using JS
var hasChildren = document.querySelectorAll('.menu-item-has-children')
window.addEventListener('DOMContentLoaded', function(){

    hasChildren.forEach(function(ele){
        ele.classList.add('has-children');
    })
    // hasChildren.classList.add('has-children');
})