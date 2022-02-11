function videoControl(){
    
    $(".play-btn").click(function(){
        
        console.log('play click');

        $(this).hide();
        
        var play = $(this),
            parent = play.parent(),
            video = parent.find('video'),
            pause = parent.find('.pause-btn');
            
        
        video[0].play();
        
        video.unbind('mouseenter').unbind('mouseleave');
        video.mouseleave(function(){

            $(this).unbind('mouseenter').unbind('mouseleave');
            $(this).mouseenter(function(){
                pause.show()
            }).mouseleave(function(){
                pause.hide();
            });
            
            pause.unbind('mouseenter').unbind('mouseleave');
            pause.mouseenter(function(){
                pause.show()
            }).mouseleave(function(){
                pause.hide();
            });
            
        });
    });
    
    $(".pause-btn").click(function(){
        
        var pause = $(this),
            parent = pause.parent(),
            video = parent.find('video'),
            play = parent.find('.play-btn');
        
        video.unbind('mouseenter').unbind('mouseleave');
        pause.unbind('mouseenter').unbind('mouseleave');
        
        $(this).hide();
        video[0].pause();
        play.show();
    });
    
    $("[poster='']").parent().find('.pause-btn').each(function(){
        
        var parent = $(this).parent(),
            video = parent.find('video'),
            pause = parent.find('.pause-btn');
            
    
        video.unbind('mouseenter').unbind('mouseleave');
        video.mouseenter(function(){
            pause.show();
        }).mouseleave(function(){
           pause.hide();
        });
        
        $(this).unbind('mouseenter').unbind('mouseleave');
        pause.mouseenter(function(){
            pause.show();
        }).mouseleave(function(){
           pause.hide();
        });
                
    });
}

$(function() {
    //console.log('Ready');
    videoControl();
})

