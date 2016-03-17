

var position = 0;

var numThumb = 5;

var preload = [];
for (i = 0; i < images.length; i++) {
    preload[i] = new Image();
    preload[i].src = images[i];
}

function getNextPosition(id, max) {
    var slot =  images.indexOf($(id).attr("src")) + 1;
    // slot finds the position of the source in the images array and adds 1 to the index

    if (slot > max) {
    // if slot is last slot in array, return max
      return max;   // ex if max = images.length return the length
    }

    return slot; // returns the next thumbnail
}


function getPreviousPosition(id, min) {
  // passes the parametes of id and min

    var slot =  images.indexOf($(id).attr("src")) - 1;
    // slot finds the position of the source in the images array and subracts 1 to the index

    if (slot < min) {
    // if slot less than the min then return the min (index 0)
      return min;   // ex if min = 0 then return because that's the end
  }

  return slot; // returns the next thumbnail
}


function initializeSlider() {

    // doesn't load all of the images at once (bad practice if you do)


    for (i = 0; i < images.length; i++) {
        var image = document.createElement("img");
        $(image).attr("src", images[i]);
        $('#mainImage').append(image);
    }


    // populates the thumbnail gallery
    for (i = 0; i < images.length; i++) {
        var thumb = document.createElement('img');
        $(thumb).attr('src', images[i])
        $(thumb).attr('id',"thumbnail"+i);
        $('#imageContain').append(thumb);
    }

    $('#imageContain img').css('margin-right', ($('#thumbGallery').width() - ($('#imageContain img').width()*numThumb))/numThumb);
    $('#imageContain').css('width', images.length * ($('#imageContain img').width() + parseInt($('#imageContain img').css('margin-right')) + 3));
}

initializeSlider();



// when you click the right arrow, increase the position of the index
// if your position is too big, decrease it to fit the array.length
$('#rightArrow').click(function(){
    position++;


    if (position > images.length) {
        position--;
    }


    // changes the thumbnails
    setThumb("#thumbnail0", getNextPosition("#thumbnail0", images.length - 5));
    setThumb("#thumbnail1", getNextPosition("#thumbnail1", images.length - 4));
    setThumb("#thumbnail2", getNextPosition("#thumbnail2", images.length - 3));
    setThumb("#thumbnail3", getNextPosition("#thumbnail3", images.length - 2));
    setThumb("#thumbnail4", getNextPosition("#thumbnail4", images.length - 1));

    refreshImage();
    // goRight();
});


// when you click the left arrow, decrease the position of the index
// if your position is too small (negative #), increase it (= 0, arrays start @ 0)
$('#leftArrow') .click(function(){
    position--;

    if (position < 0) {
      position++;
    }

    setThumb("#thumbnail0", getPreviousPosition("#thumbnail0", 0));
    setThumb("#thumbnail1", getPreviousPosition("#thumbnail1", 1));
    setThumb("#thumbnail2", getPreviousPosition("#thumbnail2", 2));
    setThumb("#thumbnail3", getPreviousPosition("#thumbnail3", 3));
    setThumb("#thumbnail4", getPreviousPosition("#thumbnail4", 4));

    // will not work if there's less than 3 images
    // you hard coded -1, -2

    refreshImage();
    // goLeft();
});


$('#imageContain img').click(function(border){
    position = images.indexOf(this.src);

    refreshImage();
});


function refreshImage() {
    $('#mainImage').attr('src', images[position]);
}


// sets the thumbnail position
function setThumb(thumbnailID, slot) {
    // whatever selector gets passes through, attach the source attribute that matches the position you're at
    $(thumbnailID).attr('src', images[slot]);
}
