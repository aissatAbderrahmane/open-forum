
var body = document.getElementsByTagName("body")[0];
 	function query(id){
 		var _id = document.getElementById(id);
 		var query = {
	 	ChangeElement : function(obj){
	 		var clr = obj.color,
	 			txt = obj.text,
	 			Width = obj.width,
	 			Height = obj.height;
	 		_id.style.width = Width+"px";
	 		_id.style.height = Height+"px";
	 		_id.style.background = "#000000";
	 		_id.innerHTML = "<font color='"+clr+"' face='tahoma' size='3'><b>"+txt+"</b></font>";
	 		return this;	
	 	},
	 	animation : function(time){
	 		_id.style.overflow = "hidden";
	 		timer = 1;
	 			var animation = {
	 				Width : function(wid){
	 					var num ;
	 					_last_Width = parseInt(_id.style.width);
	 					var animate = setInterval(function(){
	 							if(wid > _last_Width){
	 								num = _last_Width+timer;
	 								}else if(wid < _last_Width){
	 									num = _last_Width-timer;
	 								}else {
	 									alert("animation error make the tru new width");
	 										clearInterval(animate);
	 								}
	 									_id.style.width = num+"px"; 
	 								timer++;
	 		if(num == wid){
	 			clearInterval(animate);
	 		}
	 				}, time);
	 						},
	 				show : function(){
						 		var timer = 0,
						 			show = setInterval(function(){
						 				_id.style.opacity = timer;
						 				timer = timer+0.1;
						 			}, 100);
						 			if(timer > 1.0){
						 				clearInterval(show);
						 				_id.style.display = "block";
						 			}
						 	},
	 				SlideDown : function(){
	 					var _last_height = parseInt(_id.style.height),
	 						div = document.createElement("div");
	 						div.innerHTML = _id.innerHTML;
	 					var div_height = parseInt(div.style.height);
	 					if(_last_height != 0){
	 							alert("can't slideDown ");
	 						return false;
	 					}else{
	 						//

	 					}

	 				},
	 				hide : function(){
						 		var timer = 1.0,
						 			hide = setInterval(function(){
						 				_id.style.opacity = timer;
						 				timer = timer-0.1;
						 			}, time);
						 			if(timer < 0){
						 				clearInterval(hide);
						 				_id.style.display = "none";	
						 			}
						 	},
	 			 	boxPub : function(elements,Top,pop,valpop){
	 						var o =0,
	 							clip =0;
		 					for(var BoxElement in elements){
		 							var img = document.createElement("img"),
		 								a   = document.createElement("a");
					 					a.href = BoxElement;
					 					img.src = elements[BoxElement];
					 					img.style.border = "none";
					 					a.appendChild(img);
					 					a.style.zIndex = o;
					 					a.style.position = "absolute";
					 					a.style.top =Top+"px";
					 					if(pop == "left")
					 						a.style.left = valpop+"px";
					 					else 
					 						a.style.right = valpop+"px";
					 					_id.appendChild(a);
					 					a.setAttribute("id","element"+o);
							 			o++;
							 		}
							 			var ads = setInterval(function(){
							 				_id = document.getElementById("element"+clip);
							 					if(_id.style.display != "none")
							 						 animation.hide(); 
							 				if(clip == o) {
							 				 clip = -1;
							 				}
							 				clip++;		
							 			}, 500);

						}
	 			};
	 			return animation;
	 	},
	 header : function() {
		with(document){
			var div = createElement("div"),img = createElement("img");
			img.src = "style/imgs/Logo.png";
				for(var i=0; i<6; i++){
						var A = createElement("a");
					if(i == 0){A.href = "home.html"; A.appendChild(img);div.appendChild(A); continue;}
					if(i == 1){A.href = "#"; A.innerHTML = "<s>Login</s>"; A.setAttribute("style", "margin-left:50px;");}
					if(i == 2){A.href ="javascript:query('').register();"; A.innerHTML = "<s>Register</s>";}
					if(i == 3){A.href = "#"; A.innerHTML = "<s>About Us</s>";}
					if(i == 4){A.href = "#"; A.innerHTML = "<s>Help</s>";}
					if(i == 5){A.href = "#"; A.innerHTML = "Home";}
					div.appendChild(A);
					A.setAttribute("class", "navbar");
				}
			body.appendChild(div);
			div.setAttribute("id", "header");	
		}
			return this;
	},	
	 lastWorks : function(){
			with(document){
		var div = createElement("div");
		for(var i=0; i <lastwork.length; i++){
			var IMG = createElement("img"), UL = createElement("ul"), P = createElement("p"), A = createElement("a");
			A.innerHTML = "Read More ....";
			IMG.src = lastwork[i][0];
			UL.innerHTML = lastwork[i][1];
			P.innerHTML = lastwork[i][2];
			A.href = lastwork[i][3];
		div.appendChild(IMG);
		div.appendChild(UL);
		P.appendChild(A);
		div.appendChild(P);
		}
		body.appendChild(div);
		div.setAttribute("id","lastWorks");
			}
			return this;
	},
	forums : function(){
		with(document){
			var cat = createElement("div"),Br = createElement("br");
				for(var i=0,j=0; i< forum_list.length; j = j*5,i++){
					var forum = createElement("div"),IMG = createElement("img"), UL = createElement("ul"),SPAN = createElement("span"), A = createElement("a");
					A.href = forum_list[i][0];
					A.innerHTML = forum_list[i][1];
					UL.appendChild(A);
					IMG.src = forum_list[i][2];
					SPAN.innerHTML = forum_list[i][3];
					forum.appendChild(UL);
					forum.appendChild(IMG);
					forum.appendChild(SPAN);
					cat.appendChild(forum);
					if(i == j && j>0) cat.appendChild(Br);
					forum.setAttribute("id", "forum");
				}
			body.appendChild(cat);
			cat.setAttribute("id", "cats");
			
		}
		return this;
	},
	footer : function(){
		with(document){
			var div = createElement("div"),SPAN = createElement("span");
				for(var i=0; i<5; i++){
						var A = createElement("a");
					if(i == 0){A.href = "#"; A.innerHTML = "<s>Login</s>"; A.setAttribute("style", "margin-right:50px;");}
					if(i == 1){A.href = "#"; A.innerHTML = "<s>Sign Up</s>";}
					if(i == 2){A.href = "#"; A.innerHTML = "<s>About Us</s>";}
					if(i == 3){A.href = "#"; A.innerHTML = "<s>Help</s>";}
					if(i == 4){A.href = "#"; A.innerHTML = "Home";}
					div.appendChild(A);
					A.setAttribute("class", "url");
				}
				SPAN.innerHTML = 'Alrigth Reserved to IslamNet, programmed by <a href="mail:ahmed.3abdolah@gmail.com">MR-O</a> support <a href="http://www.ajax-host.com">Ajax Host</a>';
			div.appendChild(SPAN);
			SPAN.setAttribute("style", "float:left; margin-left:8px;");
			body.appendChild(div);
			div.setAttribute("id", "footer");
		}
		return this;
	},
	register : function(){
		with(document){
			var div = createElement("div"),cat = getElementById("cats");
					cat.innerHTML = "";
				cat.appendChild(div);
				div.setAttribute("id", "register");
		}
		
	 }
	}
	 return query;
}
	function main(){
		query("").header().lastWorks().forums().footer();
	}
	//##############
 	function test(abdo){
 		 var _array = new Array();
 		 _array.push(abdo);
	 		for(var i=0; i < abdo.length; i++){
	 			alert(abdo[i]);
	 		}
 		
 	}

 	function match_function(type){
 		alert(type);
 			var _match_array = [
 				{
 					display : function(go){
 						alert(go);
 					}
 				},
 				function (x){
 					alert(x);
 				}
 			];
 			return _match_array;
 	}










	
