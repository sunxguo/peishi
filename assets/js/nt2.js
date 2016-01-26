
/* @file nt2.js
 * @date 2015.07.09 16:32:00 
 */
(function(a,n){if(a.animate)a.Log("nt2.js loaded");else{var m;m=document.documentElement.style;if(m.webkitTransition!==n||m.MozTransition!==n||m.OTransition!==n||m.msTransition!==n||m.transition!==n){m=document.documentElement.style;var t=(m.webkitTransition!==n?"Webkit":m.MozTransition!==n?"Moz":m.OTransition!==n?"O":m.msTransition!==n?"ms":"")+"Transition";m=function(b,d,c,e){var f=[],g=[],i=[],l=[],q=b.style,c=c||300;a.each(d,function(d,c){g[d]=a.camelize(d);a.isObject(c)?(c.to=c.to||0,f[d]=!a.cssNumber[d]?
parseInt(c.to,10):c.to,i[d]=a.unit(d,c.to),a.isDefined(c.from)&&a.css(b,g[d],parseInt(c.from,10)+i[d])):(f[d]=a.cssNumber[d]?parseInt(c,10):c,i[d]=a.unit(d,c),a.css(b,g[d],f[d]));l.push(d)});setTimeout(function(){q[t]="all "+c+"ms";a.each(l,function(b,a){q[g[a]]=f[a]+i[a]})},15);setTimeout(function(){q[t]="";e&&e.call(b)},c);return b}}else m=function(b,d,c,e){var f=0,g=0,i=0,l=[],q=[],h=[],j=[],m=[],k,c=c||300;a.each(d,function(d,c){h.push(a.camelize(d));a.isObject(c)?(k=c.to,a.isDefined(c.from)?
q.push(!a.cssNumber[d]?parseInt(c.from,10):c.from):q.push(!a.cssNumber[d]?parseInt(a(b).css(d),10):a(b).css(d)),a.css(b,h[g],q[g]+a.unit(d,k))):(k=c,q.push(a(b).css(d)));l.push(a.cssNumber[d]?k:isNaN(parseInt(k,10))?"":parseInt(k,10));j.push(a.unit(d,k));g++;i++});for(d=0;30>d;d++){m[d]=[];for(g=0;g<i;g++)m[d][h[g]]=!a.cssNumber[h[g]]&&!a.isNumeric(parseInt(q[g]))?"":q[g]+(l[g]-q[g])/30*d+("opacity"===h[g]?"":j[g])}for(;30>g;g++)setTimeout(function(){for(g=0;g<i;g++)a.css(b,h[g],m[f][h[g]]);f++},
c/30*g);setTimeout(function(){for(g=0;g<i;g++)a.css(b,h[g],l[g]+j[g]);e&&e.call(b)},c);return b};a.animate=m;a.Window=a.Class.create();a.Window.prototype={defaultOptions:{width:520,height:410,left:100,top:100,dropHeight:30,minWidth:520,minHeight:410,resize:!1,drag:!1,fixed:!1,zIndex:1E6,rightNode:!0,onChanage:new Function,onClose:new Function,onMinimize:new Function,onMaximize:new Function,onMaxResize:new Function},_tmpMove:null,_tmpStop:null,_drag:null,_left:null,_head:null,_body:null,_right:null,
_resize:null,_close:null,_maxresize:null,_minimize:null,_x:0,_y:0,_isdrag:null,_Style:null,parent:null,initialize:function(b,d){a.extend(this,this.defaultOptions,b);this.parent=d||null;this.quirks=a.browser.msie6||a.browser.Quirks&&a.browser.oldmsie;this.right=a(window).width()-this.left-this.width;this.bottom=a(window).height()-this.top-this.height;this._create();this._bind()},close:function(b){this.cancelBubble(b);if(-1>=this.onClose.toString().indexOf("anonymous"))this.onClose();else this._drag.hide(function(){a(this).remove()})},
change:function(b){b&&this.onChanage.call(this,{width:this.width,height:this.height});this._isdrag||(this._left.css("height",this.height+"px"),this._body.css({height:this.height-this.dropHeight+"px"}),this.rightNode&&this._right.css("height",this.height+"px"))},maxresize:function(){this.onMaxResize()},minimize:function(b,a){!0!==a&&this.cancelBubble(b);this._drag.css({height:"0px",width:"0px"});if(!0!==a)this.onMinimize()},maximize:function(b,a){this._drag.css({height:this.height+"px",width:this.width+
"px"});if(!0!==a)this.onMaximize()},cancelBubble:function(b){this._drag.css("z-index",this.zIndex);a.Event.fixEvent(b).stopPropagation()},changeAttr:function(b,d){this.quirks&&this.clearExpression();a.extend(this,{width:b,height:d,left:Math.max(0,a(window).width()-this.right-b),top:Math.max(0,a(window).height()-this.bottom-d)});this._drag.css({width:this.width+"px",height:this.height+"px",left:this.left+"px",top:this.top+"px"});this.quirks&&this.fixedPosition();this.change(!0)},start:function(b,d){d||
this.cancelBubble(b);this._Style=d?{x:"left",y:"top"}:{x:"width",y:"height"};this.right=a(window).width()-this.left-this.width;this.bottom=a(window).height()-this.top-this.height;this.quirks&&!d&&this.clearExpression();b=a.Event.fixEvent(b);this._drag.css({"z-index":++this.zIndex});this._x=(this._isdrag=d)?b.clientX-this._drag.get(0).offsetLeft||0:this._drag.get(0).offsetLeft||0;this._y=d?b.clientY-this._drag.get(0).offsetTop||0:this._drag.get(0).offsetTop||0;a.browser.msie?this._drag.bind("losecapture",
this._tmpStop).get(0).setCapture():(a.Event.fixEvent(b).preventDefault(),a(window).bind("blur",this._tmpStop));a(document).bind("mousemove",this._tmpMove);a(document).bind("mouseup",this._tmpStop)},move:function(b){window.getSelection?window.getSelection().removeAllRanges():document.selection.empty();var b=a.Event.fixEvent(b),d=b.clientX-this._x,b=b.clientY-this._y,c=a(window).offset();this._isdrag?(this.quirks?(this[this._Style.x]=Math.min(Math.max(d,c.left),c.left+a(window).width()-this.width)-
c.left,this[this._Style.y]=Math.min(Math.max(b,c.top),c.top+a(window).height()-this.height)-c.top):(this[this._Style.x]=Math.min(Math.max(d,0),a(window).width()-this.width),this[this._Style.y]=Math.min(Math.max(b,0),a(window).height()-this.height)),this._drag.css(this._Style.x,(this.quirks?c.left:0)+Math.max(0,this[this._Style.x])+"px"),this._drag.css(this._Style.y,(this.quirks?c.top:0)+Math.max(0,this[this._Style.y])+"px")):(this.quirks?(this[this._Style.x]=Math.min(Math.max(d+(this.quirks?c.left:
0),this.minWidth),a(window).width()-this.left),this[this._Style.y]=Math.min(Math.max(b+(this.quirks?c.top:0),this.minHeight),a(window).height()-this.top)):(this[this._Style.x]=Math.min(Math.max(d,this.minWidth),a(window).width()-this.left),this[this._Style.y]=Math.min(Math.max(b,this.minHeight),a(window).height()-this.top)),this._drag.css(this._Style.x,this[this._Style.x]+"px"),this._drag.css(this._Style.y,this[this._Style.y]+"px"));this.right=a(window).width()-this.left-this.width;this.bottom=a(window).height()-
this.top-this.height;this.change(!0)},stop:function(){this.quirks&&this.fixedPosition();this._drag.css({"z-index":--this.zIndex});a(document).removeEvent("mousemove",this._tmpMove);a(document).removeEvent("mouseup",this._tmpStop);a.browser.msie?this._drag.removeEvent("losecapture",this._tmpStop).get(0).releaseCapture():a(window).removeEvent("blur",this._tmpStop)},fixedPosition:function(){if(this.quirks){var b=a(window).scrollTop();a(window).scrollTop(b+1);this._drag.replaceIEcssText({left:"expression(eval(Math.max((document.documentElement.scrollLeft || document.body.scrollLeft), (document.documentElement.scrollLeft || document.body.scrollLeft) + (document.documentElement.clientWidth  || document.body.clientWidth ) - this.offsetWidth  - "+
this.right+")))",top:"expression(eval(Math.max((document.documentElement.scrollTop  || document.body.scrollTop ), (document.documentElement.scrollTop  || document.body.scrollTop ) + (document.documentElement.clientHeight || document.body.clientHeight) - this.offsetHeight - "+this.bottom+")))"});a(window).scrollTop(b);a(window).scrollLeft(1)}else this._drag.css({left:this.left+"px",top:this.top+"px"})},clearExpression:function(){var b=a(window).offset();this._drag.Expression("left","");this._drag.Expression("top",
"");this._drag.Expression("left","");this._drag.replaceIEcssText({left:b.left+this.left+"px",top:b.top+this.top+"px"})},_for_resize:function(){this.left=Math.max(0,a(window).width()-this.right-this.width);this.top=Math.max(0,a(window).height()-this.bottom-this.height);this.quirks||this._drag.css({left:this.left+"px",top:this.top+"px"})},_create:function(){this._drag=a({className:this.className||"window-containter",style:a.STYLE_BODY+"box-sizing:content-box;overflow:hidden;"}).appendTo(this.parent,
!0).css({position:!this.fixed?"static":!this.quirks?"fixed":"absolute",border:"none",width:this.width+"px",height:this.height+"px",zIndex:this.zIndex});this.fixedPosition();this._left=a({className:"window-left",style:a.STYLE_BODY+"float:left;width:100%;"}).appendTo(this._drag);this.drag&&(this._head=a({className:"window-head",style:a.STYLE_BODY+"cursor:move;position:relative;left:0;top:0;"}).appendTo(this._left).css({width:"100%",height:this.dropHeight+"px"}),this._close=a({className:"window-button-close",
style:a.STYLE_BODY+"width:20px;height:20px;cursor:pointer;position:static;float:right;position:relative;margin:2px 3px 0 0;line-height:20px;vertical-align:middle;background:none;"}).appendTo(this._head),this._maxresize=a({className:"window-button-maxresize",style:a.STYLE_BODY+"width:20px;height:20px;cursor:pointer;position:static;float:right;position:relative;margin:2px 3px 0 0;line-height:20px;vertical-align:middle;background:none;"}).appendTo(this._head),this._minimize=a({className:"window-button-min",
style:a.STYLE_BODY+"width:20px;height:20px;cursor:pointer;position:static;float:right;position:relative;margin:2px 3px 0 0;line-height:20px;vertical-align:middle;background:none;"}).appendTo(this._head));this._body=a({className:"window-body",style:a.STYLE_BODY+"width:100%;position:relative;left:0;top:0;"}).appendTo(this._left);this.rightNode&&(this._right=a({className:"window-right",style:a.STYLE_BODY+"float:left;display:none;width:100%;"}).appendTo(this._drag));this.resize&&(this._resize=a({className:"window-resize",
style:a.STYLE_BODY+"width:10px;height:10px;cursor:nw-resize;position:absolute;right:1px;bottom:1px;font-size:0;background:#f00;"}).appendTo(this._drag));a({style:a.STYLE_BODY+"clear:both;"}).appendTo(this._drag);this.change();return this._drag},_bind:function(){var b=this;this._drag.bind("mousedown",function(a){b.start.call(b,a,!0)});this._close.bind("mousedown",function(d){a.Event.fixEvent(d).stopPropagation();b.close.call(b,d)});this._maxresize.bind("mousedown",function(d){a.Event.fixEvent(d).stopPropagation();
b.maxresize.call(b,d)});this._minimize.bind("mousedown",function(d){a.Event.fixEvent(d).stopPropagation();b.minimize.call(b,d)});this._body.bind("mousedown",function(a){b.cancelBubble.call(b,a)});this.rightNode&&this._right.bind("mousedown",function(a){b.cancelBubble.call(b,a)});this.resize&&this._resize.bind("mousedown",function(a){b.start.call(b,a,!1)});this.fixed&&a(window).bind("resize",function(){b._for_resize()});this._tmpStop=function(a){b.stop.call(b,a)};this._tmpMove=function(a){b.move.call(b,
a)}}};a.Queue=a.Class.create();a.Queue.prototype={list:null,length:0,initialize:function(){this.list=[];this.length=this.list.length},isEmpty:function(){return 0===this.list.length},enQueue:function(b){this.list.push(b);this.length=this.list.length;return this.list[this.length-1]},deQueue:function(){var b;if(this.isEmpty())return null;b=this.list.shift();this.length=this.list.length;return b},queueFront:function(){return this.isEmpty()?null:this.list[0]}};a.pageManage=a.Class.create();a.pageManage.prototype=
{identid:"",keyid:"",data:null,interID:null,options:null,debug:!1,inter:0.8,count:0,chanageCall:!0,CON_MANAGE_PAGE_LIST:"IM_EXIST_PAGEARR",pageStore:null,initialize:function(b,d){var c=this,e;this.debug&&a.Log("pageManage.initialize():");this.options=a.extend(this.options,{onChanage:new Function,onInterval:new Function,pageNum:3,timeout:2.5,inter:0.8},b);this.keyid=a.CON_MANAGE_COOKIE+(d?"_"+d.toUpperCase():"");this.identid=this._2shortTime(0,8,13);this.options.timeout*=10;this.options.inter*=1E3;
this.inter=this.options.inter;this.pageStore=a.store;try{e=this.pageStore.get(this.CON_MANAGE_PAGE_LIST),e=!e||0==this._get().m.length?[]:e.split(","),e.push(this.identid),this.pageStore.set(this.CON_MANAGE_PAGE_LIST,e.join(","))}catch(f){}this._update();this.interID=setInterval(function(){setTimeout(function(){c._update();c.options.onInterval(c.options.timeout,c.data.m)},0)},this.options.inter);a.Event.addEvent(window,"unload",function(){c._remove();setTimeout(function(){},500)})},getIsLastPage:function(){return this.data.m.length},
_get:function(){var b=a.cookie.get(this.keyid)||"{}";return a.extend({m:[]},a.JSON.parseJSON(b))},_save:function(){var b=a.JSON.toJSONString(this.data);a.cookie.set(this.keyid,b,0);return b},_remove:function(){var b=this._getIndex();this.data.m.splice(b,1);this._save();b=this.pageStore.get(this.CON_MANAGE_PAGE_LIST);b=b.split(",");b.pop();b=b.join(",");""!=b?this.pageStore.set(this.CON_MANAGE_PAGE_LIST,b):this.pageStore.whereClear(this.CON_MANAGE_PAGE_LIST)},_update:function(){this.data=this._get();
this._clear();var b="update",d=this._getIndex();this.data.t=a.formatDate();if(!this.data.m[d])if(this.data.m.length<this.options.pageNum)b="add",this.data.m[d]={};else return;this.data.m[d][this.identid]=this._2shortTime();this._save();this.debug&&a.Log(this.identid+",pageCount:"+this.data.m.length+","+b+" data:"+a.JSON.toJSONString(this.data.m));if(("add"==b||!0!==this.chanageCall)&&this.count!=this.data.m.length)this.options.onChanage.call(this,this.data.m.length,this.data.m),this.count=this.data.m.length;
this.chanageCall=!1},_clear:function(){var b=this,d=this._2shortTime();if(this.data.m.length)for(var c=0;c<this.data.m.length;c++)a.each(this.data.m[c],function(a,f){Math.abs(d-f[a])>=b.options.timeout&&(b.data.m.splice(c,1),b.chanageCall=!0)})},_getIndex:function(){if(!this.data.m.length)return 0;for(var b=0;b<this.data.m.length;b++)if(this.data.m[b])for(var d in this.data.m[b])if(!a.isFunction(this.data.m[b][d])&&d===this.identid)return b;return b},_2shortTime:function(b,d,c){b=(b?b:a.getTime()).toString();
return b.substring(d||5,c||11)}};var h={disabled:!1},k;h.toJSONString=function(b){return null==b?"":a.JSON.toJSONString(b)};h.parseJSON=function(b){if("object"==typeof b)return b||n;try{return a.JSON.parseJSON(b)}catch(d){return b||n}};if(function(){if(window.localStorage)try{return localStorage.setItem("test","test"),"test"==localStorage.getItem("test")?(localStorage.removeItem("test"),!0):!1}catch(b){return!1}else return!1}())k=window.localStorage,h.set=function(b,d){if(!d||d===n||null===d)return h.remove(b);
try{"function"==typeof k.setItem?k.setItem(b,h.toJSONString(d)):k[b]=h.toJSONString(d)}catch(c){a.Log(c,3)}return d},h.get=function(b){return h.parseJSON(k.getItem(b))},h.remove=function(b){try{k.removeItem(b)}catch(d){a.Log(d,3)}},h.clear=function(){try{k.clear()}catch(b){a.Log(b,3)}},h.getAll=function(){for(var b={},a=0;a<k.length;++a){var c=k.key(a);b[c]=h.get(c)}return b};else{var s=RegExp("[!\"#$%&'()*+,/\\\\:;<=>?@[\\]^`{|}~]","g"),p,r;m=function(b){return function(){var a;a=Array.prototype.slice.call(arguments,
0);a.unshift(k);try{p.appendChild(k)}catch(c){p.insertBefore(k,p.firstChild)}k.addBehavior("#default#userData");for(var e=20;0<e;){e--;try{k.load("nTK-LS");break}catch(f){}}a=b.apply(h,a);p.removeChild(k);return a}};try{r=new ActiveXObject("htmlfile"),r.open(),r.write('<script type="text/javascript">document.w=window;<\/script><iframe src="/favicon.ico"></iframe>'),r.close(),p=r.w.frames[0].document,k=p.createElement("div")}catch(u){k=document.createElement("div"),p=document.body}h.set=m(function(b,
a,c){a=a.replace(s,"___");if(!c||c===n||null===c)return h.remove(a);b.setAttribute(a,h.toJSONString(c));try{b.save("nTK-LS")}catch(e){}return c});h.get=m(function(b,a){a=a.replace(s,"___");return h.parseJSON(b.getAttribute(a))});h.remove=m(function(b,a){a=a.replace(s,"___");b.removeAttribute(a);b.save("nTK-LS")});h.clear=m(function(b){var a=b.XMLDocument.documentElement.attributes;b.load("nTK-LS");for(var c=0,e=a.length;c<e;c++)b.removeAttribute(a[c].name);b.save("nTK-LS")});h.getAll=m(function(b){for(var a=
b.XMLDocument.documentElement.attributes,c={},e=0,f=a.length;e<f;++e){var g=a[e],i=g.name.replace(s,"___");c[g.name]=h.parseJSON(b.getAttribute(i))}return c})}try{h.set("__cometd__","__cometd__"),"__cometd__"!=h.get("__cometd__")&&(h.disabled=!0),h.remove("__cometd__")}catch(v){h.disabled=!0}h.whereClear=function(b){var d=this,c=this.getAll();a.each(c,function(a){-1<a.indexOf(b)&&d.remove(a)})};h.enabled=!h.disabled;a.store=h;a.comet=a.Class.create();a.comet.prototype={name:"public.comet",version:"2014.05.17",
connType:"login",options:null,fix:"",id:"",count:0,sendIntervalID:null,_ipExpr:/^https?:\/\/\d+\.\d+\.\d+\.\d+(:\d+)?\/(.*?)$/gi,_cacheElement:{},_connectTimeID:{},defaultOption:{muDomain:3,timeout:20,onCallback:new Function,onComplete:new Function,onAbnormal:new Function,onTimeout:new Function},initialize:function(b,d){var c=this;this.uri=b;this.fix=a.randomChar();this.uri||a.Log("comet uri is null",3);this.callMethod=window;this.callbackName="callback_"+this.fix;this.callMethod[this.callbackName]=
function(){c._connectCallback.call(c,c.id,arguments)};this.options=a.extend({},this.defaultOption,d);this.initConnectionPooling()},initMessageQueue:function(){this.messageQueue||(this.messageQueue=new a.Queue,this.messageQueue.addMessage=function(b){for(var a=0;a<this.length;a++)if(this.list[a].msgid==b.msgid&&this.list[a].index==b.index)return!1;this.enQueue(b);return!0},this.messageQueue.nextMessage=function(b,a){if(this.isEmpty())return null;if(!b)return this.queueFront();for(var c=0;c<this.length;c++)if(this.list[c].msgid==
b&&this.list[c].body.sendpacket==a)return this.list[c+1]},this.messageQueue.removeMessage=function(){for(var b=0;b<this.length;b++);this.list.splice(b,1);this.length=this.list.length})},initConnectionPooling:function(){if(!this.connectionPooling){this._ipExpr.test(this.uri)&&(this.options.muDomain=1);this.connectionPooling=new a.Queue;this.connectionPooling.get=function(){for(var b,a,e=0;e<this.list.length;e++){if(!1===this.list[e].lock&&(!b||b.rTimesample>this.list[e].rTimesample))b=this.list[e];
if(!a||this.list[e].sTimesample<a.sTimesample)a=this.list[e]}b=b||a;this.recover(b.uri,!0);return b};this.connectionPooling.getConnect=function(){var b=this.get();return{uri:b.uri,url:b.uri+(/\?$/ig.test(b.uri)?"&":"?")}};this.connectionPooling.recover=function(b,c,e,f){for(var g=0;g<this.list.length;g++)if(this.list[g].uri==b)return(this.list[g].lock=c)?(this.list[g].sTimesample=e||a.getTime(),this.list[g].rTimesample=0):this.list[g].rTimesample=f||a.getTime(),!0;return!1};for(var b=0;b<=this.options.muDomain;b++)this.connectionPooling.enQueue({uri:0===
b?this.uri.toString().replace(/(https?:\/\/)(.*?)(\-\d+)?\./ig,"$1$2."):this.uri.toString().replace(/(https?:\/\/)(.*?)(\-\d+)?\./ig,"$1$2-"+(+b-1)+"."),lock:!1,sTimesample:0,rTimesample:0})}},connect:function(b,d){var c,e,f=this.count++;this.connType="login";this.id=this.fix+"_"+f;b[d||"callbackname"]=this.callbackName;this.connectOptions=a.extend(b,{ts:a.getTime()});c=this.connectionPooling.getConnect();e=c.url+a.toURI(this.connectOptions);this._cacheElement[this.id]=this._createConnect(e,this.id,
f,c)},kalive:function(b,d){var c,e,f=this.count++;this.connType="kalive";this.id=this.fix+"_"+f;b[d||"callbackname"]=this.callbackName;this.kaliveOptions=a.extend(this.kaliveOptions,b,{ts:a.getTime()});c=this.connectionPooling.getConnect();e=c.url+a.toURI(this.kaliveOptions);this._cacheElement[this.id]=this._createConnect(e,this.id,f,c)},disconnectServer:function(b,d){return this.flashGoServer=this.connectionPooling.getConnect().url+a.toURI(!1===d?b:a.extend(b,{ts:a.getTime()}))},disconnect:function(){a.require(this.flashGoServer,
function(b){a(b.error?b.target:b).remove()});window[this.callbackName]=new Function},reconnect:function(){this.connect(this.connectOptions)},send:function(b,d){var c=this,e=this.connectionPooling.getConnect(),f=this.mdyServerAddr(e.url)+a.toURI(b);a.require(f+"#rnd",function(b){c.connectionPooling.recover(e.uri,!1);d&&d.call(c,b.error);a(b.error?b.target:b).remove()});return!0},mdyServerAddr:function(b){return b.replace(/\/flashgo/i,"/httpgo")},post:function(b,d){var c=this,e=this.connectionPooling.getConnect();
new a.POST(this.mdyServerAddr(e.url),b,function(){c.connectionPooling.recover(e.uri,!1);d&&d.call(c,!0)})},_createConnect:function(b,d,c,e){var f=this,g,c=document.head||nTalk("head")[0]||document.documentElement;g=a({className:d,tag:"script",type:"text/javascript",async:"async",src:b,charset:"utf-8"}).appendTo(c);b=g.get(0).readyState?"onreadystatechange":"onload";g.get(0)[b]=g.get(0).onerror=function(b){var c=g.get(0).readyState,b=a.Event.fixEvent(b);/^(loaded|complete|undefined)$/.test(c)&&(f.connectionPooling.recover(e.uri,
!1),"error"!==b.type?setTimeout(function(){f._connectComplete(b,d);g.remove()},a.browser.msie?800:50):(f._connectAbnormal(b,d),g.remove()))};this._connectTimeID[d]=setTimeout(function(){g.first().remove();f._connectTimeout("timeout",d)},1E3*+this.options.timeout+1E4);return g.get(0)},_connectCallback:function(b,d){d=Array.prototype.slice.call(d);a("."+b).remove();this._cacheElement[b]?(this._stopCallComplete(b,"callback"),this.options.onCallback.apply(self,[!0,d])):this.options.onCallback.apply(self,
[!1,d])},_connectComplete:function(b,a){var c=Array.prototype.slice.call(arguments);this._cacheElement[a]&&(this._stopCallComplete(a,"complete"),this.options.onComplete.apply(self,[this.connType].concat(c)))},_connectAbnormal:function(b,a){var c=Array.prototype.slice.call(arguments);this._cacheElement[a]&&(this._stopCallComplete(a,"abnormal"),this.options.onAbnormal.apply(self,[this.connType].concat(c)))},_connectTimeout:function(b,a){var c=Array.prototype.slice.call(arguments);this._cacheElement[a]&&
(this._stopCallComplete(a,"timeout"),this.options.onTimeout.apply(self,[this.connType].concat(c)))},_stopCallComplete:function(b){var d=this._cacheElement[b];d?d.onload=d.onreadystatechange=d.onerror=new Function:a.Log("stop error id:"+b,3);delete this._cacheElement[b];clearTimeout(this._connectTimeID[b]);delete this._connectTimeID[b]},_createScriptPCID:function(b){return"guest"+[b?"TEMP"+a.randomChar(4):a.randomChar(8),a.randomChar(4),a.randomChar(4),a.randomChar(4),a.randomChar(12)].join("-")}};
a.extend({htmlToElement:function(b){var d,c;if(a.browser.msie)try{d=new ActiveXObject("MSXml.DOMDocument"),d.loadXML(b),c=d.childNodes}catch(e){d=document.createElement("DIV"),d.innerHTML=b,c=d.childNodes}else d=document.createElement("DIV"),d.innerHTML=b,c=d.childNodes;return c},elementToObject:function(b){var d={},c;c=a.isArray(b)||b.talkVersion?b[0]:b;d[c.tagName.toLowerCase()]=c.innerHTML;if(c.attributes)for(var e=0;e<c.attributes.length;e++){if(b=c.attributes[e].name)d[b]=c.attributes[e].value}else d.msg=
c.textContent;return d},jsonToxml:function(b){var d=this,c="",e;if("object"==typeof b)a.each(b,function(f,g){if("string"==typeof g&&"text"==f)c=g;else if(a.isArray(b))c+=d.jsonToxml(g);else{c+="<"+f;if("object"==typeof g.attributes){for(var i in g.attributes)g.attributes.hasOwnProperty(i)&&(c+=" "+i+'="'+g.attributes[i]+'"');delete g.attributes}e=d.jsonToxml(g);c=g&&e?c+(">"+e+"</"+f+">"):c+("></"+f+">")}});else return b;return c},utils:{options:{},handleLinks:function(b,d){this.options=a.extend({},
this.options,d);for(var b=b||"",c=0;c<this.linkPatterns.length;c++)b=b.replace(this.linkPatterns[c][0],this.linkPatterns[c][1]);return b},linkPatterns:[[/\[link\s+reconnect=([^\s\[\]'"]+)\s*[^\[\]]*]([^\[\]]+)\[\/\s*link]/gi,'<a style="'+a.STYLE_BODY+'color:#005ffb;text-decoration:none;" href="javascript:void(0);" onclick="nTalk.chatManage.get(\'$1\').reconnect(this);return false;" >$2</a>'],[/\[link\s+message=([^\s\[\]'"]+)\s*[^\[\]]\s*source=([^\s\[\]'"]+)\s*[^\[\]]*]([^\[\]]+)\[\/\s*link]/gi,'<a style="'+
a.STYLE_BODY+'color:#005ffb;text-decoration:none;" href="javascript:void(0);" onclick="nTalk.chatManage.get(\'$1\').switchUI(\'message\', $2);return false;" >$3</a>'],[/\[link\s+cancel=([^\s\[\]'"]+)\s+action=([^\s\[\]'"]+)\s*[^\[\]]*]([^\[\]]+)\[\/\s*link]/gi,'<a style="'+a.STYLE_BODY+'color:#005ffb;text-decoration:none;" href="javascript:void(0);" onclick="nTalk.chatManage.get(\'$1\').cancelUpload(\'$2\');return false;" >$3</a>'],[/\[link\s+resend=([^\s\[\]'"]+)\s+msgid=([^\s\[\]'"]+)\s*[^\[\]]*]([^\[\]]+)\[\/\s*link]/gi,
'<a style="'+a.STYLE_BODY+'color:#005ffb;text-decoration:none;" href="javascript:void(0);" onclick="nTalk.chatManage.get(\'$1\').resend(\'$2\', this);return false;" >$3</a>'],[/\[link\s*manual=([^\s\[\]'"]+)](.*?)\[\/link]/gi,'<a style="'+a.STYLE_BODY+'color:#005ffb;text-decoration:none;" href="javascript:void(0);" onclick="nTalk.chatManage.get(\'$1\').switchServerType(true);return false;" >$2</a>'],[/\[link\s*robotindex=([^\s\[\]'"]+)](.*?)\[\/link]/gi,'<a style="'+a.STYLE_BODY+'color:#005ffb;text-decoration:none;" href="javascript:void(0);" onclick="nTalk.chatManage.get(\'{$settingid}\').send(\'$1\');return false;">$2</a>'],
[/\[link\s*href=(.*?)](.*?)\[\/link]/gi,'<a style="'+a.STYLE_BODY+'color:#005ffb;text-decoration:none;cursor:pointer;" href="$1">$2</a>'],[/\[link\s*(.*?)?](.*?)\[\/link]/gi,'<a style="'+a.STYLE_BODY+'color:#005ffb;text-decoration:none;cursor:pointer;" href="javascript:void(0);" onclick="window.open(\'$1\')">$2</a>'],[/\{\$(\w+)}/gi,function(b,d){return a.utils.options[d]||""}]]},toHSL:function(b){return a.isHex(b)?a.rgb2HSL(a.hex2RGB(b)):a.isRGB(b)?a.rgb2HSL(b):b},isHex:function(b){return"string"==
typeof b&&/^#?([0-9a-f]{3}|[0-9a-f]{6})$/ig.test(b)},isRGB:function(b){return a.isObject(b)&&a.isDefined(b.r)&&a.isDefined(b.g)&&a.isDefined(b.b)},isHSL:function(b){return a.isObject(b)&&a.isDefined(b.h)&&a.isDefined(b.s)&&a.isDefined(b.l)},hex2RGB:function(b){var b=b.toString().replace("#",""),a=b.split(""),c={};return c=3==b.length?{r:parseInt(a[0]+a[0],16),g:parseInt(a[1]+a[1],16),b:parseInt(a[2]+a[2],16)}:6==b.length?{r:parseInt(a[0]+a[1],16),g:parseInt(a[2]+a[3],16),b:parseInt(a[4]+a[5],16)}:
{r:0,g:0,b:0}},rgb2HSL:function(b){var a,c,e,f,g,i,l={};a=b.r/255;c=b.g/255;b=b.b/255;e=Math.min(a,c,b);i=Math.max(a,c,b);g=i-e;l.l=(i+e)/2;0==g?(l.h=0,l.s=0):(l.s=0.5>l.l?g/(i+e):g/(2-i-e),e=((i-a)/6+g/2)/g,f=((i-c)/6+g/2)/g,g=((i-b)/6+g/2)/g,a==i?l.h=g-f:c==i?l.h=1/3-g+e:b==i&&(l.h=2/3-e+f),0>l.h&&(l.h+=1),1<l.h&&(l.h-=1));return l}});a.fn.extend({animate:function(b,d,c){return a.each(this,function(e,f){a.animate(f,b,d,c)})},show:function(b,d){a.isFunction(b)&&(d=b,b=500);return this.animate({visibility:"visible",
opacity:{from:0,to:1}},b||500,d)},hide:function(b,d){a.isFunction(b)&&(d=b,b=500);return this.animate({opacity:{to:0}},b||500,d)},gradient:function(b,d,c){var e,f;return b?a.each(this,function(g,i){a.browser.oldmsie&&(e=/top|bottom/.test(b)?0:1,/right|bottom/.test(b)&&(f=d,d=c,c=f));if(a.browser.webkit){switch(b){case "top":e="0% 100%,0% 0%";break;case "right":e="0% 0%,100% 0%";break;case "bottom":e="0% 0%,0% 100%";break;case "left":e="100% 0%,0% 0%"}a(i).css("background-image",!b?"none":"-webkit-gradient(linear,"+
e+",color-stop(1, "+d+"),color-stop(0, "+c+"))")}else a.browser.gecko?a(i).css("background-image",!b?"none":"-moz-linear-gradient("+b+", "+d+", "+c+")"):a.browser.oldmsie?i.style.filter=i.currentStyle.filter.replace(/progid:DXImageTransform\.Microsoft\.gradient\((.*?)\)\s*/gi,"")+(!b?"":" progid:DXImageTransform.Microsoft.gradient(GradientType="+e+",startColorstr='"+d+"', endColorstr='"+c+"')"):a.browser.msie?a(i).css("background-image",!b?"none":"-ms-linear-gradient("+b+", "+d+", "+c+")"):a(i).css("background-image",
!b?"none":"linear-gradient("+b+", "+d+", "+c+")")}):a.each(this,function(b,c){a.browser.oldmsie?a(c).css("filter","none"):a(c).css("background-image","none")})}});a.extend({base64:{_strKey:"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=",encode:function(b){for(var d=a.base64,c="",e,f,g,i,l,h,k=0,b=d._utf8_encode(b||"");k<b.length;)e=b.charCodeAt(k++),f=b.charCodeAt(k++),g=b.charCodeAt(k++),i=e>>2,e=(e&3)<<4|f>>4,l=(f&15)<<2|g>>6,h=g&63,isNaN(f)?l=h=64:isNaN(g)&&(h=64),c=c+d._strKey.charAt(i)+
d._strKey.charAt(e)+d._strKey.charAt(l)+d._strKey.charAt(h);return c},decode:function(b){for(var d=a.base64,c="",e,f,g,i,l,h=0,b=(b||"").replace(/[^A-Za-z0-9\+\/=]/g,"");h<b.length;)e=d._strKey.indexOf(b.charAt(h++)),f=d._strKey.indexOf(b.charAt(h++)),i=d._strKey.indexOf(b.charAt(h++)),l=d._strKey.indexOf(b.charAt(h++)),e=e<<2|f>>4,f=(f&15)<<4|i>>2,g=(i&3)<<6|l,c+=String.fromCharCode(e),64!=i&&(c+=String.fromCharCode(f)),64!=l&&(c+=String.fromCharCode(g));return c=d._utf8_decode(c)},_utf8_encode:function(a){for(var a=
a.replace(/\r\n/g,"\n"),d="",c=0;c<a.length;c++){var e=a.charCodeAt(c);128>e?d+=String.fromCharCode(e):(127<e&&2048>e?d+=String.fromCharCode(e>>6|192):(d+=String.fromCharCode(e>>12|224),d+=String.fromCharCode(e>>6&63|128)),d+=String.fromCharCode(e&63|128))}return d},_utf8_decode:function(a){for(var d="",c=0,e,f,g;c<a.length;)e=a.charCodeAt(c),128>e?(d+=String.fromCharCode(e),c++):191<e&&224>e?(f=a.charCodeAt(c+1),d+=String.fromCharCode((e&31)<<6|f&63),c+=2):(f=a.charCodeAt(c+1),g=a.charCodeAt(c+2),
d+=String.fromCharCode((e&15)<<12|(f&63)<<6|g&63),c+=3);return d}},FORM:{createInput:function(b,d,c){for(var e=[],f,g,i=a.browser.mobile,d=a.extend({id:"",rowspan:0,style:""},d),l='<span class="ntkf-text-red" style="'+a.STYLE_BODY+'padding:2px 5px 2px 0;color:#f00;">'+(c||"")+"</span>",h=0;h<b.length;h++){c=a.extend({titlewidth:"80px",inputwidth:"auto",input:{width:"90%",height:"auto"}},b[h]);f=c.title+(c.title.length==a.enLength(c.title)?":":"\uff1a");/zh_cn|zh_tw/.test(a.lang.language)&&16<a.enLength(c.title)||
c.multipart||/radio|checkbox/.test(c.type)&&2<c.options.length?(c.multipart=!0,e.push(i?'<tr style="'+a.STYLE_BODY+'"><td style="'+a.STYLE_BODY+'width:100%;">':['<tr style="',a.STYLE_BODY,'"><td style="',a.STYLE_BODY,'vertical-align:top;line-height:28px;color:#333;" colspan="2"><div style="',a.STYLE_BODY,'margin:5px 10px 5px 10px;color:#5a5a5a;">',f,!0===c.required?l:"","</div></td></tr>",'<tr style="'+a.STYLE_BODY+'"><td style="',a.STYLE_BODY,'padding:0 5px 0 0;text-align:right;vertical-align:top;line-height:28px;color:#333;"></td>',
'<td style="'+a.STYLE_BODY+"line-height:28px;width:"+c.inputwidth+';">'].join(""))):e.push('<tr style="'+a.STYLE_BODY+'">'+(i?"":'<td style="'+a.STYLE_BODY+"padding:0 5px 0 0;text-align:right;vertical-align:top;line-height:28px;color:#333;width:"+c.titlewidth+';"><div style="'+a.STYLE_BODY+'margin:4px 0 0 0;text-align:right;color:#5a5a5a;">'+(!0===c.required?l:"")+f+"</div></td>")+'<td style="'+a.STYLE_BODY+"line-height:28px;width:"+(i?"100%":c.inputwidth)+';">');switch(c.type){case "select":e.push('<select data-index="'+
h+'" name="'+c.name+'" style="'+a.STYLE_BODY+"border:1px solid #ccc;height:24px;color:#333;margin:0 0 4px;line-height:20px;width:"+(i?"99%":c.input.width)+';">');e.push('<option value="" style="'+a.STYLE_BODY+'color:#ccc;">'+c.defaultText+"</option>");for(g=0;g<c.options.length;g++)f=c.options[g],f="string"==typeof f?{text:f,value:f}:f,e.push('<option value="'+f.value+'" style="'+a.STYLE_BODY+'color:#333;">'+f.text+"</option>");e.push("</select>");break;case "radio":e.push('<ul style="'+a.STYLE_BODY+
'list-style:none;">');for(var k=0,j;k<c.options.length;k++)f=c.options[k],f="string"==typeof f?{text:f,value:f}:f,j=c.name+"_"+k,g=c.defaultText==f.value?" checked":"",e.push('<li class="form-item" style="'+a.STYLE_BODY+'list-style:none;padding:0 2px 0 0;color:#000;float:left;"><input type="radio" name="'+c.name+'"id="'+j+'" value="'+f.value+'" _custom_text="'+f.text+'" style="'+a.STYLE_BODY+'color:#333;"'+g+' /><label for="'+j+'" style="'+a.STYLE_BODY+'display:inline;color:#000;">'+f.text+"</label></li>");
e.push('<li style="'+a.STYLE_BODY+'list-style:none;clear:both;width:0;height:0;"></li>');e.push("</ul>");break;case "checkbox":e.push('<ul style="'+a.STYLE_BODY+'list-style:none;">');for(k=0;k<c.options.length;k++)f=c.options[k],f="string"==typeof f?{text:f,value:f}:f,j=c.name+"_"+k,g=c.defaultText==f.value?" checked":"",e.push('<li class="form-item" style="'+a.STYLE_BODY+'list-style:none;padding:0 2px 0 0;float:left;"><input type="checkbox" name="'+c.name+'" id="'+j+'" value="'+f.value+'" _custom_text="'+
f.text+'" style="'+a.STYLE_BODY+'color:#333;"'+g+' /><label for="'+j+'" style="'+a.STYLE_BODY+'display:inline;color:#000;">'+f.text+"</label></li>");e.push('<li style="'+a.STYLE_BODY+'list-style:none;clear:both;width:0;height:0;"></li>');e.push("</ul>");break;case "textarea":e.push('<textarea data-index="'+h+'" name="'+c.name+'" style="'+a.STYLE_BODY+"border:1px solid #ccc;color:#ccc;width:"+(i?"99%":c.input.width)+";height:"+c.input.height+';"'+(a.browser.html5?' placeholder="'+c.defaultText+'">':
">"+c.defaultText)+"</textarea>");break;default:e.push('<input data-index="'+h+'" type="text" name="'+c.name+'"'+(a.browser.html5?' placeholder="'+c.defaultText+'" value=""':' value="'+c.defaultText+'"')+' maxlength="32" style="'+a.STYLE_BODY+"border:1px solid #ccc;height:24px;width:"+(i?"99%":c.input.width)+';margin:0 0 4px;color:#ccc;"'),"phone"==c.verification&&e.push(" onblur=\"this.value=this.value.replace(/[^0-9-]+/, '');\" onkeyup=\"var keyCode=(event || window.event).keyCode; if( !/16|17|35|36|37|38|39|40/i.test(keyCode) ){this.value=this.value.replace(/[^0-9-]+/, '');}\""),
e.push(" />")}c.messageid&&(e.push('<div style="'+a.STYLE_BODY+'display:none;color:#EF7208;" class="form-info '+c.messageid+'">'),e.push('<div style="'+a.STYLE_BODY+"margin:2px;width:15px;height:15px;float:left;background:transparent url("+a.sourceURI+'/images/chaticon.png) no-repeat -160px -39px;"></div>'),e.push('<div style="'+a.STYLE_BODY+'color:#EF7208;float:left;" class="chat-view-info"></div>'),e.push('<div style="'+a.STYLE_BODY+'clear:both;width:0;height:0;"></div>'),e.push("</div>"));e.push("</td>");
d.style&&0===h&&e.push('<td style="'+a.STYLE_BODY+d.style+'" id="'+d.id+'" rowspan="'+d.rowspan+'"></td></tr>')}return e.join("")},bindFormEvent:function(b,d){a(d).find("input[type=text], textarea").bind("focus",function(){var c=a(this).css({color:"#333","border-color":a.browser.mobile?"#0079fe":"#666"}),d=c.attr("data-index")||0;b[d].defaultText==c.val()&&c.val("")}).bind("blur",function(){var c=a(this).css("border-color","#ccc"),d=c.attr("data-index")||0,d=b[d].defaultText;""===c.val()&&c.val(d);
(""===c.val()||c.val()==d)&&c.css("color","#ccc")})},verificationForm:function(b,d,c){for(var e,f,g=[],i,h,k=/\d{6,}/i,m=/^[a-zA-Z0-9\._-]+@[a-zA-Z0-9_-]+(\.[a-zA-Z0-9_-]+)+$/i,j=0;j<b.length;j++){switch(b[j].type){case "checkbox":h=[];e=a(c).find("input[name="+b[j].name+"]");f=a(c).find("input[name="+b[j].name+"][checked]");for(i=0;i<f.length;i++)h.push({value:f.get(i).value,text:a(f.get(i)).attr("_custom_text")});break;case "radio":h={value:"",text:""};e=a(c).find("input[name="+b[j].name+"]");a(c).find("input[name="+
b[j].name+"][checked]").each(function(b,c){c.checked&&(h={value:a(c).val()||"",text:a(c).attr("_custom_text")})});break;case "select":e=a(c).find("select[name="+b[j].name+"]");h=a("option[selected]",e).val()||"";h=b[j].defaultText&&h==b[j].defaultText?"":h;break;case "textarea":e=a(c).find("textarea[name="+b[j].name+"]");b[j].defaultText&&b[j].defaultText==e.val()?(h="",e.val("")):h=e.val().replace(/(^\s*)|(\s*$)/g,"");break;default:e=a(c).find("input[name="+b[j].name+"]"),b[j].defaultText&&b[j].defaultText==
e.val()?(h="",e.val("")):h=e.val().replace(/(^\s*)|(\s*$)/g,"")}f="string"==typeof h?""===h||!h.length:a.isArray(h)?0===h.length:""===h.value;i=b[j].messageid&&b[j].message?!0:!1;var n=a(c).find("."+b[j].messageid),p=a(c).find("."+b[j].messageid+" .chat-view-info");if(b[j].required&&f){i&&b[j].message[0]?(p.html(b[j].message[0]),n.display(1).show(),e.get(0).focus()):/radio|checkbox/.test(b[j].type)?e.parent().css("color","#f00"):e.css("border-color","#f00").get(0).focus();return}if("phone"==b[j].verification&&
!f&&!k.test(h)){i&&b[j].message[1]?(p.html(b[j].message[1]),n.display(1).show(),e.get(0).focus()):e.css("border-color","#f00").get(0).focus();return}if("email"==b[j].verification&&!f&&!m.test(h)){i&&b[j].message[1]?(p.html(b[j].message[1]),n.display(1).show(),e.get(0).focus()):e.css("border-color","#f00").get(0).focus();return}if(b[j].min&&!f&&a.enLength(h)<b[j].min){i&&b[j].message[1]?(p.html(b[j].message[1]),n.display(1).show(),e.get(0).focus()):e.css("border-color","#f00").get(0).focus();return}if(b[j].max&&
!f&&a.enLength(h)>b[j].max){i&&b[j].message[2]?(p.html(b[j].message[2]),n.display(1).show(),e.get(0).focus()):e.css("border-color","#f00").get(0).focus();return}i?n.hide(function(){a(this).display()}):/radio|checkbox/.test(b[j].type)?e.parent().css("color","#333"):e.css("border-color","#DBD8D1");f||g.push({name:b[j].name,title:b[j].title,value:h})}"function"==typeof d?d(g):a.Log("form submit complete, callback is null",3)}}});a.Transfer=a.Class.create();a.Transfer.prototype={name:"Transfer",button:null,
element:null,form:null,iframe:null,options:null,debug:!0,fkey:"",initialize:function(b,d){this.button=d;var c=a.randomChar(16);this.options=a.extend({onError:new Function,onChange:new Function,callback:new Function,name:c,maxSize:2465792,accept:"*",params:{},target:"iframe-transfer-"+c},b);if(this.options.server){var e=this,c=Math.max(20,this.button.width(),parseFloat(this.button.css("width"))),f=Math.max(20,this.button.height(),parseFloat(this.button.css("height"))),c=a.STYLE_BODY+"width:"+c+"px;height:"+
f+"px;overflow:hidden;",g=function(a){/^(?:loaded|complete|undefined)$/.test(this.readyState)&&(e.iframe.removeEvent("readystatechange",g).removeEvent("load",g),e.transferComplete(a,e.fkey))};this.form=a({tag:"FORM",action:"",method:"POST",target:this.options.target,enctype:"multipart/form-data",style:c}).appendTo(this.button,!0);this.iframe=a({tag:"IFRAME",name:this.options.target,src:"about:blank",style:c+"width:0;height:0;display:none;"}).appendTo(this.button,!0);this.element=a({tag:"INPUT",type:"file",
name:this.options.name,accept:this.options.accept,style:c,title:this.button.attr("title")||""}).appendTo(this.form,!0).css("opacity",0);this.element.click(function(){""!==this.value&&e.form.get(0).reset();e.iframe.bind("readystatechange",g).bind("load",g);e.fkey=a.randomChar(16)}).bind("change",function(a){e.fileChange(a,this.files||this.value)})}else a.Log("server is null",3)},transferComplete:function(b,d){var c=this;d&&(this.debug&&a.Log("$.upload.transferComplete(event, "+d+")"),a.jsonp(this.options.server+
"?"+a.toURI(a.extend({getaction:1,fkey:d},this.options.params))+"#rnd",function(b){c.debug&&a.Log("get transfer file info:"+a.JSON.toJSONString(b),1);c.options.callback(b)}))},fileChange:function(b,d){if("string"===typeof d)this.debug&&a.Log("Name: "+d,2);else for(var c,e=0;e<d.length;e++){var f=d[e];if(f.size>this.options.maxSize){this.options.onError(f.name,"SIZE");return}if("*"!=this.options.accept&&this.options.accept){if(-1<this.options.accept.indexOf("/*")){if(c=RegExp(this.options.accept.replace(/\//,
"\\/"),"gi"),c.test(f.type)){a.Log("accept:"+this.options.accept+", type:"+f.type,2);this.options.onError(f.name,"TYPE");continue}}else if(-1>=this.options.accept.indexOf(f.type)){a.Log("accept:"+this.options.accept+", type:"+f.type,2);this.options.onError(f.name,"TYPE");continue}this.debug&&a.Log("Name: "+f.name)}}this.options.onChange();this.debug&&a.Log("$.upload.fileChange()");this.form.attr("action",this.options.server+"?"+a.toURI(a.extend({fkey:this.fkey},this.options.params)));this.form.get(0).submit()}}}})(nTalk);
