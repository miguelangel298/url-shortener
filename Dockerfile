FROM hitalos/laravel:latest

RUN mkdir -p /app

# Copy application to container
COPY . /app

WORKDIR /app


