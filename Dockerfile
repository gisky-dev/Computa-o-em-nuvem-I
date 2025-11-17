#Usa a imagem oficial do PHP com Apache
FROM php:8.2-apache

#Copia os arquivos de sua aplicação para o diretório padrão do Apache
COPY . /var/www/html/

#Habilita módulos adicionais do APache (opcional)
RUN docker-php-ext-install mysqli pdo pdo_mysql

#Exponha a porta padrão do APache
EXPOSE 80
