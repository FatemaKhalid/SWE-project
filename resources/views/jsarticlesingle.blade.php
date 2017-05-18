<script >
var clicked =0;
var article_id =0;
var no_of_likes=0;

	window.onload = function(){

var article = {!! json_encode($article->toArray()) !!};
    

    
    	var body1 = document.getElementById("body_text");
    	var no_of_likes_inpage=document.getElementById("likes_text");
    	var title1 = document.getElementById("title_text");
    	var article_img = document.getElementById("article_img");
		
        title1.innerHTML=article[0].title;
    	body1.innerHTML = article[0].body;
    	article_id =article[0].id;
    	no_of_likes=article[0].no_of_likes;



      var s1="../../storage/";
       var s2=article[0].pic;
       var url=s1.concat(s2);
        article_img.setAttribute('src', url);

        no_of_likes_inpage.innerHTML= "المعجبون : "+no_of_likes;
   
	}

   

	function onHover()
{
	var image = document.getElementById("image_hover");
	if (clicked ==0)
	image.setAttribute('src', "{!! asset('/assets/images/heart_red.png')!!}");
else 
	image.setAttribute('src', "{!! asset('/assets/images/heart_black.png')!!}");
    
}

function offHover()
{
	var image = document.getElementById("image_hover");
	if (clicked ==0)
	image.setAttribute('src', "{!! asset('/assets/images/heart_black.png')!!}");
    else image.setAttribute('src', "{!! asset('/assets/images/heart_red.png')!!}");
}

function clickfn()
{

	var likes=document.getElementById("likes_text");
	if (clicked ==0)
	{
		clicked =1;
		no_of_likes=no_of_likes+1;


 var urll = "{{url('/increaselikes')}}" + "/" + article_id + "/" + no_of_likes;

    var jqxhr = $.get( urll, function() {
  
    likes.innerHTML="المعجبون : "+no_of_likes;

});

       
		// 2b3t zwd 1 fl database 
	}
	else {
		clicked=0;

no_of_likes=no_of_likes-1;


 var urll = "{{url('/decreaselikes')}}" + "/" + article_id + "/" + no_of_likes;

    var jqxhr = $.get( urll, function() {
  
    likes.innerHTML="المعجبون : "+no_of_likes;


		//2b3t n2s mn 2l database
	});

}}



</script>