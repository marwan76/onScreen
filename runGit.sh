#!/bin/bash
while [ true ]; do
 sleep 30
 cd /home/pi/repos/onScreen
 git pull
done

#in etc/rc.local add following line
#bash /home/pi/repos/runGit.sh
#runGit.sh can be stored anywhere but the absolute path must be given