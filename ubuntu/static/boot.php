<?php

header('Content-type: text/plain') ;
$mac = $_GET["mac"];
$host = getenv('HOST_URL');
echo "#!ipxe\n";
echo "# dhcp\n";
echo "# chain http://".$host."/boot.php?mac=\${net0/mac}&ip=\${net0/ip}\n";
echo "echo Starting Ubuntu 16.04 x64 installer for ", $mac,"\n";
echo "set base-url http://archive.ubuntu.com/ubuntu/dists/xenial/main/installer-amd64/current/images/netboot/ubuntu-installer/amd64\n";
echo "kernel \${base-url}/linux\n";
echo "initrd \${base-url}/initrd.gz\n";
echo "imgargs linux auto=true fb=false priority=critical preseed/locale=en_GB kbd-chooser/method=gb preseed/url=http://".$host."/ubuntuPreseed.cfg preseed/interactive=false\n";
echo "# DEBCONF_DEBUG=5\n";
echo "boot ||\n";
echo "# If everything failed, give the user some options\n";
echo "echo Boot from \${base-url} failed\n";
echo "prompt --key 0x197e --timeout 2000 Press F12 to investigate || exit\n";
echo "shell\n";


?>
