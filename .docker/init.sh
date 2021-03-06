DOCKER_APP_HOSTNAME=pipboy.docker
DOCKER_IP=$(docker-machine inspect --format='{{.Driver.IPAddress}}' default)

if [[ ! $DOCKER_IP ]]; then
  echo "please make sure you have your docker machine running";
  unset DOCKER_IP;
  unset DOCKER_APP_HOSTNAME;
  exit 0;
fi

if grep -q $DOCKER_APP_HOSTNAME /etc/hosts
then
  echo "hostname is already in your hosts file"
else
  echo "need your password to insert domain in your /etc/hosts";
  sudo -- sh -c "echo $DOCKER_IP  $DOCKER_APP_HOSTNAME >> /etc/hosts";
fi

docker-compose up -d;

echo "";
echo "(ﾉ◕ヮ◕)ﾉ*:・ﾟ✧   You can now go to $DOCKER_APP_HOSTNAME ";
echo "";

unset DOCKER_IP;
unset DOCKER_APP_HOSTNAME;
