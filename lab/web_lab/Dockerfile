FROM ubuntu:22.04

RUN apt update && apt install -y ttyd bash

EXPOSE 7681
CMD ["ttyd", "-p", "7681", "bash"]
