FROM ubuntu

ENV DEBIAN_FRONTEND=noninteractive

RUN apt-get update && \
  apt-get install -y php php-mysql curl && \
  apt-get clean

RUN curl -fsSL https://deb.nodesource.com/setup_22.x | bash - && \
  apt-get install -y nodejs && \
  apt-get clean

WORKDIR /app

COPY . .

RUN npm install

CMD [ "php", "-S", "0.0.0.0:9000" ]