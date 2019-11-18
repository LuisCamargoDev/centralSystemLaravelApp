#CENTRAL SYSTEM LARAVEL APP

Configuraçao de Ambiente
Installing COMPOSER
    1) Digite o seguinte comando no terminal, dentro da pasta raiz do projeto:  
    	php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
		php -r "if (hash_file('sha384', 'composer-setup.php') === 'a5c698ffe4b8e849a443b120cd5ba38043260d5c4023dbf93e1558871f1f07f58274fc6f4c93bcfd858c6bd0775cd8d1') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
		php composer-setup.php
		php -r "unlink('composer-setup.php');"
Installing LARAVEL
    1) Digite no terminal o seguinte comando: composer global require "laravel/installer=~1.1"
#Steps to run server

Acesse a pasta raiz do projeto >> Central System Laravel App << no terminal e digite o seguinte comando:
php artisan serve
Rotas de acesso ao sistema:
-> Usuarios :> http://127.0.0.1:8000/users
-> News :> http://127.0.0.1:8000/news