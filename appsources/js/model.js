$('.model').mousemove(function(e){
  
    var offs = $(this).offset(),
        p    = {x:offs.left, y:offs.top},
        mPos = {x:e.pageX, y:e.pageY},
        x    = mPos.x - p.x - 50,
        y    = mPos.y - p.y - 50;
        
    $('.gray', this).css({left:x, top:y, backgroundPosition: -x+'px '+-y+'px'});
      
  });