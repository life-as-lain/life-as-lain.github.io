function fix_nav_position() {
  var header_height = document.getElementsByTagName("header")[0].offsetHeight + 70;
  if (window.pageYOffset > header_height){
      document.getElementsByTagName("nav")[0].classList.add("fixed-nav");
      document.getElementsByClassName("navbar-header")[0].innerHTML = '<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar" id="icon-bar-blue"></span><span class="icon-bar" id="icon-bar-green"></span><span class="icon-bar" id="icon-bar-red"></span><span class="icon-bar" id="icon-bar-orange"></span></button><a class="navbar-brand" href="index.html">life as lain</a>';
  } else {
      document.getElementsByTagName("nav")[0].classList.remove("fixed-nav");
      document.getElementsByClassName("navbar-header")[0].innerHTML = '<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar" id="icon-bar-blue"></span><span class="icon-bar" id="icon-bar-green"></span><span class="icon-bar" id="icon-bar-red"></span><span class="icon-bar" id="icon-bar-orange"></span></button>';

  }
}

Element.prototype.shrink = function(factor) {
    var box = this.getBoundingClientRect();
    console.log((box.left+factor)+ ' ' + (box.top+factor));
    this.style.width = Math.round(box.width - factor) + 'px';
    this.style.height = Math.round(box.height - factor) + 'px';
    console.log(this.style.left + ' ' + this.style.top);
    //this.move(factor);
};
Element.prototype.move = function(factor) {
    var box = this.getBoundingClientRect();
    this.style.left = Math.round(box.left + factor) + 'px';
    this.style.top = Math.round(box.top + factor) + 'px';
};
Element.prototype.getLocation = function() {
    var box = this.getBoundingClientRect();
        return [box.left,box.top];
};

function get_mouse_location() {
    var coordinates = [0,0];
    coordinates[0] = event.pageX;
    coordinates[1] = event.pageY;
    return coordinates;
}
var box = document.getElementsByClassName("responsive-box"),
    old_distance = new Array(box.length);
function shrink_responsive_box() {
    var new_distance = new Array(box.length),
        delta_distance,
        mouse_coor = get_mouse_location();
    for (var i = 0; i < box.length;i++){
        var box_coor = box[i].getLocation(),
            factor;
        if (old_distance[i] === null ) {
            old_distance[i] = 0;
        }
        new_distance[i] = Math.sqrt(Math.pow((mouse_coor[0]-box_coor[0]),2)+Math.pow((mouse_coor[1]-box_coor[1]),2));
        delta_distance = (old_distance[i] - new_distance[i]) / 2;
        factor = delta_distance / Math.sqrt(2);
        console.log(old_distance[i]);
        box[i].shrink(factor);
        old_distance[i] = new_distance[i];
    }

}
window.addEventListener('mousemove',shrink_responsive_box,false);
window.addEventListener('scroll', fix_nav_position, false);
