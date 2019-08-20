This webapp will run on Apache 2.4.32 and developed in PHP 7.1.9.
Required parameters are action and email.
The following url will generate base64_encode token.

http://localhost/hf/controller/getToken.php?action=getToken&email=jose@example.com

Test cases are written in test directory. Following url will return test results.

http://localhost/hf/test/TokenTest.php