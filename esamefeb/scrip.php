<html>
<body>

<div id="div1">
<p id="p1">This is a paragraph.</p>
<p id="p2">This is another paragraph.</p>
</div>

<script>

var element = document.getElementById("div1");
text = "<ul>";

for(i=1;i<11;i++) 
	text += "<li>" +  "Value "+i + "</li>"+"<br>"
text += "</ul>";
element.innerHTML = text;
</script>
</body>
</html>

