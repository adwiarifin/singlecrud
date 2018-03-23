<!DOCTYPE html>
<html>
<head>
	<title>Single CRUD | Kumpul Koding</title>
	<!--meta name="viewport" content="width=device-width, initial-scale=1.0"-->
	<style type="text/css">
		/*! normalize.css v8.0.0 | MIT License | github.com/necolas/normalize.css */
		button,hr,input{overflow:visible}progress,sub,sup{vertical-align:baseline}[type=checkbox],[type=radio],legend{box-sizing:border-box;padding:0}html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}h1{font-size:2em;margin:.67em 0}hr{box-sizing:content-box;height:0}code,kbd,pre,samp{font-family:monospace,monospace;font-size:1em}a{background-color:transparent}abbr[title]{border-bottom:none;text-decoration:underline;text-decoration:underline dotted}b,strong{font-weight:bolder}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative}sub{bottom:-.25em}sup{top:-.5em}img{border-style:none}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;line-height:1.15;margin:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button}[type=button]::-moz-focus-inner,[type=reset]::-moz-focus-inner,[type=submit]::-moz-focus-inner,button::-moz-focus-inner{border-style:none;padding:0}[type=button]:-moz-focusring,[type=reset]:-moz-focusring,[type=submit]:-moz-focusring,button:-moz-focusring{outline:ButtonText dotted 1px}fieldset{padding:.35em .75em .625em}legend{color:inherit;display:table;max-width:100%;white-space:normal}textarea{overflow:auto}[type=number]::-webkit-inner-spin-button,[type=number]::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}[type=search]::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}details{display:block}summary{display:list-item}[hidden],template{display:none}
		html, body, main {
			font-family: helvetica;
			display: block; 
		}
		main {
			margin-left: 20%;
			margin-right: 20%;
			margin-top: 10vh;
		}
		header {
			text-align: center;
			text-decoration: none;
			font-size: 1.3em;
			color: #ccd;
			margin-bottom: 16px;
			padding: 16px;
			border-bottom: solid 2px #eee;
		}
		.data p, input, button {
			display: inline-block;
			padding: 8px;
			margin: 2px;
			border: solid 6px #fff;
			border-radius: 100px;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

		}
		.data p, input[type=text] {
			width: 256px; color: #666;
			padding-left: 16px;
			font-weight: bold;
		}
		.data p{
			color: #6A5ACD;
		}
		input:focus, input:active, input:visited, input:focus, input:hover {
			background-color: #303030;
			border-color: #282828;
			color: white;
			font-weight: bold;
		}
		.title {
			text-align: center;
		}
		.data {
			padding: 8px 0;
		}
		.danger {
			background-color: tomato; color: white; border-color: tomato;
		}
		.danger:hover {
			background-color: red; border-color: red;
		}
		.update {
			background-color: turquoise; color: white; border-color: turquoise;
		}
		.update:hover {
			background-color: darkturquoise; border-color: darkturquoise;
		}
		.new {
			background-color: pink; border-color: pink; 
		}
		::-webkit-input-placeholder { /* Chrome/Opera/Safari */
		  color: white; font-weight: bold;
		}
		::-moz-placeholder { /* Firefox 19+ */
		  color: white; font-weight: bold;
		}
		:-ms-input-placeholder { /* IE 10+ */
		  color: white; font-weight: bold;
		}
		:-moz-placeholder { /* Firefox 18- */
		  color: white; font-weight: bold;
		}
		a {
			text-decoration: none;
			border-bottom: 2px dotted pink;
			font-weight: bold;
			color: #fff;
		}
		button {
			padding-right:  16px;
			padding-left:  16px;
			font-weight: bold;
		}
		::placeholder {
			cplor: #eee;
		}
		footer {
			position: absolute;
			bottom: 0;
			
			padding: 12px 0;
			background-color: darkturquoise;
			width: 100%;
		}
		footer p {
			color: #fff;
			border: none;
			padding: 12px;
		}
	</style>
</head>
<body>
	<header>
		Single File CRUD (Cek, Racocok, Uwahi, Dadi!)
	</header>
	<main>
		<div class="content">
			<div class="data">
				<p>Data satu</p><button class="danger">Hapus</button>
			</div>
			<div class="data">
				<p>Data dua</p><button class="danger">Hapus</button>
			</div>
			<div class="data">
				<form><input type="text" name="name" value="Data tiga" autofocus="autofocus"><button class="update">Perbarui</button><button class="danger">Hapus</button></form>
			</div>
			<div class="data">
			<form><input class="new" type="text" name="name" placeholder="Ketik di sini lalu tekan enter"></form>
		</div>
		</div>
	</main>
	<footer>
		<p>Kumpul Koding Chapter I 03/23/2018 <a href="https://kesatriakeyboard.com">Kesatria Keyboard</a> and <a href="https://waqid.id">Waqid ID</a> </p>
	</footer>
</body>
</html>