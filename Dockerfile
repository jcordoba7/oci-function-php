FROM alpine:latest
FROM php:7.4-cli
COPY --from=fnproject/hotwrap:latest /hotwrap /hotwrap
COPY . /usr/src/myapp
WORKDIR /usr/src/myapp
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
ENV DB_HOST="<IP>" DB_USER="<db_user>" DB_PSSWD="<db_password>" DB_NAME="<db_table>"
CMD [ "php", "./func.php" ]
ENTRYPOINT ["/hotwrap"]
LABEL maintainer = "Jonathan Cordoba"