
<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
</head>
<body>
<h1>test</h1>
<div><input id="department_name" type="text" size="50" /></div>
</body>
<!-- load jquery ui css-->

<!-- load jquery library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<!-- load jquery ui js file -->
<link href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" rel="stylesheet" type="text/css" />
<script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js" ></script>
<script type="text/javascript">
$(function() {
    var availableTags = <?php include('auto.php'); ?>;
    $("#department_name").autocomplete({
        source: availableTags
        
    });
});
</script>

</html>