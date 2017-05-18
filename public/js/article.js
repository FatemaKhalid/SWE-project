

function getQueryVariable(variable)
{
       var query = window.location.search.substring(1);
       var vars = query.split("&");
       for (var i=0;i<vars.length;i++) {
               var pair = vars[i].split("=");
               if(pair[0] == variable){return pair[1];}
       }
       return(false);
}

/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction(e) {
   var drp=document.getElementById(e), maxH="visible";
   if(drp.style.visibility == maxH)
   {
    drp.style.visibility="hidden";
   } else {
    drp.style.visibility=maxH;

   }
}

function srch(f) {
   var inpt=document.getElementById(f), maxW='197px';
   if(inpt.style.visibility == 'hidden')
   {
    inpt.style.width=maxW;

    inpt.style.visibility='visible';

   } else {
    inpt.style.width='0px';

    inpt.style.visibility='hidden';
        /***********htt3dl********/
   }
}


