FROM ubuntu:22.04

RUN apt update && apt install -y openssh-server sudo
RUN useradd -m student && echo "student:student" | chpasswd
RUN mkdir /var/run/sshd

EXPOSE 22
CMD ["/usr/sbin/sshd","-D"]
