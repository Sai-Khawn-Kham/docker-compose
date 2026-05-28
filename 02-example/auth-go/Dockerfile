FROM golang:1.22-alpine
WORKDIR /app
RUN go mod init auth
COPY . .
RUN go mod tidy
RUN go build -o auth
CMD ["./auth"]