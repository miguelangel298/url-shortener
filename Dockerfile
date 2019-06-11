FROM hitalos/laravel:latest

RUN  apk add curl
RUN  apk add php7

RUN curl -sS https://getcomposer.org/installer | \
    php -- --install-dir=/usr/bin/ --filename=composer











RUN mkdir -p /app


# Copy application to container
COPY . /app


WORKDIR /app


