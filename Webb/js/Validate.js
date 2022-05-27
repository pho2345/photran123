//kiem tra dang nhap
function ktdangnhap()
		{
			var tdn=document.forms["formdangnhap"]["username"].value;
			var mk=document.forms["formdangnhap"]["pass"].value;
			
			if(/^[a-zA-Z0-9 ]*$/.test(tdn) == false)
					{
						alert("Ký tự nhập không hợp lệ, vui lòng nhập lại.");
						return false;
					}
			else
			{	
				if(tdn=="")
				{
                    document.getElementById("kiemtra").innerHTML="Tên đăng nhập không được để trống";
					return false;
                }
                if(mk=="")
                {
                    document.getElementById("kiemtra").innerHTML="Mật khẩu không được để trống";
					return false;
                }
			}
		}
		
//Dang ky
		function submitdangky(){
            var user=$('#username').val();
            var hoten=$('#name').val();
			
			var email=$('#email').val();
            var mk=$('#pass').val();
			var nlmk=$('#repass').val();
			var phone=$('#phone').val();
			var address=$('#address').val();
			
			
			var s=/^[a-zA-Z0-9 ]*$/;
			var mail=/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/;
			var dt=/0([1-9]{9}|[1-9][0-9]{8})$/;
			
			if(user=="")
                {
					document.getElementById("errlogin").style.display="block";
                    document.getElementById("errlogin").innerHTML="Tên đăng nhập không được để trống";
					setTimeout(() => {
						const box = document.getElementById('errlogin');
						box.style.display = 'none';
					  }, 5000);
					return false;
                }
			else if(s.test(user)==false)
					{
						document.getElementById("errlogin").style.display="block";
						document.getElementById("errlogin").innerHTML="Tên đăng nhập không hợp lệ, vui lòng nhập lại.";
						setTimeout(() => {
							const box = document.getElementById('errlogin');
							box.style.display = 'none';
						  }, 5000);
						return false;
					}	
            
			else if(email=="")
                {
					document.getElementById("erremail").style.display="block";
                    document.getElementById("erremail").innerHTML="Email không được để trống";
					setTimeout(() => {
						const box = document.getElementById('erremail');
						box.style.display = 'none';
					  }, 5000);
					  
					return false;
                }
			else if(mail.test(email)==false)
					{
						document.getElementById("erremail").style.display="block";
						document.getElementById("erremail").innerHTML="Email không hợp lệ, vui lòng nhập lại.";	
						setTimeout(() => {
							const box = document.getElementById('erremail');
							box.style.display = 'none';
						  }, 5000);
						return false;
					}	
			
            else if(mk==""|| nlmk=="")
                {
					document.getElementById("errpass").style.display="block";
                    document.getElementById("errpass").innerHTML="Vui lòng nhập mật khẩu";
					
					setTimeout(() => {
						const box = document.getElementById('errpass');
						box.style.display = 'none';
					  }, 5000);
					return false;
                }
            else if(mk!=nlmk)
                {
					
					document.getElementById("errrepass").style.display="block";
                    document.getElementById("errrepass").innerHTML="Mật khẩu không khớp";
					setTimeout(() => {
						const box = document.getElementById('errrepass');
						box.style.display = 'none';
					  }, 5000);
					return false;
                }
        
            else if(hoten=="")
                {
					document.getElementById("errname").style.display="block";
                    document.getElementById("errname").innerHTML="Họ tên không được để trống";
					setTimeout(() => {
						const box = document.getElementById('errname');
						box.style.display = 'none';
					  }, 5000);
					return false;
                }
			else if(s.test(hoten)==false)
					{
						document.getElementById("errname").style.display="block";
						document.getElementById("errname").innerHTML="Họ tên không hợp lệ, vui lòng nhập lại.";
						setTimeout(() => {
							const box = document.getElementById('errname');
							box.style.display = 'none';
						  }, 5000);
						return false;
					}		
				
			else if(phone=="")
                {
					document.getElementById("errphone").style.display="block";
                    document.getElementById("errphone").innerHTML="Số điện thoại không được để trống";
					setTimeout(() => {
						const box = document.getElementById('errphone');
						box.style.display = 'none';
					  }, 5000);
					return false;
                }	
			
			else if(dt.test(phone)==false)
					{
						document.getElementById("errphone").style.display="block";
						document.getElementById("errphone").innerHTML="Số điện thoại không hợp lệ, vui lòng nhập lại.";	
						setTimeout(() => {
							const box = document.getElementById('errphone');
							box.style.display = 'none';
						  }, 5000);
						return false;	
					}
						

            $.ajax({
				type:'post',
				url:"dangkyaj.php",
				data:{
					user:user,
					hoten:hoten,
					email:email,
					mk:mk,
					phone:phone,
					address:address	
				}
			})  
		}
