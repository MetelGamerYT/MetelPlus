(function(w,d){zaraz.debug=(eq="")=>{document.cookie=`zarazDebug=${eq}; path=/`;location.reload()};window.zaraz._al=function(ek,el,em){w.zaraz.listeners.push({item:ek,type:el,callback:em});ek.addEventListener(el,em)};zaraz.preview=(ex="")=>{document.cookie=`zarazPreview=${ex}; path=/`;location.reload()};zaraz.i=function(er){const es=d.createElement("div");es.innerHTML=unescape(er);const et=es.querySelectorAll("script");for(let eu=0;eu<et.length;eu++){const ev=d.createElement("script");et[eu].innerHTML&&(ev.innerHTML=et[eu].innerHTML);for(const ew of et[eu].attributes)ev.setAttribute(ew.name,ew.value);d.head.appendChild(ev);et[eu].remove()}d.body.appendChild(es)};zaraz.f=async function(ey,ez){const eA={credentials:"include",keepalive:!0,mode:"no-cors"};if(ez){eA.method="POST";eA.body=new URLSearchParams(ez);eA.headers={"Content-Type":"application/x-www-form-urlencoded"}}return await fetch(ey,eA)};for(;zaraz.deferred.length;)zaraz.deferred.pop()();Object.defineProperty(zaraz.deferred,"push",{configurable:!0,enumerable:!1,writable:!0,value:function(...eB){let eC=Array.prototype.push.apply(this,eB);for(;zaraz.deferred.length;)zaraz.deferred.pop()();return eC}});addEventListener("onpagehide"in self?"pagehide":"unload",(function(){for(;zaraz.deferred.length;)zaraz.deferred.pop()()}));window.zaraz._p=async W=>new Promise((X=>{if(W){W.e&&W.e.forEach((Y=>{try{new Function(Y)()}catch(Z){console.error(`Error executing script: ${Y}\n`,Z)}}));Promise.allSettled((W.f||[]).map((_=>fetch(_[0],_[1]))))}X()}));zaraz.pageVariables={};zaraz.__zcl={};zaraz.track=async function(dx,dy,dz){return new Promise(((dA,dB)=>{const dC={name:dx,data:{}};for(const dD of[localStorage,sessionStorage])Object.keys(dD||{}).filter((dF=>dF.startsWith("_zaraz_"))).forEach((dE=>{try{dC.data[dE.slice(7)]=JSON.parse(dD.getItem(dE))}catch{dC.data[dE.slice(7)]=dD.getItem(dE)}}));Object.keys(zaraz.pageVariables).forEach((dG=>dC.data[dG]=JSON.parse(zaraz.pageVariables[dG])));Object.keys(zaraz.__zcl).forEach((dH=>dC.data[`__zcl_${dH}`]=zaraz.__zcl[dH]));dC.data.__zarazMCListeners=zaraz.__zarazMCListeners;
//
dC.data={...dC.data,...dy};dC.zarazData=zarazData;fetch("/cdn-cgi/zaraz/t",{credentials:"include",keepalive:!0,method:"POST",headers:{"Content-Type":"application/json"},body:JSON.stringify(dC)}).catch((()=>{
//
return fetch("/cdn-cgi/zaraz/t",{credentials:"include",method:"POST",headers:{"Content-Type":"application/json"},body:JSON.stringify(dC)})})).then((function(dJ){zarazData._let=(new Date).getTime();dJ.ok||dB();return 204!==dJ.status&&dJ.json()})).then((async dI=>{await zaraz._p(dI);"function"==typeof dz&&dz()})).finally((()=>dA()))}))};zaraz.set=function(dK,dL,dM){try{dL=JSON.stringify(dL)}catch(dN){return}prefixedKey="_zaraz_"+dK;sessionStorage&&sessionStorage.removeItem(prefixedKey);localStorage&&localStorage.removeItem(prefixedKey);delete zaraz.pageVariables[dK];if(void 0!==dL){dM&&"session"==dM.scope?sessionStorage&&sessionStorage.setItem(prefixedKey,dL):dM&&"page"==dM.scope?zaraz.pageVariables[dK]=dL:localStorage&&localStorage.setItem(prefixedKey,dL);zaraz.__watchVar={key:dK,value:dL}}};for(const{m:dO,a:dP}of zarazData.q.filter((({m:dQ})=>["debug","set"].includes(dQ))))zaraz[dO](...dP);for(const{m:dR,a:dS}of zaraz.q)zaraz[dR](...dS);delete zaraz.q;delete zarazData.q;zaraz.fulfilTrigger=function(dt,du,dv,dw){zaraz.__zarazTriggerMap||(zaraz.__zarazTriggerMap={});zaraz.__zarazTriggerMap[dt]||(zaraz.__zarazTriggerMap[dt]="");zaraz.__zarazTriggerMap[dt]+="*"+du+"*";zaraz.track("__zarazEmpty",{...dv,__zarazClientTriggers:zaraz.__zarazTriggerMap[dt]},dw)};window.dataLayer=w.dataLayer||[];zaraz._processDataLayer=eY=>{for(const eZ of Object.entries(eY))zaraz.set(eZ[0],eZ[1],{scope:"page"});if(eY.event){if(zarazData.dataLayerIgnore&&zarazData.dataLayerIgnore.includes(eY.event))return;let e_={};for(let fa of dataLayer.slice(0,dataLayer.indexOf(eY)+1))e_={...e_,...fa};delete e_.event;eY.event.startsWith("gtm.")||zaraz.track(eY.event,e_)}};const eX=w.dataLayer.push;Object.defineProperty(w.dataLayer,"push",{configurable:!0,enumerable:!1,writable:!0,value:function(...fb){let fc=eX.apply(this,fb);zaraz._processDataLayer(fb[0]);return fc}});dataLayer.forEach((fd=>zaraz._processDataLayer(fd)));zaraz._cts=()=>{zaraz._timeouts&&zaraz._timeouts.forEach((a=>clearTimeout(a)));zaraz._timeouts=[]};zaraz._rl=function(){w.zaraz.listeners&&w.zaraz.listeners.forEach((b=>b.item.removeEventListener(b.type,b.callback)));window.zaraz.listeners=[]};history.pushState=function(){try{zaraz._rl();zaraz._cts&&zaraz._cts()}finally{History.prototype.pushState.apply(history,arguments);setTimeout((()=>{zarazData.l=d.location.href;zarazData.t=d.title;zaraz.pageVariables={};zaraz.__zarazMCListeners={};zaraz.track("__zarazSPA")}),100)}};history.replaceState=function(){try{zaraz._rl();zaraz._cts&&zaraz._cts()}finally{History.prototype.replaceState.apply(history,arguments);setTimeout((()=>{zarazData.l=d.location.href;zarazData.t=d.title;zaraz.pageVariables={};zaraz.track("__zarazSPA")}),100)}};zaraz._c=cU=>{const{event:cV,...cW}=cU;zaraz.track(cV,{...cW,__zarazClientEvent:!0})};zaraz._syncedAttributes=["altKey","clientX","clientY","pageX","pageY","button"];zaraz.__zcl.track=!0;d.addEventListener("visibilitychange",(cX=>{zaraz._c({event:"visibilityChange",visibilityChange:[{state:d.visibilityState,timestamp:(new Date).getTime()}]},1)}));zaraz.__zcl.visibilityChange=!0;zaraz.__zarazMCListeners={"google-analytics_v4_20ac":["visibilityChange"]};zaraz._p({"e":["(function(w,d){w.zarazData.executed.push(\"Pageview\");})(window,document)"],"f":[["https://stats.g.doubleclick.net/g/collect?t=dc&aip=1&_r=3&v=1&_v=j86&tid=G-SEKJ4E9T4H&cid=ae204d62-1abb-49a5-8268-62f756834851&_u=KGDAAEADQAAAAC%7E&z=1277290311",{}]]})})(window,document);