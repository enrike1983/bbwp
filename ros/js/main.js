jQuery(document).ready(function(){
        $("#jquery_jplayer_1").jPlayer({
            ready: function () {
                $(this).jPlayer("setMedia", {
                    mp3: "media/intro.mp3"
                });
            },
            play: function() { // To avoid both jPlayers playing together.
                $(this).jPlayer("pauseOthers");
            },
            repeat: function(event) { // Override the default jPlayer repeat event handler
                if(event.jPlayer.options.loop) {
                    $(this).unbind(".jPlayerRepeat").unbind(".jPlayerNext");
                    $(this).bind($.jPlayer.event.ended + ".jPlayer.jPlayerRepeat", function() {
                        $(this).jPlayer("play");
                    });
                } else {
                    $(this).unbind(".jPlayerRepeat").unbind(".jPlayerNext");
                    $(this).bind($.jPlayer.event.ended + ".jPlayer.jPlayerNext", function() {
                        $("#jquery_jplayer_1").jPlayer("play", 0);
                    });
                }
            },
            swfPath:    "assets/js/lib-jplayer/Jplayer.swf",
            supplied:   "mp3",
            cssSelectorAncestor: "#jp_container_1",
            wmode:      "window"
        });    

        $("#jquery_jplayer_2").jPlayer({
            ready: function () {
                $(this).jPlayer("setMedia", {
                    mp3: "media/mercenary_of_war.mp3"
                });
            },
            play: function() { // To avoid both jPlayers playing together.
                $(this).jPlayer("pauseOthers");
            },
            repeat: function(event) { // Override the default jPlayer repeat event handler
                if(event.jPlayer.options.loop) {
                    $(this).unbind(".jPlayerRepeat").unbind(".jPlayerNext");
                    $(this).bind($.jPlayer.event.ended + ".jPlayer.jPlayerRepeat", function() {
                        $(this).jPlayer("play");
                    });
                } else {
                    $(this).unbind(".jPlayerRepeat").unbind(".jPlayerNext");
                    $(this).bind($.jPlayer.event.ended + ".jPlayer.jPlayerNext", function() {
                        $("#jquery_jplayer_1").jPlayer("play", 0);
                    });
                }
            },
            swfPath:    "assets/js/lib-jplayer/Jplayer.swf",
            supplied:   "mp3",
            cssSelectorAncestor: "#jp_container_2",
            wmode:      "window"
        });
    
        $("#jquery_jplayer_3").jPlayer({
            ready: function () {
                $(this).jPlayer("setMedia", {
                    mp3: "media/love_me.mp3"
                });
            },
            play: function() { // To avoid both jPlayers playing together.
                $(this).jPlayer("pauseOthers");
            },
            swfPath:    "assets/js/lib-jplayer/Jplayer.swf",
            supplied:   "mp3",
            cssSelectorAncestor: "#jp_container_3",
            wmode:      "window"
        });
        
        $("#jquery_jplayer_4").jPlayer({
            ready: function () {
                $(this).jPlayer("setMedia", {
                    mp3: "media/soulless_stone.mp3"
                });
            },
            play: function() { // To avoid both jPlayers playing together.
                $(this).jPlayer("pauseOthers");
            },
            swfPath:    "assets/js/lib-jplayer/Jplayer.swf",
            supplied:   "mp3",
            cssSelectorAncestor: "#jp_container_4",
            wmode:      "window"
        });
        
        $("#jquery_jplayer_5").jPlayer({
            ready: function () {
                $(this).jPlayer("setMedia", {
                    mp3: "media/crucified_hearts.mp3"
                });
            },
            play: function() { // To avoid both jPlayers playing together.
                $(this).jPlayer("pauseOthers");
            },
            swfPath:    "assets/js/lib-jplayer/Jplayer.swf",
            supplied:   "mp3",
            cssSelectorAncestor: "#jp_container_5",
            wmode:      "window"
        });   

         $("#jquery_jplayer_6").jPlayer({
            ready: function () {
                $(this).jPlayer("setMedia", {
                    mp3: "media/flag_of_rock.mp3"
                });
            },
            play: function() { // To avoid both jPlayers playing together.
                $(this).jPlayer("pauseOthers");
            },
            swfPath:    "assets/js/lib-jplayer/Jplayer.swf",
            supplied:   "mp3",
            cssSelectorAncestor: "#jp_container_6",
            wmode:      "window"
        });    
        
         $("#jquery_jplayer_7").jPlayer({
            ready: function () {
                $(this).jPlayer("setMedia", {
                    mp3: "media/visionary.mp3"
                });
            },
            play: function() { // To avoid both jPlayers playing together.
                $(this).jPlayer("pauseOthers");
            },
            swfPath:    "assets/js/lib-jplayer/Jplayer.swf",
            supplied:   "mp3",
            cssSelectorAncestor: "#jp_container_7",
            wmode:      "window"
        });      

         $("#jquery_jplayer_8").jPlayer({
            ready: function () {
                $(this).jPlayer("setMedia", {
                    mp3: "media/far_away.mp3"
                });
            },
            play: function() { // To avoid both jPlayers playing together.
                $(this).jPlayer("pauseOthers");
            },
            swfPath:    "assets/js/lib-jplayer/Jplayer.swf",
            supplied:   "mp3",
            cssSelectorAncestor: "#jp_container_8",
            wmode:      "window"
        }); 

         $("#jquery_jplayer_9").jPlayer({
            ready: function () {
                $(this).jPlayer("setMedia", {
                    mp3: "media/remission.mp3"
                });
            },
            play: function() { // To avoid both jPlayers playing together.
                $(this).jPlayer("pauseOthers");
            },
            swfPath:    "assets/js/lib-jplayer/Jplayer.swf",
            supplied:   "mp3",
            cssSelectorAncestor: "#jp_container_9",
            wmode:      "window"
        }); 

         $("#jquery_jplayer_10").jPlayer({
            ready: function () {
                $(this).jPlayer("setMedia", {
                    mp3: "media/true_metal_jacket.mp3"
                });
            },
            play: function() { // To avoid both jPlayers playing together.
                $(this).jPlayer("pauseOthers");
            },
            swfPath:    "assets/js/lib-jplayer/Jplayer.swf",
            supplied:   "mp3",
            cssSelectorAncestor: "#jp_container_10",
            wmode:      "window"
        });     
        
         $("#jquery_jplayer_11").jPlayer({
            ready: function () {
                $(this).jPlayer("setMedia", {
                    mp3: "media/spaceman.mp3"
                });
            },
            play: function() { // To avoid both jPlayers playing together.
                $(this).jPlayer("pauseOthers");
            },
            swfPath:    "assets/js/lib-jplayer/Jplayer.swf",
            supplied:   "mp3",
            cssSelectorAncestor: "#jp_container_11",
            wmode:      "window"
        });              
});