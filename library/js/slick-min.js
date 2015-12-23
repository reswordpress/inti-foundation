!function(t,e){"use strict";t.fn.exists=function(){return 0!==this.length};var o=function(t,e){this.options={source:void 0,start:void 0,end:void 0,keyControl:!0,content:void 0,theme:{container:t,content:".slick-content",currentNo:".current-no",totalNo:".total",next:".next",prev:".prev"}};for(var o in this.options)this.options.hasOwnProperty(o)&&"theme"!==o&&(this.options[o]=void 0!==e[o]?e[o]:this.options[o]);if(void 0!==e.theme)for(var i in this.options.theme)this.options.theme.hasOwnProperty(i)&&(this.options.theme[i]=void 0!==e.theme[i]?e.theme[i]:this.options.theme[i]);this.options.content=this.options.theme.container+" "+this.options.theme.content,this.state={current:this.options.start-1,start:this.options.start,end:this.options.end,slide:{current:0,difference:this.options.start-1,total:this.options.end-this.options.start+1,maxHit:0}},this.init.apply(this)},i=o.prototype;i.hooks={next:function(){var t=this;if(t.state.slide.current<t.state.slide.total){var e=++t.state.slide.current+t.state.slide.difference;t.hooks.setSlide.apply(this,[e])}},prev:function(){var t=this;if(t.state.slide.current>1){var e=--t.state.slide.current+t.state.slide.difference;t.hooks.setSlide.apply(this,[e])}},setSlide:function(e){var o=this,i=o.hooks.slideStatus.apply(o,[e]);return o.state.slide.current=e-o.state.slide.difference,1===o.state.slide.current&&t(o.options.theme.container).animate({opacity:"1"},500),t(o.options.theme.container+" .skip"+o.options.theme.currentNo).is(":input")?t(o.options.theme.container+" "+o.options.theme.currentNo).val(o.state.slide.current):(t(o.options.theme.container+" .skip").val(o.state.slide.current),t(o.options.theme.container+" "+o.options.theme.currentNo).html(o.state.slide.current)),1===i?(t(o.options.content+" img.current").removeClass("current").addClass("cached-slide").hide(),t(o.options.content+" img[data-slide="+e+"]").removeClass("cached-slide").addClass("current").show(),o.state.current=e,t(o.options.theme.container+" .length").width(100*o.state.slide.current/o.state.slide.total+"%"),void o.hooks.getSlide.apply(o,[e+1])):void(2===i?o.hooks.slideSwitch.apply(this,[e]):0===i&&(t(o.options.content+" img.loading").off("load.slideSwitch").remove(),o.hooks.getSlide.apply(o,[e]),o.hooks.slideSwitch.apply(this,[e])))},getSlide:function(e){var o=this;0===o.hooks.slideStatus.apply(this,[e])&&e<=o.state.end&&(t(o.options.content).append('<img src="'+o.hooks.imagePath.apply(o,[e])+'" data-slide='+e+' class="loading">'),t(o.options.content+" img.loading").hide(),t(o.options.content+" img.loading").load(function(){t(this).removeClass("loading").addClass("cached-slide")}))},slideSwitch:function(e){var o=this;t(o.options.content+" img[data-slide="+e+"]").on("load.slideSwitch",function(){t(o.options.content+" img.current").removeClass("current").addClass("cached-slide").hide(),t(this).removeClass("cached-slide").addClass("current").show(),o.state.current=e,t(o.options.theme.container+" .length").width(100*(e+1)/o.state.slide.total+"%"),o.hooks.getSlide.apply(o,[e+1])})},slideStatus:function(e){var o=this,i=o.options.content+" img[data-slide="+e+"]";return t(i).exists()?t(i).hasClass("loading")?2:1:0},imagePath:function(t){var e=this.options.source.split("*");return e[0]+t+e[1]},skip:function(e){if(t.isNumeric(e)){var o=this,i=parseInt(e)+o.state.slide.difference;o.hooks.getSlide.apply(o,[i]),o.hooks.setSlide.apply(o,[i])}}},i.init=function(){var e=this;t(e.options.theme.container).css("opacity","0"),"string"==typeof e.options.source&&e.hooks.next.apply(e),t(e.options.theme.container+" "+e.options.theme.next).click(function(t){t.preventDefault(),e.hooks.next.apply(e)}),t(e.options.theme.container+" "+e.options.theme.prev).click(function(t){t.preventDefault(),e.hooks.prev.apply(e)}),t(e.options.theme.container+" "+e.options.theme.totalNo).html(e.state.end-e.state.start+1),e.options.keyControl&&t(document).keyup(function(o){39!==o.keyCode||t("input:focus").exists()||e.hooks.next.apply(e),37!==o.keyCode||t("input:focus").exists()||e.hooks.prev.apply(e)}),t(e.options.theme.container+" .skip").keypress(function(o){13===o.keyCode&&(e.hooks.skip.apply(e,[t(this).val()]),t(this).blur())})},window.Slick=o,o.next=function(t){t.constructor===o&&t.hooks.next.apply(t)},o.prev=function(t){t.constructor===o&&t.hooks.prev.apply(t)},o.skip=function(t,e){t.constructor===o&&t.hooks.skip.apply(t,[e])}}(jQuery,window);