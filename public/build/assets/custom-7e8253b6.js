document.addEventListener("DOMContentLoaded",function(){var e=document.getElementById("image-container"),a=document.getElementById("image"),c=document.getElementById("x-coordinates"),y=document.getElementById("y-coordinates"),i=document.getElementById("x-display"),t=document.getElementById("y-display"),o,r;e.style.position="relative",a.addEventListener("click",function(d){var m=d.offsetX,p=d.offsetY,f=a.offsetWidth,I=a.offsetHeight,s=m/f*100,l=p/I*100;c.value=s.toFixed(2),y.value=l.toFixed(2),i.textContent="X coordinates: "+s.toFixed(2)+"%",t.textContent="Y coordinates: "+l.toFixed(2)+"%",console.log("X coordinates: "+s.toFixed(2)+"%"),console.log("Y coordinates: "+l.toFixed(2)+"%"),o=s,r=l;var n=document.createElement("i");n.classList.add("fa","fa-solid","fa-location-dot","locationIconFeedback","tooltip-icon");for(var v=document.getElementsByClassName("locationIconFeedback"),g=0;g<v.length;g++)v[g].remove();n.style.position="absolute",n.style.left=o+"%",n.style.top=r+"%",e.appendChild(n)})});function x(e,a){const c=e.currentTarget,i=c.closest(".emoji-selection").getElementsByClassName("icon-element");for(let o=0;o<i.length;o++)i[o].querySelectorAll(".overlay-icon").forEach(function(m){m.remove()});const t=document.createElement("img");t.classList.add("overlay-icon"),t.classList.add("animate__animated"),t.classList.add("animate__bounceIn"),t.src="./assets/img/icons_var/checkmark_small_001.svg",c.appendChild(t)}const u=document.getElementsByClassName("icon-element");for(let e=0;e<u.length;e++)u[e].addEventListener("click",x);$(function(){$('[data-bs-toggle="tooltip"]').tooltip()});$(function(){$('[data-bs-toggle="popover"]').popover({html:!0})});
