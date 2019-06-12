<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<style type="text/css">
/* Using https://github.com/cognitom/paper-css */
@import url("https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.2.3/paper.css");
/* google font for cert name print */
@import url('https://fonts.googleapis.com/css?family=Dancing+Script');

@page { size: A4 landscape }

body {background:#fff;}

.sheet {
    margin:0;
    box-shadow:none;
    
}

#cert {
    /* using certificate background image from code.org as an example */
    background-image:url('https://code.org/images/hour_of_code_certificate.jpg');
    background-size: contain;
    height:100%;
    background-repeat:no-repeat;
}

#name {
    margin-top:76mm;
    text-align:center;
    font-size:14mm;
    color:#4FC3F7;
    font-family:'Dancing Script';
    font-weight:bold;
}
</style>
<body class="A4 landscape">

  <!-- Each sheet element should have the class "sheet" -->
  <!-- "padding-**mm" is optional: you can set 10, 15, 20 or 25 -->
  <section class="sheet">
    <div id="cert" class="container-fluid">
	    <div class="row">
	        <div class="col-md-12">
	            <h2 id="name">Jean Salvi Dukuzwenimana</h2>
	       </div>
    	</div>
    </div>
  </section>

</body>
