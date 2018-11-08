      function change1(){
			var uname=document.getElementById("username").value;	
			var reg=/([a-zA-Z]{1,}[0-9]{1,})|([0-9]{1,}[a-zA-Z]{1,})/;
			if(uname.length==0)
			document.getElementById("span1").innerHTML="用户名不能为空";
			else if(!reg.test(uname)){
				document.getElementById("span1").innerHTML
				="格式不对，至少包含一个字母和数字";
			}else 
				document.getElementById("span1").innerHTML="用户名符合要求";
		} 

	  function change2(){
			var pword=document.getElementById("password").value;	
			var reg=/[a-zA-Z0-9]{2,20}/;
			if(pword.length==0)
			document.getElementById("span2").innerHTML="密码不能为空";
			else if(!reg.test(pword)){
				document.getElementById("span2").innerHTML
				="格式不对，必须2-20位,包含字母或数字";
			}else 
				document.getElementById("span2").innerHTML="密码符合要求";
		}