var __generator=this&&this.__generator||function(t,e){var n,i,o,r,s={label:0,sent:function(){if(1&o[0])throw o[1];return o[1]},trys:[],ops:[]};return r={next:l(0),throw:l(1),return:l(2)},"function"==typeof Symbol&&(r[Symbol.iterator]=function(){return this}),r;function l(r){return function(l){return function(r){if(n)throw new TypeError("Generator is already executing.");for(;s;)try{if(n=1,i&&(o=2&r[0]?i.return:r[0]?i.throw||((o=i.return)&&o.call(i),0):i.next)&&!(o=o.call(i,r[1])).done)return o;switch(i=0,o&&(r=[2&r[0],o.value]),r[0]){case 0:case 1:o=r;break;case 4:return s.label++,{value:r[1],done:!1};case 5:s.label++,i=r[1],r=[0];continue;case 7:r=s.ops.pop(),s.trys.pop();continue;default:if(!(o=(o=s.trys).length>0&&o[o.length-1])&&(6===r[0]||2===r[0])){s=0;continue}if(3===r[0]&&(!o||r[1]>o[0]&&r[1]<o[3])){s.label=r[1];break}if(6===r[0]&&s.label<o[1]){s.label=o[1],o=r;break}if(o&&s.label<o[2]){s.label=o[2],s.ops.push(r);break}o[2]&&s.ops.pop(),s.trys.pop();continue}r=e.call(t,s)}catch(l){r=[6,l],i=0}finally{n=o=0}if(5&r[0])throw r[1];return{value:r[0]?r[1]:void 0,done:!0}}([r,l])}}},__values=this&&this.__values||function(t){var e="function"==typeof Symbol&&t[Symbol.iterator],n=0;return e?e.call(t):{next:function(){return t&&n>=t.length&&(t=void 0),{value:t&&t[n++],done:!t}}}};(window.webpackJsonp=window.webpackJsonp||[]).push([[1],{"3VwI":function(t,e,n){"use strict";var i=n("8Y7J"),o=n("6UMx"),r=n("Q+lL"),s=n("Xd0L"),l=n("SVse"),a=n("mrSG"),u=function(){function t(t,e,n){this.bottomSheetRef=t,this.data=e,this.url=n,this.list=[],this.folder=""}return t.prototype.ngOnInit=function(){var t=this.data.fileName.split(";");t.pop(),this.folder=this.data.folder,this.list=t},t.prototype.openLink=function(t){return a.a(this,void 0,void 0,(function(){return __generator(this,(function(e){return window.open(this.url+"/"+this.folder+"/"+t),[2]}))}))},t}(),c=n("lwm9");n.d(e,"a",(function(){return m}));var h=i.qb({encapsulation:0,styles:[[""]],data:{}});function d(t){return i.Ob(0,[(t()(),i.sb(0,0,null,null,7,"a",[["class","mat-list-item"],["mat-list-item",""]],[[2,"mat-list-item-avatar",null],[2,"mat-list-item-with-avatar",null]],[[null,"click"]],(function(t,e,n){var i=!0;return"click"===e&&(i=!1!==t.component.openLink(t.parent.context.$implicit)&&i),i}),o.c,o.a)),i.rb(1,1228800,null,3,r.b,[i.k,i.h,[2,r.e],[2,r.a]],null,null),i.Kb(603979776,1,{_lines:1}),i.Kb(603979776,2,{_avatar:0}),i.Kb(603979776,3,{_icon:0}),(t()(),i.sb(5,0,null,1,2,"span",[["class","mat-line"],["mat-line",""]],null,null,null,null,null)),i.rb(6,16384,[[1,4]],0,s.o,[],null,null),(t()(),i.Mb(7,null,["- ",""]))],null,(function(t,e){t(e,0,0,i.Eb(e,1)._avatar||i.Eb(e,1)._icon,i.Eb(e,1)._avatar||i.Eb(e,1)._icon);var n=e.parent.context.$implicit.substring(14);t(e,7,0,n)}))}function p(t){return i.Ob(0,[(t()(),i.sb(0,0,null,null,2,"div",[],null,null,null,null,null)),(t()(),i.hb(16777216,null,null,1,null,d)),i.rb(2,16384,null,0,l.m,[i.O,i.L],{ngIf:[0,"ngIf"]},null)],(function(t,e){t(e,2,0,""!==e.context.$implicit)}),null)}function f(t){return i.Ob(0,[(t()(),i.sb(0,0,null,null,3,"mat-nav-list",[["class","mat-nav-list mat-list-base"],["role","navigation"]],null,null,null,o.d,o.b)),i.rb(1,704512,null,0,r.e,[],null,null),(t()(),i.hb(16777216,null,0,1,null,p)),i.rb(3,278528,null,0,l.l,[i.O,i.L,i.r],{ngForOf:[0,"ngForOf"]},null)],(function(t,e){t(e,3,0,e.component.list)}),null)}var m=i.ob("app-download-sheet",u,(function(t){return i.Ob(0,[(t()(),i.sb(0,0,null,null,1,"app-download-sheet",[],null,null,null,f,h)),i.rb(1,114688,null,0,u,[c.e,c.a,"BASE_URL"],null,null)],(function(t,e){t(e,1,0)}),null)}),{},{},[])},"5WMv":function(t,e,n){"use strict";n.d(e,"a",(function(){return r}));var i=n("mrSG"),o=n("XNiG"),r=function(){function t(t,e){this.filesService=t,this.url=e,this.listOfNames=[],this.imagesToShow=[],this.listToDelete=[],this.files=[],this.nameBtn="",this.folderToSaveInServer="folder",this.multiple=!1,this.oneImage="assets/404.jpg",this.Images=[],this.propertyOfParent=new o.a,this.eventSubmitToParent=new o.a,this.eventSubmitFromParent=new o.a}return t.prototype.ngOnInit=function(){var t=this;this.propertyOfParent.subscribe((function(e){var n=e.split(";");if(n.pop(),t.listOfNames=n,t.listToDelete=[],console.log(n),t.multiple)n.forEach((function(e,n){var i=e;if(null!==i&&i.startsWith("http"))t.Images[n]={name:i,image:i};else if(i){var o=t.url+"/"+t.folderToSaveInServer.replace("_","/")+"/"+i;t.Images[n]={name:o,image:o}}else t.Images[n]={name:"assets/404.jpg",image:"assets/404.jpg"}}));else{var i=0!==n.length?n[0]:null;t.oneImage=null!==i&&i.startsWith("http")?i:i?t.url+"/"+t.folderToSaveInServer+"/"+i:"assets/404.jpg"}})),this.eventSubmitFromParent.subscribe((function(e){return i.a(t,void 0,void 0,(function(){return __generator(this,(function(t){switch(t.label){case 0:return[4,this.submit(e)];case 1:return t.sent(),[2]}}))}))}))},t.prototype.upload=function(t){var e=this;if(this.multiple)for(var n=0;n<t.length;n++){var i=t.item(n);this.listOfNames.push(this.setFileName(i)),this.sendPropertyOfParent(),this.files.push(i),this.files.forEach((function(t,n){var i=new FileReader;i.onload=function(){-1===e.Images.findIndex((function(n){return e.setFileName(t).includes(n.name)}))&&e.Images.push({name:e.setFileName(t),image:i.result.toString()})},i.readAsDataURL(t)}))}else{i=t.item(0);this.listOfNames=[],this.listOfNames.push(this.setFileName(i)),this.sendPropertyOfParent(),this.files=[],this.files.push(i),this.handleFileInput(i)}},t.prototype.fileToImageFrom=function(){},t.prototype.handleFileInput=function(t){var e=this,n=new FileReader;n.onload=function(){return e.oneImage=n.result.toString()},n.readAsDataURL(t)},t.prototype.imgError=function(t){t.src="assets/404.jpg"},t.prototype.setIcon=function(t){var e=t.lastIndexOf("."),n=t.substring(e+1);return"pdf"===n||"pdf;"===n?"assets/svg/pdf.svg":"assets/svg/word.svg"},t.prototype.removeFromImages=function(t){var e=this.Images.findIndex((function(e){return t.includes(e.name)}));this.Images.splice(e,1);var n=this.listOfNames.findIndex((function(e){return t.includes(e)}));this.listToDelete.push(this.listOfNames[n]),-1!==n&&(this.listOfNames.splice(n,1),this.sendPropertyOfParent());var i=t.indexOf("_"),o=t.substring(i);-1!==this.files.findIndex((function(t){return t.name===o}))&&this.files.splice(n,1)},t.prototype.remove=function(t){var e=this.listOfNames.findIndex((function(e){return t.includes(e)}));this.listToDelete.push(this.listOfNames[e]),-1!==e&&(this.listOfNames.splice(e,1),this.sendPropertyOfParent());var n=t.indexOf("_"),i=t.substring(n);-1!==this.files.findIndex((function(t){return t.name===i}))&&this.files.splice(e,1),this.oneImage="assets/404.jpg"},t.prototype.openInput=function(t){t.click()},t.prototype.sendPropertyOfParent=function(){var t="";this.listOfNames.forEach((function(e){t+=e+";"})),this.eventSubmitToParent.next(t)},t.prototype.submit=function(t){return i.a(this,void 0,void 0,(function(){var e,n,i,o=this;return __generator(this,(function(r){switch(r.label){case 0:return e=new FormData,this.files.forEach((function(t){var n=o.setFileName(t);e.append("file",t,n),console.log(t)})),e?(t.id&&!this.folderToSaveInServer.includes("_")&&(this.folderToSaveInServer=this.folderToSaveInServer+"_"+t.id),[4,this.filesService.uploadFiles(e,this.folderToSaveInServer).toPromise()]):[3,3];case 1:return n=r.sent(),[4,this.filesService.deleteFiles(this.listToDelete,this.folderToSaveInServer).toPromise()];case 2:i=r.sent(),console.log(n,i),r.label=3;case 3:return[2]}}))}))},t.prototype.setFileName=function(t){return t.lastModified+"_"+t.name},t}()},"Dau+":function(t,e,n){"use strict";var i=n("8Y7J"),o=n("bujt"),r=n("Fwaw"),s=n("5GAg"),l=n("omvX"),a=n("Mr+X"),u=n("Gi4r"),c=n("SVse");n("5WMv"),n("WTxg"),n.d(e,"a",(function(){return h})),n.d(e,"b",(function(){return m}));var h=i.qb({encapsulation:0,styles:[["img[_ngcontent-%COMP%]{height:20px}"]],data:{}});function d(t){return i.Ob(0,[(t()(),i.sb(0,0,null,null,6,"div",[["style","font-size: .7em;margin: 0;"]],null,null,null,null,null)),(t()(),i.sb(1,0,[["img",1]],null,0,"img",[["style","width: 70px; height: 70px;"]],[[8,"src",4]],[[null,"error"]],(function(t,e,n){var o=!0;return"error"===e&&(o=!1!==t.component.imgError(i.Eb(t,1))&&o),o}),null,null)),(t()(),i.sb(2,0,null,null,4,"button",[["color","warn"],["mat-icon-button",""],["type","button"]],[[1,"disabled",0],[2,"_mat-animation-noopable",null]],[[null,"click"]],(function(t,e,n){var i=!0;return"click"===e&&(i=!1!==t.component.removeFromImages(t.context.$implicit.name)&&i),i}),o.b,o.a)),i.rb(3,180224,null,0,r.b,[i.k,s.h,[2,l.a]],{color:[0,"color"]},null),(t()(),i.sb(4,0,null,0,2,"mat-icon",[["class","mat-icon notranslate"],["role","img"],["style","font-size: 1.3em !important;"]],[[2,"mat-icon-inline",null],[2,"mat-icon-no-color",null]],null,null,a.b,a.a)),i.rb(5,9158656,null,0,u.b,[i.k,u.d,[8,null],[2,u.a],[2,i.l]],null,null),(t()(),i.Mb(-1,0,["delete_sweep"]))],(function(t,e){t(e,3,0,"warn"),t(e,5,0)}),(function(t,e){t(e,1,0,e.context.$implicit.image),t(e,2,0,i.Eb(e,3).disabled||null,"NoopAnimations"===i.Eb(e,3)._animationMode),t(e,4,0,i.Eb(e,5).inline,"primary"!==i.Eb(e,5).color&&"accent"!==i.Eb(e,5).color&&"warn"!==i.Eb(e,5).color)}))}function p(t){return i.Ob(0,[(t()(),i.sb(0,0,null,null,2,null,null,null,null,null,null,null)),(t()(),i.hb(16777216,null,null,1,null,d)),i.rb(2,278528,null,0,c.l,[i.O,i.L,i.r],{ngForOf:[0,"ngForOf"]},null),(t()(),i.hb(0,null,null,0))],(function(t,e){t(e,2,0,e.component.Images)}),null)}function f(t){return i.Ob(0,[(t()(),i.sb(0,0,[["img",1]],null,0,"img",[["style","width: 70px; height: 70px;"]],[[8,"src",4]],[[null,"error"]],(function(t,e,n){var o=!0;return"error"===e&&(o=!1!==t.component.imgError(i.Eb(t,0))&&o),o}),null,null)),(t()(),i.sb(1,0,null,null,4,"button",[["color","warn"],["mat-icon-button",""],["type","button"]],[[1,"disabled",0],[2,"_mat-animation-noopable",null]],[[null,"click"]],(function(t,e,n){var i=!0,o=t.component;return"click"===e&&(i=!1!==o.remove(o.oneImage)&&i),i}),o.b,o.a)),i.rb(2,180224,null,0,r.b,[i.k,s.h,[2,l.a]],{color:[0,"color"]},null),(t()(),i.sb(3,0,null,0,2,"mat-icon",[["class","mat-icon notranslate"],["role","img"],["style","font-size: 1.3em !important;"]],[[2,"mat-icon-inline",null],[2,"mat-icon-no-color",null]],null,null,a.b,a.a)),i.rb(4,9158656,null,0,u.b,[i.k,u.d,[8,null],[2,u.a],[2,i.l]],null,null),(t()(),i.Mb(-1,0,["delete_sweep"]))],(function(t,e){t(e,2,0,"warn"),t(e,4,0)}),(function(t,e){t(e,0,0,e.component.oneImage),t(e,1,0,i.Eb(e,2).disabled||null,"NoopAnimations"===i.Eb(e,2)._animationMode),t(e,3,0,i.Eb(e,4).inline,"primary"!==i.Eb(e,4).color&&"accent"!==i.Eb(e,4).color&&"warn"!==i.Eb(e,4).color)}))}function m(t){return i.Ob(0,[(t()(),i.sb(0,0,null,null,11,"div",[["class","d-flex mb-3 align-items-center"]],null,null,null,null,null)),(t()(),i.sb(1,0,[["file1",1]],null,0,"input",[["accept","image/*"],["hidden",""],["multiple",""],["type","file"]],null,[[null,"change"]],(function(t,e,n){var i=!0;return"change"===e&&(i=!1!==t.component.upload(n.target.files)&&i),i}),null,null)),(t()(),i.sb(2,0,null,null,5,"button",[["color","accent"],["mat-raised-button",""],["style","height: fit-content;"],["type","button"]],[[1,"disabled",0],[2,"_mat-animation-noopable",null]],[[null,"click"]],(function(t,e,n){var o=!0;return"click"===e&&(o=!1!==t.component.openInput(i.Eb(t,1))&&o),o}),o.b,o.a)),i.rb(3,180224,null,0,r.b,[i.k,s.h,[2,l.a]],{color:[0,"color"]},null),(t()(),i.sb(4,0,null,0,2,"mat-icon",[["class","mat-icon notranslate"],["role","img"]],[[2,"mat-icon-inline",null],[2,"mat-icon-no-color",null]],null,null,a.b,a.a)),i.rb(5,9158656,null,0,u.b,[i.k,u.d,[8,null],[2,u.a],[2,i.l]],null,null),(t()(),i.Mb(-1,0,["add"])),(t()(),i.Mb(7,0,[" "," "])),(t()(),i.Mb(-1,null,[" \xa0\xa0 "])),(t()(),i.hb(16777216,null,null,1,null,p)),i.rb(10,16384,null,0,c.m,[i.O,i.L],{ngIf:[0,"ngIf"],ngIfElse:[1,"ngIfElse"]},null),(t()(),i.hb(0,[["elseTemplate",2]],null,0,null,f))],(function(t,e){var n=e.component;t(e,3,0,"accent"),t(e,5,0),t(e,10,0,n.multiple,i.Eb(e,11))}),(function(t,e){var n=e.component;t(e,2,0,i.Eb(e,3).disabled||null,"NoopAnimations"===i.Eb(e,3)._animationMode),t(e,4,0,i.Eb(e,5).inline,"primary"!==i.Eb(e,5).color&&"accent"!==i.Eb(e,5).color&&"warn"!==i.Eb(e,5).color),t(e,7,0,n.nameBtn)}))}},Fr4G:function(t,e,n){"use strict";n.d(e,"a",(function(){return i}));var i=function(){}},Q6Ar:function(t,e,n){"use strict";n.d(e,"a",(function(){return c})),n.d(e,"b",(function(){return d})),n.d(e,"c",(function(){return s})),n.d(e,"d",(function(){return a})),n.d(e,"e",(function(){return h}));var i=n("8Y7J"),o=n("IheW"),r=n("SVse"),s=function(){var t=function(){function t(t,e){var n=this;this.http=t,this.doc=e,this.saveSelection=function(){if(n.doc.getSelection){var t=n.doc.getSelection();t.getRangeAt&&t.rangeCount&&(n.savedSelection=t.getRangeAt(0),n.selectedText=t.toString())}else n.savedSelection=n.doc.getSelection&&n.doc.createRange?document.createRange():null}}return t.prototype.executeCommand=function(t){["h1","h2","h3","h4","h5","h6","p","pre"].includes(t)?this.doc.execCommand("formatBlock",!1,t):this.doc.execCommand(t,!1,null)},t.prototype.createLink=function(t){t.includes("http")?this.insertHtml('<a href="'+t+'" target="_blank">'+this.selectedText+"</a>"):this.doc.execCommand("createlink",!1,t)},t.prototype.insertColor=function(t,e){this.restoreSelection()&&this.doc.execCommand("textColor"===e?"foreColor":"hiliteColor",!1,t)},t.prototype.setFontName=function(t){this.doc.execCommand("fontName",!1,t)},t.prototype.setFontSize=function(t){this.doc.execCommand("fontSize",!1,t)},t.prototype.insertHtml=function(t){if(!this.doc.execCommand("insertHTML",!1,t))throw new Error("Unable to perform the operation")},t.prototype.restoreSelection=function(){if(!this.savedSelection)return!1;if(this.doc.getSelection){var t=this.doc.getSelection();return t.removeAllRanges(),t.addRange(this.savedSelection),!0}return!!this.doc.getSelection||void 0},t.prototype.executeInNextQueueIteration=function(t,e){void 0===e&&(e=100),setTimeout(t,e)},t.prototype.checkSelection=function(){if(0===this.savedSelection.toString().length)throw new Error("No Selection Made");return!0},t.prototype.uploadImage=function(t){var e=new FormData;return e.append("file",t,t.name),this.http.post(this.uploadUrl,e,{reportProgress:!0,observe:"events",withCredentials:this.uploadWithCredentials})},t.prototype.insertImage=function(t){this.doc.execCommand("insertImage",!1,t)},t.prototype.setDefaultParagraphSeparator=function(t){this.doc.execCommand("defaultParagraphSeparator",!1,t)},t.prototype.createCustomClass=function(t){var e=this.selectedText;if(t){var n=t.tag?t.tag:"span";e="<"+n+' class="'+t.class+'">'+this.selectedText+"</"+n+">"}this.insertHtml(e)},t.prototype.insertVideo=function(t){t.match("www.youtube.com")&&this.insertYouTubeVideoTag(t),t.match("vimeo.com")&&this.insertVimeoVideoTag(t)},t.prototype.insertYouTubeVideoTag=function(t){var e=t.split("v=")[1];this.insertHtml("\n      <div style='position: relative'>\n        <img style='position: absolute; left:200px; top:140px'\n             src=\"https://img.icons8.com/color/96/000000/youtube-play.png\"/>\n        <a href='"+t+"' target='_blank'>\n          <img src=\"https://img.youtube.com/vi/"+e+'/0.jpg" alt="click to watch"/>\n        </a>\n      </div>')},t.prototype.insertVimeoVideoTag=function(t){var e=this,n=this.http.get("https://vimeo.com/api/oembed.json?url="+t).subscribe((function(i){e.insertHtml("<div>\n        <a href='"+t+"' target='_blank'>\n          <img src=\""+i.thumbnail_url_with_play_button+'" alt="'+i.title+'"/>\n        </a>\n      </div>'),n.unsubscribe()}))},t.prototype.nextNode=function(t){if(t.hasChildNodes())return t.firstChild;for(;t&&!t.nextSibling;)t=t.parentNode;return t?t.nextSibling:null},t.prototype.getRangeSelectedNodes=function(t,e){var n=t.startContainer,i=t.endContainer,o=[];if(n===i)o=[n];else{for(;n&&n!==i;)o.push(n=this.nextNode(n));for(n=t.startContainer;n&&n!==t.commonAncestorContainer;)o.unshift(n),n=n.parentNode}if(e)for(n=t.commonAncestorContainer;n;)o.push(n),n=n.parentNode;return o},t.prototype.getSelectedNodes=function(){var t=[];if(this.doc.getSelection)for(var e=this.doc.getSelection(),n=0,i=e.rangeCount;n<i;++n)t.push.apply(t,this.getRangeSelectedNodes(e.getRangeAt(n),!0));return t},t.prototype.replaceWithOwnChildren=function(t){for(var e=t.parentNode;t.hasChildNodes();)e.insertBefore(t.firstChild,t);e.removeChild(t)},t.prototype.removeSelectedElements=function(t){var e=this,n=t.toLowerCase().split(",");this.getSelectedNodes().forEach((function(t){1===t.nodeType&&n.indexOf(t.tagName.toLowerCase())>-1&&e.replaceWithOwnChildren(t)}))},t}();return t.ngInjectableDef=Object(i.Sb)({factory:function(){return new t(Object(i.Tb)(o.c),Object(i.Tb)(r.d))},token:t,providedIn:"root"}),t}(),l={editable:!0,spellcheck:!0,height:"auto",minHeight:"0",maxHeight:"auto",width:"auto",minWidth:"0",translate:"yes",enableToolbar:!0,showToolbar:!0,placeholder:"Enter text here...",defaultParagraphSeparator:"",defaultFontName:"",defaultFontSize:"",fonts:[{class:"arial",name:"Arial"},{class:"times-new-roman",name:"Times New Roman"},{class:"calibri",name:"Calibri"},{class:"comic-sans-ms",name:"Comic Sans MS"}],uploadUrl:"v1/image",uploadWithCredentials:!1,sanitize:!0,toolbarPosition:"top",outline:!0},a=function(){function t(t,e,n){this.r=t,this.editorService=e,this.doc=n,this.htmlMode=!1,this.linkSelected=!1,this.block="default",this.fontName="Times New Roman",this.fontSize="3",this.headings=[{label:"Heading 1",value:"h1"},{label:"Heading 2",value:"h2"},{label:"Heading 3",value:"h3"},{label:"Heading 4",value:"h4"},{label:"Heading 5",value:"h5"},{label:"Heading 6",value:"h6"},{label:"Heading 7",value:"h7"},{label:"Paragraph",value:"p"},{label:"Predefined",value:"pre"},{label:"Standard",value:"div"},{label:"default",value:"default"}],this.fontSizes=[{label:"1",value:"1"},{label:"2",value:"2"},{label:"3",value:"3"},{label:"4",value:"4"},{label:"5",value:"5"},{label:"6",value:"6"},{label:"7",value:"7"}],this.customClassId="-1",this.customClassList=[{label:"",value:""}],this.tagMap={BLOCKQUOTE:"indent",A:"link"},this.select=["H1","H2","H3","H4","H5","H6","P","PRE","DIV"],this.buttons=["bold","italic","underline","strikeThrough","subscript","superscript","justifyLeft","justifyCenter","justifyRight","justifyFull","indent","outdent","insertUnorderedList","insertOrderedList","link"],this.fonts=[{label:"",value:""}],this.execute=new i.m}return Object.defineProperty(t.prototype,"customClasses",{set:function(t){t&&(this._customClasses=t,this.customClassList=this._customClasses.map((function(t,e){return{label:t.name,value:e.toString()}})),this.customClassList.unshift({label:"Clear Class",value:"-1"}))},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"defaultFontName",{set:function(t){t&&(this.fontName=t)},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"defaultFontSize",{set:function(t){t&&(this.fontSize=t)},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"isLinkButtonDisabled",{get:function(){return this.htmlMode||!Boolean(this.editorService.selectedText)},enumerable:!0,configurable:!0}),t.prototype.triggerCommand=function(t){this.execute.emit(t)},t.prototype.triggerButtons=function(){var t=this;this.showToolbar&&this.buttons.forEach((function(e){var n=t.doc.queryCommandState(e),i=t.doc.getElementById(e+"-"+t.id);n?t.r.addClass(i,"active"):t.r.removeClass(i,"active")}))},t.prototype.triggerBlocks=function(t){var e=this;if(this.showToolbar){this.linkSelected=t.findIndex((function(t){return"A"===t.nodeName}))>-1;var n=!1;this.select.forEach((function(i){var o=t.find((function(t){return t.nodeName===i}));void 0!==o&&i===o.nodeName?!1===n&&(e.block=o.nodeName.toLowerCase(),n=!0):!1===n&&(e.block="default")})),n=!1,this._customClasses&&this._customClasses.forEach((function(i,o){void 0!==t.find((function(t){if(t instanceof Element)return t.className===i.class}))?!1===n&&(e.customClassId=o.toString(),n=!0):!1===n&&(e.customClassId="-1")})),Object.keys(this.tagMap).map((function(n){var i=e.doc.getElementById(e.tagMap[n]+"-"+e.id),o=t.find((function(t){return t.nodeName===n}));void 0!==o&&n===o.nodeName?e.r.addClass(i,"active"):e.r.removeClass(i,"active")})),this.foreColour=this.doc.queryCommandValue("ForeColor"),this.fontSize=this.doc.queryCommandValue("FontSize"),this.fontName=this.doc.queryCommandValue("FontName").replace(/"/g,""),this.backColor=this.doc.queryCommandValue("backColor")}},t.prototype.insertUrl=function(){var t="https://",e=this.editorService.savedSelection;if(e&&"A"===e.commonAncestorContainer.parentElement.nodeName){var n=e.commonAncestorContainer.parentElement;""!==n.href&&(t=n.href)}(t=prompt("Insert URL link",t))&&""!==t&&"https://"!==t&&this.editorService.createLink(t)},t.prototype.insertVideo=function(){this.execute.emit("");var t=prompt("Insert Video link","https://");t&&""!==t&&"https://"!==t&&this.editorService.insertVideo(t)},t.prototype.insertColor=function(t,e){this.editorService.insertColor(t,e),this.execute.emit("")},t.prototype.setFontName=function(t){this.editorService.setFontName(t),this.execute.emit("")},t.prototype.setFontSize=function(t){this.editorService.setFontSize(t),this.execute.emit("")},t.prototype.setEditorMode=function(t){var e=this.doc.getElementById("toggleEditorMode-"+this.id);t?this.r.addClass(e,"active"):this.r.removeClass(e,"active"),this.htmlMode=t},t.prototype.onFileChanged=function(t){var e=this,n=t.target.files[0];if(n.type.includes("image/"))if(this.uploadUrl)this.editorService.uploadImage(n).subscribe((function(t){t instanceof o.h&&(e.editorService.insertImage(t.body.imageUrl),e.fileReset())}));else{var i=new FileReader;i.onload=function(t){e.editorService.insertImage(t.currentTarget.result.toString())},i.readAsDataURL(n)}},t.prototype.fileReset=function(){this.myInputFile.nativeElement.value=""},t.prototype.setCustomClass=function(t){"-1"===t?this.execute.emit("clear"):this.editorService.createCustomClass(this._customClasses[+t])},t.prototype.isButtonHidden=function(t){var e,n,i;if(!t)return!1;if(!(this.hiddenButtons instanceof Array))return!1;try{for(var o=__values(this.hiddenButtons),r=o.next();!r.done;r=o.next()){var s=r.value;if(s instanceof Array&&(i=s.find((function(e){return e===t}))),i)break}}catch(l){e={error:l}}finally{try{r&&!r.done&&(n=o.return)&&n.call(o)}finally{if(e)throw e.error}}return void 0!==i},t}();function u(t){return null!=t}var c=function(){function t(t,e,n,o,r,s,a){this.r=t,this.editorService=e,this.doc=n,this.sanitizer=o,this.cdRef=r,this.autoFocus=a,this.modeVisual=!0,this.showPlaceholder=!1,this.disabled=!1,this.focused=!1,this.touched=!1,this.changed=!1,this.id="",this.config=l,this.placeholder="",this.viewMode=new i.m,this.blurEvent=new i.m,this.focusEvent=new i.m,this.tabindex=-1;var u=Number(s);this.tabIndex=u||0===u?u:null}return t.prototype.onFocus=function(){this.focus()},t.prototype.ngOnInit=function(){this.config.toolbarPosition=this.config.toolbarPosition?this.config.toolbarPosition:l.toolbarPosition},t.prototype.ngAfterViewInit=function(){u(this.autoFocus)&&this.focus()},t.prototype.executeCommand=function(t){this.focus(),"toggleEditorMode"===t?this.toggleEditorMode(this.modeVisual):""!==t&&("clear"===t?(this.editorService.removeSelectedElements(this.getCustomTags()),this.onContentChange(this.textArea.nativeElement)):"default"===t?(this.editorService.removeSelectedElements("h1,h2,h3,h4,h5,h6,p,pre"),this.onContentChange(this.textArea.nativeElement)):this.editorService.executeCommand(t),this.exec())},t.prototype.onTextAreaFocus=function(t){var e=this;this.focused?t.stopPropagation():(this.focused=!0,this.focusEvent.emit(t),this.touched&&this.changed||this.editorService.executeInNextQueueIteration((function(){e.configure(),e.touched=!0})))},t.prototype.onTextAreaMouseOut=function(t){this.editorService.saveSelection()},t.prototype.onTextAreaBlur=function(t){if(this.editorService.executeInNextQueueIteration(this.editorService.saveSelection),"function"==typeof this.onTouched&&this.onTouched(),null!==t.relatedTarget){var e=t.relatedTarget.parentElement;e.classList.contains("angular-editor-toolbar-set")||e.classList.contains("ae-picker")||(this.blurEvent.emit(t),this.focused=!1)}},t.prototype.focus=function(){this.modeVisual?this.textArea.nativeElement.focus():(this.doc.getElementById("sourceText"+this.id).focus(),this.focused=!0)},t.prototype.onContentChange=function(t){var e="";(e=this.modeVisual?t.innerHTML:t.innerText)&&"<br>"!==e||(e=""),"function"==typeof this.onChange&&(this.onChange(this.config.sanitize||void 0===this.config.sanitize?this.sanitizer.sanitize(i.H.HTML,e):e),!e!==this.showPlaceholder&&this.togglePlaceholder(this.showPlaceholder)),this.changed=!0},t.prototype.registerOnChange=function(t){this.onChange=function(e){return t("<br>"===e?"":e)}},t.prototype.registerOnTouched=function(t){this.onTouched=t},t.prototype.writeValue=function(t){(!t||"<br>"===t||""===t)!==this.showPlaceholder&&this.togglePlaceholder(this.showPlaceholder),void 0!==t&&""!==t&&"<br>"!==t||(t=null),this.refreshView(t)},t.prototype.refreshView=function(t){this.r.setProperty(this.textArea.nativeElement,"innerHTML",null===t?"":t)},t.prototype.togglePlaceholder=function(t){t?(this.r.removeClass(this.editorWrapper.nativeElement,"show-placeholder"),this.showPlaceholder=!1):(this.r.addClass(this.editorWrapper.nativeElement,"show-placeholder"),this.showPlaceholder=!0)},t.prototype.setDisabledState=function(t){this.r[t?"addClass":"removeClass"](this.textArea.nativeElement,"disabled"),this.disabled=t},t.prototype.toggleEditorMode=function(t){var e,n=this,i=this.textArea.nativeElement;if(t){e=this.r.createText(i.innerHTML),this.r.setProperty(i,"innerHTML",""),this.r.setProperty(i,"contentEditable",!1);var o=this.r.createElement("pre");this.r.setStyle(o,"margin","0"),this.r.setStyle(o,"outline","none");var r=this.r.createElement("code");this.r.setProperty(r,"id","sourceText"+this.id),this.r.setStyle(r,"display","block"),this.r.setStyle(r,"white-space","pre-wrap"),this.r.setStyle(r,"word-break","keep-all"),this.r.setStyle(r,"outline","none"),this.r.setStyle(r,"margin","0"),this.r.setStyle(r,"background-color","#fff5b9"),this.r.setProperty(r,"contentEditable",!0),this.r.appendChild(r,e),this.focusInstance=this.r.listen(r,"focus",(function(t){return n.onTextAreaFocus(t)})),this.blurInstance=this.r.listen(r,"blur",(function(t){return n.onTextAreaBlur(t)})),this.r.appendChild(o,r),this.r.appendChild(i,o),this.doc.execCommand("defaultParagraphSeparator",!1,"div"),this.modeVisual=!1,this.viewMode.emit(!1),r.focus()}else this.doc.querySelectorAll?this.r.setProperty(i,"innerHTML",i.innerText):((e=this.doc.createRange()).selectNodeContents(i.firstChild),this.r.setProperty(i,"innerHTML",e.toString())),this.r.setProperty(i,"contentEditable",!0),this.modeVisual=!0,this.viewMode.emit(!0),this.onContentChange(i),i.focus();this.editorToolbar.setEditorMode(!this.modeVisual)},t.prototype.exec=function(){var t;this.editorToolbar.triggerButtons(),this.doc.getSelection&&(t=this.doc.getSelection(),this.editorService.executeInNextQueueIteration(this.editorService.saveSelection));for(var e=t.focusNode,n=[];e&&"editor"!==e.id;)n.unshift(e),e=e.parentNode;this.editorToolbar.triggerBlocks(n)},t.prototype.configure=function(){this.editorService.uploadUrl=this.config.uploadUrl,this.editorService.uploadWithCredentials=this.config.uploadWithCredentials,this.config.defaultParagraphSeparator&&this.editorService.setDefaultParagraphSeparator(this.config.defaultParagraphSeparator),this.config.defaultFontName&&this.editorService.setFontName(this.config.defaultFontName),this.config.defaultFontSize&&this.editorService.setFontSize(this.config.defaultFontSize)},t.prototype.getFonts=function(){return(this.config.fonts?this.config.fonts:l.fonts).map((function(t){return{label:t.name,value:t.name}}))},t.prototype.getCustomTags=function(){var t=["span"];return this.config.customClasses.forEach((function(e){void 0!==e.tag&&(t.includes(e.tag)||t.push(e.tag))})),t.join(",")},t.prototype.ngOnDestroy=function(){this.blurInstance&&this.blurInstance(),this.focusInstance&&this.focusInstance()},t.prototype.filterStyles=function(t){return t.replace("position: fixed;","")},t}(),h=function(){function t(t,e){this.elRef=t,this.r=e,this.options=[],this.disabled=!1,this.optionId=0,this.opened=!1,this.hidden="inline-block",this.changeEvent=new i.m,this.onChange=function(){},this.onTouched=function(){}}return Object.defineProperty(t.prototype,"label",{get:function(){return this.selectedOption&&this.selectedOption.hasOwnProperty("label")?this.selectedOption.label:"Select"},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"value",{get:function(){return this.selectedOption.value},enumerable:!0,configurable:!0}),t.prototype.ngOnInit=function(){this.selectedOption=this.options[0],u(this.isHidden)&&this.isHidden&&this.hide()},t.prototype.hide=function(){this.hidden="none"},t.prototype.optionSelect=function(t,e){e.stopPropagation(),this.setValue(t.value),this.onChange(this.selectedOption.value),this.changeEvent.emit(this.selectedOption.value),this.onTouched(),this.opened=!1},t.prototype.toggleOpen=function(t){this.disabled||(this.opened=!this.opened)},t.prototype.onClick=function(t){this.elRef.nativeElement.contains(t.target)||this.close()},t.prototype.close=function(){this.opened=!1},Object.defineProperty(t.prototype,"isOpen",{get:function(){return this.opened},enumerable:!0,configurable:!0}),t.prototype.writeValue=function(t){t&&"string"==typeof t&&this.setValue(t)},t.prototype.setValue=function(t){var e=0,n=this.options.find((function(n,i){return e=i,n.value===t}));n&&(this.selectedOption=n,this.optionId=e)},t.prototype.registerOnChange=function(t){this.onChange=t},t.prototype.registerOnTouched=function(t){this.onTouched=t},t.prototype.setDisabledState=function(t){this.labelButton.nativeElement.disabled=t,this.r[t?"addClass":"removeClass"](this.labelButton.nativeElement,"disabled"),this.disabled=t},t.prototype.handleKeyDown=function(t){if(this.opened)switch(t.key){case"ArrowDown":this._handleArrowDown(t);break;case"ArrowUp":this._handleArrowUp(t);break;case"Space":this._handleSpace(t);break;case"Enter":this._handleEnter(t);break;case"Tab":this._handleTab(t);break;case"Escape":this.close(),t.preventDefault();break;case"Backspace":this._handleBackspace()}},t.prototype._handleArrowDown=function(t){this.optionId<this.options.length-1&&this.optionId++},t.prototype._handleArrowUp=function(t){this.optionId>=1&&this.optionId--},t.prototype._handleSpace=function(t){},t.prototype._handleEnter=function(t){this.optionSelect(this.options[this.optionId],t)},t.prototype._handleTab=function(t){},t.prototype._handleBackspace=function(){},t}(),d=function(){}}}]);