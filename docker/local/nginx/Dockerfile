FROM nginx:alpine

ENV ROOT_DIR './docker/local/nginx'

COPY ${ROOT_DIR}/nginx.conf /etc/nginx/nginx.conf
COPY ${ROOT_DIR}/site.conf /etc/nginx/conf.d/default.conf
