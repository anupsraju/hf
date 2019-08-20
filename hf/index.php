<!DOCTYPE html>
    <head>
        <meta charset="UTF-8" />
        <title>WebApp</title>
        <link rel="stylesheet" href="assets/css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="assets/js/hf.js"></script>
    </head>
    <body>
        <div id="container">
            <header></header>
            <section>
            	<p>
            		This webapp will run on Apache 2.4.32 and developed in PHP 7.1.9.
            		Required parameters are action and email.
            		The following url will generate base64_encode token.
            	</p>
            	<p>
            		<a href="http://localhost/hf/controller/getToken.php?action=getToken&email=jose@example.com">http://localhost/hf/controller/getToken.php?action=getToken&email=jose@example.com</a>
            	</p>
            	<p>
            		Test cases are written in test directory. Following url will return test results.
            	</p>
            	<p>
            		<a href="http://localhost/hf/test/TokenTest.php">http://localhost/hf/test/TokenTest.php</a>
            	</p>
            </section>
        </div>
    </body>
</html>