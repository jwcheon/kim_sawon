

<div style="min-width:1080px">
	<object id="obj" data="/sources/search_gosoo.svg" type="image/svg+xml"></object>
	<object style="min-width:1080px" id="obj2" data="/sources/coming_down.svg" type="image/svg+xml"></object>
</div>

<style>
@keyframes down {
    from {top:-195px;
		opacity:0;}
    to {top:0px;
		opacity:1;}
}
@keyframes up {
    from {top:0px;
		opacity:1;}
		to {top:-195px;
				opacity:0.0;
		}
}
.movingDown{
	position:absolute;
	animation-name: down;
	animation-duration: 1s;
	top:0px;
}
.movingUp{
	position:absolute;
	animation-name: up;
	animation-duration: 1s;
	top:-195px;
}

</style>

<script>
var obj=document.getElementById('obj');
var obj2=document.getElementById('obj2');
obj2.style.display='none';

obj.addEventListener("load",function(){
	//마우스오버시 메뉴가 내려옴
	var doc=this.getSVGDocument();
	doc.querySelector('#previous_page_arrow').addEventListener("mouseover",function(){
		obj2.style.display='';
		obj2.classList.add('movingDown');
		obj2.addEventListener("mouseout",function(){
			obj2.classList.remove('movingDown');
			obj2.classList.add('movingUp');
		});
			obj2.classList.remove('movingUp');
	});

});
obj2.addEventListener("load",function(){
	var doc=this.getSVGDocument();

//내려온 메뉴에 링크를 붙임.
//coming_down.svg 에 클릭 이벤트 넣음.
doc.querySelector('#menu1').addEventListener("click",function(){
	location.href="/menu/description";
});
doc.querySelector('#menu2').addEventListener("click",function(){
	location.href="/menu/howto";
});
doc.querySelector('#menu3').addEventListener("click",function(){
	location.href="/menu/cs";
});
doc.querySelector('#logo').addEventListener("click",function(){
	location.href="/";
});


});

</script>