FROM debian:buster
LABEL maintainer="ahallain@student.42.fr"
COPY srcs /root/srcs
CMD chmod u+x /root/srcs/init.sh && /root/srcs/init.sh && tail -f /dev/null