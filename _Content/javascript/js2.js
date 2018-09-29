
!function($){"use strict";$(function(){$.support.transition=(function(){var transitionEnd=(function(){var el=document.createElement('bootstrap'),transEndEventNames={'WebkitTransition':'webkitTransitionEnd','MozTransition':'transitionend','OTransition':'oTransitionEnd otransitionend','transition':'transitionend'},name
for(name in transEndEventNames){if(el.style[name]!==undefined){return transEndEventNames[name]}}}())
return transitionEnd&&{end:transitionEnd}})()})}(window.jQuery);!function($){"use strict";var Modal=function(element,options){this.options=options
this.$element=$(element).delegate('[data-dismiss="modal"]','click.dismiss.modal',$.proxy(this.hide,this))
this.options.remote&&this.$element.find('.modal-body').load(this.options.remote)}
Modal.prototype={constructor:Modal,toggle:function(){return this[!this.isShown?'show':'hide']()},show:function(){var that=this,e=$.Event('show')
this.$element.trigger(e)
if(this.isShown||e.isDefaultPrevented())return
this.isShown=true
this.escape()
this.backdrop(function(){var transition=$.support.transition&&that.$element.hasClass('fade')
if(!that.$element.parent().length){that.$element.appendTo(document.body)}
that.$element.show()
if(transition){that.$element[0].offsetWidth}
that.$element.addClass('in').attr('aria-hidden',false)
that.enforceFocus()
transition?that.$element.one($.support.transition.end,function(){that.$element.focus().trigger('shown')}):that.$element.focus().trigger('shown')})},hide:function(e){e&&e.preventDefault()
var that=this
e=$.Event('hide')
this.$element.trigger(e)
if(!this.isShown||e.isDefaultPrevented())return
this.isShown=false
this.escape()
$(document).off('focusin.modal')
this.$element.removeClass('in').attr('aria-hidden',true)
$.support.transition&&this.$element.hasClass('fade')?this.hideWithTransition():this.hideModal()},enforceFocus:function(){var that=this
$(document).on('focusin.modal',function(e){if(that.$element[0]!==e.target&&!that.$element.has(e.target).length){that.$element.focus()}})},escape:function(){var that=this
if(this.isShown&&this.options.keyboard){this.$element.on('keyup.dismiss.modal',function(e){e.which==27&&that.hide()})}else if(!this.isShown){this.$element.off('keyup.dismiss.modal')}},hideWithTransition:function(){var that=this,timeout=setTimeout(function(){that.$element.off($.support.transition.end)
that.hideModal()},500)
this.$element.one($.support.transition.end,function(){clearTimeout(timeout)
that.hideModal()})},hideModal:function(that){this.$element.hide().trigger('hidden')
this.backdrop()},removeBackdrop:function(){this.$backdrop.remove()
this.$backdrop=null},backdrop:function(callback){var that=this,animate=this.$element.hasClass('fade')?'fade':''
if(this.isShown&&this.options.backdrop){var doAnimate=$.support.transition&&animate
this.$backdrop=$('<div class="modal-backdrop '+animate+'" />').appendTo(document.body)
this.$backdrop.click(this.options.backdrop=='static'?$.proxy(this.$element[0].focus,this.$element[0]):$.proxy(this.hide,this))
if(doAnimate)this.$backdrop[0].offsetWidth
this.$backdrop.addClass('in')
doAnimate?this.$backdrop.one($.support.transition.end,callback):callback()}else if(!this.isShown&&this.$backdrop){this.$backdrop.removeClass('in')
$.support.transition&&this.$element.hasClass('fade')?this.$backdrop.one($.support.transition.end,$.proxy(this.removeBackdrop,this)):this.removeBackdrop()}else if(callback){callback()}}}
var old=$.fn.modal
$.fn.modal=function(option){return this.each(function(){var $this=$(this),data=$this.data('modal'),options=$.extend({},$.fn.modal.defaults,$this.data(),typeof option=='object'&&option)
if(!data)$this.data('modal',(data=new Modal(this,options)))
if(typeof option=='string')data[option]()
else if(options.show)data.show()})}
$.fn.modal.defaults={backdrop:true,keyboard:true,show:true}
$.fn.modal.Constructor=Modal
$.fn.modal.noConflict=function(){$.fn.modal=old
return this}
$(document).on('click.modal.data-api','[data-toggle="modal"]',function(e){var $this=$(this),href=$this.attr('href'),$target=$($this.attr('data-target')||(href&&href.replace(/.*(?=#[^\s]+$)/,''))),option=$target.data('modal')?'toggle':$.extend({remote:!/#/.test(href)&&href},$target.data(),$this.data())
e.preventDefault()
$target.modal(option).one('hide',function(){$this.focus()})})}(window.jQuery);!function($){"use strict";var toggle='[data-toggle=dropdown]',Dropdown=function(element){var $el=$(element).on('click.dropdown.data-api',this.toggle)
$('html').on('click.dropdown.data-api',function(){$el.parent().removeClass('open')})}
Dropdown.prototype={constructor:Dropdown,toggle:function(e){var $this=$(this),$parent,isActive
if($this.is('.disabled, :disabled'))return
$parent=getParent($this)
isActive=$parent.hasClass('open')
clearMenus()
if(!isActive){$parent.toggleClass('open')}
$this.focus()
return false},keydown:function(e){var $this,$items,$active,$parent,isActive,index
if(!/(38|40|27)/.test(e.keyCode))return
$this=$(this)
e.preventDefault()
e.stopPropagation()
if($this.is('.disabled, :disabled'))return
$parent=getParent($this)
isActive=$parent.hasClass('open')
if(!isActive||(isActive&&e.keyCode==27))return $this.click()
$items=$('[role=menu] li:not(.divider):visible a',$parent)
if(!$items.length)return
index=$items.index($items.filter(':focus'))
if(e.keyCode==38&&index>0)index--
if(e.keyCode==40&&index<$items.length-1)index++
if(!~index)index=0
$items.eq(index).focus()}}
function clearMenus(){$(toggle).each(function(){getParent($(this)).removeClass('open')})}
function getParent($this){var selector=$this.attr('data-target'),$parent
if(!selector){selector=$this.attr('href')
selector=selector&&/#/.test(selector)&&selector.replace(/.*(?=#[^\s]*$)/,'')}
$parent=$(selector)
$parent.length||($parent=$this.parent())
return $parent}
var old=$.fn.dropdown
$.fn.dropdown=function(option){return this.each(function(){var $this=$(this),data=$this.data('dropdown')
if(!data)$this.data('dropdown',(data=new Dropdown(this)))
if(typeof option=='string')data[option].call($this)})}
$.fn.dropdown.Constructor=Dropdown
$.fn.dropdown.noConflict=function(){$.fn.dropdown=old
return this}
$(document).on('click.dropdown.data-api touchstart.dropdown.data-api',clearMenus).on('click.dropdown touchstart.dropdown.data-api','.dropdown form',function(e){e.stopPropagation()}).on('touchstart.dropdown.data-api','.dropdown-menu',function(e){e.stopPropagation()}).on('click.dropdown.data-api touchstart.dropdown.data-api',toggle,Dropdown.prototype.toggle).on('keydown.dropdown.data-api touchstart.dropdown.data-api',toggle+', [role=menu]',Dropdown.prototype.keydown)}(window.jQuery);!function($){"use strict";function ScrollSpy(element,options){var process=$.proxy(this.process,this),$element=$(element).is('body')?$(window):$(element),href
this.options=$.extend({},$.fn.scrollspy.defaults,options)
this.$scrollElement=$element.on('scroll.scroll-spy.data-api',process)
this.selector=(this.options.target||((href=$(element).attr('href'))&&href.replace(/.*(?=#[^\s]+$)/,''))||'')+' .nav li > a'
this.$body=$('body')
this.refresh()
this.process()}
ScrollSpy.prototype={constructor:ScrollSpy,refresh:function(){var self=this,$targets
this.offsets=$([])
this.targets=$([])
$targets=this.$body.find(this.selector).map(function(){var $el=$(this),href=$el.data('target')||$el.attr('href'),$href=/^#\w/.test(href)&&$(href)
return($href&&$href.length&&[[$href.position().top+self.$scrollElement.scrollTop(),href]])||null}).sort(function(a,b){return a[0]-b[0]}).each(function(){self.offsets.push(this[0])
self.targets.push(this[1])})},process:function(){var scrollTop=this.$scrollElement.scrollTop()+this.options.offset,scrollHeight=this.$scrollElement[0].scrollHeight||this.$body[0].scrollHeight,maxScroll=scrollHeight-this.$scrollElement.height(),offsets=this.offsets,targets=this.targets,activeTarget=this.activeTarget,i
if(scrollTop>=maxScroll){return activeTarget!=(i=targets.last()[0])&&this.activate(i)}
for(i=offsets.length;i--;){activeTarget!=targets[i]&&scrollTop>=offsets[i]&&(!offsets[i+1]||scrollTop<=offsets[i+1])&&this.activate(targets[i])}},activate:function(target){var active,selector
this.activeTarget=target
$(this.selector).parent('.active').removeClass('active')
selector=this.selector
+'[data-target="'+target+'"],'
+this.selector+'[href="'+target+'"]'
active=$(selector).parent('li').addClass('active')
if(active.parent('.dropdown-menu').length){active=active.closest('li.dropdown').addClass('active')}
active.trigger('activate')}}
var old=$.fn.scrollspy
$.fn.scrollspy=function(option){return this.each(function(){var $this=$(this),data=$this.data('scrollspy'),options=typeof option=='object'&&option
if(!data)$this.data('scrollspy',(data=new ScrollSpy(this,options)))
if(typeof option=='string')data[option]()})}
$.fn.scrollspy.Constructor=ScrollSpy
$.fn.scrollspy.defaults={offset:10}
$.fn.scrollspy.noConflict=function(){$.fn.scrollspy=old
return this}
$(window).on('load',function(){$('[data-spy="scroll"]').each(function(){var $spy=$(this)
$spy.scrollspy($spy.data())})})}(window.jQuery);!function($){"use strict";var Tab=function(element){this.element=$(element)}
Tab.prototype={constructor:Tab,show:function(){var $this=this.element,$ul=$this.closest('ul:not(.dropdown-menu)'),selector=$this.attr('data-target'),previous,$target,e
if(!selector){selector=$this.attr('href')
selector=selector&&selector.replace(/.*(?=#[^\s]*$)/,'')}
if($this.parent('li').hasClass('active'))return
previous=$ul.find('.active:last a')[0]
e=$.Event('show',{relatedTarget:previous})
$this.trigger(e)
if(e.isDefaultPrevented())return
$target=$(selector)
this.activate($this.parent('li'),$ul)
this.activate($target,$target.parent(),function(){$this.trigger({type:'shown',relatedTarget:previous})})},activate:function(element,container,callback){var $active=container.find('> .active'),transition=callback&&$.support.transition&&$active.hasClass('fade')
function next(){$active.removeClass('active').find('> .dropdown-menu > .active').removeClass('active')
element.addClass('active')
if(transition){element[0].offsetWidth
element.addClass('in')}else{element.removeClass('fade')}
if(element.parent('.dropdown-menu')){element.closest('li.dropdown').addClass('active')}
callback&&callback()}
transition?$active.one($.support.transition.end,next):next()
$active.removeClass('in')}}
var old=$.fn.tab
$.fn.tab=function(option){return this.each(function(){var $this=$(this),data=$this.data('tab')
if(!data)$this.data('tab',(data=new Tab(this)))
if(typeof option=='string')data[option]()})}
$.fn.tab.Constructor=Tab
$.fn.tab.noConflict=function(){$.fn.tab=old
return this}
$(document).on('click.tab.data-api','[data-toggle="tab"], [data-toggle="pill"]',function(e){e.preventDefault()
$(this).tab('show')})}(window.jQuery);!function($){"use strict";var Tooltip=function(element,options){this.init('tooltip',element,options)}
Tooltip.prototype={constructor:Tooltip,init:function(type,element,options){var eventIn,eventOut
this.type=type
this.$element=$(element)
this.options=this.getOptions(options)
this.enabled=true
if(this.options.trigger=='click'){this.$element.on('click.'+this.type,this.options.selector,$.proxy(this.toggle,this))}else if(this.options.trigger!='manual'){eventIn=this.options.trigger=='hover'?'mouseenter':'focus'
eventOut=this.options.trigger=='hover'?'mouseleave':'blur'
this.$element.on(eventIn+'.'+this.type,this.options.selector,$.proxy(this.enter,this))
this.$element.on(eventOut+'.'+this.type,this.options.selector,$.proxy(this.leave,this))}
this.options.selector?(this._options=$.extend({},this.options,{trigger:'manual',selector:''})):this.fixTitle()},getOptions:function(options){options=$.extend({},$.fn[this.type].defaults,options,this.$element.data())
if(options.delay&&typeof options.delay=='number'){options.delay={show:options.delay,hide:options.delay}}
return options},enter:function(e){var self=$(e.currentTarget)[this.type](this._options).data(this.type)
if(!self.options.delay||!self.options.delay.show)return self.show()
clearTimeout(this.timeout)
self.hoverState='in'
this.timeout=setTimeout(function(){if(self.hoverState=='in')self.show()},self.options.delay.show)},leave:function(e){var self=$(e.currentTarget)[this.type](this._options).data(this.type)
if(this.timeout)clearTimeout(this.timeout)
if(!self.options.delay||!self.options.delay.hide)return self.hide()
self.hoverState='out'
this.timeout=setTimeout(function(){if(self.hoverState=='out')self.hide()},self.options.delay.hide)},show:function(){var $tip,inside,pos,actualWidth,actualHeight,placement,tp
if(this.hasContent()&&this.enabled){$tip=this.tip()
this.setContent()
if(this.options.animation){$tip.addClass('fade')}
placement=typeof this.options.placement=='function'?this.options.placement.call(this,$tip[0],this.$element[0]):this.options.placement
inside=/in/.test(placement)
$tip.detach().css({top:0,left:0,display:'block'}).insertAfter(this.$element)
pos=this.getPosition(inside)
actualWidth=$tip[0].offsetWidth
actualHeight=$tip[0].offsetHeight
switch(inside?placement.split(' ')[1]:placement){case'bottom':tp={top:pos.top+pos.height,left:pos.left+pos.width/2-actualWidth/2}
break
case'top':tp={top:pos.top-actualHeight,left:pos.left+pos.width/2-actualWidth/2}
break
case'left':tp={top:pos.top+pos.height/2-actualHeight/2,left:pos.left-actualWidth}
break
case'right':tp={top:pos.top+pos.height/2-actualHeight/2,left:pos.left+pos.width}
break}
$tip.offset(tp).addClass(placement).addClass('in')}},setContent:function(){var $tip=this.tip(),title=this.getTitle()
$tip.find('.tooltip-inner')[this.options.html?'html':'text'](title)
$tip.removeClass('fade in top bottom left right')},hide:function(){var that=this,$tip=this.tip()
$tip.removeClass('in')
function removeWithAnimation(){var timeout=setTimeout(function(){$tip.off($.support.transition.end).detach()},500)
$tip.one($.support.transition.end,function(){clearTimeout(timeout)
$tip.detach()})}
$.support.transition&&this.$tip.hasClass('fade')?removeWithAnimation():$tip.detach()
return this},fixTitle:function(){var $e=this.$element
if($e.attr('title')||typeof($e.attr('data-original-title'))!='string'){$e.attr('data-original-title',$e.attr('title')||'').removeAttr('title')}},hasContent:function(){return this.getTitle()},getPosition:function(inside){return $.extend({},(inside?{top:0,left:0}:this.$element.offset()),{width:this.$element[0].offsetWidth,height:this.$element[0].offsetHeight})},getTitle:function(){var title,$e=this.$element,o=this.options
title=$e.attr('data-original-title')||(typeof o.title=='function'?o.title.call($e[0]):o.title)
return title},tip:function(){return this.$tip=this.$tip||$(this.options.template)},validate:function(){if(!this.$element[0].parentNode){this.hide()
this.$element=null
this.options=null}},enable:function(){this.enabled=true},disable:function(){this.enabled=false},toggleEnabled:function(){this.enabled=!this.enabled},toggle:function(e){var self=$(e.currentTarget)[this.type](this._options).data(this.type)
self[self.tip().hasClass('in')?'hide':'show']()},destroy:function(){this.hide().$element.off('.'+this.type).removeData(this.type)}}
var old=$.fn.tooltip
$.fn.tooltip=function(option){return this.each(function(){var $this=$(this),data=$this.data('tooltip'),options=typeof option=='object'&&option
if(!data)$this.data('tooltip',(data=new Tooltip(this,options)))
if(typeof option=='string')data[option]()})}
$.fn.tooltip.Constructor=Tooltip
$.fn.tooltip.defaults={animation:true,placement:'top',selector:false,template:'<div class="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div>',trigger:'hover',title:'',delay:0,html:false}
$.fn.tooltip.noConflict=function(){$.fn.tooltip=old
return this}}(window.jQuery);!function($){"use strict";var Popover=function(element,options){this.init('popover',element,options)}
Popover.prototype=$.extend({},$.fn.tooltip.Constructor.prototype,{constructor:Popover,setContent:function(){var $tip=this.tip(),title=this.getTitle(),content=this.getContent()
$tip.find('.popover-title')[this.options.html?'html':'text'](title)
$tip.find('.popover-content')[this.options.html?'html':'text'](content)
$tip.removeClass('fade top bottom left right in')},hasContent:function(){return this.getTitle()||this.getContent()},getContent:function(){var content,$e=this.$element,o=this.options
content=$e.attr('data-content')||(typeof o.content=='function'?o.content.call($e[0]):o.content)
return content},tip:function(){if(!this.$tip){this.$tip=$(this.options.template)}
return this.$tip},destroy:function(){this.hide().$element.off('.'+this.type).removeData(this.type)}})
var old=$.fn.popover
$.fn.popover=function(option){return this.each(function(){var $this=$(this),data=$this.data('popover'),options=typeof option=='object'&&option
if(!data)$this.data('popover',(data=new Popover(this,options)))
if(typeof option=='string')data[option]()})}
$.fn.popover.Constructor=Popover
$.fn.popover.defaults=$.extend({},$.fn.tooltip.defaults,{placement:'right',trigger:'click',content:'',template:'<div class="popover"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content"></div></div>'})
$.fn.popover.noConflict=function(){$.fn.popover=old
return this}}(window.jQuery);!function($){"use strict";var Affix=function(element,options){this.options=$.extend({},$.fn.affix.defaults,options)
this.$window=$(window).on('scroll.affix.data-api',$.proxy(this.checkPosition,this)).on('click.affix.data-api',$.proxy(function(){setTimeout($.proxy(this.checkPosition,this),1)},this))
this.$element=$(element)
this.checkPosition()}
Affix.prototype.checkPosition=function(){if(!this.$element.is(':visible'))return
var scrollHeight=$(document).height(),scrollTop=this.$window.scrollTop(),position=this.$element.offset(),offset=this.options.offset,offsetBottom=offset.bottom,offsetTop=offset.top,reset='affix affix-top affix-bottom',affix
if(typeof offset!='object')offsetBottom=offsetTop=offset
if(typeof offsetTop=='function')offsetTop=offset.top()
if(typeof offsetBottom=='function')offsetBottom=offset.bottom()
affix=this.unpin!=null&&(scrollTop+this.unpin<=position.top)?false:offsetBottom!=null&&(position.top+this.$element.height()>=scrollHeight-offsetBottom)?'bottom':offsetTop!=null&&scrollTop<=offsetTop?'top':false
if(this.affixed===affix)return
this.affixed=affix
this.unpin=affix=='bottom'?position.top-scrollTop:null
this.$element.removeClass(reset).addClass('affix'+(affix?'-'+affix:''))}
var old=$.fn.affix
$.fn.affix=function(option){return this.each(function(){var $this=$(this),data=$this.data('affix'),options=typeof option=='object'&&option
if(!data)$this.data('affix',(data=new Affix(this,options)))
if(typeof option=='string')data[option]()})}
$.fn.affix.Constructor=Affix
$.fn.affix.defaults={offset:0}
$.fn.affix.noConflict=function(){$.fn.affix=old
return this}
$(window).on('load',function(){$('[data-spy="affix"]').each(function(){var $spy=$(this),data=$spy.data()
data.offset=data.offset||{}
data.offsetBottom&&(data.offset.bottom=data.offsetBottom)
data.offsetTop&&(data.offset.top=data.offsetTop)
$spy.affix(data)})})}(window.jQuery);!function($){"use strict";var dismiss='[data-dismiss="alert"]',Alert=function(el){$(el).on('click',dismiss,this.close)}
Alert.prototype.close=function(e){var $this=$(this),selector=$this.attr('data-target'),$parent
if(!selector){selector=$this.attr('href')
selector=selector&&selector.replace(/.*(?=#[^\s]*$)/,'')}
$parent=$(selector)
e&&e.preventDefault()
$parent.length||($parent=$this.hasClass('alert')?$this:$this.parent())
$parent.trigger(e=$.Event('close'))
if(e.isDefaultPrevented())return
$parent.removeClass('in')
function removeElement(){$parent.trigger('closed').remove()}
$.support.transition&&$parent.hasClass('fade')?$parent.on($.support.transition.end,removeElement):removeElement()}
var old=$.fn.alert
$.fn.alert=function(option){return this.each(function(){var $this=$(this),data=$this.data('alert')
if(!data)$this.data('alert',(data=new Alert(this)))
if(typeof option=='string')data[option].call($this)})}
$.fn.alert.Constructor=Alert
$.fn.alert.noConflict=function(){$.fn.alert=old
return this}
$(document).on('click.alert.data-api',dismiss,Alert.prototype.close)}(window.jQuery);!function($){"use strict";var Button=function(element,options){this.$element=$(element)
this.options=$.extend({},$.fn.button.defaults,options)}
Button.prototype.setState=function(state){var d='disabled',$el=this.$element,data=$el.data(),val=$el.is('input')?'val':'html'
state=state+'Text'
data.resetText||$el.data('resetText',$el[val]())
$el[val](data[state]||this.options[state])
setTimeout(function(){state=='loadingText'?$el.addClass(d).attr(d,d):$el.removeClass(d).removeAttr(d)},0)}
Button.prototype.toggle=function(){var $parent=this.$element.closest('[data-toggle="buttons-radio"]')
$parent&&$parent.find('.active').removeClass('active')
this.$element.toggleClass('active')}
var old=$.fn.button
$.fn.button=function(option){return this.each(function(){var $this=$(this),data=$this.data('button'),options=typeof option=='object'&&option
if(!data)$this.data('button',(data=new Button(this,options)))
if(option=='toggle')data.toggle()
else if(option)data.setState(option)})}
$.fn.button.defaults={loadingText:'loading...'}
$.fn.button.Constructor=Button
$.fn.button.noConflict=function(){$.fn.button=old
return this}
$(document).on('click.button.data-api','[data-toggle^=button]',function(e){var $btn=$(e.target)
if(!$btn.hasClass('btn'))$btn=$btn.closest('.btn')
$btn.button('toggle')})}(window.jQuery);!function($){"use strict";var Collapse=function(element,options){this.$element=$(element)
this.options=$.extend({},$.fn.collapse.defaults,options)
if(this.options.parent){this.$parent=$(this.options.parent)}
this.options.toggle&&this.toggle()}
Collapse.prototype={constructor:Collapse,dimension:function(){var hasWidth=this.$element.hasClass('width')
return hasWidth?'width':'height'},show:function(){var dimension,scroll,actives,hasData,actived
if(this.transitioning)return
dimension=this.dimension()
scroll=$.camelCase(['scroll',dimension].join('-'))
actives=this.$parent&&this.$parent.find('> .accordion-group > .in')
if(actives&&actives.length){hasData=actives.data('collapse')
if(hasData&&hasData.transitioning)return
actives.collapse('hide')
hasData||actives.data('collapse',null)}
this.$element[dimension](0)
actived=this.$element[dimension](0).parent().find('a')
actived.addClass("actived");this.transition('addClass',$.Event('show'),'shown')
this.$element[dimension](this.$element[0][scroll])},hide:function(){var dimension,actived
if(this.transitioning)return
dimension=this.dimension()
this.reset(this.$element[dimension]())
actived=this.$element[dimension](0).parent().find('a')
actived.removeClass("actived");this.transition('removeClass',$.Event('hide'),'hidden')
this.$element[dimension](0)},reset:function(size){var dimension=this.dimension()
this.$element.removeClass('collapse')
[dimension](size||'auto')
[0].offsetWidth
this.$element[size!==null?'addClass':'removeClass']('collapse')
return this},transition:function(method,startEvent,completeEvent){var that=this,complete=function(){if(startEvent.type=='show')that.reset()
that.transitioning=0
that.$element.trigger(completeEvent)}
this.$element.trigger(startEvent)
if(startEvent.isDefaultPrevented())return
this.transitioning=1
this.$element[method]('in')
$.support.transition&&this.$element.hasClass('collapse')?this.$element.one($.support.transition.end,complete):complete()},toggle:function(){this[this.$element.hasClass('in')?'hide':'show']()}}
$.fn.collapse=function(option){return this.each(function(){var $this=$(this),data=$this.data('collapse'),options=typeof option=='object'&&option
if(!data)$this.data('collapse',(data=new Collapse(this,options)))
if(typeof option=='string')data[option]()})}
$.fn.collapse.defaults={toggle:true}
$.fn.collapse.Constructor=Collapse
$(function(){$('body').on('click.collapse.data-api','[data-toggle=collapse]',function(e){var $this=$(this),href,target=$this.attr('data-target')||e.preventDefault()||(href=$this.attr('href'))&&href.replace(/.*(?=#[^\s]+$)/,''),option=$(target).data('collapse')?'toggle':$this.data()
$(target).collapse(option)})})}(window.jQuery);!function($){"use strict";var Carousel=function(element,options){this.$element=$(element)
this.options=options
this.options.pause=='hover'&&this.$element.on('mouseenter',$.proxy(this.pause,this)).on('mouseleave',$.proxy(this.cycle,this))}
Carousel.prototype={cycle:function(e){if(!e)this.paused=false
this.options.interval&&!this.paused&&(this.interval=setInterval($.proxy(this.next,this),this.options.interval))
return this},to:function(pos){var $active=this.$element.find('.item.active'),children=$active.parent().children(),activePos=children.index($active),that=this
if(pos>(children.length-1)||pos<0)return
if(this.sliding){return this.$element.one('slid',function(){that.to(pos)})}
if(activePos==pos){return this.pause().cycle()}
return this.slide(pos>activePos?'next':'prev',$(children[pos]))},pause:function(e){if(!e)this.paused=true
if(this.$element.find('.next, .prev').length&&$.support.transition.end){this.$element.trigger($.support.transition.end)
this.cycle()}
clearInterval(this.interval)
this.interval=null
return this},next:function(){if(this.sliding)return
return this.slide('next')},prev:function(){if(this.sliding)return
return this.slide('prev')},slide:function(type,next){var $active=this.$element.find('.item.active'),$next=next||$active[type](),isCycling=this.interval,direction=type=='next'?'left':'right',fallback=type=='next'?'first':'last',that=this,e
this.sliding=true
isCycling&&this.pause()
$next=$next.length?$next:this.$element.find('.item')[fallback]()
e=$.Event('slide',{relatedTarget:$next[0]})
if($next.hasClass('active'))return
if($.support.transition&&this.$element.hasClass('slide')){this.$element.trigger(e)
if(e.isDefaultPrevented())return
$next.addClass(type)
$next[0].offsetWidth
$active.addClass(direction)
$next.addClass(direction)
this.$element.one($.support.transition.end,function(){$next.removeClass([type,direction].join(' ')).addClass('active')
$active.removeClass(['active',direction].join(' '))
that.sliding=false
setTimeout(function(){that.$element.trigger('slid')},0)})}else{this.$element.trigger(e)
if(e.isDefaultPrevented())return
$active.removeClass('active')
$next.addClass('active')
this.sliding=false
this.$element.trigger('slid')}
isCycling&&this.cycle()
return this}}
var old=$.fn.carousel
$.fn.carousel=function(option){return this.each(function(){var $this=$(this),data=$this.data('carousel'),options=$.extend({},$.fn.carousel.defaults,typeof option=='object'&&option),action=typeof option=='string'?option:options.slide
if(!data)$this.data('carousel',(data=new Carousel(this,options)))
if(typeof option=='number')data.to(option)
else if(action)data[action]()
else if(options.interval)data.cycle()})}
$.fn.carousel.defaults={interval:5000,pause:'hover'}
$.fn.carousel.Constructor=Carousel
$.fn.carousel.noConflict=function(){$.fn.carousel=old
return this}
$(document).on('click.carousel.data-api','[data-slide]',function(e){var $this=$(this),href,$target=$($this.attr('data-target')||(href=$this.attr('href'))&&href.replace(/.*(?=#[^\s]+$)/,'')),options=$.extend({},$target.data(),$this.data())
$target.carousel(options)
e.preventDefault()})}(window.jQuery);!function($){"use strict";var Typeahead=function(element,options){this.$element=$(element)
this.options=$.extend({},$.fn.typeahead.defaults,options)
this.matcher=this.options.matcher||this.matcher
this.sorter=this.options.sorter||this.sorter
this.highlighter=this.options.highlighter||this.highlighter
this.updater=this.options.updater||this.updater
this.source=this.options.source
this.$menu=$(this.options.menu)
this.shown=false
this.listen()}
Typeahead.prototype={constructor:Typeahead,select:function(){var val=this.$menu.find('.active').attr('data-value')
this.$element.val(this.updater(val)).change()
return this.hide()},updater:function(item){return item},show:function(){var pos=$.extend({},this.$element.position(),{height:this.$element[0].offsetHeight})
this.$menu.insertAfter(this.$element).css({top:pos.top+pos.height,left:pos.left}).show()
this.shown=true
return this},hide:function(){this.$menu.hide()
this.shown=false
return this},lookup:function(event){var items
this.query=this.$element.val()
if(!this.query||this.query.length<this.options.minLength){return this.shown?this.hide():this}
items=$.isFunction(this.source)?this.source(this.query,$.proxy(this.process,this)):this.source
return items?this.process(items):this},process:function(items){var that=this
items=$.grep(items,function(item){return that.matcher(item)})
items=this.sorter(items)
if(!items.length){return this.shown?this.hide():this}
return this.render(items.slice(0,this.options.items)).show()},matcher:function(item){return~item.toLowerCase().indexOf(this.query.toLowerCase())},sorter:function(items){var beginswith=[],caseSensitive=[],caseInsensitive=[],item
while(item=items.shift()){if(!item.toLowerCase().indexOf(this.query.toLowerCase()))beginswith.push(item)
else if(~item.indexOf(this.query))caseSensitive.push(item)
else caseInsensitive.push(item)}
return beginswith.concat(caseSensitive,caseInsensitive)},highlighter:function(item){var query=this.query.replace(/[\-\[\]{}()*+?.,\\\^$|#\s]/g,'\\$&')
return item.replace(new RegExp('('+query+')','ig'),function($1,match){return'<strong>'+match+'</strong>'})},render:function(items){var that=this
items=$(items).map(function(i,item){i=$(that.options.item).attr('data-value',item)
i.find('a').html(that.highlighter(item))
return i[0]})
items.first().addClass('active')
this.$menu.html(items)
return this},next:function(event){var active=this.$menu.find('.active').removeClass('active'),next=active.next()
if(!next.length){next=$(this.$menu.find('li')[0])}
next.addClass('active')},prev:function(event){var active=this.$menu.find('.active').removeClass('active'),prev=active.prev()
if(!prev.length){prev=this.$menu.find('li').last()}
prev.addClass('active')},listen:function(){this.$element.on('blur',$.proxy(this.blur,this)).on('keypress',$.proxy(this.keypress,this)).on('keyup',$.proxy(this.keyup,this))
if(this.eventSupported('keydown')){this.$element.on('keydown',$.proxy(this.keydown,this))}
this.$menu.on('click',$.proxy(this.click,this)).on('mouseenter','li',$.proxy(this.mouseenter,this))},eventSupported:function(eventName){var isSupported=eventName in this.$element
if(!isSupported){this.$element.setAttribute(eventName,'return;')
isSupported=typeof this.$element[eventName]==='function'}
return isSupported},move:function(e){if(!this.shown)return
switch(e.keyCode){case 9:case 13:case 27:e.preventDefault()
break
case 38:e.preventDefault()
this.prev()
break
case 40:e.preventDefault()
this.next()
break}
e.stopPropagation()},keydown:function(e){this.suppressKeyPressRepeat=~$.inArray(e.keyCode,[40,38,9,13,27])
this.move(e)},keypress:function(e){if(this.suppressKeyPressRepeat)return
this.move(e)},keyup:function(e){switch(e.keyCode){case 40:case 38:case 16:case 17:case 18:break
case 9:case 13:if(!this.shown)return
this.select()
break
case 27:if(!this.shown)return
this.hide()
break
default:this.lookup()}
e.stopPropagation()
e.preventDefault()},blur:function(e){var that=this
setTimeout(function(){that.hide()},150)},click:function(e){e.stopPropagation()
e.preventDefault()
this.select()},mouseenter:function(e){this.$menu.find('.active').removeClass('active')
$(e.currentTarget).addClass('active')}}
var old=$.fn.typeahead
$.fn.typeahead=function(option){return this.each(function(){var $this=$(this),data=$this.data('typeahead'),options=typeof option=='object'&&option
if(!data)$this.data('typeahead',(data=new Typeahead(this,options)))
if(typeof option=='string')data[option]()})}
$.fn.typeahead.defaults={source:[],items:8,menu:'<ul class="typeahead dropdown-menu"></ul>',item:'<li><a href="#"></a></li>',minLength:1}
$.fn.typeahead.Constructor=Typeahead
$.fn.typeahead.noConflict=function(){$.fn.typeahead=old
return this}
$(document).on('focus.typeahead.data-api','[data-provide="typeahead"]',function(e){var $this=$(this)
if($this.data('typeahead'))return
e.preventDefault()
$this.typeahead($this.data())})}(window.jQuery);jQuery(function(){$("[rel=tooltip]").tooltip();$("a[rel=popover]").popover().click(function(e){e.preventDefault()});});
;;;
var animatedcollapse={divholders:{},divgroups:{},lastactiveingroup:{},preloadimages:[],show:function(divids){if(typeof divids=="object"){for(var i=0;i<divids.length;i++)
this.showhide(divids[i],"show")}
else
this.showhide(divids,"show")},hide:function(divids){if(typeof divids=="object"){for(var i=0;i<divids.length;i++)
this.showhide(divids[i],"hide")}
else
this.showhide(divids,"hide")},toggle:function(divid){if(typeof divid=="object")
divid=divid[0]
this.showhide(divid,"toggle")},addDiv:function(divid,attrstring){this.divholders[divid]=({id:divid,$divref:null,attrs:attrstring})
this.divholders[divid].getAttr=function(name){var attr=new RegExp(name+"=([^,]+)","i")
return(attr.test(this.attrs)&&parseInt(RegExp.$1)!=0)?RegExp.$1:null}
this.currentid=divid
return this},showhide:function(divid,action){var $divref=this.divholders[divid].$divref
if(this.divholders[divid]&&$divref.length==1){var targetgroup=this.divgroups[$divref.attr('groupname')]
if($divref.attr('groupname')&&targetgroup.count>1&&(action=="show"||action=="toggle"&&$divref.css('display')=='none')){if(targetgroup.lastactivedivid&&targetgroup.lastactivedivid!=divid)
this.slideengine(targetgroup.lastactivedivid,'hide')
this.slideengine(divid,'show')
targetgroup.lastactivedivid=divid}
else{this.slideengine(divid,action)}}},slideengine:function(divid,action){var $divref=this.divholders[divid].$divref
var $togglerimage=this.divholders[divid].$togglerimage
if(this.divholders[divid]&&$divref.length==1){var animateSetting={height:action}
if($divref.attr('fade'))
animateSetting.opacity=action
$divref.animate(animateSetting,$divref.attr('speed')?parseInt($divref.attr('speed')):500,function(){if($togglerimage){$togglerimage.attr('src',($divref.css('display')=="none")?$togglerimage.data('srcs').closed:$togglerimage.data('srcs').open)}
if(animatedcollapse.ontoggle){try{animatedcollapse.ontoggle(jQuery,$divref.get(0),$divref.css('display'))}
catch(e){alert("An error exists inside your \"ontoggle\" function:\n\n"+e+"\n\nAborting execution of function.")}}})
return false}},generatemap:function(){var map={}
for(var i=0;i<arguments.length;i++){if(arguments[i][1]!=null){map[arguments[i][0]]=arguments[i][1]}}
return map},init:function(){var ac=this
jQuery(document).ready(function($){animatedcollapse.ontoggle=animatedcollapse.ontoggle||null
var urlparamopenids=animatedcollapse.urlparamselect()
var persistopenids=ac.getCookie('acopendivids')
var groupswithpersist=ac.getCookie('acgroupswithpersist')
if(persistopenids!=null)
persistopenids=(persistopenids=='nada')?[]:persistopenids.split(',')
groupswithpersist=(groupswithpersist==null||groupswithpersist=='nada')?[]:groupswithpersist.split(',')
jQuery.each(ac.divholders,function(){this.$divref=$('#'+this.id)
if((this.getAttr('persist')||jQuery.inArray(this.getAttr('group'),groupswithpersist)!=-1)&&persistopenids!=null){var cssdisplay=(jQuery.inArray(this.id,persistopenids)!=-1)?'block':'none'}
else{var cssdisplay=this.getAttr('hide')?'none':null}
if(urlparamopenids[0]=="all"||jQuery.inArray(this.id,urlparamopenids)!=-1){cssdisplay='block'}
else if(urlparamopenids[0]=="none"){cssdisplay='none'}
this.$divref.css(ac.generatemap(['height',this.getAttr('height')],['display',cssdisplay]))
this.$divref.attr(ac.generatemap(['groupname',this.getAttr('group')],['fade',this.getAttr('fade')],['speed',this.getAttr('speed')]))
if(this.getAttr('group')){var targetgroup=ac.divgroups[this.getAttr('group')]||(ac.divgroups[this.getAttr('group')]={})
targetgroup.count=(targetgroup.count||0)+1
if(jQuery.inArray(this.id,urlparamopenids)!=-1){targetgroup.lastactivedivid=this.id
targetgroup.overridepersist=1}
if(!targetgroup.lastactivedivid&&this.$divref.css('display')!='none'||cssdisplay=="block"&&typeof targetgroup.overridepersist=="undefined")
targetgroup.lastactivedivid=this.id
this.$divref.css({display:'none'})}})
jQuery.each(ac.divgroups,function(){if(this.lastactivedivid&&urlparamopenids[0]!="none")
ac.divholders[this.lastactivedivid].$divref.show()})
if(animatedcollapse.ontoggle){jQuery.each(ac.divholders,function(){animatedcollapse.ontoggle(jQuery,this.$divref.get(0),this.$divref.css('display'))})}
var $allcontrols=$('a[rel]').filter('[rel^="collapse["], [rel^="expand["], [rel^="toggle["]')
$allcontrols.each(function(){this._divids=this.getAttribute('rel').replace(/(^\w+)|(\s+)/g,"").replace(/[\[\]']/g,"")
if(this.getElementsByTagName('img').length==1&&ac.divholders[this._divids]){animatedcollapse.preloadimage(this.getAttribute('data-openimage'),this.getAttribute('data-closedimage'))
$togglerimage=$(this).find('img').eq(0).data('srcs',{open:this.getAttribute('data-openimage'),closed:this.getAttribute('data-closedimage')})
ac.divholders[this._divids].$togglerimage=$(this).find('img').eq(0)
ac.divholders[this._divids].$togglerimage.attr('src',(ac.divholders[this._divids].$divref.css('display')=="none")?$togglerimage.data('srcs').closed:$togglerimage.data('srcs').open)}
$(this).click(function(){var relattr=this.getAttribute('rel')
var divids=(this._divids=="")?[]:this._divids.split(',')
if(divids.length>0){animatedcollapse[/expand/i.test(relattr)?'show':/collapse/i.test(relattr)?'hide':'toggle'](divids)
return false}})})
$(window).bind('unload',function(){ac.uninit()})})},uninit:function(){var opendivids='',groupswithpersist=''
jQuery.each(this.divholders,function(){if(this.$divref.css('display')!='none'){opendivids+=this.id+','}
if(this.getAttr('group')&&this.getAttr('persist'))
groupswithpersist+=this.getAttr('group')+','})
opendivids=(opendivids=='')?'nada':opendivids.replace(/,$/,'')
groupswithpersist=(groupswithpersist=='')?'nada':groupswithpersist.replace(/,$/,'')
this.setCookie('acopendivids',opendivids)
this.setCookie('acgroupswithpersist',groupswithpersist)},getCookie:function(Name){var re=new RegExp(Name+"=[^;]*","i");if(document.cookie.match(re))
return document.cookie.match(re)[0].split("=")[1]
return null},setCookie:function(name,value,days){if(typeof days!="undefined"){var expireDate=new Date()
expireDate.setDate(expireDate.getDate()+days)
document.cookie=name+"="+value+"; path=/; expires="+expireDate.toGMTString()}
else
document.cookie=name+"="+value+"; path=/"},urlparamselect:function(){window.location.search.match(/expanddiv=([\w\-_,]+)/i)
return(RegExp.$1!="")?RegExp.$1.split(","):[]},preloadimage:function(){var preloadimages=this.preloadimages
for(var i=0;i<arguments.length;i++){if(arguments[i]&&arguments[i].length>0){preloadimages[preloadimages.length]=new Image()
preloadimages[preloadimages.length-1].src=arguments[i]}}}}
;;;;(function($,window,document,undefined){'use strict';var pluginName='clingify',defaults={breakpoint:0,extraClass:'',throttle:100,distanceUp:100,detached:$.noop,locked:$.noop,resized:$.noop},wrapperClass='js-clingify-wrapper',lockedClass='js-clingify-locked',placeholderClass='js-clingify-placeholder',$buildPlaceholder=$('<div>').addClass(placeholderClass),$buildWrapper=$('<div>').addClass(wrapperClass),$window=$(window);function Plugin(element,options){this.element=element;this.$element=$(element);this.options=$.extend({},defaults,options);this._defaults=defaults;this._name=pluginName;this.vars={elemHeight:this.$element.height()};this.init();}
Plugin.prototype={init:function(){var cling=this,scrollTimeout,throttle=cling.options.throttle,extraClass=cling.options.extraClass;cling.$element.wrap($buildPlaceholder.height(cling.vars.elemHeight)).wrap($buildWrapper);if((extraClass!=='')&&(typeof extraClass==='string')){cling.findWrapper().addClass(extraClass);cling.findPlaceholder().addClass(extraClass);}
$window.on('scroll resize',function(event){if(!scrollTimeout){scrollTimeout=setTimeout(function(){if((event.type==='resize')&&(typeof cling.options.resized==='function')){cling.options.resized();}
cling.checkElemStatus();scrollTimeout=null;},throttle);}});},checkCoords:function(){var coords={windowWidth:$window.width(),windowOffset:$window.scrollTop(),placeholderOffset:this.options.distanceUp=="0"?this.findPlaceholder().offset().top:this.options.distanceUp};return coords;},detachElem:function(){if(typeof this.options.detached==='function'){this.options.detached();}
this.findWrapper().removeClass(lockedClass);},lockElem:function(){if(typeof this.options.locked==='function'){this.options.locked();}
this.findWrapper().addClass(lockedClass);},findPlaceholder:function(){return this.$element.closest('.'+placeholderClass);},findWrapper:function(){return this.$element.closest('.'+wrapperClass);},checkElemStatus:function(){var cling=this,currentCoords=cling.checkCoords(),isScrolledPast=function(){if(currentCoords.windowOffset>=currentCoords.placeholderOffset){return true;}else{return false;}},isWideEnough=function(){if(currentCoords.windowWidth>=cling.options.breakpoint){return true;}else{return false;}};if(isScrolledPast()&&isWideEnough()){cling.lockElem();}else if(!isScrolledPast()||!isWideEnough()){cling.detachElem();}}};$.fn[pluginName]=function(options){return this.each(function(){if(!$.data(this,'plugin_'+pluginName)){$.data(this,'plugin_'+pluginName,new Plugin(this,options));}});};})(jQuery,window,document);
;;;
(function($){$.fn.visible=function(partial){var $t=$(this),$w=$(window),viewTop=$w.scrollTop(),viewBottom=viewTop+$w.height(),_top=$t.offset().top,_bottom=_top+$t.height(),compareTop=partial===true?_bottom:_top,compareBottom=partial===true?_top:_bottom;if($t.hasClass('visible')){return false;}
return((compareBottom<=viewBottom)&&(compareTop>=viewTop));};var addAnimation=function(element){$(element).each(function(i,el){var el=$(el);if(el.visible(true)){if(el.attr("data-width")){el.css('width',el.attr("data-width"));}
el.removeClass('visible').addClass('animated');}});}
var checkVisible=function(element){$(element).each(function(i,el){var el=$(el);if(el.visible(false)){el.addClass("visible");}});}
$(window).load(function(){addAnimation('.animation');});$(window).scroll(function(event){addAnimation('.animation');});})(jQuery);
;;;
jQuery(document).ready(function($){jQuery('#to_top').click(function(){jQuery('body,html').animate({scrollTop:0},800);});});jQuery(document).ready(function($){animatedcollapse.addDiv('search','fade=1,speed=200,group=mobile,hide=1')
animatedcollapse.init()});$(document).ready(function(){$(window).scroll(function(){var sw=$(window).scrollTop();if(sw>=302){$(".DnnModule-1089").css("width","100%").css("position","fixed").css("top","49px").css("z-index","9");}
else{$(".DnnModule-1089").css("position","relative").css("top","0").css("border-bottom","none");;}});$('.footer-links h3').click(function(e){e.preventDefault();if($(this).hasClass("open-ft")){$(this).next().css({"opacity":"0","max-height":"0"});$(this).removeClass("open-ft");$(this).find("button").css({"transform":"rotateZ(0deg)","-webkit-transform":"rotateZ(0deg)"});}
else{$(this).addClass("open-ft");$(this).next().css({"opacity":"1","max-height":"700px"});$(this).find("button").css({"transform":"rotateZ(45deg)","-webkit-transform":"rotateZ(45deg)"});}});});$(window).load(function(){$('.userName a').click(function(e){$(this).toggleClass('active');$('.userMenu').fadeToggle('fast');e.stopPropagation();});$(document.body).click(function(){$('.userMenu').hide();$('.userName a').removeClass("active");});$('#dnn_pnav li').mouseenter(function(){$('.userMenu').hide();$('.userName a').removeClass("active");});$('.userMenu').click(function(e){e.stopPropagation();});jQuery('#roll_nav').clingify({breakpoint:0,extraClass:'',throttle:100,distanceUp:250,detached:$.noop,locked:$.noop,resized:$.noop});$("#dnn_pnav li").hover(function(){$("ul",this).removeClass().addClass('fadeInDown');},function(){$("ul",this).removeClass().addClass('fadeOutUp');});$("#dnn_pnav li ul li").hover(function(){$("ul",this).removeClass().addClass('fadeInLeft');},function(){$("ul",this).removeClass().addClass('fadeOutRight');});});jQuery(document).ready(function($){if(document.getElementById('gmap')){jQuery('#gmap').gMap({address:'Bear city, ny ',maptype:'hybrid',zoom:8,scrollwheel:true,scaleControl:true,navigationControl:true,markers:[{address:'Bear city, ny ',html:'marker 1'},{address:' 579 Allen Road Basking Ridge, NJ 07920 ',html:'marker 1'},{address:' Mount Arlington, NJ 07856',html:'marker 1'}]});}});if(navigator.userAgent.match(/IEMobile\/10\.0/)){var msViewportStyle=document.createElement("style");msViewportStyle.appendChild(document.createTextNode("@-ms-viewport{width:auto!important}"));document.getElementsByTagName("head")[0].appendChild(msViewportStyle);}
(function($,window,undefined){var nua=navigator.userAgent;var is_android=((nua.indexOf('Mozilla/5.0')>-1&&nua.indexOf('Android ')>-1&&nua.indexOf('AppleWebKit')>-1)&&!(nua.indexOf('Chrome')>-1));function browserSize(){wh=$(window).height();ww=$(window).width();dh=$(document).height();ar=ww/wh;};function init(){browserSize();if(is_android){$('html').addClass('android-browser');}else{$('html').addClass('no-android-browser');}
$('html').addClass('loaded');eventHandlersOnce();};function eventHandlersOnce(){$('.switchOpen').on('click',function(e){$(this).addClass('SwitchClose');var hh=$('header').height(),ch=$('.navigation_mobile').height(),max=Math.max(wh,ch,hh);$('.navigation_mobile').css({'minHeight':wh});if($('html').hasClass('navigation_is-visible')){$('#dnn_wrapper').css({'height':''});$(this).removeClass('SwitchClose');}else{$('#dnn_wrapper').css({'height':max});}
$('html').toggleClass('navigation_is-visible');$('.navigation_mobile').resize(function(){if($('html').hasClass('navigation_is-visible')){$('#dnn_wrapper').css({'height':$('.navigation_mobile').height()});}
else{$('#dnn_wrapper').css({'height':' '});}});});};$(function(){init()});})(jQuery,window);$(document).ready(function(){$("#dnn_dnnSEARCH_txtSearch").attr("placeholder","از اینجا جستجو کنید...");$('#footer1 #to_top').click(function(){$('html,body').animate({scrollTop:0},500);});$(window).scroll(function(){var st=$(window).scrollTop();if(st>=200){$('#footer1 #to_top').stop(true,false).animate({'right':'40px'},100);}
else{$('#footer1 #to_top').stop(true,false).animate({'right':'-50px'},100);}});});$(document).ready(function(){var $slidera=$(".news-slider-tmp .slider"),diffa=0,curSlidea=0,numOfSlidesa=$(".news-slider-tmp .slide").length-1,animatinga=false,animTimea=500,autoSlideTimeouta,autoSlideDelaya=10000,$paginationa=$(".news-slider-tmp .slider-pagi");$(".slider-container .slider .slide:nth-child(1)").addClass("slide-0").addClass("active");$(".slider-container .slider .slide:nth-child(2)").addClass("slide-1");$(".slider-container .slider .slide:nth-child(3)").addClass("slide-2");$(".slider-container .slider .slide:nth-child(4)").addClass("slide-3");$(".slider-container .slider .slide:nth-child(5)").addClass("slide-4");function createBulletsa(){for(var i=0;i<numOfSlidesa+1;i++){var $li=$("<li class='slider-pagi__elem'></li>");$li.addClass("slider-pagi__elem-"+i).data("pagea",i);if(!i)$li.addClass("active");$paginationa.append($li);}};createBulletsa();function manageControlsa(){$(".news-slider-tmp .slider-control").removeClass("inactive");if(!curSlidea)$(".news-slider-tmp .slider-control.right").addClass("inactive");if(curSlidea===numOfSlidesa)$(".news-slider-tmp .slider-control.left").addClass("inactive");};function autoSlidea(){autoSlideTimeouta=setTimeout(function(){curSlidea++;if(curSlidea>numOfSlidesa)curSlidea=0;changeSlidesa();},autoSlideDelaya);};autoSlidea();function changeSlidesa(instant){if(!instant){animatinga=true;manageControlsa();$slidera.addClass("animating");$slidera.css("top");$(".news-slider-tmp .slide").removeClass("active");$(".news-slider-tmp .slide-"+curSlidea).addClass("active");setTimeout(function(){$slidera.removeClass("animating");animatinga=false;},animTimea);}
window.clearTimeout(autoSlideTimeouta);$(".news-slider-tmp .slider-pagi__elem").removeClass("active");$(".news-slider-tmp .slider-pagi__elem-"+curSlidea).addClass("active");$slidera.css("transform","translate3d("+curSlidea*100+"%,0,0)");diffa=0;autoSlidea();}
function navigateRighta(){if(animatinga)return;if(curSlidea>0)curSlidea--;changeSlidesa();}
function navigateLefta(){if(animatinga)return;if(curSlidea<numOfSlidesa)curSlidea++;changeSlidesa();}
$(document).on("mousedown touchstart",".news-slider-tmp .slider",function(e){if(animatinga)return;window.clearTimeout(autoSlideTimeouta);var startXa=e.pageX||e.originalEvent.touches[0].pageX,winWa=$(window).width();diffa=0;$(document).on("mousemove touchmove",function(e){var xa=e.pageX||e.originalEvent.touches[0].pageX;diffa=(startXa-xa)/winWa*70;if((!curSlidea&&diffa<0)||(curSlidea===numOfSlidesa&&diffa>0))diffa/=2;$slidera.css("transform","translate3d("+(curSlidea*100-diffa)+"%,0,0)");});});$(document).on("mouseup touchend",function(e){$(document).off("mousemove touchmove");if(animatinga)return;if(!diffa){changeSlidesa(true);return;}
if(diffa>-8&&diffa<8){changeSlidesa();return;}
if(diffa<=-8){navigateLefta();}
if(diffa>=8){navigateRighta();}});$(document).on("click",".news-slider-tmp .slider-control",function(){if($(this).hasClass("left")){navigateLefta();}else{navigateRighta();}});$(document).on("click",".news-slider-tmp .slider-pagi__elem",function(){curSlidea=$(this).data("pagea");changeSlidesa();});});$(document).ready(function(){var myVar=setInterval(function(){DCall()},6000);function DCall(){$(".animated-circles").addClass("animatedC");setTimeout(function(){$('.animated-circles').removeClass("animatedC");},4000);}
$(window).scrollTop(0);var windowHeight=$(window).height();$(window).scroll(function(){if(windowHeight>$(".TopPane").offset().top-$(window).scrollTop()){setTimeout(function(){$('ul.box-tmp li:nth-child(1)').addClass("is-on");},200);setTimeout(function(){$('ul.box-tmp li:nth-child(2)').addClass("is-on");},300);setTimeout(function(){$('ul.box-tmp li:nth-child(3)').addClass("is-on");},400);}
if(windowHeight>$("ul.box-tmp li:nth-child(3)").offset().top+$("ul.box-tmp li:nth-child(3)").height()-$(window).scrollTop()){setTimeout(function(){$('ul.box-tmp li:nth-child(4)').addClass("is-on");},200);setTimeout(function(){$('ul.box-tmp li:nth-child(5)').addClass("is-on");},300);setTimeout(function(){$('ul.box-tmp li:nth-child(6)').addClass("is-on");},400);}
if(windowHeight>$("ul.box-tmp li:nth-child(5) .box-item-option > a").offset().top+$("ul.box-tmp li:nth-child(5) .box-item-option > a").height()-$(window).scrollTop()){setTimeout(function(){$('ul.box-tmp li:nth-child(7)').addClass("is-on");},200);setTimeout(function(){$('ul.box-tmp li:nth-child(8)').addClass("is-on");},300);}
if(windowHeight>$("ul.box-tmp li:nth-child(8)").offset().top+$("ul.box-tmp li:nth-child(8)").height()-$(window).scrollTop()){setTimeout(function(){$('ul.box-tmp li:nth-child(9)').addClass("is-on");},200);setTimeout(function(){$('ul.box-tmp li:nth-child(10)').addClass("is-on");},300);setTimeout(function(){$('ul.box-tmp li:nth-child(11)').addClass("is-on");},400);}});$(".mbl-view-more").click(function(e){e.preventDefault();$(this).css("display","none");$("ul.box-tmp li:nth-child(4), ul.box-tmp li:nth-child(5), ul.box-tmp li:nth-child(6), ul.box-tmp li:nth-child(7), ul.box-tmp li:nth-child(8), ul.box-tmp li:nth-child(9), ul.box-tmp li:nth-child(10), ul.box-tmp li:nth-child(11)").css("display","block");});});
;;;
$(document).ready(function(){$("#top_menu ul.dropdown li a").append('<h2 class="arrow_down"><svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="300.000000pt" height="175.000000pt" viewBox="0 0 300.000000 175.000000" preserveAspectRatio="xMidYMid meet"><g transform="translate(0.000000,175.000000) scale(0.100000,-0.100000)" fill="#cb2027" stroke="none"><path d="M164 1730 c-94 -37 -164 -136 -164 -232 0 -83 45 -148 235 -341 94 -94 377 -383 630 -640 288 -294 474 -476 500 -490 57 -29 155 -29 213 1 24 13 215 185 425 385 891 843 944 895 968 943 45 95 18 219 -65 292 -45 39 -133 66 -190 58 -84 -13 -109 -35 -596 -501 -47 -44 -166 -157 -265 -250 -99 -93 -224 -212 -278 -264 l-97 -96 -128 130 c-70 72 -314 321 -542 554 -309 316 -426 429 -458 443 -64 29 -128 32 -188 8z"></path></g></svg></h2>');$("#top_menu > div > ul > li a").attr("href","#");$("header #top_menu > div > ul > li").click(function(e){e.preventDefault();var index=$(this).index()+1;if(index==4){window.location.href='http://arita.irtoya.com/نمایندگی-ها/لیست-نمایندگی-ها';return;}
if($(this).hasClass("active-menu")){$(this).removeClass("active-menu");$("#top_menu > div > ul > li").css("background","#fff none repeat scroll 0 0");$("#top_menu > div > ul > li h2").removeClass("arrow_up").addClass("arrow_down");$(".sliding_page_items").removeClass("fly-out");$(".SubMenu-total .SubMenu").removeClass("open");return;}
else{$("#top_menu > div > ul > li").removeClass("active-menu");$(this).addClass("active-menu");$("#top_menu > div > ul > li").css("background","#fff none repeat scroll 0 0");$(this).css("background","#f5f5f5 none repeat scroll 0 0");$("#top_menu > div > ul > li h2").removeClass("arrow_up").addClass("arrow_down");$(this).find("h2").removeClass("arrow_down").addClass("arrow_up");$(".SubMenu-total .SubMenu").removeClass("open");$(".sliding_page_items").addClass("fly-out");$(".SubMenu-total .SubMenu:nth-child("+index+")").addClass("open");return;}});$(".mobile-click button").click(function(){if($(this).hasClass("active-menu-mobile")){$(this).removeClass("active-menu-mobile");$(".main-area , #footer1").css("display","block");$(".submenu-mobile-content .content_mid").removeClass("open-mobile");setTimeout(function(){$(".tcom-vehicles-mobile-category").removeClass("category-open");},500);return;}
else{$(this).addClass("active-menu-mobile");$(".main-area , #footer1").css("display","none");$(".submenu-mobile-content .content_mid").addClass("open-mobile");setTimeout(function(){$(".tcom-vehicles-mobile-category:nth-child(1)").addClass("category-open");},1500);return;}});$(".tcom-vehicles-mobile-category-toggle").click(function(){if($(this).parent(".tcom-vehicles-mobile-category").hasClass("category-open")){$(this).parent(".tcom-vehicles-mobile-category").removeClass("category-open");return;}
else{$(".tcom-vehicles-mobile-category").removeClass("category-open");$(this).parent(".tcom-vehicles-mobile-category").addClass("category-open");return;}});});$(document).ready(function(){$('.menu_slider_right_arrow').css("display","none");$(".sliding_page_content").css("transform","translate3d(0px, 0px, 0px)");$('.toyota_top_menu_links:nth-child(1)').addClass("is_active");$(".sliding_page_items:nth-child(1)").addClass("active-slide");var windowWidth=$(window).width();var gallery_items_width_cn=Math.round(windowWidth);var tx_gallery_slider_slides=0;var tx_total=0;var ms_height=$(".sliding_page_items").height();var ms_height_final=(ms_height/2);var windowWidth_slider=$(window).width();$(window).resize(function(){windowWidth=$(window).width();gallery_items_width_cn=Math.round(windowWidth);ms_height=$(".sliding_page_items").height();ms_height_final=(ms_height/2);windowWidth_slider=$(window).width();ms_height=$(".sliding_page_total").height();ms_height_final=(ms_height/2);$('.sliding_page_items').css("width",windowWidth);$('.sliding_page_content').css("width",4*windowWidth);$('.menu_slider_left_arrow,.menu_slider_right_arrow').css("top",ms_height_final);if($(".sliding_page_items:nth-child(1)").hasClass("active-slide")){tx_total=0;}
if($(".sliding_page_items:nth-child(2)").hasClass("active-slide")){tx_total=0+gallery_items_width_cn;}
if($(".sliding_page_items:nth-child(3)").hasClass("active-slide")){tx_total=0+2*gallery_items_width_cn;}
if($(".sliding_page_items:nth-child(4)").hasClass("active-slide")){tx_total=0+3*gallery_items_width_cn;}
$('.sliding_page_content').css("transform","translate3d("+tx_total+"px, 0px, 0px)");});setInterval(function(){var ms_height=$(".sliding_page_items").height();var ms_height_final=(ms_height/2);$('.sliding_page_items').css("width",windowWidth);$('.sliding_page_content').css("width",4*windowWidth);var ms_height=$(".sliding_page_total").height();$('.menu_slider_left_arrow,.menu_slider_right_arrow').css("top",ms_height_final);},1);$('.toyota_top_menu_links:nth-child(1)').click(function(){$('.toyota_top_menu_links').removeClass("is_active");$(this).addClass("is_active");tx_total=0;$('.sliding_page_content').css("transform","translate3d("+tx_total+"px, 0px, 0px)");$(".sliding_page_items").removeClass("active-slide");$(".sliding_page_items").removeClass("previous-slide");$(".sliding_page_items:nth-child(1)").addClass("active-slide");$('.menu_slider_right_arrow').css("display","none");$('.menu_slider_left_arrow').css("display","block");});$('.toyota_top_menu_links:nth-child(2)').click(function(){$('.toyota_top_menu_links').removeClass("is_active");$(this).addClass("is_active");tx_total=0+gallery_items_width_cn;$('.sliding_page_content').css("transform","translate3d("+tx_total+"px, 0px, 0px)");$(".sliding_page_items").removeClass("active-slide");$(".sliding_page_items").removeClass("previous-slide");$(".sliding_page_items:nth-child(1)").addClass("previous-slide");$(".sliding_page_items:nth-child(2)").addClass("active-slide");$('.menu_slider_right_arrow').css("display","block");$('.menu_slider_left_arrow').css("display","block");});$('.toyota_top_menu_links:nth-child(3)').click(function(){$('.toyota_top_menu_links:nth-child(1)').removeClass("is_active");$('.toyota_top_menu_links:nth-child(2)').removeClass("is_active");$('.toyota_top_menu_links:nth-child(4)').removeClass("is_active");$(this).addClass("is_active");tx_total=0+2*gallery_items_width_cn;$('.sliding_page_content').css("transform","translate3d("+tx_total+"px, 0px, 0px)");$(".sliding_page_items").removeClass("active-slide");$(".sliding_page_items").removeClass("previous-slide");$(".sliding_page_items:nth-child(2)").addClass("previous-slide");$(".sliding_page_items:nth-child(3)").addClass("active-slide");$('.menu_slider_right_arrow').css("display","block");$('.menu_slider_left_arrow').css("display","block");});$('.toyota_top_menu_links:nth-child(4)').click(function(){$('.toyota_top_menu_links:nth-child(1)').removeClass("is_active");$('.toyota_top_menu_links:nth-child(2)').removeClass("is_active");$('.toyota_top_menu_links:nth-child(3)').removeClass("is_active");$(this).addClass("is_active");tx_total=0+3*gallery_items_width_cn;$('.sliding_page_content').css("transform","translate3d("+tx_total+"px, 0px, 0px)");$(".sliding_page_items").removeClass("active-slide");$(".sliding_page_items").removeClass("previous-slide");$(".sliding_page_items:nth-child(3)").addClass("previous-slide");$(".sliding_page_items:nth-child(4)").addClass("active-slide");$('.menu_slider_right_arrow').css("display","block");$('.menu_slider_left_arrow').css("display","none");});$('.menu_slider_left_arrow').click(function(){tx_total=parseInt(tx_gallery_slider_slides)+gallery_items_width_cn+tx_total;$('.sliding_page_content').css("transform","translate3d("+tx_total+"px, 0px, 0px)");$("div.previous-slide").removeClass("previous-slide");$("div.active-slide").removeClass("active-slide").addClass("previous-slide");$("div.previous-slide").next().addClass("active-slide");if(!($(".subnavs-wrap-desktop .sliding_page_items:first-child").hasClass("active-slide"))){$('.menu_slider_right_arrow').css("display","block");}
if($(".subnavs-wrap-desktop .sliding_page_items:last-child").hasClass("active-slide")){$('.menu_slider_left_arrow').css("display","none");}
if(tx_total==0){$('.toyota_top_menu_links').removeClass("is_active");$('.toyota_top_menu_links:nth-child(1)').addClass("is_active");}
if(tx_total==0+gallery_items_width_cn){$('.toyota_top_menu_links').removeClass("is_active");$('.toyota_top_menu_links:nth-child(2)').addClass("is_active");}
if(tx_total==0+2*gallery_items_width_cn){$('.toyota_top_menu_links').removeClass("is_active");$('.toyota_top_menu_links:nth-child(3)').addClass("is_active");}
if(tx_total==0+3*gallery_items_width_cn){$('.toyota_top_menu_links').removeClass("is_active");$('.toyota_top_menu_links:nth-child(4)').addClass("is_active");}
return false;});$('.menu_slider_right_arrow').click(function(){tx_total=parseInt(tx_gallery_slider_slides)-gallery_items_width_cn+tx_total;$('.sliding_page_content').css("transform","translate3d("+tx_total+"px, 0px, 0px)");$("div.previous-slide").removeClass("previous-slide");$("div.active-slide").removeClass("active-slide").addClass("previous-slide");$("div.previous-slide").prev().addClass("active-slide");if(!($(".subnavs-wrap-desktop .sliding_page_items:last-child").hasClass("active-slide"))){$('.menu_slider_left_arrow').css("display","block");}
if($(".subnavs-wrap-desktop .sliding_page_items:first-child").hasClass("active-slide")){$('.menu_slider_right_arrow').css("display","none");}
if(!($(".subnavs-wrap-desktop .sliding_page_items:first-child").hasClass("active-slide"))){$('.menu_slider_right_arrow').css("display","block");}
if($(".subnavs-wrap-desktop .sliding_page_items:last-child").hasClass("active-slide")){$('.menu_slider_left_arrow').css("display","none");}
if(tx_total==0){$('.toyota_top_menu_links').removeClass("is_active");$('.toyota_top_menu_links:nth-child(1)').addClass("is_active");}
if(tx_total==0+gallery_items_width_cn){$('.toyota_top_menu_links').removeClass("is_active");$('.toyota_top_menu_links:nth-child(2)').addClass("is_active");}
if(tx_total==0+2*gallery_items_width_cn){$('.toyota_top_menu_links').removeClass("is_active");$('.toyota_top_menu_links:nth-child(3)').addClass("is_active");}
if(tx_total==0+3*gallery_items_width_cn){$('.toyota_top_menu_links').removeClass("is_active");$('.toyota_top_menu_links:nth-child(4)').addClass("is_active");}
return false;});});
;;;
var Base=function(){};Base.extend=function(_instance,_static){"use strict";var extend=Base.prototype.extend;Base._prototyping=true;var proto=new this();extend.call(proto,_instance);proto.base=function(){};delete Base._prototyping;var constructor=proto.constructor;var klass=proto.constructor=function(){if(!Base._prototyping){if(this._constructing||this.constructor==klass){this._constructing=true;constructor.apply(this,arguments);delete this._constructing;}else if(arguments[0]!==null){return(arguments[0].extend||extend).call(arguments[0],proto);}}};klass.ancestor=this;klass.extend=this.extend;klass.forEach=this.forEach;klass.implement=this.implement;klass.prototype=proto;klass.toString=this.toString;klass.valueOf=function(type){return(type=="object")?klass:constructor.valueOf();};extend.call(klass,_static);if(typeof klass.init=="function")klass.init();return klass;};Base.prototype={extend:function(source,value){if(arguments.length>1){var ancestor=this[source];if(ancestor&&(typeof value=="function")&&(!ancestor.valueOf||ancestor.valueOf()!=value.valueOf())&&/\bbase\b/.test(value)){var method=value.valueOf();value=function(){var previous=this.base||Base.prototype.base;this.base=ancestor;var returnValue=method.apply(this,arguments);this.base=previous;return returnValue;};value.valueOf=function(type){return(type=="object")?value:method;};value.toString=Base.toString;}
this[source]=value;}else if(source){var extend=Base.prototype.extend;if(!Base._prototyping&&typeof this!="function"){extend=this.extend||extend;}
var proto={toSource:null};var hidden=["constructor","toString","valueOf"];var i=Base._prototyping?0:1;while(key=hidden[i++]){if(source[key]!=proto[key]){extend.call(this,key,source[key]);}}
for(var key in source){if(!proto[key])extend.call(this,key,source[key]);}}
return this;}};Base=Base.extend({constructor:function(){this.extend(arguments[0]);}},{ancestor:Object,version:"1.1",forEach:function(object,block,context){for(var key in object){if(this.prototype[key]===undefined){block.call(context,object[key],key,object);}}},implement:function(){for(var i=0;i<arguments.length;i++){if(typeof arguments[i]=="function"){arguments[i](this.prototype);}else{this.prototype.extend(arguments[i]);}}
return this;},toString:function(){return String(this.valueOf());}});var FlipClock;(function($){"use strict";FlipClock=function(obj,digit,options){if(digit instanceof Object&&digit instanceof Date===false){options=digit;digit=0;}
return new FlipClock.Factory(obj,digit,options);};FlipClock.Lang={};FlipClock.Base=Base.extend({buildDate:'2014-12-12',version:'0.7.7',constructor:function(_default,options){if(typeof _default!=="object"){_default={};}
if(typeof options!=="object"){options={};}
this.setOptions($.extend(true,{},_default,options));},callback:function(method){if(typeof method==="function"){var args=[];for(var x=1;x<=arguments.length;x++){if(arguments[x]){args.push(arguments[x]);}}
method.apply(this,args);}},log:function(str){if(window.console&&console.log){console.log(str);}},getOption:function(index){if(this[index]){return this[index];}
return false;},getOptions:function(){return this;},setOption:function(index,value){this[index]=value;},setOptions:function(options){for(var key in options){if(typeof options[key]!=="undefined"){this.setOption(key,options[key]);}}}});}(jQuery));(function($){"use strict";FlipClock.Face=FlipClock.Base.extend({autoStart:true,dividers:[],factory:false,lists:[],constructor:function(factory,options){this.dividers=[];this.lists=[];this.base(options);this.factory=factory;},build:function(){if(this.autoStart){this.start();}},createDivider:function(label,css,excludeDots){if(typeof css=="boolean"||!css){excludeDots=css;css=label;}
var dots=['<span class="'+this.factory.classes.dot+' top"></span>','<span class="'+this.factory.classes.dot+' bottom"></span>'].join('');if(excludeDots){dots='';}
label=this.factory.localize(label);var html=['<span class="'+this.factory.classes.divider+' '+(css?css:'').toLowerCase()+'">','<span class="'+this.factory.classes.label+'">'+(label?label:'')+'</span>',dots,'</span>'];var $html=$(html.join(''));this.dividers.push($html);return $html;},createList:function(digit,options){if(typeof digit==="object"){options=digit;digit=0;}
var obj=new FlipClock.List(this.factory,digit,options);this.lists.push(obj);return obj;},reset:function(){this.factory.time=new FlipClock.Time(this.factory,this.factory.original?Math.round(this.factory.original):0,{minimumDigits:this.factory.minimumDigits});this.flip(this.factory.original,false);},appendDigitToClock:function(obj){obj.$el.append(false);},addDigit:function(digit){var obj=this.createList(digit,{classes:{active:this.factory.classes.active,before:this.factory.classes.before,flip:this.factory.classes.flip}});this.appendDigitToClock(obj);},start:function(){},stop:function(){},autoIncrement:function(){if(!this.factory.countdown){this.increment();}
else{this.decrement();}},increment:function(){this.factory.time.addSecond();},decrement:function(){if(this.factory.time.getTimeSeconds()==0){this.factory.stop()}
else{this.factory.time.subSecond();}},flip:function(time,doNotAddPlayClass){var t=this;$.each(time,function(i,digit){var list=t.lists[i];if(list){if(!doNotAddPlayClass&&digit!=list.digit){list.play();}
list.select(digit);}
else{t.addDigit(digit);}});}});}(jQuery));(function($){"use strict";FlipClock.Factory=FlipClock.Base.extend({animationRate:1000,autoStart:true,callbacks:{destroy:false,create:false,init:false,interval:false,start:false,stop:false,reset:false},classes:{active:'flip-clock-active',before:'flip-clock-before',divider:'flip-clock-divider',dot:'flip-clock-dot',label:'flip-clock-label',flip:'flip',play:'play',wrapper:'flip-clock-wrapper'},clockFace:'HourlyCounter',countdown:false,defaultClockFace:'HourlyCounter',defaultLanguage:'english',$el:false,face:true,lang:false,language:'english',minimumDigits:0,original:false,running:false,time:false,timer:false,$wrapper:false,constructor:function(obj,digit,options){if(!options){options={};}
this.lists=[];this.running=false;this.base(options);this.$el=$(obj).addClass(this.classes.wrapper);this.$wrapper=this.$el;this.original=(digit instanceof Date)?digit:(digit?Math.round(digit):0);this.time=new FlipClock.Time(this,this.original,{minimumDigits:this.minimumDigits,animationRate:this.animationRate});this.timer=new FlipClock.Timer(this,options);this.loadLanguage(this.language);this.loadClockFace(this.clockFace,options);if(this.autoStart){this.start();}},loadClockFace:function(name,options){var face,suffix='Face',hasStopped=false;name=name.ucfirst()+suffix;if(this.face.stop){this.stop();hasStopped=true;}
this.$el.html('');this.time.minimumDigits=this.minimumDigits;if(FlipClock[name]){face=new FlipClock[name](this,options);}
else{face=new FlipClock[this.defaultClockFace+suffix](this,options);}
face.build();this.face=face
if(hasStopped){this.start();}
return this.face;},loadLanguage:function(name){var lang;if(FlipClock.Lang[name.ucfirst()]){lang=FlipClock.Lang[name.ucfirst()];}
else if(FlipClock.Lang[name]){lang=FlipClock.Lang[name];}
else{lang=FlipClock.Lang[this.defaultLanguage];}
return this.lang=lang;},localize:function(index,obj){var lang=this.lang;if(!index){return null;}
var lindex=index.toLowerCase();if(typeof obj=="object"){lang=obj;}
if(lang&&lang[lindex]){return lang[lindex];}
return index;},start:function(callback){var t=this;if(!t.running&&(!t.countdown||t.countdown&&t.time.time>0)){t.face.start(t.time);t.timer.start(function(){t.flip();if(typeof callback==="function"){callback();}});}
else{t.log('Trying to start timer when countdown already at 0');}},stop:function(callback){this.face.stop();this.timer.stop(callback);for(var x in this.lists){if(this.lists.hasOwnProperty(x)){this.lists[x].stop();}}},reset:function(callback){this.timer.reset(callback);this.face.reset();},setTime:function(time){this.time.time=time;this.flip(true);},getTime:function(time){return this.time;},setCountdown:function(value){var running=this.running;this.countdown=value?true:false;if(running){this.stop();this.start();}},flip:function(doNotAddPlayClass){this.face.flip(false,doNotAddPlayClass);}});}(jQuery));(function($){"use strict";FlipClock.List=FlipClock.Base.extend({digit:0,classes:{active:'flip-clock-active',before:'flip-clock-before',flip:'flip'},factory:false,$el:false,$obj:false,items:[],lastDigit:0,constructor:function(factory,digit,options){this.factory=factory;this.digit=digit;this.lastDigit=digit;this.$el=this.createList();this.$obj=this.$el;if(digit>0){this.select(digit);}
this.factory.$el.append(this.$el);},select:function(digit){if(typeof digit==="undefined"){digit=this.digit;}
else{this.digit=digit;}
if(this.digit!=this.lastDigit){var $delete=this.$el.find('.'+this.classes.before).removeClass(this.classes.before);this.$el.find('.'+this.classes.active).removeClass(this.classes.active).addClass(this.classes.before);this.appendListItem(this.classes.active,this.digit);$delete.remove();this.lastDigit=this.digit;}},play:function(){this.$el.addClass(this.factory.classes.play);},stop:function(){var t=this;setTimeout(function(){t.$el.removeClass(t.factory.classes.play);},this.factory.timer.interval);},createListItem:function(css,value){return['<li class="'+(css?css:'')+'">','<a href="#">','<div class="up">','<div class="shadow"></div>','<div class="inn">'+(value?value:'')+'</div>','</div>','<div class="down">','<div class="shadow"></div>','<div class="inn">'+(value?value:'')+'</div>','</div>','</a>','</li>'].join('');},appendListItem:function(css,value){var html=this.createListItem(css,value);this.$el.append(html);},createList:function(){var lastDigit=this.getPrevDigit()?this.getPrevDigit():this.digit;var html=$(['<ul class="'+this.classes.flip+' '+(this.factory.running?this.factory.classes.play:'')+'">',this.createListItem(this.classes.before,lastDigit),this.createListItem(this.classes.active,this.digit),'</ul>'].join(''));return html;},getNextDigit:function(){return this.digit==9?0:this.digit+1;},getPrevDigit:function(){return this.digit==0?9:this.digit-1;}});}(jQuery));(function($){"use strict";String.prototype.ucfirst=function(){return this.substr(0,1).toUpperCase()+this.substr(1);};$.fn.FlipClock=function(digit,options){return new FlipClock($(this),digit,options);};$.fn.flipClock=function(digit,options){return $.fn.FlipClock(digit,options);};}(jQuery));(function($){"use strict";FlipClock.Time=FlipClock.Base.extend({time:0,factory:false,minimumDigits:0,constructor:function(factory,time,options){if(typeof options!="object"){options={};}
if(!options.minimumDigits){options.minimumDigits=factory.minimumDigits;}
this.base(options);this.factory=factory;if(time){this.time=time;}},convertDigitsToArray:function(str){var data=[];str=str.toString();for(var x=0;x<str.length;x++){if(str[x].match(/^\d*$/g)){data.push(str[x]);}}
return data;},digit:function(i){var timeStr=this.toString();var length=timeStr.length;if(timeStr[length-i]){return timeStr[length-i];}
return false;},digitize:function(obj){var data=[];$.each(obj,function(i,value){value=value.toString();if(value.length==1){value='0'+value;}
for(var x=0;x<value.length;x++){data.push(value.charAt(x));}});if(data.length>this.minimumDigits){this.minimumDigits=data.length;}
if(this.minimumDigits>data.length){for(var x=data.length;x<this.minimumDigits;x++){data.unshift('0');}}
return data;},getDateObject:function(){if(this.time instanceof Date){return this.time;}
return new Date((new Date()).getTime()+this.getTimeSeconds()*1000);},getDayCounter:function(includeSeconds){var digits=[this.getDays(),this.getHours(true),this.getMinutes(true)];if(includeSeconds){digits.push(this.getSeconds(true));}
return this.digitize(digits);},getDays:function(mod){var days=this.getTimeSeconds()/60/60/24;if(mod){days=days%7;}
return Math.floor(days);},getHourCounter:function(){var obj=this.digitize([this.getHours(),this.getMinutes(true),this.getSeconds(true)]);return obj;},getHourly:function(){return this.getHourCounter();},getHours:function(mod){var hours=this.getTimeSeconds()/60/60;if(mod){hours=hours%24;}
return Math.floor(hours);},getMilitaryTime:function(date,showSeconds){if(typeof showSeconds==="undefined"){showSeconds=true;}
if(!date){date=this.getDateObject();}
var data=[date.getHours(),date.getMinutes()];if(showSeconds===true){data.push(date.getSeconds());}
return this.digitize(data);},getMinutes:function(mod){var minutes=this.getTimeSeconds()/60;if(mod){minutes=minutes%60;}
return Math.floor(minutes);},getMinuteCounter:function(){var obj=this.digitize([this.getMinutes(),this.getSeconds(true)]);return obj;},getTimeSeconds:function(date){if(!date){date=new Date();}
if(this.time instanceof Date){if(this.factory.countdown){return Math.max(this.time.getTime()/1000-date.getTime()/1000,0);}else{return date.getTime()/1000-this.time.getTime()/1000;}}else{return this.time;}},getTime:function(date,showSeconds){if(typeof showSeconds==="undefined"){showSeconds=true;}
if(!date){date=this.getDateObject();}
console.log(date);var hours=date.getHours();var merid=hours>12?'PM':'AM';var data=[hours>12?hours-12:(hours===0?12:hours),date.getMinutes()];if(showSeconds===true){data.push(date.getSeconds());}
return this.digitize(data);},getSeconds:function(mod){var seconds=this.getTimeSeconds();if(mod){if(seconds==60){seconds=0;}
else{seconds=seconds%60;}}
return Math.ceil(seconds);},getWeeks:function(mod){var weeks=this.getTimeSeconds()/60/60/24/7;if(mod){weeks=weeks%52;}
return Math.floor(weeks);},removeLeadingZeros:function(totalDigits,digits){var total=0;var newArray=[];$.each(digits,function(i,digit){if(i<totalDigits){total+=parseInt(digits[i],10);}
else{newArray.push(digits[i]);}});if(total===0){return newArray;}
return digits;},addSeconds:function(x){if(this.time instanceof Date){this.time.setSeconds(this.time.getSeconds()+x);}
else{this.time+=x;}},addSecond:function(){this.addSeconds(1);},subSeconds:function(x){if(this.time instanceof Date){this.time.setSeconds(this.time.getSeconds()-x);}
else{this.time-=x;}},subSecond:function(){this.subSeconds(1);},toString:function(){return this.getTimeSeconds().toString();}});}(jQuery));(function($){"use strict";FlipClock.Timer=FlipClock.Base.extend({callbacks:{destroy:false,create:false,init:false,interval:false,start:false,stop:false,reset:false},count:0,factory:false,interval:1000,animationRate:1000,constructor:function(factory,options){this.base(options);this.factory=factory;this.callback(this.callbacks.init);this.callback(this.callbacks.create);},getElapsed:function(){return this.count*this.interval;},getElapsedTime:function(){return new Date(this.time+this.getElapsed());},reset:function(callback){clearInterval(this.timer);this.count=0;this._setInterval(callback);this.callback(this.callbacks.reset);},start:function(callback){this.factory.running=true;this._createTimer(callback);this.callback(this.callbacks.start);},stop:function(callback){this.factory.running=false;this._clearInterval(callback);this.callback(this.callbacks.stop);this.callback(callback);},_clearInterval:function(){clearInterval(this.timer);},_createTimer:function(callback){this._setInterval(callback);},_destroyTimer:function(callback){this._clearInterval();this.timer=false;this.callback(callback);this.callback(this.callbacks.destroy);},_interval:function(callback){this.callback(this.callbacks.interval);this.callback(callback);this.count++;},_setInterval:function(callback){var t=this;t._interval(callback);t.timer=setInterval(function(){t._interval(callback);},this.interval);}});}(jQuery));(function($){FlipClock.TwentyFourHourClockFace=FlipClock.Face.extend({constructor:function(factory,options){this.base(factory,options);},build:function(time){var t=this;var children=this.factory.$el.find('ul');if(!this.factory.time.time){this.factory.original=new Date();this.factory.time=new FlipClock.Time(this.factory,this.factory.original);}
var time=time?time:this.factory.time.getMilitaryTime(false,this.showSeconds);if(time.length>children.length){$.each(time,function(i,digit){t.createList(digit);});}
this.createDivider();this.createDivider();$(this.dividers[0]).insertBefore(this.lists[this.lists.length-2].$el);$(this.dividers[1]).insertBefore(this.lists[this.lists.length-4].$el);this.base();},flip:function(time,doNotAddPlayClass){this.autoIncrement();time=time?time:this.factory.time.getMilitaryTime(false,this.showSeconds);this.base(time,doNotAddPlayClass);}});}(jQuery));(function($){FlipClock.CounterFace=FlipClock.Face.extend({shouldAutoIncrement:false,constructor:function(factory,options){if(typeof options!="object"){options={};}
factory.autoStart=options.autoStart?true:false;if(options.autoStart){this.shouldAutoIncrement=true;}
factory.increment=function(){factory.countdown=false;factory.setTime(factory.getTime().getTimeSeconds()+1);};factory.decrement=function(){factory.countdown=true;var time=factory.getTime().getTimeSeconds();if(time>0){factory.setTime(time-1);}};factory.setValue=function(digits){factory.setTime(digits);};factory.setCounter=function(digits){factory.setTime(digits);};this.base(factory,options);},build:function(){var t=this;var children=this.factory.$el.find('ul');var time=this.factory.getTime().digitize([this.factory.getTime().time]);if(time.length>children.length){$.each(time,function(i,digit){var list=t.createList(digit);list.select(digit);});}
$.each(this.lists,function(i,list){list.play();});this.base();},flip:function(time,doNotAddPlayClass){if(this.shouldAutoIncrement){this.autoIncrement();}
if(!time){time=this.factory.getTime().digitize([this.factory.getTime().time]);}
this.base(time,doNotAddPlayClass);},reset:function(){this.factory.time=new FlipClock.Time(this.factory,this.factory.original?Math.round(this.factory.original):0);this.flip();}});}(jQuery));(function($){FlipClock.DailyCounterFace=FlipClock.Face.extend({showSeconds:true,constructor:function(factory,options){this.base(factory,options);},build:function(time){var t=this;var children=this.factory.$el.find('ul');var offset=0;time=time?time:this.factory.time.getDayCounter(this.showSeconds);if(time.length>children.length){$.each(time,function(i,digit){t.createList(digit);});}
if(this.showSeconds){$(this.createDivider('ثانیه')).insertBefore(this.lists[this.lists.length-2].$el);}
else
{offset=2;}
$(this.createDivider('دقیقه')).insertBefore(this.lists[this.lists.length-4+offset].$el);$(this.createDivider('ساعت')).insertBefore(this.lists[this.lists.length-6+offset].$el);$(this.createDivider('روز',true)).insertBefore(this.lists[0].$el);this.base();},flip:function(time,doNotAddPlayClass){if(!time){time=this.factory.time.getDayCounter(this.showSeconds);}
this.autoIncrement();this.base(time,doNotAddPlayClass);}});}(jQuery));(function($){FlipClock.HourlyCounterFace=FlipClock.Face.extend({constructor:function(factory,options){this.base(factory,options);},build:function(excludeHours,time){var t=this;var children=this.factory.$el.find('ul');time=time?time:this.factory.time.getHourCounter();if(time.length>children.length){$.each(time,function(i,digit){t.createList(digit);});}
$(this.createDivider('Seconds')).insertBefore(this.lists[this.lists.length-2].$el);$(this.createDivider('Minutes')).insertBefore(this.lists[this.lists.length-4].$el);if(!excludeHours){$(this.createDivider('Hours',true)).insertBefore(this.lists[0].$el);}
this.base();},flip:function(time,doNotAddPlayClass){if(!time){time=this.factory.time.getHourCounter();}
this.autoIncrement();this.base(time,doNotAddPlayClass);},appendDigitToClock:function(obj){this.base(obj);this.dividers[0].insertAfter(this.dividers[0].next());}});}(jQuery));(function($){FlipClock.MinuteCounterFace=FlipClock.HourlyCounterFace.extend({clearExcessDigits:false,constructor:function(factory,options){this.base(factory,options);},build:function(){this.base(true,this.factory.time.getMinuteCounter());},flip:function(time,doNotAddPlayClass){if(!time){time=this.factory.time.getMinuteCounter();}
this.base(time,doNotAddPlayClass);}});}(jQuery));(function($){FlipClock.TwelveHourClockFace=FlipClock.TwentyFourHourClockFace.extend({meridium:false,meridiumText:'AM',build:function(){var t=this;var time=this.factory.time.getTime(false,this.showSeconds);this.base(time);this.meridiumText=this.getMeridium();this.meridium=$(['<ul class="flip-clock-meridium">','<li>','<a href="#">'+this.meridiumText+'</a>','</li>','</ul>'].join(''));this.meridium.insertAfter(this.lists[this.lists.length-1].$el);},flip:function(time,doNotAddPlayClass){if(this.meridiumText!=this.getMeridium()){this.meridiumText=this.getMeridium();this.meridium.find('a').html(this.meridiumText);}
this.base(this.factory.time.getTime(false,this.showSeconds),doNotAddPlayClass);},getMeridium:function(){return new Date().getHours()>=12?'PM':'AM';},isPM:function(){return this.getMeridium()=='PM'?true:false;},isAM:function(){return this.getMeridium()=='AM'?true:false;}});}(jQuery));(function($){FlipClock.Lang.Arabic={'years':'سنوات','months':'شهور','days':'أيام','hours':'ساعات','minutes':'دقائق','seconds':'ثواني'};FlipClock.Lang['ar']=FlipClock.Lang.Arabic;FlipClock.Lang['ar-ar']=FlipClock.Lang.Arabic;FlipClock.Lang['arabic']=FlipClock.Lang.Arabic;}(jQuery));(function($){FlipClock.Lang.Danish={'years':'År','months':'Måneder','days':'Dage','hours':'Timer','minutes':'Minutter','seconds':'Sekunder'};FlipClock.Lang['da']=FlipClock.Lang.Danish;FlipClock.Lang['da-dk']=FlipClock.Lang.Danish;FlipClock.Lang['danish']=FlipClock.Lang.Danish;}(jQuery));(function($){FlipClock.Lang.German={'years':'Jahre','months':'Monate','days':'Tage','hours':'Stunden','minutes':'Minuten','seconds':'Sekunden'};FlipClock.Lang['de']=FlipClock.Lang.German;FlipClock.Lang['de-de']=FlipClock.Lang.German;FlipClock.Lang['german']=FlipClock.Lang.German;}(jQuery));(function($){FlipClock.Lang.English={'years':'Years','months':'Months','days':'Days','hours':'Hours','minutes':'Minutes','seconds':'Seconds'};FlipClock.Lang['en']=FlipClock.Lang.English;FlipClock.Lang['en-us']=FlipClock.Lang.English;FlipClock.Lang['english']=FlipClock.Lang.English;}(jQuery));(function($){FlipClock.Lang.Spanish={'years':'Años','months':'Meses','days':'Días','hours':'Horas','minutes':'Minutos','seconds':'Segundos'};FlipClock.Lang['es']=FlipClock.Lang.Spanish;FlipClock.Lang['es-es']=FlipClock.Lang.Spanish;FlipClock.Lang['spanish']=FlipClock.Lang.Spanish;}(jQuery));(function($){FlipClock.Lang.Finnish={'years':'Vuotta','months':'Kuukautta','days':'Päivää','hours':'Tuntia','minutes':'Minuuttia','seconds':'Sekuntia'};FlipClock.Lang['fi']=FlipClock.Lang.Finnish;FlipClock.Lang['fi-fi']=FlipClock.Lang.Finnish;FlipClock.Lang['finnish']=FlipClock.Lang.Finnish;}(jQuery));(function($){FlipClock.Lang.French={'years':'Ans','months':'Mois','days':'Jours','hours':'Heures','minutes':'Minutes','seconds':'Secondes'};FlipClock.Lang['fr']=FlipClock.Lang.French;FlipClock.Lang['fr-ca']=FlipClock.Lang.French;FlipClock.Lang['french']=FlipClock.Lang.French;}(jQuery));(function($){FlipClock.Lang.Italian={'years':'Anni','months':'Mesi','days':'Giorni','hours':'Ore','minutes':'Minuti','seconds':'Secondi'};FlipClock.Lang['it']=FlipClock.Lang.Italian;FlipClock.Lang['it-it']=FlipClock.Lang.Italian;FlipClock.Lang['italian']=FlipClock.Lang.Italian;}(jQuery));(function($){FlipClock.Lang.Latvian={'years':'Gadi','months':'Mēneši','days':'Dienas','hours':'Stundas','minutes':'Minūtes','seconds':'Sekundes'};FlipClock.Lang['lv']=FlipClock.Lang.Latvian;FlipClock.Lang['lv-lv']=FlipClock.Lang.Latvian;FlipClock.Lang['latvian']=FlipClock.Lang.Latvian;}(jQuery));(function($){FlipClock.Lang.Dutch={'years':'Jaren','months':'Maanden','days':'Dagen','hours':'Uren','minutes':'Minuten','seconds':'Seconden'};FlipClock.Lang['nl']=FlipClock.Lang.Dutch;FlipClock.Lang['nl-be']=FlipClock.Lang.Dutch;FlipClock.Lang['dutch']=FlipClock.Lang.Dutch;}(jQuery));(function($){FlipClock.Lang.Norwegian={'years':'År','months':'Måneder','days':'Dager','hours':'Timer','minutes':'Minutter','seconds':'Sekunder'};FlipClock.Lang['no']=FlipClock.Lang.Norwegian;FlipClock.Lang['nb']=FlipClock.Lang.Norwegian;FlipClock.Lang['no-nb']=FlipClock.Lang.Norwegian;FlipClock.Lang['norwegian']=FlipClock.Lang.Norwegian;}(jQuery));(function($){FlipClock.Lang.Portuguese={'years':'Anos','months':'Meses','days':'Dias','hours':'Horas','minutes':'Minutos','seconds':'Segundos'};FlipClock.Lang['pt']=FlipClock.Lang.Portuguese;FlipClock.Lang['pt-br']=FlipClock.Lang.Portuguese;FlipClock.Lang['portuguese']=FlipClock.Lang.Portuguese;}(jQuery));(function($){FlipClock.Lang.Russian={'years':'лет','months':'месяцев','days':'дней','hours':'часов','minutes':'минут','seconds':'секунд'};FlipClock.Lang['ru']=FlipClock.Lang.Russian;FlipClock.Lang['ru-ru']=FlipClock.Lang.Russian;FlipClock.Lang['russian']=FlipClock.Lang.Russian;}(jQuery));(function($){FlipClock.Lang.Swedish={'years':'År','months':'Månader','days':'Dagar','hours':'Timmar','minutes':'Minuter','seconds':'Sekunder'};FlipClock.Lang['sv']=FlipClock.Lang.Swedish;FlipClock.Lang['sv-se']=FlipClock.Lang.Swedish;FlipClock.Lang['swedish']=FlipClock.Lang.Swedish;}(jQuery));(function($){FlipClock.Lang.Chinese={'years':'年','months':'月','days':'日','hours':'时','minutes':'分','seconds':'秒'};FlipClock.Lang['zh']=FlipClock.Lang.Chinese;FlipClock.Lang['zh-cn']=FlipClock.Lang.Chinese;FlipClock.Lang['chinese']=FlipClock.Lang.Chinese;}(jQuery));
;;;
var DNN_COL_DELIMITER=String.fromCharCode(16);var DNN_ROW_DELIMITER=String.fromCharCode(15);var __dnn_m_bPageLoaded=false;if(window.addEventListener){window.addEventListener("load",__dnn_Page_OnLoad,false)}else{window.attachEvent("onload",__dnn_Page_OnLoad)}function __dnn_ClientAPIEnabled(){return typeof(dnn)!="undefined"&&typeof(dnn.dom)!="undefined"}function __dnn_Page_OnLoad(){if(__dnn_ClientAPIEnabled()){dnn.dom.attachEvent(window,"onscroll",__dnn_bodyscroll)}__dnn_m_bPageLoaded=true}function __dnn_KeyDown(iKeyCode,sFunc,e){if(e==null){e=window.event}if(e.keyCode==iKeyCode){eval(unescape(sFunc));return false}}function __dnn_bodyscroll(){var a=document.forms[0];if(__dnn_ClientAPIEnabled()&&__dnn_m_bPageLoaded&&typeof(a.ScrollTop)!="undefined"){a.ScrollTop.value=document.documentElement.scrollTop?document.documentElement.scrollTop:dnn.dom.getByTagName("body")[0].scrollTop}}function __dnn_setScrollTop(c){if(__dnn_ClientAPIEnabled()){if(c==null){c=document.forms[0].ScrollTop.value}var a=dnn.getVar("ScrollToControl");if(a!=null&&a.length>0){var b=dnn.dom.getById(a);if(b!=null){c=dnn.dom.positioning.elementTop(b);dnn.setVar("ScrollToControl","")}}if(document.getElementsByTagName("html")[0].style.overflow!="hidden"){window.scrollTo(0,c)}}}function __dnn_SetInitialFocus(a){var b=dnn.dom.getById(a);if(b!=null&&__dnn_CanReceiveFocus(b)){b.focus()}}function __dnn_CanReceiveFocus(b){if(b.style.display!="none"&&b.tabIndex>-1&&b.disabled==false&&b.style.visible!="hidden"){var a=b.parentElement;while(a!=null&&a.tagName!="BODY"){if(a.style.display=="none"||a.disabled||a.style.visible=="hidden"){return false}a=a.parentElement}return true}else{return false}}function __dnn_ContainerMaxMin_OnClick(i,b){var g=dnn.dom.getById(b);if(g!=null){var e=i.childNodes[0];var l=dnn.getVar("containerid_"+b);var j=dnn.getVar("cookieid_"+b);var d=e.src.toLowerCase().substr(e.src.lastIndexOf("index.html"));var a;var h;var k;if(dnn.getVar("min_icon_"+l)){k=dnn.getVar("min_icon_"+l)}else{k=dnn.getVar("min_icon")}if(dnn.getVar("max_icon_"+l)){h=dnn.getVar("max_icon_"+l)}else{h=dnn.getVar("max_icon")}a=h.toLowerCase().substr(h.lastIndexOf("index.html"));var c=5;var f=dnn.getVar("animf_"+b);if(f!=null){c=new Number(f)}if(d==a){e.src=k;dnn.dom.expandElement(g,c);e.title=dnn.getVar("min_text");if(j!=null){if(dnn.getVar("__dnn_"+l+":defminimized")=="true"){dnn.dom.setCookie(j,"true",365)}else{dnn.dom.deleteCookie(j)}}else{dnn.setVar("__dnn_"+l+"_Visible","true")}}else{e.src=h;dnn.dom.collapseElement(g,c);e.title=dnn.getVar("max_text");if(j!=null){if(dnn.getVar("__dnn_"+l+":defminimized")=="true"){dnn.dom.deleteCookie(j)}else{dnn.dom.setCookie(j,"false",365)}}else{dnn.setVar("__dnn_"+l+"_Visible","false")}}return true}return false}function __dnn_Help_OnClick(a){var b=dnn.dom.getById(a);if(b!=null){if(b.style.display=="none"){b.style.display=""}else{b.style.display="none"}return true}return false}function __dnn_SectionMaxMin(f,c){var d=dnn.dom.getById(c);if(d!=null){var g=f.getAttribute("max_icon");var e=f.getAttribute("min_icon");var a=f.getAttribute("userctr")!=null;var b;if(d.style.display=="none"){f.src=e;d.style.display="";if(a){b="True"}else{dnn.setVar(f.id+":exp",1)}}else{f.src=g;d.style.display="none";if(a){b="False"}else{dnn.setVar(f.id+":exp",0)}}if(a){dnncore.setUserProp(f.getAttribute("userctr"),f.getAttribute("userkey"),b,null)}return true}return false}function __dnn_enableDragDrop(){var b=dnn.getVar("__dnn_dragDrop").split(";");var e;for(var c=0;c<b.length;c++){e=b[c].split(" ");if(e[0].length>0){var a=dnn.dom.getById(e[0]);var d=dnn.dom.getById(e[1]);if(a!=null&&d!=null){a.setAttribute("moduleid",e[2]);dnn.dom.positioning.enableDragAndDrop(a,d,"__dnn_dragComplete()","__dnn_dragOver()")}}}}var __dnn_oPrevSelPane;var __dnn_oPrevSelModule;var __dnn_dragEventCount=0;function __dnn_dragOver(){__dnn_dragEventCount++;if(__dnn_dragEventCount%75!=0){return}var c=dnn.dom.getById(dnn.dom.positioning.dragCtr.contID);var a=__dnn_getMostSelectedPane(dnn.dom.positioning.dragCtr);if(__dnn_oPrevSelPane!=null){__dnn_oPrevSelPane.pane.style.border=__dnn_oPrevSelPane.origBorder}if(a!=null){__dnn_oPrevSelPane=a;a.pane.style.border="4px double "+DNN_HIGHLIGHT_COLOR;var e=__dnn_getPaneControlIndex(c,a);var b;var f;for(var d=0;d<a.controls.length;d++){if(e>d&&a.controls[d].id!=c.id){b=a.controls[d]}if(e<=d&&a.controls[d].id!=c.id){f=a.controls[d];break}}if(__dnn_oPrevSelModule!=null){dnn.dom.getNonTextNode(__dnn_oPrevSelModule.control).style.border=__dnn_oPrevSelModule.origBorder}if(f!=null){__dnn_oPrevSelModule=f;dnn.dom.getNonTextNode(f.control).style.borderTop="5px groove "+DNN_HIGHLIGHT_COLOR}else{if(b!=null){__dnn_oPrevSelModule=b;dnn.dom.getNonTextNode(b.control).style.borderBottom="5px groove "+DNN_HIGHLIGHT_COLOR}}}}function __dnn_dragComplete(){var f=dnn.dom.getById(dnn.dom.positioning.dragCtr.contID);var d=f.getAttribute("moduleid");if(__dnn_oPrevSelPane!=null){__dnn_oPrevSelPane.pane.style.border=__dnn_oPrevSelPane.origBorder}if(__dnn_oPrevSelModule!=null){dnn.dom.getNonTextNode(__dnn_oPrevSelModule.control).style.border=__dnn_oPrevSelModule.origBorder}var b=__dnn_getMostSelectedPane(dnn.dom.positioning.dragCtr);var e;if(b==null){var a=__dnn_Panes();for(var c=0;c<a.length;c++){if(a[c].id==f.parentNode.id){b=a[c]}}}if(b!=null){e=__dnn_getPaneControlIndex(f,b);__dnn_MoveToPane(b,f,e);dnn.callPostBack("MoveToPane","moduleid="+d,"pane="+b.paneName,"order="+e*2)}}function __dnn_MoveToPane(a,e,d){if(a!=null){var c=new Array();for(var b=d;b<a.controls.length;b++){if(a.controls[b].control.id!=e.id){c[c.length]=a.controls[b].control}dnn.dom.removeChild(a.controls[b].control)}dnn.dom.appendChild(a.pane,e);e.style.top=0;e.style.left=0;e.style.position="relative";for(var b=0;b<c.length;b++){dnn.dom.appendChild(a.pane,c[b])}__dnn_RefreshPanes()}else{e.style.top=0;e.style.left=0;e.style.position="relative"}}function __dnn_RefreshPanes(){var b=dnn.getVar("__dnn_Panes").split(";");var a=dnn.getVar("__dnn_PaneNames").split(";");__dnn_m_aryPanes=new Array();for(var c=0;c<b.length;c++){if(b[c].length>0){__dnn_m_aryPanes[__dnn_m_aryPanes.length]=new __dnn_Pane(dnn.dom.getById(b[c]),a[c])}}}var __dnn_m_aryPanes;var __dnn_m_aryModules;function __dnn_Panes(){if(__dnn_m_aryPanes==null){__dnn_m_aryPanes=new Array();__dnn_RefreshPanes()}return __dnn_m_aryPanes}function __dnn_Modules(a){if(__dnn_m_aryModules==null){__dnn_RefreshPanes()}return __dnn_m_aryModules[a]}function __dnn_getMostSelectedPane(g){var c=new dnn.dom.positioning.dims(g);var f=0;var a;var h;for(var e=0;e<__dnn_Panes().length;e++){var b=__dnn_Panes()[e];var d=new dnn.dom.positioning.dims(b.pane);a=dnn.dom.positioning.elementOverlapScore(d,c);if(a>f){f=a;h=b}}return h}function __dnn_getPaneControlIndex(f,b){if(b==null){return}var a=new dnn.dom.positioning.dims(f);var e;if(b.controls.length==0){return 0}for(var c=0;c<b.controls.length;c++){e=b.controls[c];var d=new dnn.dom.positioning.dims(e.control);if(a.t<d.t){return e.index}}if(e!=null){return e.index+1}else{return 0}}function __dnn_Pane(a,b){this.pane=a;this.id=a.id;this.controls=new Array();this.origBorder=a.style.border;this.paneName=b;var f=0;var e="";for(var d=0;d<a.childNodes.length;d++){var g=a.childNodes[d];if(dnn.dom.isNonTextNode(g)){if(__dnn_m_aryModules==null){__dnn_m_aryModules=new Array()}var c=g.getAttribute("moduleid");if(c!=null&&c.length>0){e+=c+"~";this.controls[this.controls.length]=new __dnn_PaneControl(g,f);__dnn_m_aryModules[c]=g.id;f+=1}}}this.moduleOrder=e}function __dnn_PaneControl(a,b){this.control=a;this.id=a.id;this.index=b;this.origBorder=a.style.border}function __dnn_ShowModalPage(a){dnnModal.show(a,true,550,950,true,"")}function __dnncore(){this.GetUserVal=0;this.SetUserVal=1}__dnncore.prototype={getUserProp:function(b,c,a){this._doUserCallBack(dnncore.GetUserVal,b,c,null,new dnncore.UserPropArgs(b,c,a))},setUserProp:function(c,d,a,b){this._doUserCallBack(dnncore.SetUserVal,c,d,a,new dnncore.UserPropArgs(c,d,b))},_doUserCallBack:function(c,d,e,a,b){if(dnn&&dnn.xmlhttp){var f=c+COL_DELIMITER+d+COL_DELIMITER+e+COL_DELIMITER+a;dnn.xmlhttp.doCallBack("__Page",f,dnncore._callBackSuccess,b,dnncore._callBackFail,null,true,null,0)}else{alert("Client Personalization not enabled")}},_callBackSuccess:function(a,b,c){if(b.pFunc){b.pFunc(b.namingCtr,b.key,a)}},_callBackFail:function(a,b){window.status=a}};__dnncore.prototype.UserPropArgs=function(b,c,a){this.namingCtr=b;this.key=c;this.pFunc=a};var dnncore=new __dnncore();
;;;