echo "" | cat >> .env
echo "" | cat >> .gitignore
echo "" | cat >> .htaccess
echo "" | cat >> README.md

mkdir app
cd app

mkdir http
cd http

mkdir controllers
cd controllers
echo "" | cat >> LandingController.php
echo "" | cat >> NotFoundController.php
cd ..

mkdir models
cd models
echo "" | cat >> User.php
echo "" | cat >> Client.php
cd ..
cd ..
cd ..

mkdir database
cd database

mkdir mysqli
cd mysqli
echo "" | cat >> Connect.php
cd ..
cd ..

mkdir public
cd public
echo "" | cat >> index.php
cd ..

mkdir resources
cd resources

mkdir css
cd css
echo "" | cat >> style.css
cd ..

mkdir js
cd js
echo "" | cat >> defaul.js
cd ..

mkdir views
cd views

mkdir landing
cd landing
echo "" | cat >> index.tpl.php
cd ..

mkdir notfound
cd notfound
echo "" | cat >> index.tpl.php
cd ..
cd ..
cd ..

mkdir router
cd router
echo "" | cat >> RouterHandler.php
cd ..

mkdir vendor