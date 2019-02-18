


The repo contains a laravel/Json web token Authentication to log a user in and register the user.

If you check the app/Http/Controllers folder, In the "UserController", you will see the code that implement both login and register in the methods authenticate and register respectively.

After both registration and login function are executed a token to make further request is provided in a response given to you.

Hint: after cloning the repo, run "php artisan serve" it will be served at localhost:8000  - which can be typed into the browser.

example login url: http://127.0.0.1:8000/api/login?email=newuser@gmail.com&password=123456

Response :  {"status":"Wow! Logged In","token":"eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xMjcuMC4wLjE6ODAwM1wvYXBpXC9sb2dpbiIsImlhdCI6MTU1MDQ5MzMyNiwiZXhwIjoxNTUwNDk2OTI2LCJuYmYiOjE1NTA0OTMzMjYsImp0aSI6InZKZDdPenNTQTVGcDBBMTAiLCJzdWIiOjUsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.CArm9z_aVSAZ_fONk7-0XlLPbqC0pEivvG7O0QwKLX4"}

example register url: http://127.0.0.1:8000/api/register?name=Newuser&email=newuser1@gmail.com&password=123456&password_confirmation=123456


