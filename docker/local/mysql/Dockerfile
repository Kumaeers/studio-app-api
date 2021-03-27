FROM mysql:5.7

ENV ROOT_DIR './docker/local/mysql'

COPY ${ROOT_DIR}/my.cnf /etc/mysql/my.cnf
COPY ${ROOT_DIR}/docker-entrypoint-initdb.d/* /docker-entrypoint-initdb.d/
